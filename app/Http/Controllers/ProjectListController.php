<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProjectList;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ProjectListController extends Controller
{
    public function getaAllProjectList(){
        $projectlist = ProjectList::all();
        return response($projectlist);
    }
    public function getOneProjectList($id){
        $projectlist = ProjectList::find($id);
        if($projectlist){
            return response($projectlist);
        }
        else{
            return response(['message' => 'Project is not found']);
        }
    }
    public function addProjectList(Request $request)
    {
        $projectlist = $request->all();
        $projectlist = ProjectList::create($projectlist); // fixed method name
        return response()->json($projectlist);
    }
        public function updateProjectList(Request $request, $id)
        {
            $projectlist = ProjectList::find($id);

            if ($projectlist) {
                $projectlist->update($request->all()); // ✅ Use request data here
                return response([
                    'data' => $projectlist,
                    'message' => 'Project updated successfully'
                ]);
            } else {
                return response([
                    'message' => 'Update failed: Project not found'
                ], 404);
            }
        }
       public function deleteProjectList(Request $request, $id)
        {
            $projectlist = ProjectList::find($id);

            if ($projectlist) {
                $projectlist->delete();
                return response([
                    'message' => 'Project has been deleted successfully.'
                ]);
            } else {
                return response([
                    'message' => 'Delete failed: Project not found.'
                ], 404);
            }
        }

  
}