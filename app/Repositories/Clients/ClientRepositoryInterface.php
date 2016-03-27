<?php namespace App\Repositories\Clients;
use Illuminate\Http\Request;

Interface ClientRepositoryInterface{
    
    public function all();
    public function store(Request $request);
    public function update(Request $request, $id);
    public function delete($id);
    
}