<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        $uploads = Upload::get();

        return view('hr.pages.uploads',[
            'uploads'=> $uploads
        ]);
    }

    public function Upload_store(Request  $request){

      //  dd($request->all());
        $validateData = new Upload();
        $validateData->title = $request->input('title');
        $validateData->upload_descriptions = $request->input('upload_descriptions');
        $validateData->upload_date = $request->input('upload_date');
        if ($request->hasFile('document')){
            $file = $request->file('document');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filepath = $file->storeAs('public/documents',$filename);
            $validateData->document = $filepath;
        }

        if($validateData->save()){
          $uploads = Upload::get();

            return view('hr.pages.uploads',[
                'uploads'=> $uploads
                ]);
        }


    }

    public function uploads_destroy($id){

        $uploads = Upload::find($id);
        if (!$uploads) {
            return back()->with('error', 'No recorded found.');
            // return redirect()->route('/hr/staff')->with('error', 'Staff record not found.');
        }
        $uploads = Upload::get();
        return view('hr.pages.uploads',[
            'uploads'=> $uploads
        ])->with('success', 'record deleted successfully.');

    }
}
