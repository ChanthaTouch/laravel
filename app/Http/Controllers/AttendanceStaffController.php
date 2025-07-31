<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AttendanceStaff;
use Illuminate\Http\Request;

class AttendanceStaffController extends Controller
{
    public function getAllAttendanceStaff(){
        $attendance_staff = AttendanceStaff::all();
        return response($attendance_staff);
    }
    public function getOneAttendanceStaff($id){
        $attendance_staff = AttendanceStaff::find($id);
        if($attendance_staff){
            return response($attendance_staff);

        }else{
            return response(['message'=>'Attendance Staff not found ']);
        }
    }
        public function addNewStaffAttendance(Request $request)
        {
            try {
                $validatedData = $request->validate([
                    'staff_id' => 'required|string|max:255',
                    'name_staff' => 'required|string|max:255',
                    'gender' => 'nullable|string',
                    'department' => 'nullable|string',
                    'scan_in' => 'nullable|string',
                    'scan_out' => 'nullable|string',
                    'leave_type' => 'nullable|string',
                    'from_date' => 'nullable|date',
                    'to_date' => 'nullable|date',
                    'shift_type' => 'nullable|string',
                    'period' => 'nullable|string',
                ]);
                $attendance = AttendanceStaff::create($validatedData);

                return response()->json([
                    'message' => 'Attendance record created successfully',
                    'data' => $attendance
                ], 201);

            } catch (\Exception $e) {
                return response()->json([
                    'message' => 'Failed to create attendance',
                    'error' => $e->getMessage()
                ], 500);
            }
    }
    public function updateAttendanceStaff(Request $request, $id){
        $staff_attendance = AttendanceStaff::find($id);
        if($staff_attendance){
            $staff_attendance->update($request->all());
            $update=AttendanceStaff::find($id);
            return response($staff_attendance);
        }else{
            return response('data',['message'=>'update data not found!']);
        }
    }
    public function deteleAttedanceStaff(Request $request, $id){
        $staff_attendance = AttendanceStaff::find($id);
        if($staff_attendance){
            $staff_attendance->delete($request->all());
            return response(['message'=>'Delete successfullly']);
        }
        else{
            return response(['message' => 'Delete not found ']);
        }
    }
}
