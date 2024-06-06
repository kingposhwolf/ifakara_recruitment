<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Education_category;
use App\Models\Education_level;
use App\Models\Education_name;
use App\Models\institution;
use App\Models\Post;
use App\Models\Vacant;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function selectapplicantsDetails()
    {
    return Application::select(
        'applications.id',
        'applications.firstName',
        'applications.secondName',
        'applications.email',
        'applications.phone',
        'applications.email',
        'applications.phone',
        'applications.coverLetter',
        'applications.cv',
        'vacants.name as vacant_name'
    )
  
    ->leftJoin('vacants', 'applications.vacant_id', '=', 'vacants.id');
   }
   public function Allapplicants()
   {
       $applicants = $this->selectapplicantsDetails()->get();
   
       if ($applicants->isEmpty()) {
           return response()->json(['message' => 'No applicant submit applications']);
       }    
   
       return response()->json(['applicants' => $applicants,'message' => 'Applicants retrieved successfully' ]);
   }

   
   public function SingleApplicant($id)
    {
        $applicants = $this->selectapplicantsDetails()->find($id);
    
        if (!$applicants) {
            return response()->json(['error' => 'Applicants member not found'], 404);
        }
    
        return response()->json(['applicants' => $applicants,'message' => 'Applicants retrieved successfully' ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $messages = [
            'firstName.required' => 'The first name field is required.',
            'secondName.required' => 'The second name field is required.',
            'email.required' => 'The email  field is required.',
            'phone.required' => 'The phone number is required.',
            'coverLetter.required' => 'Please upload a cover letter file',
            'cv.required' => 'Please upload a cv file.',
        ];


        // $validatedData = $request->validate([
        //     'firstName' => 'required',
        //     'secondName' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'cv' => 'required|file|max:2048',
        //     'coverletter' => 'required|file|max:2048',
        // ], $messages);

        //dd($request->all());

        $validatedData = new Application();
        $validatedData->firstName = $request->input('firstName');
        $validatedData->secondName = $request->input('secondName');
        $validatedData->email = $request->input('email');
        $validatedData->phone = $request->input('phone');
        $validatedData->vacant_id = $request->input('vacant_id');


        if ($request->hasFile('coverLetter')) {
            $file = $request->file('coverLetter');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('applications', $filename);
            $validatedData->coverLetter = $filePath;
        }

        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('applications', $filename);
            $validatedData->cv = $filePath;
        } else {
            $validatedData->cv = ''; // Assign default value
        }


        // dd($validatedData);
        if ($validatedData->save()) {


            $institutions = institution::get();
            $vacants = Vacant::get();
            $vacant = Vacant::get();
            $education_levels = Education_level::get();
            $education_categories = Education_category::get();
            $education_names = Education_name::get();
            $posts = Post::with('educationLevel', 'educationName')->get();
            $vacantCategoriesCount = $posts->groupBy('vacant_category')->count();
            $post = Post::get();
            return redirect()->route('welcome', [
                'vacants' => $vacants,
                'vacant' => $vacant,
                'institutions' => $institutions,
                'education_levels' => $education_levels,
                'education_categories' => $education_categories,
                'education_names' => $education_names,
                'posts' => $posts,
                'post' => $post,
                'vacantCategoriesCount' => $vacantCategoriesCount,
            ])->with('success', 'Form submitted successfully!');
        }
        return back()->with('error', 'Failed to save  applications.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
