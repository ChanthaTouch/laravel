<?php

use App\Http\Controllers\AttendanceStaffController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectListController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectClientController;
use App\Http\Controllers\RateAdjustmentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TimesheetStaffController;
use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// =============API of all Staff==================

Route::get('/get-all-staff', [StaffController::class, 'getAllStaff']);
Route::get('/get-one-staff/{id}', [StaffController::class, 'getOneStaff']);
Route::post('/add-staff', [StaffController::class, 'addStaff']);
Route::put('/update-staff/{id}', [StaffController::class, 'updateStaff']);
Route::delete('/delete-staff/{id}', [StaffController::class, 'deleteStaff']);

// ===========================API of all ProjectClient========================
Route::get('/get-all-project-clients', [ProjectClientController::class, 'getAllProjectClients']);
Route::get('/get-one-project-client/{id}',[ProjectClientController::class, 'getOneProjectClient']);
Route::post('/add-project-client', [ProjectClientController::class, 'addProjectClient']);
Route::put('/update-project-client/{id}', [ProjectClientController::class, 'updateProjectClient']);
Route::delete('/delete-project-client/{id}', [ProjectClientController::class, 'deleteProjectClient']);

// =============================API of all projectlist=======================

Route::get('/get-all-projectlist', [ProjectListController::class, 'getaAllProjectList']);
Route::get('/get-one-projectlist/{id}', [ProjectListController::class, 'getOneProjectList']);
Route::post('/add-project-list', [ProjectListController::class, 'addProjectList']);
Route::put('/update-project-list/{id}', [ProjectListController::class, 'updateProjectList']);
Route::delete('/delete-project-list/{id}', [ProjectListController::class, 'deleteProjectList']);

// ==========================Attendance===================================

// Route::get('/get-all-attendance-staff')
// Route::post('/login',[AuthController::class, 'login']);
     Route::get('/get_all_staff_attendance', [AttendanceStaffController::class, 'getAllAttendanceStaff']);



Route::middleware('auth:sanctum')->group(function(){
   
    Route::get('/get-one_staff_attendance/{id}', [AttendanceStaffController::class, 'getOneAttendanceStaff']);
    Route::post('/add-new-staff-attendance', [AttendanceStaffController::class, 'addNewStaffAttendance']);
    Route::put('/update_attendance_staff/{id}',[AttendanceStaffController::class, 'updateAttendanceStaff']);
    Route::delete('/delete_attendace_staff/{id}',[AttendanceStaffController::class, 'deteleAttedanceStaff']); 
});

// ----------Timesheet Staff-------------------

Route::get('/get-all-timesheet-about-staff',[TimesheetStaffController::class, 'getalltimesheet']);
Route::get('/get-one-timesheet-about-staff/{id}',[TimesheetStaffController::class, 'getOnetimesheet']);
Route::post('/add-new-timesheet-about-new-staff',[TimesheetStaffController::class,'addTimesheetNewStaff']);
Route::put('/update-timesheet-about-staff/{id}', [TimesheetStaffController::class, 'updateTimesheet']);
Route::delete('/delete-timesheet/{id}', [TimesheetStaffController::class, 'deleteTimesheet']);

// ------------------Rating Adjustment table---------------
Route::post('/login',[AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/get-all-adjustment',[RateAdjustmentController::class, 'allAdjustment']);
    Route::get('/one-adjustment/{id}',[RateAdjustmentController::class, 'getOneAdjustment']);
    Route::post('/add-adjustment', [RateAdjustmentController::class, 'addAdjustment']);
    Route::put('/update-adjustment/{id}',[RateAdjustmentController::class, 'updateAdjustment']);
    Route::delete('/delete-adjustment/{id}',[RateAdjustmentController::class, 'deleteAdjustment']);
});


    

