<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
// Use request để nhận dữ liệu gủi lên theo kiểu request
use Illuminate\Http\Request;

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

Route::view('/admin', 'test-admin');

// Route::get('/admin',function(){
//     $students = DB::table('students')->get();
//     return view('test-admin', [
//         'students' => $students
//     ]);
// });
//Tạo route resource cho student controller
Route::resource('students', StudentController::class);
//->only(['index']); Khi chỉ dùng ham nao do
//excepy(['create,'edit']); khi can bo qua hàm nào đó

//Tạo route cho subject controller không dùng resource
// Route::get('subject', [SubjectController::class, 'index'])->name('subject.index');
// Route::get('/students', function () {
//     //Su dung query builder
//     //Lay ra mang students
//     $students = DB::table('students')->get();
//     //     return $students;
//     //     //Lay ra rieng theo id
//     // return  DB::table('students')->where('id', '=', 1)->get();

//     //Truyen vao mang [ten bien view nhan dc => gia tri];
//     return view('students.detail', [
//         'students' => $students
//     ]);
// });
// //gia tri truyen vao url se tuowng ung vi tri tham so cua function
// Route::get('/students/{id}/{age}', function ($id, $age) {
//     dd('Gias tri tryten vao tren url:' . $id . ' ' . $age);
// });

// Route::get('/students/detail', function () {
//     return view('students.detail');
// });
// //Casch 2
// Route::view('/students/detail-2', 'students.detail');

// Route::get('students-list', function () {
//     //Truy van lay danh sach student bang query builer
//     $students = DB::table('students')->orderBy('id', 'desc')->get();
//     return view('students.list', [
//         'students' => $students,
//         'error' =>null,
//     ]);
// })->name('students-list');

//chuc nang login +route POST





// Route::get('/login', function () {
//     return view('login');
// })->name('get-login');

// Route::get('/students/{id}', function($id){
//     $student = DB::table('students')->find($id);
//     // dd($student);
//     return view('students.show',[
//         'student'=>$student
//     ]);
// })->name('students-show');

// Route::get('/students', function() {
//     $students = DB::table('students')->get();

//     return view('students.list', [
//         'students' => $students
//     ]);
// })->name('students-list');

// Route::post('/post-login', function (Request $request) {
//     // xu ly logic,truy van ...
//     // dd($request->all());
//     //su dung $request->all hoac $request->input name
//     $username = $request->username;
//     //thuc hien truy van theo gia tri vua gui len
//     $student = DB::table('students')
//         ->where('name', 'like', "%$username%")->get();
//     // dd($student);
//     // neu co student thi se redirect sang student-list
//     if ($student) {
//         return redirect()->route('students-list');
//     }
//     // // neu khong thi quay lai man login
//     return redirect()->route('get-login');
// })->name('post-login');
