<?php

namespace App\Http\Controllers\HR;

use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Vacant;
use App\Models\institution;
use Illuminate\Http\Request;
use PDO;

use function PHPUnit\Framework\returnSelf;

class StaffController extends Controller
{

    public function __construct()
    {
        $this->middleware('api');
    }


    private function selectStaffDetails()
    {
    return Staff::select(
        'staff.id',
        'staff.fname',
        'staff.lname',
        'staff.mname',
        'staff.gender',
        'staff.email',
        'staff.phone',
        'staff.staff_contract',
        'staff.end_date',
        'staff.basic_salary',
        'staff.allounce_salary',
        'institutions.name as institution_name',
        'vacants.name as vacant_name'
    )
    ->leftJoin('institutions', 'staff.institution_id', '=', 'institutions.id')
    ->leftJoin('vacants', 'staff.vacant_id', '=', 'vacants.id');
   }


    public function index()
    {
        // $jobs = Job::get();
        $staffs = Staff::get();
        $staff = Staff::get();
        $vacants = Vacant::get();
        $institutions = institution::get();
        return view('hr.pages.staffs', [
            'staffs' => $staffs,
            'vacants' => $vacants,
            'staff' => $staff,
            'institutions' => $institutions,
        ]);
    } 

    public function AllStaff()
    {
        $staffs = $this->selectStaffDetails()->get();
    
        if ($staffs->isEmpty()) {
            return response()->json(['message' => 'No staff records available']);
        }
    
        return response()->json(['staffs' => $staffs,'message' => 'Staff retrieved successfully' ]);
    }
    
    
    public function SingleStaff($id)
    {
        $staff = $this->selectStaffDetails()->find($id);
    
        if (!$staff) {
            return response()->json(['error' => 'Staff member not found, Please Register'], 404);
        }
    
        return response()->json(['staff' => $staff,'message' => 'Staff retrieved successfully' ]);
    }
    

    public function single_staff($id)
    {
        $staff = Staff::get();
        $vacant = Vacant::get();
        $institution = institution::get();
        $staff = Staff::find($id);
        return view('hr.pages.components.single_staff', [
            'vacant' => $vacant,
            'staff' => $staff,
            'institution' => $institution,
        ]);
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'fname' => 'required|string',
        //     'mname' => 'required|string',
        //     'lname' => 'required|string',
        //     'email' => 'required|email',
        //     'phone' => 'required|string',
        //     'institution_id' => 'required|numeric',
        //     'gender' => 'required|in:male,female',
        //     'vacant_id' => 'required|numeric',
        //     'staff_contract' => 'required|file',
        //     'end_date' => 'required|date',
        //     'basic_salary' => 'required|numeric',
        //     'allowance_salary' => 'required|numeric',
        // ]);

        //dd($request->all());
        $validatedData = new Staff();
        $validatedData->fname = $request->input('fname');
        $validatedData->lname = $request->input('lname');
        $validatedData->mname = $request->input('mname');
        $validatedData->email = $request->input('email');
        $validatedData->gender = $request->input('gender');
        $validatedData->phone = $request->input('phone');
        $validatedData->end_date = $request->input('end_date');
        $validatedData->basic_salary = $request->input('basic_salary');
        $validatedData->allounce_salary = $request->input('allounce_salary');
        $validatedData->institution_id = $request->input('institution_id');
        $validatedData->vacant_id = $request->input('vacant_id');

        if ($request->hasFile('staff_contract')) {
            $file = $request->file('staff_contract');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/documents', $filename);
            $validatedData->staff_contract = $filePath;
        }
        if ($validatedData->save()) {
            $staffs = Staff::get();
            $vacants = Vacant::get();
            $institutions = institution::get();
            return view('hr.pages.staffs', [
                'staffs' => $staffs,
                'vacants' => $vacants,
                'institutions' => $institutions,
            ]);
        }

        return back()->with('error', 'Failed to save vacant position.');
    }


    public function edit($id)
    {
        $encryptedId = Crypt::encryptString($id);
        $vacants = Vacant::get();
        $institutions = Institution::get();
        $staffs = Staff::get();
        return view('hr.pages.staffs', compact('staffs', 'vacants', 'institutions'));
    }


    public function update(Request $request, $id)
    {
        // $id = Crypt::decryptString($encryptedId);
        $validatedData = Staff::find($id);
        $validatedData->fname = $request->input('fname');
        $validatedData->lname = $request->input('lname');
        $validatedData->mname = $request->input('mname');
        $validatedData->email = $request->input('email');
        $validatedData->gender = $request->input('gender');
        $validatedData->phone = $request->input('phone');
        $validatedData->end_date = $request->input('end_date');
        $validatedData->basic_salary = $request->input('basic_salary');
        $validatedData->allounce_salary = $request->input('allounce_salary');
        $validatedData->institution_id = $request->input('institution_id');
        $validatedData->vacant_id = $request->input('vacant_id');

        if ($request->hasFile('staff_contract')) {
            $file = $request->file('staff_contract');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/documents', $filename);
            $validatedData->staff_contract = $filePath;
        }

        if ($validatedData->save()) {
            $staffs = Staff::get();
            $vacants = Vacant::get();
            $institutions = institution::get();
            return view('hr.pages.staffs', [
                'staffs' => $staffs,
                'vacants' => $vacants,
                'institutions' => $institutions,
            ])->with('success', 'Staff record updated successfully.');
        }

        return back()->with('error', 'Failed to update staff record.');
    }




    public function delete($id)
    {
        $staff = Staff::find($id);

        if (!$staff) {
            return back()->with('error', 'Staff record not found.');
            // return redirect()->route('/hr/staff')->with('error', 'Staff record not found.');
        }

        $staff->delete();
        $vacants = Vacant::get();
        $institutions = institution::get();
        $staffs = Staff::get();
        return view('hr.pages.staffs', [
            'staffs' => $staffs,
            'vacants' => $vacants,
            'institutions' => $institutions,

        ])->with('success', 'Staff record deleted successfully.');
    }
}
