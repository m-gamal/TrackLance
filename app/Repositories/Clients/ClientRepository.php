<?php namespace App\Repositories\Clients;

use App\User;
use Illuminate\Http\Request;

class ClientRepository implements ClientInterface{
    
    /**
     * @return mixed
     */
    public function all()
    {
        $clients = User::getClients();
        return $clients;
    }
    
    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        User::create([
            'name'  => $request->name,
            'email' =>  $request->email,
            'password' =>  \Hash::make('password'),
            'mobile' => $request->mobile,
            'website' => $request->website,
            'role'  =>  0
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function update(Request $request, $id)
    {
        User::where('id', $id)->update($request->only(['name', 'email', 'mobile', 'website']));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        User::destroy($id);
    }

}