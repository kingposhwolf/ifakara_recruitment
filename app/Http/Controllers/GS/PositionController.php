<?php

namespace App\Http\Controllers\GS;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Education_category;
use App\Models\Education_level;
use App\Models\Education_name;
use App\Models\Institution;
use App\Models\Vacant;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutions = institution::get();
        $vacants = Vacant::get();
        $education_levels = Education_level::get();
        $education_categories = Education_category::get();
        $education_names = Education_name::get();
        $posts = Post::get();
        return view('secretary.pages.position',[
            'institutions' => $institutions,
            'vacants' => $vacants,
            'education_levels' => $education_levels,
            'education_categories' => $education_categories,
            'education_names' => $education_names,
            'posts' => $posts,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
       // $validatedData = new Post();
        //$validatedData->application_date = $request->input('application_date');
        //$validatedData->deadline_date = $request->input('deadline_date');
        //$validatedData->post_description = $request->input('post_description');
        // $validatedData->post_file = $request->input('post_file');
        // $validatedData->email = $request->input('email');
        //$validatedData->job_id = $request->input('job_id');
        // $validatedData->job_name = $request->input('job_name');
       // $validatedData->job_location = $request->input('job_location');
      //  if ($request->hasFile('job_description')) {
         //   $file = $request->file('job_description');
        //    $filename = time() . '_' . $file->getClientOriginalName();
            // dd($filename);
       //     $filePath = $file->storeAs('public/documents', $filename);
       //     $validatedData->job_description = $filePath;
       //     $validatedData->save();
      //  }

      //  if ($validatedData->save()) {
      //      $jobs = Job::get();
      //      $staffs = Staff::get();
      //      $posts = Post::get();
        //     return view('secretary.pages.position', compact('jobs','staffs','posts'))->with('posts', 'succesfull');
        //                 return view('secretary.pages.position', compact('jobs','staffs','posts'))->with('posts', 'succesfull');

        // }

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
