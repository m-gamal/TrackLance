<?php
/**
 * ClientsControllers
 * @author        Mohamed Gamal
 */

namespace App\Http\Controllers\Freelancer;

use App\Repositories\Clients\ClientInterface;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

/**
 * Class ClientsController
 * @package App\Http\Controllers\Freelancer
 */
class ClientsController extends Controller
{
    protected $clients;

    /**
     * ClientsController constructor.
     * @param $clients
     */
    public function __construct(ClientInterface $clients)
    {
        $this->clients = $clients;
    }

    /**
     * Show all clients
     * @return \Illuminate\View\View
     */
    public function listAll()
    {
        $clients = $this->clients->all();
        return View('freelancer.clients.all', compact('clients'));
    }

    /**
     * Show single client data
     * @param $id
     * @return string
     */
    public function single($id)
    {
        return '<h1>Single</h1>';
    }

    /**
     * Show add client form
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return View('freelancer.clients.add');
    }

    /**
     * Store client data
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validateClientData($request, null);

        try {
            $this->clients->store($request);
            return redirect()->back()->withInput()->with('message','Client has been added successfully !');
        } catch (ParseException $ex) {
            echo 'Failed to create new client , with error message: ' . $ex->getMessage();
        }
    }

    /**
     * Show edit client form
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $client =  User::findOrFail($id);
        return view('freelancer.clients.edit', compact('client'));
    }

    /**
     * Update client data
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validateClientData($request, $id);

        try {
            $this->clients->update($request, $id);
            return redirect()->back()->withInput()->with('message','Client has been updated successfully !');
        } catch (ParseException $ex) {
            echo 'Failed to update this client , with error message: ' . $ex->getMessage();
        }
    }


    /**
     * Delete client data
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        try {
            $this->clients->delete($id);
            return redirect()->back()->withInput()->with('message','Client has been deleted successfully !');
        } catch (ParseException $ex) {
            echo 'Failed to create delete this client , with error message: ' . $ex->getMessage();
        }
    }


    /**
     * Validate Client Data before persisting it
     * @param $request
     * @param null $id
     */
    public function validateClientData($request, $id = null)
    {
        $rules  =   [
            'name'      =>  'required',
            'email'     =>  'required|email|unique:users,email,'.$id,
            'mobile'    =>  'required|numeric|unique:users,mobile,'.$id,
            'website'   =>  'url',
            'image'     =>  'mimes:jpeg'
        ];
        $this->validate($request, $rules);
    }
}
