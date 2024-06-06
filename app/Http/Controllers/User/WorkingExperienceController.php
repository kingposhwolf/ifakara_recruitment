<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\WorkingExperience;
use Illuminate\Http\Request;

class WorkingExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workingexperience = WorkingExperience::all();
        return view('user.workingexperience', compact('workingexperience'));
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
        $data = new WorkingExperience();
        $data->place = $request->input('place');
        $data->job_title = $request->input('job_title');
        $data->supervisor_name = $request->input('supervisor_name');
        $data->supervisor_phone = $request->input('supervisor_phone');
        $data->supervisor_email = $request->input('supervisor_email');
        $data->institute_address = $request->input('institute_address');
        $data->duties_responsibility = $request->input('duties_responsibility');
        $data->start_date = $request->input('start_date');
        $data->end_date = $request->input('end_date');
        if ($data->save()) {
            return redirect('/workingexperience')->with('status', 'Working Experience Added SuccessFully!');
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
        $data = WorkingExperience::find($id);
        $data->place = $request->input('place');
        $data->job_title = $request->input('job_title');
        $data->supervisor_name = $request->input('supervisor_name');
        $data->supervisor_phone = $request->input('supervisor_phone');
        $data->supervisor_email = $request->input('supervisor_email');
        $data->institute_address = $request->input('institute_address');
        $data->duties_responsibility = $request->input('duties_responsibility');
        $data->start_date = $request->input('start_date');
        $data->end_date = $request->input('end_date');

        if ($data->update()) {
            return redirect('/workingexperience')->with('status', 'Working Experience Updated SuccessFully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = WorkingExperience::find($id);
        $data->delete();
        return redirect('/workingexperience')->with('statusDelete', 'Working Experience deleted Successfully');
    }
}
