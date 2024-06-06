<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\AUDITOR\AuditorController;
use App\Http\Controllers\GS\GsController;
use App\Http\Controllers\GS\PositionController;
use App\Http\Controllers\GS\ApplicantsController;
use App\Http\Controllers\HR\HrController;
use App\Http\Controllers\User\AcademicQualificationController;
use App\Http\Controllers\User\ComputerLiterancyController;
use App\Http\Controllers\User\LanguageProficiencyController;
use App\Http\Controllers\User\OnlineCourseController;
use App\Http\Controllers\User\OtherAttachimentController;
use App\Http\Controllers\User\PersonalDetailsController;
use App\Http\Controllers\User\ProfessionalQualificationController;
use App\Http\Controllers\User\RefereesController;
use App\Http\Controllers\User\TrainingAndWorkshopController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\WorkingExperienceController;
use App\Http\Controllers\AcademicQualificationDropdownController;
use App\Http\Controllers\HR\EducationController;
use App\Http\Controllers\HR\UploadController;
use App\Http\Controllers\HR\institutionController;
use App\Http\Controllers\HR\HeadInstituteController;
use App\Http\Controllers\HR\StaffController;
use App\Http\Controllers\HR\JobsController;
use App\Http\Controllers\HR\PostController;
use App\Http\Controllers\GS\StaffGSController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\HR\PerformanceController;
use App\Http\Controllers\User\ApplicationController;
use App\Models\Post;
use GuzzleHttp\Psr7\UploadedFile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/email_verification',[VerificationController::class,'verify_email'])->name('verify_email');
Route::get('/general-information', [HomeController::class, 'generalinformation'])->name('generalinformation');
Route::get('/how-to-applyjob', [HomeController::class, 'howtoapplyjob'])->name('howtoapplyjob');
Route::get('/how-to-prepare-for-interview', [HomeController::class, 'interview'])->name('interview');
Route::get('/view-job', [HomeController::class, 'viewjob'])->name('viewjob');
Route::get('/post-details/{id}', [HomeController::class, 'postdeatail'])->name('postdeatail');


Route::post('/post-application',[ApplicationController::class,'create'])->name('post');

Auth::routes();



//HR middleware
Route::middleware(['auth', 'isHr'])->group(function () {

    Route::get('/hrdashboard', [HrController::class, 'index'])->name('hrdashboard');
    Route::get('/hr/staff', [StaffController::class, 'index'])->name('staff');
    Route::post('/hr/staff', [StaffController::class, 'store'])->name('staff_registration');
    Route::delete('/hr/staff/{id}', [StaffController::class, 'delete'])->name('staff_delete');
    Route::get('/hr/staff/{id}/edit', [StaffController::class, 'edit'])->name('staff_edit');
    Route::get('/hr/staff/show/{id}',[StaffController::class,'single_staff'])->name('single_staff');
    Route::put('/hr/staff/{id}', [StaffController::class, 'update'])->name('staff_update');
    // jobs contrhollers

    Route::get('/hr/jobs', [JobsController::class, 'index'])->name('jobs');
    Route::post('/publish_job', [JobsController::class, 'store'])->name('publish_job');

    Route::get('/hr/job/received', [JobsController::class, 'receivedquery'])->name('received');
    Route::get('/hr/job/show_vacant/{id}',[JobsController::class,'single_vacant'])->name('show_vacant');
    Route::post('/hr/jobs', [JobsController::class, 'vacant_registration'])->name('vacant_registration');
    Route::put('/hr/jobs/vacant/{id}', [JobsController::class, 'vacant_update'])->name('vacant_update');
    Route::delete('/hr/jobs/vacant/{id}', [JobsController::class, 'delete_vacant'])->name('delete_vacant');
    // Route::delete('/hr/jobs/post/{id}', [JobsController::class, 'delete_post'])->name('delete_post');
    // Route::post('/hr/jobs/vacants', [JobsController::class, 'publish_vacant'])->name('publish_vacant');


    //post  publications
    Route::get('/hr/post/', [PostController::class, 'index'])->name('publish');
    Route::get('hr/post/show/{id}', [PostController::class, 'show'])->name('show_post');
    Route::post('/hr/post/', [PostController::class, 'store'])->name('publish_vacant');
    Route::put('/hr/post/publication/{id}', [PostController::class, 'update'])->name('update_post');
    Route::delete('/hr/post/post/{id}', [PostController::class, 'destroy'])->name('delete_post');




    //uploads uploads
    Route::get('/hr/uploads', [UploadController::class, 'index'])->name('uploads');
    Route::post('/hr/uploads', [UploadController::class, 'Upload_store'])->name('uploads_documents');
    Route::delete('/hr/uploads/{id}', [UploadController::class, 'uploads_destroy'])->name('uploads_destroy');
    Route::put('/hr/uploads/updates/{id}', [UploadController::class, 'upload_update'])->name('uploads_updates');


    Route::get('/hr/organinzation', [HrController::class, 'Organization'])->name('organization');
    Route::get('/hr/education_level', [EducationController::class, 'index'])->name('education_level');
    Route::get('hr/applicants', [HrController::class, 'Applicants'])->name('applicants');
    Route::get('/hr/applicants/{id}',[HrController::class, 'single_applicant'])->name('single_applicant');
    //institute
    Route::get('/institute', [institutionController::class, 'index'])->name('institute');
    Route::get('/instititue/show/{id}',[institutionController::class,'show'])->name('show_institute');
    Route::post('/institute/add_institute', [institutionController::class, 'store'])->name('add_institute');
    Route::delete('/institute/delete_institute/{id}', [institutionController::class, 'destroy'])->name('delete_institute');
    Route::put('/institute/update_institute/{id}', [institutionController::class, 'update'])->name('update_institute');

    //head institute
    Route::get('/head_institute', [HeadInstituteController::class, 'index'])->name('head_institute');
    Route::get('/head_institute/show/{id}',[HeadInstituteController::class,'show'])->name('show_head_institute');
    Route::post('/head_institute/add_head_institute', [HeadInstituteController::class, 'store'])->name('add_head_institute');
    Route::delete('/head_institute/delete_head_institute/{id}', [HeadInstituteController::class, 'destroy'])->name('delete_head_institute');
    Route::put('/head_institute/update_head_institute/{id}', [HeadInstituteController::class, 'update'])->name('update_head_institute');

    //profile upates
    Route::get('/hr/profile', [HrController::class, 'HRprofile'])->name('profile_hr');
    Route::post('/update-profile', [ProfileController::class, 'updateProfile'])->name('update_profile');
    Route::post('/update-password', [ProfileController::class, 'updatePassword'])->name('update_password');


    //performance

    Route::get('/hr/performance',[PerformanceController::class,'index'])->name('performance');
});




