<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Referees;
use Illuminate\Http\Request;

class RefereesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Referees::all();
        return view('user.referees', compact('data'));
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
        $data = new Referees();
        $data->full_name = $request->input('full_name');
        $data->place = $request->input('place');
        $data->phone = $request->input('phone');
        $data->title = $request->input('title');
        $data->email = $request->input('email');
        $data->addres = $request->input('addres');
        if($data->save()){
            return redirect('/referees')->with('status', 'Referees Added SuccessFully!');
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
        $data = Referees::find($id);
        $data->full_name = $request->input('full_name');
        $data->place = $request->input('place');
        $data->phone = $request->input('phone');
        $data->title = $request->input('title');
        $data->email = $request->input('email');
        $data->addres = $request->input('addres');
        $data->update();
        return redirect('/referees')->with('status', 'Referees was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Referees::find($id);
        $data->delete();
        return redirect('/referees')->with('statusDelete', 'Referees deleted Successfully');
    }
}