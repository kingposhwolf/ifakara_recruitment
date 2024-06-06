<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ProfessionalQualification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfessionalQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.professionalqualification');
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
        $data = new ProfessionalQualification();
        if($request->hasFile('certificate')){
            $file = $request->file('certificate');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/users/pdf/ProfessionalQualification',$filename);
            $data->certificate = $filename;
        }
        $data->course_name = $request->input('course_name');
        $data->institute_name = $request->input('institute_name');
        $data->country = $request->input('country');
        $data->start_date = $request->input('start_date');
        $data->end_date = $request->input('end_date');
        if($data->save()){
            return redirect('/')->with('status', 'Professional Qualification Added SuccessFully!');
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
        $data = ProfessionalQualification::find($id);
        if($request->hasFile('certificate')){
            $path = 'assets/users/pdf/ProfessionalQualification'.$data->certificate;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('certificate');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/users/pdf/ProfessionalQualification',$filename);
            $data->certificate = $filename;
        }
        $data->course_name = $request->input('course_name');
        $data->institute_name = $request->input('institute_name');
        $data->country = $request->input('country');
        $data->start_date = $request->input('start_date');
        $data->end_date = $request->input('end_date');
        $data->update();
        return redirect('/')->with('status', 'Professional Qualification was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ProfessionalQualification::find($id);
        if($data->certificate){
            $path = 'assets/users/pdf/ProfessionalQualification'.$data->certificate;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $data->delete();
        return redirect('/')->with('statusDelete', 'Professional Qualification deleted Successfully');
    }
}
