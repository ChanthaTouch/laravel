<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    Public function getAllStaff(){
        $staff = Staff::all();
        return response($staff);
    }
    Public function getOneStaff($id){
        $staff = staff::find($id);
        if($staff){
            return response($staff);
        } else {
            return response(['message' => 'Staff not found'], 404);
        }
    }
  public function addStaff(Request $request){
    $staff = Staff::create($request->all());
    return response($staff, 201);
}
    Public function deleteStaff($id){
        $staff = Staff::find($id);
        if($staff){
            $staff->delete();
            return response(['message' => 'Staff deleted successfully']);
        } else {
            return response(['message' => 'Staff not found'], 404);
        }
    }
   public function updateStaff(Request $request, $id){
        $staff = Staff::find($id);
        if($staff){
       
            $staff->update($request->all());
            $updatedStaff = Staff::find($id); 
            return response(['data' => $updatedStaff, 'message' => 'Staff updated successfully']);
        } else {
            return response(['message' => 'Staff not found'], 404);
        }
    }
    
}
