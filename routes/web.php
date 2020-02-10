<?php

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



Auth::routes();
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Auth::routes(['register' => false]);
//Route::get('/register', 'Auth\RegisterController@showRegisterForm')->name('register');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function() {
    Route::get('/dashboard', 'admin\DashboardController@index')->name('dashboard');
    //laravel file manager routes
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    // list all lfm routes here...
    //Laravel File Manager
    Route::get('media','admin\MediaController@index')->name('media');
    //pages
    Route::get('/page/create','admin\PagesController@create')->name('page.create');
    Route::post('/page/store','admin\PagesController@store')->name('page.store');
    Route::get('/pages','admin\PagesController@index')->name('pages');
    Route::get('/page/edit/{id}','admin\PagesController@edit')->name('page.edit');
    Route::post('/page/update/{id}','admin\PagesController@update')->name('page.update');
    Route::get('/page/delete/{id}','admin\PagesController@destroy')->name('page.delete');
    //posts
    Route::get('/post/create','admin\PostsController@create')->name('post.create');
    Route::post('/post/store','admin\PostsController@store')->name('post.store');
    Route::get('/posts','admin\PostsController@index')->name('posts');
    Route::get('/post/edit/{id}','admin\PostsController@edit')->name('post.edit');
    Route::post('/post/update/{id}','admin\PostsController@update')->name('post.update');
    Route::get('/post/delete/{id}','admin\PostsController@destroy')->name('post.delete');
    //categories
    Route::get('/category/create/{page_id}','admin\CategoriesController@create')->name('category.create');
    Route::post('/category/store/{page_id}','admin\CategoriesController@store')->name('category.store');
    Route::get('/categories','admin\CategoriesController@index')->name('categories');
    Route::get('/category/edit/{id}','admin\CategoriesController@edit')->name('category.edit');
    Route::post('/category/update/{id}','admin\CategoriesController@update')->name('category.update');
    Route::get('/category/delete/{id}','admin\CategoriesController@destroy')->name('category.delete');
    //tags
    Route::get('/tag/create','admin\TagsController@create')->name('tag.create');
    Route::post('/tag/store','admin\TagsController@store')->name('tag.store');
    Route::get('/tags','admin\TagsController@index')->name('tags');
    Route::get('/tag/edit/{id}','admin\TagsController@edit')->name('tag.edit');
    Route::post('/tag/update/{id}','admin\TagsController@update')->name('tag.update');
    Route::get('/tag/delete/{id}','admin\TagsController@destroy')->name('tag.delete');
    //Carousel
    Route::get('/carousels','admin\CarouselsController@index')->name('carousels');
    Route::get('/carousel/create','admin\CarouselsController@create')->name('carousel.create');
    Route::post('/carousel/store','admin\CarouselsController@store')->name('carousel.store');
    Route::get('/carousel/edit/{id}','admin\CarouselsController@edit')->name('carousel.edit');
    Route::post('/carousel/update/{id}','admin\CarouselsController@update')->name('carousel.update');
    Route::get('/carousel/delete/{id}','admin\CarouselsController@destroy')->name('carousel.delete');
    //Facilities
    Route::get('/facilities','admin\FacilitiesController@index')->name('facilities');
    Route::get('/facility/create','admin\FacilitiesController@create')->name('facility.create');
    Route::post('/facility/store','admin\FacilitiesController@store')->name('facility.store');
    Route::get('/facility/edit/{id}','admin\FacilitiesController@edit')->name('facility.edit');
    Route::post('/facility/update/{id}','admin\FacilitiesController@update')->name('facility.update');
    Route::get('/facility/delete/{id}','admin\FacilitiesController@destroy')->name('facility.delete');
    //Status
    Route::get('/status','admin\StatusController@index')->name('status');
    Route::get('/status/create','admin\StatusController@create')->name('status.create');
    Route::post('/status/store','admin\StatusController@store')->name('status.store');
    Route::get('/status/edit/{id}','admin\StatusController@edit')->name('status.edit');
    Route::post('/status/update/{id}','admin\StatusController@update')->name('status.update');
    Route::get('/status/delete/{id}','admin\StatusController@destroy')->name('status.delete');
    //Testimonials
    Route::get('/testimonials','admin\TestimonialsController@index')->name('testimonials');
    Route::get('/testimonial/create','admin\TestimonialsController@create')->name('testimonial.create');
    Route::post('/testimonial/store','admin\TestimonialsController@store')->name('testimonial.store');
    Route::get('/testimonial/edit/{id}','admin\TestimonialsController@edit')->name('testimonial.edit');
    Route::post('/testimonial/update/{id}','admin\TestimonialsController@update')->name('testimonial.update');
    Route::get('/testimonial/delete/{id}','admin\TestimonialsController@destroy')->name('testimonial.delete');
    //users
    Route::get('/user/create','admin\UsersController@create')->name('user.create');
    Route::post('/user/store','admin\UsersController@store')->name('user.store');
    Route::get('/users','admin\UsersController@index')->name('users');
    Route::get('/user/edit/{id}','admin\UsersController@edit')->name('user.edit');
    Route::post('/user/update/{id}','admin\UsersController@update')->name('user.update');
    Route::get('/user/delete/{id}','admin\UsersController@destroy')->name('user.delete');
    Route::get('/user/admin/{id}','admin\UsersController@admin')->name('user.admin')->middleware('admin');
    Route::get('/user/not-admin/{id}','admin\UsersController@not_admin')->name('user.not.admin');
    //User Profile
    Route::get('/user/profile','admin\ProfilesController@index')->name('user.profile');
    Route::post('/user/profile/update/{id}','admin\ProfilesController@update')->name('user.profile.update');
    //Site Settings
    Route::get('settings','admin\SettingsController@index')->name('settings')->middleware('admin');
    Route::post('setting/update/{id}','admin\SettingsController@update')->name('setting.update')->middleware('admin');




});
//Frontend
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Frontend\FrontendController@index')->name('index');
