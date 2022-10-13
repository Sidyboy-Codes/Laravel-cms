<?php

use App\Models\Project;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\AboutsController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ConnectsController;
use App\Http\Controllers\EducationsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes    
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'projects' => Project::all()
    ]);
});

Route::get('/project/{project:slug}', function (Project $project) {
    return view('project', [
        'project' => $project
    ]);
})->where('project', '[A-z\-]+');

Route::get('/console/logout', [ConsoleController::class, 'logout'])->middleware('auth');
Route::get('/console/login', [ConsoleController::class, 'loginForm'])->middleware('guest');
Route::post('/console/login', [ConsoleController::class, 'login'])->middleware('guest');
Route::get('/console/dashboard', [ConsoleController::class, 'dashboard'])->middleware('auth');

Route::get('/console/projects/list', [ProjectsController::class, 'list'])->middleware('auth');
Route::get('/console/projects/add', [ProjectsController::class, 'addForm'])->middleware('auth');
Route::post('/console/projects/add', [ProjectsController::class, 'add'])->middleware('auth');
Route::get('/console/projects/edit/{project:id}', [ProjectsController::class, 'editForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/edit/{project:id}', [ProjectsController::class, 'edit'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/delete/{project:id}', [ProjectsController::class, 'delete'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/image/{project:id}', [ProjectsController::class, 'imageForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/image/{project:id}', [ProjectsController::class, 'image'])->where('project', '[0-9]+')->middleware('auth');

Route::get('/console/users/list', [UsersController::class, 'list'])->middleware('auth');
Route::get('/console/users/add', [UsersController::class, 'addForm'])->middleware('auth');
Route::post('/console/users/add', [UsersController::class, 'add'])->middleware('auth');
Route::get('/console/users/edit/{user:id}', [UsersController::class, 'editForm'])->where('user', '[0-9]+')->middleware('auth');
Route::post('/console/users/edit/{user:id}', [UsersController::class, 'edit'])->where('user', '[0-9]+')->middleware('auth');
Route::get('/console/users/delete/{user:id}', [UsersController::class, 'delete'])->where('user', '[0-9]+')->middleware('auth');

Route::get('/console/types/list', [TypesController::class, 'list'])->middleware('auth');
Route::get('/console/types/add', [TypesController::class, 'addForm'])->middleware('auth');
Route::post('/console/types/add', [TypesController::class, 'add'])->middleware('auth');
Route::get('/console/types/edit/{type:id}', [TypesController::class, 'editForm'])->where('type', '[0-9]+')->middleware('auth');
Route::post('/console/types/edit/{type:id}', [TypesController::class, 'edit'])->where('type', '[0-9]+')->middleware('auth');
Route::get('/console/types/delete/{type:id}', [TypesController::class, 'delete'])->where('type', '[0-9]+')->middleware('auth');

// ************************* Skills routes ***************************************
// listing all skills
Route::get('/console/skills/list', [SkillsController::class, 'list'])->middleware('auth');
// adding a new skill (form)
Route::get('/console/skills/add', [SkillsController::class, 'addForm'])->middleware('auth');
Route::post('/console/skills/add', [SkillsController::class, 'add'])->middleware('auth');
// editing a skill
Route::get('/console/skills/edit/{skill:id}', [SkillsController::class, 'editForm'])->middleware('auth');
Route::post('/console/skills/edit/{skill:id}', [SkillsController::class, 'edit'])->middleware('auth');
// deleting a skill
Route::get('/console/skills/delete/{skill:id}', [SkillsController::class, 'delete'])->middleware('auth');
// handling a skill image
Route::get('/console/skills/image/{skill:id}', [SkillsController::class, 'imageForm'])->middleware('auth');
Route::post('/console/skills/image/{skill:id}', [SkillsController::class, 'image'])->middleware('auth');

// ****************** Messages routes *****************************************

// listing all messages
Route::get('/console/messages/list', [MessagesController::class, 'list'])->middleware('auth');
// deleting a message
Route::get('/console/messages/delete/{message:id}', [MessagesController::class, 'delete'])->middleware('auth');

// ********************************* Experience
Route::get('/console/experiences/list', [ExperiencesController::class, 'list'])->middleware('auth');
Route::get('/console/experiences/add', [ExperiencesController::class, 'addForm'])->middleware('auth');
Route::post('/console/experiences/add', [ExperiencesController::class, 'add'])->middleware('auth');
Route::get('/console/experiences/edit/{experience:id}', [ExperiencesController::class, 'editForm'])->middleware('auth');
Route::post('/console/experiences/edit/{experience:id}', [ExperiencesController::class, 'edit'])->middleware('auth');
Route::get('/console/experiences/delete/{experience:id}', [ExperiencesController::class, 'delete'])->middleware('auth');
Route::get('/console/experiences/image/{experience:id}', [ExperiencesController::class, 'imageForm'])->middleware('auth');
Route::post('/console/experiences/image/{experience:id}', [ExperiencesController::class, 'image'])->middleware('auth');

// ************************************ About
Route::get('/console/abouts/list', [AboutsController::class, 'list'])->middleware('auth');
Route::get('/console/abouts/add', [AboutsController::class, 'addForm'])->middleware('auth');
Route::post('/console/abouts/add', [AboutsController::class, 'add'])->middleware('auth');
Route::get('/console/abouts/edit/{about:id}', [AboutsController::class, 'editForm'])->middleware('auth');
Route::post('/console/abouts/edit/{about:id}', [AboutsController::class, 'edit'])->middleware('auth');
Route::get('/console/abouts/delete/{about:id}', [AboutsController::class, 'delete'])->middleware('auth');
Route::get('/console/abouts/image/{about:id}', [AboutsController::class, 'imageForm'])->middleware('auth');
Route::post('/console/abouts/image/{about:id}', [AboutsController::class, 'image'])->middleware('auth');

// ************************* Education routes ***************************************
// listing all educations
Route::get('/console/educations/list', [EducationsController::class, 'list'])->middleware('auth');
// adding a new education (form)
Route::get('/console/educations/add', [EducationsController::class, 'addForm'])->middleware('auth');
Route::post('/console/educations/add', [EducationsController::class, 'add'])->middleware('auth');
// editing a education
Route::get('/console/educations/edit/{education:id}', [EducationsController::class, 'editForm'])->middleware('auth');
Route::post('/console/educations/edit/{education:id}', [EducationsController::class, 'edit'])->middleware('auth');
// deleting a education
Route::get('/console/educations/delete/{education:id}', [EducationsController::class, 'delete'])->middleware('auth');


// ************************** connect routes ********************************
// listing all connects
Route::get('/console/connects/list', [ConnectsController::class, 'list'])->middleware('auth');
// adding a new connect (form)
Route::get('/console/connects/add', [ConnectsController::class, 'addForm'])->middleware('auth');
Route::post('/console/connects/add', [ConnectsController::class, 'add'])->middleware('auth');
// editing a connect
Route::get('/console/connects/edit/{connect:id}', [ConnectsController::class, 'editForm'])->middleware('auth');
Route::post('/console/connects/edit/{connect:id}', [ConnectsController::class, 'edit'])->middleware('auth');
// deleting a connect
Route::get('/console/connects/delete/{connect:id}', [ConnectsController::class, 'delete'])->middleware('auth');
// handling a connect image
Route::get('/console/connects/image/{connect:id}', [ConnectsController::class, 'imageForm'])->middleware('auth');
Route::post('/console/connects/image/{connect:id}', [ConnectsController::class, 'image'])->middleware('auth');