//GS middleware
Route::middleware(['auth', 'isGs'])->group(function () {

    Route::get('/gsdashboard', [GsController::class, 'index'])->name('gsdashboard');
    //staffs controllers
    Route::get('/gs/staffs', [StaffGSController::class, 'index'])->name('staffs');
    Route::post('/register_job', [StaffGSController::class, 'RegisterJob'])->name('job_registrations');
    Route::put('/update_job/{id}', [StaffGSController::class, 'jobUpdates'])->name('job_update');
    Route::delete('/delete_job/{id}', [StaffGSController::class, 'JobDelete'])->name('delete_job');
    Route::post('/register_staffs', [StaffGSController::class, 'StaffRegistration'])->name('staff_registrations');
    //Uploads
    Route::post('/file_Uploads', [StaffGSController::class, 'FileUpload'])->name('file-uploads');

    Route::get('/gs/profile', [GsController::class, 'GSprofile'])->name('profile_gs');
    Route::post('/update-profile', [ProfileController::class, 'updateProfile'])->name('update_profile');
    Route::post('/update-password', [ProfileController::class, 'updatePassword'])->name('update_password');
    //jobs posts routes
    Route::get('/gs/position', [PositionController::class, 'index'])->name('job_position');
    Route::post('/post_job', [PositionController::class, 'store'])->name('post_job');
    Route::get('/gs/applications', [ApplicantsController::class, 'index'])->name('jobs_applications');
    Route::get('/gs/requitment', [ApplicantsController::class, 'Requitment'])->name('job_requitment');
});


//Auditor middleware
Route::middleware(['auth', 'isAuditor'])->group(function () {
    Route::get('/auditordashboard', [AuditorController::class, 'index'])->name('auditordashboard');
    Route::get('/auditors/staffs_1', [AuditorController::class, 'Staffs_details'])->name('auditors_staffs');
});


