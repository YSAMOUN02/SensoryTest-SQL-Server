<?php


use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\EmployeeController;
use App\Http\Controllers\backend\TestController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\homepageController;
use App\Http\Controllers\backend\ResultTestController;
use App\Http\Controllers\backend\TesterViewerController;
use App\Http\Controllers\frontend\TestingControll;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin/login', [AdminController::class, 'admin_login'])->name('login');;
Route::post('/login/admin/submit', [AdminController::class, 'admin_login_submit']);


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin_dashboard'])->name("/admin/login");

    Route::get('/admin/logout', [AdminController::class, 'admin_logout']);

    Route::get('/admin/view/admin', [AdminController::class, 'view_admin']);

    Route::get('/admin/update/admin/{id}', [AdminController::class, 'update_admin']);

    Route::post('/admin/update/admin/submit', [AdminController::class, 'update_admin_submit']);

    Route::get('/admin/delete/admin', [AdminController::class, 'delete_admin']);


    Route::get('/admin/add/product', [ProductController::class, 'add_product']);


    Route::get('/admin/delete/tester/data', [TesterViewerController ::class, 'delete_test_record']);

    Route::get('/admin/delete/product', [ProductController::class, 'delete_product']);

    Route::get('/admin/view/product', [ProductController::class, 'view_product']);

    Route::get('/admin/update/product/{id}', [ProductController::class, 'update_product']);
    Route::post('/admin/update/product/submit', [ProductController::class, 'update_product_submit']);

    Route::post('/admin/add/product/submit', [ProductController::class, 'add_product_submit']);



    Route::get('/admin/update/employee/{id}', [EmployeeController::class, 'update_employee']);
    Route::post('/admin/update/employee/submit', [EmployeeController::class, 'update_employee_submit']);


    Route::get('/admin/delete/emolyee', [EmployeeController ::class, 'delete_employee']);

    Route::get('/admin/view/employee', [EmployeeController ::class, 'view_employee']);

    Route::get('/admin/add/test', [TestController ::class, 'add_test']);
    Route::post('/admin/add/test/submit', [TestController ::class, 'add_test_submit']);

    Route::get('/admin/delete/test', [TestController ::class, 'delete_test']);

    Route::get('/admin/view/test', [TestController ::class, 'view_test']);

    Route::get('/admin/view/result/{id}', [ResultTestController ::class, 'view_result']);

    Route::get('/admin/view/result/tester/id={id}/type={type}', [TesterViewerController ::class, 'view_result_tester']);

    Route::get('/admin/view/result/tester/{id}', [TesterViewerController ::class, 'view_all_tester']);
    Route::get('/admin/view/tester/comment/{id}', [TesterViewerController ::class, 'view_all_tester_comment']);

    Route::get('/admin/view/result/tester/choice/id={id}/em={idem}', [TesterViewerController ::class, 'view_tester_choice']);
    Route::get('/admin/view/result/tester/choice/id={id}/em={idem}/type={type}', [TesterViewerController ::class, 'view_tester_choice']);


    Route::get('/admin/add/employee', [EmployeeController ::class, 'add_employee']);
    Route::post('/admin/add/employee/submit', [EmployeeController ::class, 'add_employee_submit']);
 });






Route::get('/', [LoginController ::class, 'login']);
Route::get('/login', [LoginController ::class, 'login']);
Route::get('/login/submit', [LoginController ::class, 'login_submit']);

Route::get('/register', [LoginController ::class, 'register']);


Route::get('/test/submit', [homepageController ::class, 'test_submit']);

Route::get('/thankgivivng', [homepageController ::class, 'thankgivivng']);

Route::get('/test/takepart/{id}/{em_id}', [homepageController ::class, 'test_takepath']);


Route::get('/result/test_id={id}', [TestingControll ::class, 'result_show']);


Route::get('/result/tester_choice/test_id={id}', [TestingControll ::class, 'tester_choice']);


Route::get('/result/tester/test_id={id}', [TestingControll ::class, 'view_all_tester_client']);
