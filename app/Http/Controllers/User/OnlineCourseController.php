<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\OnlineCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OnlineCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.onlinecourse');
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
        $data = new OnlineCourse();
        if($request->hasFile('certificate')){
            $file = $request->file('certificate');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/users/pdf/OnlineCourse',$filename);
            $data->certificate = $filename;
        }
        $data->course_name = $request->input('course_name');
        $data->year_of_completion = $request->input('year_of_completion');
        $data->institute_name = $request->input('institute_name');
        $data->training_discription = $request->input('training_discription');
        $data->start_date = $request->input('start_date');
        $data->end_date = $request->input('end_date');
        if($data->save()){
            return redirect('/')->with('status', 'Online Course Added SuccessFully!');
        }
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
        $data = OnlineCourse::find($id);
        if($request->hasFile('certificate')){
            $path = 'assets/users/pdf/OnlineCourse'.$data->certificate;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('certificate');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/users/pdf/OnlineCourse',$filename);
            $data->certificate = $filename;
        }
        $data->course_name = $request->input('course_name');
        $data->year_of_completion = $request->input('year_of_completion');
        $data->institute_name = $request->input('institute_name');
        $data->training_discription = $request->input('training_discription');
        $data->start_date = $request->input('start_date');
        $data->end_date = $request->input('end_date');
        $data->update();
        return redirect('/')->with('status', 'Online Course was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = OnlineCourse::find($id);
        if($data->certificate){
            $path = 'assets/users/pdf/OnlineCourse'.$data->certificate;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $data->delete();
        return redirect('/')->with('statusDelete', 'Online Course deleted Successfully');
    }
}
