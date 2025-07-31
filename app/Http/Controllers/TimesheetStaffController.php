<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TimesheetStaff;
use Illuminate\Http\Request;

class TimesheetStaffController extends Controller
{
    public function getalltimesheet(){
        $timesheet = TimesheetStaff::all();

        return response($timesheet);
    }
    public function getOnetimesheet($id){
        $timesheet = TimesheetStaff::find($id);

        if($timesheet){
            return response($timesheet);
        }
        return response(['message'=>'pleas try again']);
    }
        public function addTimesheetNewStaff(Request $request){
        try {
            $timesheet = TimesheetStaff::create($request->all());
            return response()->json([
                'message' => 'Timesheet added successfully',
                'data' => $timesheet
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to add timesheet',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function updateTimesheet(Request $request, $id){
        $timesheet = TimesheetStaff::find($id);
        if($timesheet){
            $timesheet->update($request->all());
            $update = TimesheetStaff::all();

            return response([
                'data' => $update,
                'message' => 'Update successfully'
            ], 200);
        }
        return response([
            'message' => 'Timesheet not found, please try again'
        ], 404);
    }
    public function deleteTimesheet(Request $request, $id){
        $timesheet = TimesheetStaff::find($id);
        if($timesheet){
            $timesheet->delete();
            return response(['message'=>'Deleted successfull']);
        }
        return response(['message'=>'Pleas delete again']);
    }

}
