<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\TrainingAndWorkshop;
use Illuminate\Http\Request;

class TrainingAndWorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TrainingAndWorkshop::all();
        return view('user.trainingandworkshop', compact('data'));
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
        $data = new TrainingAndWorkshop();
        $data->training_name = $request->input('training_name');
        $data->training_discription = $request->input('training_discription');
        $data->institute_name = $request->input('institute_name');
        $data->start_date = $request->input('start_date');
        $data->end_date = $request->input('end_date');
        if($data->save()){
            return redirect('/trainingandworkshop')->with('status', 'Training And Workshop Added SuccessFully!');
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
        $data = TrainingAndWorkshop::find($id);
        $data->training_name = $request->input('training_name');
        $data->training_discription = $request->input('training_discription');
        $data->institute_name = $request->input('institute_name');
        $data->start_date = $request->input('start_date');
        $data->end_date = $request->input('end_date');
        $data->update();
        return redirect('/trainingandworkshop')->with('status', 'Training And Workshop was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = TrainingAndWorkshop::find($id);
        $data->delete();
        return redirect('/trainingandworkshop')->with('statusDelete', 'Training And Workshop deleted Successfully');
    }
}