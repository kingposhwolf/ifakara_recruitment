<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education_category;
use App\Models\Education_level;
use App\Models\Education_name;
use App\Models\Post;
use App\Models\Vacant;
use App\Models\institution;
use Carbon\Carbon; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {


        $institutions = institution::get();
    
        $vacants = Vacant::get();
        $vacant = Vacant::get();
        $education_levels = Education_level::get();
        $education_categories = Education_category::get();
        $education_names = Education_name::get();
        $posts = Post::with('educationLevel','educationName')->get();
        $vacantCategoriesCount = $posts->groupBy('vacant_category')->count();
        $post=Post::get();
        $currentDate = Carbon::now();
        $posts = $posts->map(function ($post) use ($currentDate) {
            $startDate = Carbon::parse($post->application_date);
            $endDate = Carbon::parse($post->end_date);
            
            if ($currentDate->between($startDate, $endDate)) {
                $post->status = 'Active';
            } else {
                $post->status = 'Inactive';
            }

            return $post;
        });

        return view('welcome',[
            'vacants' => $vacants,
            'vacant'=>$vacant,
            'institutions' => $institutions,
            'education_levels' => $education_levels,
            'education_categories' => $education_categories,
            'education_names' => $education_names,
            'posts' => $posts,
            'post'=>$post,
            'vacantCategoriesCount' => $vacantCategoriesCount,
        ]);
    }

    public function generalinformation(){
        return view('user.userdeskhelp.generalInformation');
    }

    public function howtoapplyjob(){
        return view('user.userdeskhelp.howtoapply');
    }

    public function interview(){
        return view('user.userdeskhelp.interview');
    }
    public function viewjob()
    {
        return view('viewjob');
    }
    
    public function postdeatail($id)
    {
        $institution = institution::get();
        $vacant = Vacant::get();
        $education_level = Education_level::get();
        $education_categorie = Education_category::get();
        $education_name = Education_name::get();
        //$level = Post::with('educationLevel','educationName')->get();
        $post=Post::get();
        $post = Post::find($id);

        return view('description',[
            'institution' => $institution,
            'vacant' => $vacant,
            'education_level' => $education_level,
            'education_categorie' => $education_categorie,
            'education_name' => $education_name,
           // 'level' => $level,
            'post'=>$post
        ]);
    }
   


}
