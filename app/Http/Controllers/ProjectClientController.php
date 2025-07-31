<?php

namespace App\Http\Controllers;
use App\Models\ProjectClient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectClientController extends Controller
{
    Public function  getAllProjectClients(){
        $projectClients = ProjectClient::all();
        return response($projectClients);
    }
    Public function getOneProjectClient($id){
        $projectClients = ProjectClient::find($id);
        if($projectClients){
            return response($projectClients);
        } else {
            return response(['message' => 'Project Client not found']);
        }
    }
    Public function addProjectClient(Request $request){
        $client= ProjectClient::create($request->all());
        return response(['data' => $client, 'message' => 'Project Client added successfully']);
    }
    Public function deleteProjectClient($id){
        $projectClient = ProjectClient::find($id);
        if($projectClient){
            $projectClient->delete();
            return response(['message' => 'Project Client deleted successfully']);
        } else {
            return response(['message' => 'Project Client not found']);
        }
    }
    Public function updateProjectClient(Request $request, $id){
       $client = ProjectClient::find($id);
        if ($client) {
            $client->update($request->all());
            return response(['data' => $client, 'message' => 'Project Client updated successfully']);
        }

    }
  

}
