<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\OtherAttachiment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class OtherAttachimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        $otherAttachments = OtherAttachiment::where('user_id', $user->id)->get();

        return view('user.otherattachiment', compact('otherAttachments'));
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
    $user = auth()->user();
    $data = new OtherAttachiment();

    if ($request->hasFile('document') && $request->file('document')->isValid()) {
        $file = $request->file('document');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/documents', $filename);
        $data->attachiment = $filename;
    } else {
        // Handle the case where no file was uploaded or the upload failed
        return back()->withInput()->with('error', 'Failed to upload file.');
    }

    $data->attachiment_type = $request->input('attachiment_type');
    $data->user_id = $user->id;

    if ($data->save()) {
        return redirect('/otherattachiment')->with('status', 'Other Attachment Added Successfully!');
    } else {
        return back()->withInput()->with('error', 'Failed to add other attachment.');
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
        $data = OtherAttachiment::find($id);

        // If a new file is provided, update it
        if ($request->hasFile('document') && $request->file('document')->isValid()) {
            $file = $request->file('document');
            $filename = time() . '_' . $file->getClientOriginalName();
            // Delete the old file before storing the new one
            Storage::delete('public/documents/' . $data->attachiment);
            $file->storeAs('public/documents', $filename);
            $data->attachiment = $filename;
        }

        $data->attachiment_type = $request->input('attachiment_type');

        if ($data->update()) {
            return redirect('/otherattachiment')->with('status', 'Other Attachment updated Successfully!');
        } else {
            return back()->withInput()->with('error', 'Failed to update other attachment.');
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
    $data = OtherAttachiment::find($id);

    // Check if the record exists
    if(!$data){
        return redirect('/otherattachiment')->with('error', 'Record not found.');
    }

    // Check if the attachment exists before deleting it
    if($data->attachiment){
        // Delete the old file from storage
        Storage::delete('public/documents/' . $data->attachiment);
    }

    // Delete the record from the database
    $data->delete();

    return redirect('/otherattachiment')->with('statusDelete', 'Other Attachment deleted Successfully');
}

}
