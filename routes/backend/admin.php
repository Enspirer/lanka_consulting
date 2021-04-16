<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\AwardsController;
use App\Http\Controllers\Backend\FileManagerController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\BannerController;
// All route names are prefixed with 'admin.'.
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('awards', [AwardsController::class, 'index'])->name('awards.index');
Route::get('awards/edit/{id}', [AwardsController::class, 'edit'])->name('awards.edit');
Route::get('awards/create', [AwardsController::class, 'create'])->name('awards.create');
Route::post('awards/store', [AwardsController::class, 'store'])->name('awards.store');
Route::get('awards/get_tableDetails', [AwardsController::class, 'getDetails'])->name('awards.getDetails');
Route::get('awards/delete/{id}', [AwardsController::class, 'delete'])->name('awards.delete');
Route::get('awards/edit/{id}', [AwardsController::class, 'edit'])->name('awards.edit');
Route::post('awards/update', [AwardsController::class, 'update'])->name('awards.update');


Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
Route::get('project/create', [ProjectController::class, 'create'])->name('project.create');
Route::get('project/get_tableDetails', [ProjectController::class, 'getDetails'])->name('project.getDetails');
Route::get('project/delete/{id}', [ProjectController::class, 'delete'])->name('project.delete');
Route::post('project/store', [ProjectController::class, 'store'])->name('project.store');
Route::post('project/update', [ProjectController::class, 'update'])->name('project.update');

Route::get('file_manager/index', [FileManagerController::class, 'index'])->name('file_manager.index');
Route::get('file_manager/get-details', [FileManagerController::class, 'getData'])->name('file_manager.json');
Route::get('file_manager/get-details-dialog/{name}', [FileManagerController::class, 'getDialogData'])->name('get_dialog_data.json');
Route::get('file_manager/create', [FileManagerController::class, 'create'])->name('file_manager.create');
Route::post('file_manager/store_file', [FileManagerController::class,'store'])->name('file_manager.store');
Route::get('file_manager/delete/{id}', [FileManagerController::class,'delete'])->name('file_manager.delete');

Route::get('gallery/index', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('gallery/get-details', [GalleryController::class, 'getData'])->name('gallery.json');
Route::get('gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
Route::post('gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
Route::get('gallery/delete/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');

Route::get('news/index', [NewsController::class, 'index'])->name('news.index');
Route::get('news/get-details', [NewsController::class, 'getData'])->name('news.json');
Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('news/store', [NewsController::class, 'store'])->name('news.store');
Route::get('news/delete/{id}', [NewsController::class, 'delete'])->name('news.delete');

Route::get('banner/index', [BannerController::class, 'index'])->name('banners.index');
Route::get('banner/get-details', [BannerController::class, 'getData'])->name('banners.json');
Route::get('banner/create', [BannerController::class, 'create'])->name('banners.create');
Route::get('banner/edit', [BannerController::class, 'edit'])->name('banners.edit');
Route::post('banner/store', [BannerController::class, 'store'])->name('banners.store');
Route::get('banner/delete/{id}', [BannerController::class, 'delete'])->name('banners.delete');