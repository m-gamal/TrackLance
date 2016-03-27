<?php namespace App\Repositories\Projects;

use App\Project;
use Illuminate\Http\Request;

class ProjectRepository implements ProjectInterface{
    
    /**
     * @return mixed
     */
    public function all()
    {
        $projects = Project::all();
        return $projects;
    }


    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        Project::create([
            'name'          =>  $request->name,
            'client_id'     =>  $request->client,
            'type'          =>  $request->type,
            'description'   =>  $request->description,
            'start'         =>  $request->start,
            'end'           =>  $request->end,
            'cost'          =>  $request->cost,
            'milestone'     =>  $request->milestone,
            'status'        =>  $request->status

        ]);
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function update(Request $request, $id)
    {
        Project::where('id', $id)->update([
            'name'          =>  $request->name,
            'client_id'     =>  $request->client,
            'type'          =>  $request->type,
            'description'   =>  $request->description,
            'start'         =>  $request->start,
            'end'           =>  $request->end,
            'cost'          =>  $request->cost,
            'milestone'     =>  $request->milestone,
            'status'        =>  $request->status

        ]);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        Project::destroy($id);
    }

}