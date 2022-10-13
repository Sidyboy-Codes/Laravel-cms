<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Type;
use App\Models\User;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\About;
use App\Models\Connect;
use App\Models\Education;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/types', function(){

    $types = Type::orderBy('title')->get();
    return $types;

});

Route::get('/projects', function(){

    $projects = Project::orderBy('created_at')->get();

    foreach($projects as $key => $project)
    {
        $projects[$key]['user'] = User::where('id', $project['user_id'])->first();
        $projects[$key]['type'] = Type::where('id', $project['type_id'])->first();

        if($project['image'])
        {
            $projects[$key]['image'] = env('APP_URL').'storage/'.$project['image'];
        }
    }

    return $projects;

});

Route::get('/projects/profile/{project?}', function(Project $project){

    $project['user'] = User::where('id', $project['user_id'])->first();
    $project['type'] = Type::where('id', $project['type_id'])->first();

    if($project['image'])
    {
        $project['image'] = env('APP_URL').'storage/'.$project['image'];
    }

    return $project;

});


// ********** route for skills api ******************
Route::get('/skills', function(){

    $skills = Skill::orderBy('skill_level')->get();
    return $skills;

});

// experience 
Route::get('/experiences', function(){
    $experiences = Experience::orderBy('company_name')->get();
    return $experiences;
});

// about
Route::get('/abouts', function(){
    $abouts = About::orderBy('id')->get();
    return $abouts;
});

// 
Route::get('/educations', function(){

    $educations = Education::orderBy('institutename')->get();
    return $educations;

});


Route::get('/connects', function(){

    $connects = Connect::orderBy('title')->get();
    return $connects;

});
