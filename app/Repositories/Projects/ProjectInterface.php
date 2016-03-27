<?php namespace App\Repositories\Projects;
use Illuminate\Http\Request;

Interface ProjectInterface{
    
    public function all();
    public function store(Request $request);
    public function update(Request $request, $id);
    public function delete($id);

}