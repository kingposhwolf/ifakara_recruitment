<?php

namespace App\Http\Controllers;

use App\Models\Education_category;
use App\Models\Education_level;
use App\Models\Education_name;
use Illuminate\Http\Request;

class AcademicQualificationDropdownController extends Controller
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
