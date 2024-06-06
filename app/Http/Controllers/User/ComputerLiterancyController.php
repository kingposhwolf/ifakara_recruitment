<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ComputerLiterancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ComputerLiterancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.computerliterancy');
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
        $data = new ComputerLiterancy();
        if($request->hasFile('certificate')){
            $file = $request->file('certificate');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/users/pdf/ComputerLiterancy',$filename);
            $data->certificate = $filename;
        }
        $data->computer_skill = $request->input('computer_skill');
        $data->status = $request->input('status');
        if($data->save()){
            return redirect('/')->with('status', 'Computer Literancy Added SuccessFully!');
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
        $data = ComputerLiterancy::find($id);
        if($request->hasFile('certificate')){
            $path = 'assets/users/pdf/ComputerLiterancy'.$data->certificate;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('certificate');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/users/pdf/ComputerLiterancy',$filename);
            $data->certificate = $filename;
        }
        $data->computer_skill = $request->input('computer_skill');
        $data->status = $request->input('status');
        $data->update();
        return redirect('/')->with('status', 'Computer Literancy was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ComputerLiterancy::find($id);
        if($data->certificate){
            $path = 'assets/users/pdf/ComputerLiterancy'.$data->certificate;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $data->delete();
        return redirect('/')->with('statusDelete', 'Computer Literancy deleted Successfully');
    }
}
