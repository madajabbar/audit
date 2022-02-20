<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'prefix' => 'admin',
    'as' => 'backend.',
    // 'middleware' => 'auth',
 ], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('timeline', App\Http\Controllers\Backend\TimelineController::class);
    Route::resource('assign-assessment',App\Http\Controllers\Admin\RiskAssessment\AssignAssessmentController::class);
    Route::resource('assessment',App\Http\Controllers\Admin\RiskAssessment\AssessmentController::class);
    Route::resource('review-pka',App\Http\Controllers\Admin\RiskAssessment\ReviewPKAController::class);
    Route::resource('rat',App\Http\Controllers\Admin\ManajemenPerencanaan\RATController::class);
    Route::resource('rap',App\Http\Controllers\Admin\ManajemenPerencanaan\RAPController::class);
    Route::resource('perencanaan-audit',App\Http\Controllers\Admin\ManajemenAudit\PerencanaanAuditController::class);

    //POST ROUTE
    Route::group([
       'prefix' => 'post',
       'as' => 'post.',
    ], function () {
       Route::resource('content', App\Http\Controllers\Backend\Post\ContentController::class);
       Route::get('content/getimage/{id}', [App\Http\Controllers\Backend\Post\ContentController::class, 'getImage']);
       Route::post('content/addimage', [App\Http\Controllers\Backend\Post\ContentController::class, 'addImage'])->name('addimage');
       Route::delete('content/deleteimage/{id}', [App\Http\Controllers\Backend\Post\ContentController::class, 'deleteImage'])->name('deleteimage');
       Route::post('content/edit/editimage', [App\Http\Controllers\Backend\Post\ContentController::class, 'editImage'])->name('editimage');
       Route::resource('category', App\Http\Controllers\Backend\Post\CategoryController::class);
       Route::resource('tag', App\Http\Controllers\Backend\Post\TagController::class);
       Route::resource('buster', App\Http\Controllers\Backend\Post\BusterController::class);
       Route::resource('gallery', App\Http\Controllers\Backend\Post\GalleryController::class);
    });

    Route::resource('slider', App\Http\Controllers\Backend\SliderController::class);
    //about
    Route::group([
       'prefix' => 'about',
       'as' => 'about.',
    ], function () {
       Route::resource('structure', App\Http\Controllers\Backend\About\StructureController::class);
       Route::resource('contact', App\Http\Controllers\Backend\About\ContactController::class);
       Route::resource('member', App\Http\Controllers\Backend\About\MemberController::class);
    });
 });

