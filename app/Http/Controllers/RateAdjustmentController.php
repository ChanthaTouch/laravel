<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RateAdjustment;
use Illuminate\Http\Request;

class RateAdjustmentController extends Controller
{
    public function allAdjustment(){
        $adjustment= RateAdjustment::all();
        return response($adjustment);
    }
    public function getOneAdjustment($id){
        $adjustment = RateAdjustment::find($id);
        if($adjustment){
            return response($adjustment);
        }
        return response(['message'=>'pleas try again']);
    }
    public function addAdjustment(Request $request){
        try{
            $adjustment = RateAdjustment::create($request->all());

            return response()->json([
                'message'=>'add data  successfully',
                'data'=>$adjustment

            ]);
          
            }  catch(\Exception $e){
                return response()->json([
                    'message' =>'plras try to add data again',
                    'error'=>$e->getMessage()
                ]);
        }
    
    }
    public function updateAdjustment(Request $request, $id){
        $adjustment = RateAdjustment::find($id);
        if($adjustment){
            $adjustment->update($request->all());
            $update=RateAdjustment::all();

            return (['data'=>$update, 'message'=>'update successfully']);
        }
        return response(['message'=>'pleas try again']);
    }
    public function deleteAdjustment(Request $request, $id){
        $adjustment = RateAdjustment::find($id);

        if($adjustment){
            $adjustment->delete();

            return response(['message'=>'Deleted successfully']);
        }
        return response(['message'=>'Pleas try again']);
    }
}
