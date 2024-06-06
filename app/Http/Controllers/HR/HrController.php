<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\HeadInstitute;
use App\Models\institution;
use App\Models\Post;
use App\Models\Staff;
use App\Models\Upload;
use App\Models\Vacant;


class HrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $staffs = Staff::get();
        $vacants = Vacant::get();
        $totalStaffs = Staff::count();
        $totalPosts = Post::count();
        $totalUploads = Upload::count();
        $posts = Post::latest()->take(5)->get();
        $institutions = institution::get();
        return view('hr.home',[
            'staffs'=>$staffs,
            'vacants'=>$vacants,
            'institutions'=>$institutions,
            'totalStaffs'=>$totalStaffs,
            'totalPosts'=>$totalPosts,
            'posts'=>$posts,
            'totalUploads'=>$totalUploads
        ]);
    }


    public function HRprofile()
    {
      
        return view('hr.pages.hrprofile');
    }

   public function Organization()
    {
       $headinstitutions = HeadInstitute::with('institution')->get();
       $institutions = institution::get();
       //dd($institutions);
       // return view('hr.pages.organization',compact('headinstitutions','institutions'));
       return view('hr.pages.Organization',[
           'headinstitutions'=>$headinstitutions,
          'institutions'=>$institutions
       ]);

   }

    public function Applicants()

    {
       $applicants = Application::get();
       $vacants = Vacant::get();
        return view('hr.pages.Applicants',[
            'applicants'=>$applicants,
            'vacant'=>$vacants
        ]);
    }

    public function single_applicant($id){
        $applicants = Application::get();
        $vacants = Vacant::get();
        $applicant = Application::find($id);
        return view('hr.pages.components.single_applicants', [
            'applicant' => $applicant,
            'applicants' => $applicants,
            'vacants'=>$vacants
        ]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
