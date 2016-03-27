<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('login', function () {return view('auth.login');});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::auth();
	Route::group(['middleware' => ['auth'], 'namespace' => 'Freelancer'], function () {
		
	// Client 
	Route::get('clients/all',
		['as' => 'clients', 'uses' => 'ClientsController@listAll']);

	Route::get('client/{id}',
		['uses' => 'ClientsController@single'])->where('id', '[0-9]+');;

	Route::get('client/add',
		['as' => 'add_client', 'uses' => 'ClientsController@create']);

	Route::post('client/add',
		['as' => 'add_client', 'uses' => 'ClientsController@store']);

	Route::get('client/edit/{id}',
		['as' => 'edit_client', 'uses' => 'ClientsController@edit']);

	Route::post('client/edit/{id}',
		['as' => 'edit_client', 'uses' => 'ClientsController@update']);

	Route::post('client/delete/{id}',
		['as' => 'delete_client', 'uses' => 'ClientsController@delete']);

	// Projects
	Route::get('projects/all',
		['as' => 'projects', 'uses' => 'ProjectsController@listAll']);

	Route::get('project/{id}',
		['uses' => 'ProjectsController@single'])->where('id', '[0-9]+');;

	Route::get('project/add',
		['as' => 'add_project', 'uses' => 'ProjectsController@create']);

	Route::post('project/add',
		['as' => 'add_project', 'uses' => 'ProjectsController@store']);

	Route::get('project/edit/{id}',
		['as' => 'edit_project', 'uses' => 'ProjectsController@edit']);

	Route::post('project/edit/{id}',
		['as' => 'edit_project', 'uses' => 'ProjectsController@update']);

	Route::post('project/delete/{id}',
		['as' => 'delete_project', 'uses' => 'ProjectsController@delete']);

	// Project Notes
	Route::get('project/{project_id}/notes/all',
		['as' => 'project_notes', 'uses' => 'NotesController@listAll']);

	Route::get('project/{project_id}/note/{note_id}',
		['uses' => 'NotesController@single'])->where('project_id', '[0-9]+')
											 ->where('note_id', '[0-9]+');

	Route::get('project/{project_id}/note/add',
		['as' => 'add_project_note', 'uses' => 'NotesController@create']);

	Route::post('project/{project_id}/note/add',
		['as' => 'add_project_note', 'uses' => 'NotesController@store']);

	Route::get('project/{project_id}/note/edit/{note_id}',
		['as' => 'edit_project_note', 'uses' => 'NotesController@edit']);

	Route::post('project/{project_id}/note/edit/{note_id}',
		['as' => 'edit_project_note', 'uses' => 'NotesController@update']);

	Route::post('project/{project_id}/note/delete/{note_id}',
		['as' => 'delete_project_note', 'uses' => 'NotesController@delete']);
	});
});