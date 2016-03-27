<?php
/**
 * ProjectsControllers
 * @author        Mohamed Gamal
 */

namespace App\Http\Controllers\Freelancer;

use App\Project;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class ProjectsController
 * @package App\Http\Controllers\Freelancer
 */
class ProjectsController extends Controller
{
    /**
     * Show all projects
     * @return \Illuminate\View\View
     */
    public function listAll()
    {
        $projects = Project::all();
        return View('freelancer.projects.all', compact('projects'));
    }

    /**
     * Show single project data
     * @param $id
     * @return string
     */
    public function single($id)
    {
        $project = Project::findOrFail($id);
        return view('freelancer.projects.single', compact('project'));
    }

    /**
     * Show add project form
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $clients    =   $this->getClientsForProject();
        return view('freelancer.projects.add', compact('clients'));
    }

    /**
     * Store project data
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validateProjectData($request, null);

        try {
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
            return redirect()->back()->withInput()->with('message','Project has been added successfully !');
        } catch (ParseException $ex) {
            echo 'Failed to create new project , with error message: ' . $ex->getMessage();
        }
    }

    /**
     * Show edit project form
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $clients    =   $this->getClientsForProject();
        $project    =   Project::findOrFail($id);
        return view('freelancer.projects.edit', compact('project', 'clients'));
    }

    /**
     * Update project data
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validateProjectData($request);

        try {
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
            return redirect()->back()->withInput()->with('message','Project has been updated successfully !');
        } catch (ParseException $ex) {
            echo 'Failed to update this project , with error message: ' . $ex->getMessage();
        }
    }


    /**
     * Delete project data
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        try {
            Project::destroy($id);
            return redirect()->back()->withInput()->with('message','Project has been deleted successfully !');
        } catch (ParseException $ex) {
            echo 'Failed to create delete this project , with error message: ' . $ex->getMessage();
        }
    }

    

    /**
     * Validate project data before persisting it
     * @param $request
     */
    public function validateProjectData($request)
    {
        $rules  =   [
            'name'      =>  'required',
            'client'      =>  'required',
            'type'      =>  'required',
            'description'      =>  '',
            'start'      =>  'required',
            'end'      =>  'required',
            'cost'      =>  'required|numeric',
            'milestone'      =>  'required|numeric'

        ];
        $this->validate($request, $rules);
    }

    /**
     * Get clients for project
     * @return mixed
     */
    public function getClientsForProject()
    {
        return User::getClients();
    }
    
    
}
