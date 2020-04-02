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
    return view('home');
});

Auth::routes();

Route::get('/backend', 'HomeController@index')->name('backend');
Route::get('/backend', 'HomeController@sub')->name('backend');

// info images area hare////////////////////////////////////////
Route::get('/add_infoimage', 'infoimagecontroller@infoimage')->name('add_infoimage');
Route::post('/insert_infoimage', 'infoimagecontroller@insert_infoimage');
Route::get('/all_infoimages', 'infoimagecontroller@all_infoimages')->name('all_infoimages');
Route::get('/edit_photo/{id}', 'infoimagecontroller@edit_photo')->name('edit_photo');
Route::post('/update_info/{id}', 'infoimagecontroller@update_info');
Route::get('/delete_image/{id}', 'infoimagecontroller@delete_image')->name('delete_image');
// slider route is Here//////////////////////////////////////////////////////////////
Route::get('/add_slider', 'slidercontroller@add_slider')->name('add_slider');
Route::get('/all_slider', 'slidercontroller@all_slider')->name('all_slider');
Route::post('/insert_slider', 'slidercontroller@insert_slider');

Route::get('/edit_slider/{id}', 'slidercontroller@edit_slider')->name('edit_slider');
Route::post('/update_slider/{id}', 'slidercontroller@update_slider');
Route::get('/delete_slider/{id}', 'slidercontroller@delete_slider')->name('delete_slider');

// second slider///////////////////////////////////////////////////////////////////
Route::get('/add_second_slider', 'secondslidercontroller@add_second_slider')->name('add_second_slider');
Route::get('/all_second_slider', 'secondslidercontroller@all_second_slider')->name('all_second_slider');
Route::post('/insert_second_slider', 'secondslidercontroller@insert_second_slider');

Route::get('/edit_second_slider/{id}', 'secondslidercontroller@edit_second_slider')->name('edit_second_slider');
Route::post('/update_second_slider/{id}', 'secondslidercontroller@update_second_slider');
Route::get('/delete_second_slider/{id}', 'secondslidercontroller@delete_second_slider')->name('delete_second_slider');
 // cv area is hera///////////////////////////////////////////////
Route::get('/add_cv', 'cvcontroller@add_cv')->name('add_cv');
Route::post('/insert_cv', 'cvcontroller@insert_cv');
Route::get('/all_cv', 'cvcontroller@all_cv')->name('all_cv');
Route::get('/delete_cv/{id}', 'cvcontroller@delete_cv')->name('delete_cv');
