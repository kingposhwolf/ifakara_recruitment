<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AcademicQualification;
use App\Models\Education_category;
use App\Models\Education_level;
use App\Models\Education_name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AcademicQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Education_levels'] = Education_level::get(["name", "id"]);
        return view('user.academicqualification', $data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetch_education_category(Request $request)
    {
        $data['Education_categories'] = Education_category::where("level_id", $request->level_id)
            ->get(["name", "id"]);

        return response()->json($data);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetch_education_name(Request $request)
    {
        $data['Education_names'] = Education_name::where("category_id", $request->category_id)
            ->get(["name", "id"]);

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.createcademic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new AcademicQualification();
        if($request->hasFile('certificate')){
            $file = $request->file('certificate');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/users/pdf/AcademicQualification',$filename);
            $data->certificate = $filename;
        }
        $data->education_level = $request->input('education_level');
        $data->institute_name = $request->input('institute_name');
        $data->country = $request->input('country');
        $data->program_category = $request->input('program_category');
        $data->program_name = $request->input('program_name');
        $data->transcript = $request->input('transcript');
        $data->start_date = $request->input('start_date');
        $data->end_date = $request->input('end_date');
        $data->gpa = $request->input('gpa');
        $data->out_of_gpa = $request->input('out_of_gpa');
        if($data->save()){
            return redirect('/')->with('status', 'Academic Qualification Added SuccessFully!');
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
        $data = AcademicQualification::find($id);
        if($request->hasFile('certificate')){
            $path = 'assets/users/pdf/AcademicQualification'.$data->certificate;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('certificate');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/users/pdf/AcademicQualification',$filename);
            $data->certificate = $filename;
        }
        $data->education_level = $request->input('education_level');
        $data->institute_name = $request->input('institute_name');
        $data->country = $request->input('country');
        $data->program_category = $request->input('program_category');
        $data->program_name = $request->input('program_name');
        $data->transcript = $request->input('transcript');
        $data->start_date = $request->input('start_date');
        $data->end_date = $request->input('end_date');
        $data->gpa = $request->input('gpa');
        $data->out_of_gpa = $request->input('out_of_gpa');
        $data->update();
        return redirect('/')->with('status', 'Academic Qualification was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = AcademicQualification::find($id);
        if($data->certificate){
            $path = 'assets/users/pdf/AcademicQualification'.$data->certificate;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $data->delete();
        return redirect('/')->with('statusDelete', 'Academic Qualification deleted Successfully');
    }
}
