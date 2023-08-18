<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\API\DonorsController;
use App\Http\Controllers\API\PositionController;
use App\Http\Controllers\API\ProjectsController;
use App\Http\Controllers\API\EmployeesController;
use App\Http\Controllers\Api\AnnocementController;
use App\Http\Controllers\Api\DepartmentsController;
use App\Http\Controllers\Api\PermissionsController;
use App\Http\Controllers\API\EmployeeTasksController;
use App\Http\Controllers\API\EmployeeSkillsController;
use App\Http\Controllers\API\EmployeeAccountController;
use App\Http\Controllers\API\EmployeeCommentsController;
use App\Http\Controllers\API\EmployeeRequestsController;
use App\Http\Controllers\API\EmployeeDocumentsController;
use App\Http\Controllers\API\EmployeeLanguagesController;
use App\Http\Controllers\API\EmployeeEvaluationController;
use App\Http\Controllers\API\EmployeeExperiencesController;
use App\Http\Controllers\API\EmployeeTimeRecoredController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
  'prefix' => 'auth'
], function () {
  Route::post('login', [AuthController::class, 'login']);
  Route::post('register', [AuthController::class, 'register']);

  Route::group([
    'middleware' => 'auth:sanctum'
  ], function () {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('user', [AuthController::class, 'user']);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionsController::class);
    Route::resource('departments',DepartmentsController::class);
    Route::resource('annocements',AnnocementController::class);
    Route::resource('donors',DonorsController::class);
    Route::resource('account',EmployeeAccountController::class);
    Route::resource('employees',EmployeesController::class);
    Route::resource('positions',PositionController::class);
    Route::resource('projects',ProjectsController::class);
    Route::resource('users',UserController::class);
    Route::resource('skills',EmployeeSkillsController::class);
    Route::resource('tasks',EmployeeTasksController::class);
    Route::resource('comments',EmployeeCommentsController::class);
    Route::resource('time',EmployeeTimeRecoredController::class);
    Route::resource('documents',EmployeeDocumentsController::class);
    Route::resource('evaluation',EmployeeEvaluationController::class);
    Route::resource('requests',EmployeeRequestsController::class);
    Route::resource('experiences',EmployeeExperiencesController::class);
    route::resource('languages',EmployeeLanguagesController::class);





  });
});