//Users middleware
Route::middleware(['auth', 'isUser'])->group(function () {
    //Dashboard
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    //Personal Details
    Route::get('/personaldetails', [PersonalDetailsController::class, 'index'])->name('personaldetails');
    Route::post('/personaldetails/add_personaldetails', [PersonalDetailsController::class, 'store'])->name('add_personaldetails');
    Route::get('/personaldetails/delete_personaldetails/{id}', [PersonalDetailsController::class, 'destroy'])->name('delete_personaldetails');
    Route::put('/personaldetails/update_personaldetails/{id}', [PersonalDetailsController::class, 'update'])->name('update_personaldetails');


    //profile
    Route::get('/userProfile', [PersonalDetailsController::class, 'userProfile'])->name('user_profile');
    Route::post('/update-profile', [ProfileController::class, 'updateProfile'])->name('update_profile');
    Route::post('/update-password', [ProfileController::class, 'updatePassword'])->name('update_password');

    //Academic Qualifications
    Route::get('/academicqualifications', [AcademicQualificationController::class, 'index'])->name('academicqualifications');
    Route::get('/academicqualifications/add_academicqualifications', [AcademicQualificationController::class, 'create'])->name('add_academicqualifications');
    Route::post('/academicqualifications/store_academicqualifications', [AcademicQualificationController::class, 'store'])->name('store_academicqualifications');
    Route::get('/academicqualifications/delete_academicqualifications/{id}', [AcademicQualificationController::class, 'destroy'])->name('delete_academicqualifications');
    Route::put('/academicqualifications/update_academicqualifications/{id}', [AcademicQualificationController::class, 'update'])->name('update_academicqualifications');
    //Route::get('dropdown', [AcademicQualificationDropdownController::class, 'index']);
    Route::post('/fetcheducationcategory', [AcademicQualificationController::class, 'fetch_education_category']);
    Route::post('/fetcheducationname', [AcademicQualificationController::class, 'fetch_education_name']);

    //Computer Literancy
    Route::get('/computerliterancy', [ComputerLiterancyController::class, 'index'])->name('computerliterancy');
    Route::post('/computerliterancy/add_computerliterancy', [ComputerLiterancyController::class, 'store'])->name('add_computerliterancy');
    Route::get('/computerliterancy/delete_computerliterancy/{id}', [ComputerLiterancyController::class, 'destroy'])->name('delete_computerliterancy');
    Route::put('/computerliterancy/update_computerliterancy/{id}', [ComputerLiterancyController::class, 'update'])->name('update_computerliterancy');

    //Language Proficiency
    Route::get('/languageproficiency', [LanguageProficiencyController::class, 'index'])->name('languageproficiency');
    Route::post('/languageproficiency/add_languageproficiency', [LanguageProficiencyController::class, 'store'])->name('add_languageproficiency');
    Route::get('/languageproficiency/delete_languageproficiency/{id}', [LanguageProficiencyController::class, 'destroy'])->name('delete_languageproficiency');
    Route::put('/languageproficiency/update_languageproficiency/{id}', [LanguageProficiencyController::class, 'update'])->name('update_languageproficiency');

    //Online Course
    Route::get('/onlinecourse', [OnlineCourseController::class, 'index'])->name('onlinecourse');
    Route::post('/onlinecourse/add_onlinecourse', [OnlineCourseController::class, 'store'])->name('add_onlinecourse');
    Route::get('/onlinecourse/delete_onlinecourse/{id}', [OnlineCourseController::class, 'destroy'])->name('delete_onlinecourse');
    Route::put('/onlinecourse/update_onlinecourse/{id}', [OnlineCourseController::class, 'update'])->name('update_onlinecourse');

    //Other Attachiments
    Route::get('/otherattachiment', [OtherAttachimentController::class, 'index'])->name('otherattachiment');
    Route::post('/otherattachiment/add_otherattachiment', [OtherAttachimentController::class, 'store'])->name('add_otherattachiment');
    Route::get('/otherattachiment/delete_otherattachiment/{id}', [OtherAttachimentController::class, 'destroy'])->name('delete_otherattachiment');
    Route::post('/otherattachiment/update_otherattachiment/{id}', [OtherAttachimentController::class, 'update'])->name('update_otherattachiment');

    //Professional Qualification
    Route::get('/professionalqualification', [ProfessionalQualificationController::class, 'index'])->name('professionalqualification');
    Route::post('/professionalqualification/add_professionalqualification', [ProfessionalQualificationController::class, 'store'])->name('add_professionalqualification');
    Route::get('/professionalqualification/delete_professionalqualification/{id}', [ProfessionalQualificationController::class, 'destroy'])->name('delete_professionalqualification');
    Route::put('/professionalqualification/update_professionalqualification/{id}', [ProfessionalQualificationController::class, 'update'])->name('update_professionalqualification');

    //Referees
    Route::get('/referees', [RefereesController::class, 'index'])->name('referees');
    Route::post('/referees/add_referees', [RefereesController::class, 'store'])->name('add_referees');
    Route::get('/referees/delete_referees/{id}', [RefereesController::class, 'destroy'])->name('delete_referees');
    Route::put('/referees/update_referees/{id}', [RefereesController::class, 'update'])->name('update_referees');

    //Training And Workshop
    Route::get('/trainingandworkshop', [TrainingAndWorkshopController::class, 'index'])->name('trainingandworkshop');
    Route::post('/trainingandworkshop/add_trainingandworkshop', [TrainingAndWorkshopController::class, 'store'])->name('add_trainingandworkshop');
    Route::get('/trainingandworkshop/delete_trainingandworkshop/{id}', [TrainingAndWorkshopController::class, 'destroy'])->name('delete_trainingandworkshop');
    Route::put('/trainingandworkshop/update_trainingandworkshop/{id}', [TrainingAndWorkshopController::class, 'update'])->name('update_trainingandworkshop');

    //Working Experiences
    Route::get('/workingexperience', [WorkingExperienceController::class, 'index'])->name('workingexperience');
    Route::post('/workingexperience/add_workingexperience', [WorkingExperienceController::class, 'store'])->name('add_workingexperience');
    Route::get('/workingexperience/delete_workingexperience/{id}', [WorkingExperienceController::class, 'destroy'])->name('delete_workingexperience');
    Route::post('/workingexperience/update_workingexperience/{id}', [WorkingExperienceController::class, 'update'])->name('update_workingexperience');
});
