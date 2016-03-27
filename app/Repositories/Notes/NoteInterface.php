<?php namespace App\Repositories\Notes;
use Illuminate\Http\Request;

Interface NoteInterface{
    
    public function all();
    public function store(Request $request, $projectId);
    public function update(Request $request, $id);
    public function delete($id);

}