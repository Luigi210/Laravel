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

Route::get('/', [App\Http\Controllers\CompactController::class, 'index']);

Route::get('/news', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/projects', [App\Http\Controllers\ProjectsPageController::class, 'index']);
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);


Route::middleware(['role:admin'])->prefix('adminn')->group(function(){
    
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.index');
    Route::resource('news', \Admin\NewsController::class);
    Route::resource('projects', \Admin\ProjectsController::class);
    Route::resource('custom_users', \Admin\CustomUserController::class);
    Route::resource('projectspage', \Admin\ProjectsPageController::class);
    Route::resource('newspage', \Admin\NewsPageController::class);
    Route::resource('found', \Admin\FoundController::class);
    Route::resource('icon', \Admin\IconController::class);
    Route::resource('about_found', \Admin\AboutFoundController::class);
    Route::resource('about_found_content', \Admin\AboutFoundContentController::class);
    Route::resource('report', \Admin\ReportsController::class);
    Route::resource('member', \Admin\MemberController::class);
    Route::resource('employee', \Admin\EmployeeController::class);
    Route::resource('abouticon', \Admin\SocialIconController::class);
    Route::resource('header', \Admin\HeaderController::class);
    Route::resource('headerLinks', \Admin\HeaderLinksController::class);
    Route::resource('languageLinks', \Admin\LanguageLinksController::class);
    Route::resource('contactLinks', \Admin\ContactLinksController::class);
    Route::resource('footer', \Admin\FooterController::class);
    Route::resource('footer_about_partners', \Admin\FooterAboutPartnersController::class);
    Route::resource('footer_about_partners_details', \Admin\FooterAboutPartnersDetailsController::class);
    Route::resource('footer_contact', \Admin\FooterContactController::class);
    Route::resource('footer_contact_details', \Admin\FooterContactDetailsController::class);
    Route::resource('footer_contact_us', \Admin\FooterContactUsController::class);
    Route::resource('footer_social_icon', \Admin\FooterSocialIconController::class);

    
});

Route::post('/', [App\Http\Controllers\CustomUserController::class, 'submit']);
Route::post('/projects', [App\Http\Controllers\CustomUserController::class, 'submit']);
Route::post('/news', [App\Http\Controllers\CustomUserController::class, 'submit']);
Route::post('/about', [App\Http\Controllers\CustomUserController::class, 'submit']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

