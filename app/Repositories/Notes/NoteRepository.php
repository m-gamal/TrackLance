<?php namespace App\Repositories\Notes;

use App\ProjectNotes;
use App\NoteFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoteRepository implements NoteInterface{

    /**
     * @return mixed
     */
    public function all()
    {
        
    }


    /**
     * @param Request $request
     * @param $projectId
     */
    public function store(Request $request, $projectId)
    {
        // Save Project Note
        $note = ProjectNotes::create([
            'title'          =>  $request->title,
            'project_id'          =>  $projectId,
            'description'   =>  $request->description,
            'status'   =>  1
        ]);

        // Attach Note File
        $path = 'projects/'.$projectId.'/notes/'.$note->id.'.'.$request->file('file')->getClientOriginalExtension();
        Storage::disk('local')->put(
            $path,
            file_get_contents($request->file('file')->getRealPath()));

        // Persist Note File
        NoteFiles::create(
            [
                'note_id' => $note->id,
                'path'  =>  $path
            ]
        );
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        
    }

}