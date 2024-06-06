<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use App\Models\Education_category;
use App\Models\Education_level;
use App\Models\Education_name;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Staff;
use App\Models\Vacant;
use App\Models\institution;

class JobsController extends Controller
{
    public  function index()
    {
        $institutions = institution::get();
        $vacants = Vacant::get();
        $vacant = Vacant::get();
        $education_levels = Education_level::get();
        $education_categories = Education_category::get();
        $education_names = Education_name::get();
        $posts = Post::with('educationLevel','educationName')->get();
        return view(
            'hr.pages.jobs',
            [
                'vacants' => $vacants,
                'vacant'=>$vacant,
                'institutions' => $institutions,
                'education_levels' => $education_levels,
                'education_categories' => $education_categories,
                'education_names' => $education_names,
                'posts' => $posts
            ]
        );
    }

    public function single_vacant($id){

        $vacant = Vacant::get();
        $institution = institution::get();
        $vacant = Vacant::find($id);
        return view('hr.pages.components.single_vacant',[
            'vacant'=>$vacant,
            'institution'=>$institution
        ]);
    }

    // public function receivedquery(){
    //     return view('hr.pages.receivedquery');
    // }
  
    public function store(Request $requste)
    {

        // dd($request->all());
        // $validatedData = new Post();
        // $validatedData->application_date = $request->input('application_date');
        // $validatedData->deadline_date = $request->input('deadline_date');
        // $validatedData->post_description = $request->input('post_description');
        // $validatedData->post_file = $request->input('post_file');
        // $validatedData->email = $request->input('email');
        // $validatedData->job_id = $request->input('job_id');
        // $validatedData->job_name = $request->input('job_name');
        // $validatedData->job_location = $request->input('job_location');
        // if ($request->hasFile('job_description')) {
        //     $file = $request->file('job_description');
        //     $filename = time() . '_' . $file->getClientOriginalName();
        //     dd($filename);
        //     $filePath = $file->storeAs('public/documents', $filename);
        //     $validatedData->job_description = $filePath;
        //     $validatedData->save();
        // }

        // if ($validatedData->save()) {
        //     $jobs = Job::get();
        //     $staffs = Staff::get();
        //     $posts = Post::get();
        //     dd($posts);
        //     return view('hr.pages.jobs', compact('jobs', 'staffs', 'posts'))->with('posts', 'succesfull');
        // }
    }
    public function vacant_registration(Request $request)
    {
        $messages = [
            'name.required' => 'The job title field is required.',
            'location.required' => 'The location field is required.',
            'description.required' => 'The job description field is required.',
            'job_file.required' => 'Please upload a job file.',
            'position_name.required' => 'The position name field is required.',
            'position_file.required' => 'Please upload a position file.',
            'position_description.required' => 'The position description field is required.',
        ];

        $validatedData = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'job_file' => 'required|file|max:2048',
            'position_name' => 'required',
            'position_file' => 'required|file|max:2048',
            'position_description' => 'required',
        ], $messages);

        $validatedData = new Vacant();
        $validatedData->name = $request->input('name');
        $validatedData->location = $request->input('location');
        $validatedData->description = $request->input('description');
        $validatedData->position_name = $request->input('position_name');
        $validatedData->position_description = $request->input('position_description');

        if ($request->hasFile('position_file')) {
            $file = $request->file('position_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/documents', $filename);
            $validatedData->position_file = $filePath;
        }

        if ($request->hasFile('job_file')) {
            $file = $request->file('job_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/documents', $filename);
            $validatedData->job_file = $filePath;
        } else {
            $validatedData->job_file = ''; // Assign default value
        }

        if ($validatedData->save()) {
            $institutions = institution::get();
            $vacants = Vacant::get();
            $education_levels = Education_level::get();
            $education_categories = Education_category::get();
            $education_names = Education_name::get();
            $posts = Post::get();
            return view('hr.pages.jobs', [
                'vacants' => $vacants,
                'institutions' => $institutions,
                'education_levels' => $education_levels,
                'education_categories' => $education_categories,
                'education_names' => $education_names,
                 'posts' => $posts

            ])->with('jobs', 'successful');
        }

        return back()->with('error', 'Failed to save vacant position.');
    }

    public function vacant_update(Request $request,$id){
        
        $validatedData = Vacant::find($id);
        $validatedData->name = $request->input('name');
        $validatedData->location = $request->input('location');
        $validatedData->description = $request->input('description');
        $validatedData->position_name = $request->input('position_name');
        $validatedData->position_description = $request->input('position_description');

        if ($request->hasFile('position_file')) {
            $file = $request->file('position_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/documents', $filename);
            $validatedData->position_file = $filePath;
        }

        if ($request->hasFile('job_file')) {
            $file = $request->file('job_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/documents', $filename);
            $validatedData->job_file = $filePath;
        } else {
            $validatedData->job_file = ''; // Assign default value
        }

        if ($validatedData->save()) {
            $institutions = institution::get();
            $vacants = Vacant::get();
            $education_levels = Education_level::get();
            $education_categories = Education_category::get();
            $education_names = Education_name::get();
            $posts = Post::get();
            return view('hr.pages.jobs', [
                'vacants' => $vacants,
                'institutions' => $institutions,
                'education_levels' => $education_levels,
                'education_categories' => $education_categories,
                'education_names' => $education_names,
                 'posts' => $posts

            ])->with('jobs', 'successful');
        }


    }

    public function publish_vacant(Request $request)
    {
        $messages = [
            'vacant_id.required' => 'Please select a vacant title.',
            'vacant_category.required' => 'Please select a vacant category.',
            'institution_id.required' => 'Please select an institution.',
            'application_date.required' => 'Please enter the application date.',
            'end_date.required' => 'Please enter the end date for applications.',
            'education_level_id.required' => 'Please choose an education level.',
            'education_category_id.required' => 'Please choose an education category.',
            'education_name_id.required' => 'Please choose an education program.',
            'age_range.required' => 'Please choose an age range.',
            'year_experience.required' => 'Please choose the applicant experience.',
            'gender.required' => 'Please choose the applicant gender.',
            'summary.required' => 'Please provide a summary overview.',
        ];

        // Validate the form data with custom error messages
        $validatedData = $request->validate([
            'vacant_id' => 'required',
            'vacant_category' => 'required',
            'institution_id' => 'required',
            'application_date' => 'required|date',
            'end_date' => 'required|date',
            'education_level_id' => 'required',
            'education_category_id' => 'required',
            'education_name_id' => 'required',
            'age_range' => 'required',
            'year_experience' => 'required',
            'gender' => 'required',
            'summary' => 'required',
        ], $messages);

        //dd($request->all());
        $validatedData = new Post();
        $validatedData->application_date = $request->input('application_date');
        $validatedData->end_date = $request->input('end_date');
        $validatedData->summary = $request->input('summary');
        $validatedData->vacant_category = $request->input('vacant_category');
        $validatedData->age_range = $request->input('age_range');
        $validatedData->gender = $request->input('gender');
        $validatedData->year_experience = $request->input('year_experience');
        $validatedData->institution_id = $request->input('institution_id');
        $validatedData->vacant_id = $request->input('vacant_id');
        $validatedData->education_level_id = $request->input('education_level_id');
        $validatedData->education_category_id = $request->input('education_category_id');
        $validatedData->education_name_id = $request->input('education_name_id');
        //$validatedData->job_location = $request->input('job_location');
        // if ($request->hasFile('job_description')) {
        //     $file = $request->file('job_description');
        //     $filename = time() . '_' . $file->getClientOriginalName();
        //     dd($filename);
        //     $filePath = $file->storeAs('public/documents', $filename);
        //     $validatedData->job_description = $filePath;
        //     $validatedData->save();
        // }
        if ($validatedData->save()) {
            $posts = Post::get();
            return view('hr.pages.jobs', compact('posts'))->with('posts', 'successful');
        }

        return back()->with('error', 'Failed to save vacant position.');
    }


    public function delete_vacant($id)
    {
        $vacants = Vacant::find($id);

        if (!$vacants) {
            return back()->with('error', 'Staff record not found.');
            // return redirect()->route('/hr/staff')->with('error', 'Staff record not found.');
        }

        $vacants->delete();
         $vacants = Vacant::get();
         $institutions = institution::get();
        $posts = Post::get();
        $education_levels = Education_level::get();
        $education_categories = Education_category::get();
        $education_names = Education_name::get();
        return view('hr.pages.jobs', [
            'posts' => $posts,
            'vacants'=> $vacants,
            'institutions'=>$institutions,
            'education_levels' => $education_levels,
            'education_categories' => $education_categories,
            'education_names' => $education_names,

         

        ])->with('success', 'Staff record deleted successfully.');
    }


    public function delete_post($id)
    {
        $posts = Post::find($id);

        if (!$posts) {
            return back()->with('error', 'Staff record not found.');
            // return redirect()->route('/hr/staff')->with('error', 'Staff record not found.');
        }

        $posts->delete();
         $vacants = Vacant::get();
         $institutions = institution::get();
        $posts = Post::get();
        $education_levels = Education_level::get();
        $education_categories = Education_category::get();
        $education_names = Education_name::get();
        return view('hr.pages.jobs', [
            'posts' => $posts,
            'vacants'=> $vacants,
            'institutions'=>$institutions,
            'education_levels' => $education_levels,
            'education_categories' => $education_categories,
            'education_names' => $education_names,

         

        ])->with('success', 'Staff record deleted successfully.');
    }
}
