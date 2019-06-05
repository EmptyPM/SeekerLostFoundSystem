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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/index',function(){
    return view('admin.index');
});


// Route::get('/admin/searchpage',function(){
//     return view('admin.searchpage');
// });
// Route::get('/admin/user/user_profile',function(){
//     return view('admin.user.user_profile');
// });
// Route::get('/admin/user/users_edit',function(){
//     return view('admin.user.users_edit');
// });
// Route::get('/admin/user/users',function(){
//     return view('admin.user.users');
// });
// Route::get('/admin/storage/storagelocations',function(){
//     return view('admin.storage.storagelocations');
// });
// Route::get('/admin/storage/storagelocation_edit',function(){
//     return view('admin.storage.storagelocation_edit');
// });
// Route::get('/admin/manage/manage',function(){
//     return view('admin.manage.manage');
// });
// Route::get('/admin/locations/locations',function(){
//     return view('admin.locations.locations');
// });
// Route::get('/admin/locations/locations_edit',function(){
//     return view('admin.locations.locations_edit');
// });
// Route::get('/admin/item/add_item',function(){
//     return view('admin.item.add_item');
// });
// Route::get('/admin/item/item_edit',function(){
//     return view('admin.item.item_edit');
// });
// Route::get('/admin/item/itemfound',function(){
//     return view('admin.item.itemfound');
// });
// Route::get('/admin/item/itemreturned',function(){
//     return view('admin.item.itemreturned');
// });
// Route::get('/admin/item/voiditems',function(){
//     return view('admin.item.voiditems');
// });
// Route::get('/admin/item/donated',function(){
//     return view('admin.item.donated');
// });
// Route::get('/admin/department/department',function(){
//     return view('admin.department.department');
// });
// Route::get('/admin/department/department_edit',function(){
//     return view('admin.department.department_edit');
// });
// Route::get('/admin/category/category',function(){
//     return view('admin.category.category');
// });
// Route::get('/admin/category/category_edit',function(){
//     return view('admin.category.category_edit');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/user', 'AdminUsersController');

