<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');
Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{id}/update', [ProjectController::class, 'update'])->name('projects.update');


