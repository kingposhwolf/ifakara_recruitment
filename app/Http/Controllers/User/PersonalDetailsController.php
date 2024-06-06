<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PersonalDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $personalDetails = PersonalDetail::firstOrNew(['user_id' => $user->id]);

        return view('user.personaldetails', ['personalDetails' => $personalDetails]);
    }


    public function userProfile(){
        return view ('user.user_profile');
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
        $user = Auth::user();
        $data = PersonalDetail::firstOrNew(['user_id' => $user->id]);
        $data->full_name = $request->input('full_name');
        $data->gender = $request->input('gender');
        $data->country_of_residence = $request->input('country_of_residence');
        $data->date_of_birth = $request->input('date_of_birth');
        $data->place_of_birth = $request->input('place_of_birth');
        $data->originality = $request->input('originality');
        $data->mobile = $request->input('mobile');
        $data->morital_status = $request->input('morital_status');
        $data->disability = $request->input('disability');
        $data->current_residence_region = $request->input('current_residence_region');
        $data->current_residence_district = $request->input('current_residence_district');
        if($data->save()){
            return redirect('/personaldetails')->with('status', 'Personal Detail Updated SuccessFully!');
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
        $data = PersonalDetail::find($id);
        $data->full_name = $request->input('full_name');
        $data->gender = $request->input('gender');
        $data->country_of_residence = $request->input('country_of_residence');
        $data->date_of_birth = $request->input('date_of_birth');
        $data->region_of_birth = $request->input('region_of_birth');
        $data->district_of_birth = $request->input('district_of_birth');
        $data->originality = $request->input('originality');
        $data->mobile = $request->input('mobile');
        $data->morital_status = $request->input('morital_status');
        $data->disability = $request->input('disability');
        $data->current_residence_region = $request->input('current_residence_region');
        $data->current_residence_district = $request->input('current_residence_district');
        $data->update();
        return redirect('/')->with('status', 'Personal Detail was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PersonalDetail::find($id);
        $data->delete();
        return redirect('/')->with('statusDelete', 'Personal Detail deleted Successfully');
    }
}
