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
    return view('webmag.views.homepage.homepage');
});
Route::get('/category/{id}/{abc}', function ($id, $abc) {
    var_dump($id);
    echo "<br>";
    var_dump($abc);
    exit;
    return view('webmag.views.category.category');
});
/**
 * Gọi đến view welcome1
 */
Route::get("/abc", function() {
    return view('welcome1');
});
Route::get("/abc1", function() {
    return view('folder1.welcome2');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
/**
 * Route admin CRUD
 */
Route::prefix("admin")->group(function() {
    // view liệt kê các bản ghi
    Route::get("/products", "Backend\ProductController@index");
    // view tạo mới
    Route::get("/products/create", "Backend\ProductController@create");
    // view sửa
    Route::get("/products/edit/{id}", "Backend\ProductController@edit");
    // view xoá
    Route::get("/products/delete/{id}", "Backend\ProductController@delete");
    /**
     * tạo 3 route để trực tiếp thêm , sửa , xoá
     */
    // thêm mới bản ghi
    Route::post("/products", "Backend\ProductController@store");
    // sửa sản phẩm
    Route::post("/products/edit/{id}", "Backend\ProductController@update");
    //xóa sản phẩm
    Route::post("/products/delete/{id}", "Backend\ProductController@destroy");
});