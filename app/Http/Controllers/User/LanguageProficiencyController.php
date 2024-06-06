<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\LanguageProficiency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LanguageProficiencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.languageproficiency');
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
        $data = new LanguageProficiency();
        if($request->hasFile('certificate')){
            $file = $request->file('certificate');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/users/pdf/LanguageProficiency',$filename);
            $data->certificate = $filename;
        }
        $data->language = $request->input('language');
        $data->status = $request->input('status');
        if($data->save()){
            return redirect('/')->with('status', 'Language Proficiency Added SuccessFully!');
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
        $data = LanguageProficiency::find($id);
        if($request->hasFile('certificate')){
            $path = 'assets/users/pdf/LanguageProficiency'.$data->certificate;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('certificate');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/users/pdf/LanguageProficiency',$filename);
            $data->certificate = $filename;
        }
        $data->language = $request->input('language');
        $data->status = $request->input('status');
        $data->update();
        return redirect('/')->with('status', 'Language Proficiency was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = LanguageProficiency::find($id);
        if($data->certificate){
            $path = 'assets/users/pdf/LanguageProficiency'.$data->certificate;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $data->delete();
        return redirect('/')->with('statusDelete', 'Language Proficiency deleted Successfully');
    }
}
