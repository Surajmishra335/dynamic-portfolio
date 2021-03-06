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

Route::get('/admin', function () {
    return view('welcome');
});

Auth::routes();

//home page
//for admin
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
//for frontend
Route::get('/', 'HomeController@about')->name('about');


//route for profile
Route::get('/admin/profile/create', 'ProfileController@create')->name('profile')->middleware('auth');
Route::post('/admin/profile', 'ProfileController@store')->name('profile.store')->middleware('auth');

//route for social links
Route::get('/admin/social/create', 'SocialController@create')->name('social')->middleware('auth');
Route::post('/admin/social', 'SocialController@store')->name('social.store')->middleware('auth');

//route for skills Category
Route::get('/admin/skills/category/create', 'CategoryController@create')->name('skills.category')->middleware('auth');
Route::post('/admin/skills/category', 'CategoryController@store')->name('skills.category.store')->middleware('auth');

//route for skills
Route::get('/admin/skills/create', 'SkillsController@create')->name('skills')->middleware('auth');
Route::post('/admin/skills/store', 'SkillsController@store')->name('skills.store')->middleware('auth');

//route for projects
//for admin
Route::get('/admin/projects/create', 'ProjectController@create')->name('project')->middleware('auth');
Route::post('/admin/projects/store', 'ProjectController@store')->name('project.store')->middleware('auth');
//for user frontend
Route::get('/projects', 'ProjectController@index')->name('front.project');

//route for work experience
Route::get('/admin/experience/create', 'ExperienceController@create')->name('experience')->middleware('auth');
Route::post('/admin/experience/store', 'ExperienceController@store')->name('experience.store')->middleware('auth');

//route for reusme
Route::get('/resume', 'ResumeController@myresume')->name('resume');