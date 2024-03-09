<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\JobdescController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ProducttypeController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\StudentsRegistrationController;



Route::get('/', function () {
    return view('welcome');
});

//Route ::get('/components/dashboard',[UserProfileController::class,'index'] )->name('dasboard');
Route::GET('/components/dashboard',[UserProfileController::class,'index'])->name('dasboard')->middleware('auth:sanctum');;

// Web API Routes
Route::post('/user-registration',[UserController::class,'UserRegistration']);
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::get('/user-profile',[UserController::class,'UserProfile'])->middleware('auth:sanctum');


Route::get('/logout',[UserController::class,'UserLogout'])->middleware('auth:sanctum');
Route::post('/user-update',[UserController::class,'UpdateProfile'])->middleware('auth:sanctum');
Route::post('/send-otp',[UserController::class,'SendOTPCode']);
Route::post('/verify-otp',[UserController::class,'VerifyOTP']);
Route::post('/reset-password',[UserController::class,'ResetPassword'])->middleware('auth:sanctum');



// Customer Web API Routes
Route::post("/create-reg",[StudentsRegistrationController::class,'RegCreate'])->middleware('auth:sanctum');
Route::get("/list-reg",[StudentsRegistrationController::class,'RegList'])->middleware('auth:sanctum');
Route::post("/delete-reg",[StudentsRegistrationController::class,'RegDelete'])->middleware('auth:sanctum');
Route::post("/update-reg",[StudentsRegistrationController::class,'RegUpdate'])->middleware('auth:sanctum');
Route::post("/reg-by-id",[StudentsRegistrationController::class,'RegByID'])->middleware('auth:sanctum');
Route::view('/student-reg','pages.dashboard.registration-page');



// Page Routes
Route::get("/",[Controller::class,'CompanyList']);


//Route::view('/','pages.home');
Route::view('/about','pages.about');
Route::view('/jobs','pages.jobs');
Route::view('/blogs','pages.blogs');
Route::view('/contact','pages.contact');
Route::view('/userLogin','pages.auth.login-page')->name('login');
Route::view('/userRegistration','pages.auth.registration-page');
Route::view('/sendOtp','pages.auth.send-otp-page');
Route::view('/verifyOtp','pages.auth.verify-otp-page');
Route::view('/resetPassword','pages.auth.reset-pass-page');
Route::view('/userProfile','pages.dashboard.profile-page');



// Category Web API Routes
Route::post("/create-category",[CategoryController::class,'CategoryCreate'])->middleware('auth:sanctum');
Route::get("/list-category",[CategoryController::class,'CategoryList'])->middleware('auth:sanctum');
Route::post("/delete-category",[CategoryController::class,'CategoryDelete'])->middleware('auth:sanctum');
Route::post("/update-category",[CategoryController::class,'CategoryUpdate'])->middleware('auth:sanctum');
Route::post("/category-by-id",[CategoryController::class,'CategoryByID'])->middleware('auth:sanctum');
Route::view('/categoryPage','pages.dashboard.category-page');

// Product Type Web API Routes
Route::post("/create-producttype",[ProducttypeController::class,'ProducttypeCreate'])->middleware('auth:sanctum');
Route::get("/create-producttype",[ProducttypeController::class,'getCategories']);
Route::get("/list-producttype",[ProducttypeController::class,'ProducttypeList'])->middleware('auth:sanctum');
Route::post("/delete-producttype",[ProducttypeController::class,'ProducttypeDelete'])->middleware('auth:sanctum');
Route::post("/update-producttype",[ProducttypeController::class,'ProducttypeUpdate'])->middleware('auth:sanctum');
Route::post("/producttype-by-id",[ProducttypeController::class,'ProducttypeByID'])->middleware('auth:sanctum');
Route::view('/producttypePage','pages.dashboard.producttype-page');




// Product Web API Routes
Route::post("/create-product",[ProductController::class,'CreateProduct'])->middleware('auth:sanctum');
Route::post("/delete-product",[ProductController::class,'DeleteProduct'])->middleware('auth:sanctum');
Route::post("/update-product",[ProductController::class,'UpdateProduct'])->middleware('auth:sanctum');
Route::get("/list-product",[ProductController::class,'ProductList'])->middleware('auth:sanctum');
Route::post("/product-by-id",[ProductController::class,'ProductByID'])->middleware('auth:sanctum');
Route::view('/productPage','pages.dashboard.product-page');





// Customer Web API Routes
Route::post("/create-customer",[CustomerController::class,'CustomerCreate'])->middleware('auth:sanctum');
Route::get("/list-customer",[CustomerController::class,'CustomerList'])->middleware('auth:sanctum');
Route::post("/delete-customer",[CustomerController::class,'CustomerDelete'])->middleware('auth:sanctum');
Route::post("/update-customer",[CustomerController::class,'CustomerUpdate'])->middleware('auth:sanctum');
Route::post("/customer-by-id",[CustomerController::class,'CustomerByID'])->middleware('auth:sanctum');
Route::view('/customerPage','pages.dashboard.customer-page');





// Suppliers Web API Routes
Route::post("/create-supplier",[SupplierController::class,'SupplierCreate'])->middleware('auth:sanctum');
Route::get("/list-supplier",[SupplierController::class,'SupplierList'])->middleware('auth:sanctum');
Route::post("/delete-supplier",[SupplierController::class,'SupplierDelete'])->middleware('auth:sanctum');
Route::post("/update-supplier",[SupplierController::class,'SupplierUpdate'])->middleware('auth:sanctum');
Route::post("/supplier-by-id",[SupplierController::class,'SupplierByID'])->middleware('auth:sanctum');
Route::view('/supplierPage','pages.dashboard.supplier-page');

// Invoice
Route::post("/invoice-create",[InvoiceController::class,'invoiceCreate'])->middleware('auth:sanctum');
Route::get("/invoice-select",[InvoiceController::class,'invoiceSelect'])->middleware('auth:sanctum');
Route::post("/invoice-details",[InvoiceController::class,'InvoiceDetails'])->middleware('auth:sanctum');
Route::post("/invoice-delete",[InvoiceController::class,'invoiceDelete'])->middleware('auth:sanctum');
Route::view('/invoicePage','pages.dashboard.invoice-page');

// Report
Route::get("/sales-report/{FormDate}/{ToDate}",[ReportController::class,'SalesReport'])->middleware('auth:sanctum');

Route::view('/salePage','pages.dashboard.sale-page');


Route::view('/reportPage','pages.dashboard.report-page');


Route::view('/companyPage','pages.dashboard.company-page');


// Suppliers Web API Routes
Route::post("/create-company",[CompanyController::class,'CompanyCreate'])->middleware('auth:sanctum');
Route::get("/list-company",[CompanyController::class,'CompanyList'])->middleware('auth:sanctum');
Route::post("/delete-company",[CompanyController::class,'CompanyDelete'])->middleware('auth:sanctum');
Route::post("/update-company",[CompanyController::class,'CompanyUpdate'])->middleware('auth:sanctum');
Route::post("/company-by-id",[CompanyController::class,'CompanyByID'])->middleware('auth:sanctum');



// Jobdescription Web API Routes
Route::post("/create-jobdesc",[JobdescController::class,'JobdescCreate'])->middleware('auth:sanctum');
Route::get("/list-jobdesc",[JobdescController::class,'JobdescList'])->middleware('auth:sanctum');
Route::post("/delete-jobdesc",[JobdescController::class,'JobdescDelete'])->middleware('auth:sanctum');
Route::post("/update-jobdesc",[JobdescController::class,'JobdescUpdate'])->middleware('auth:sanctum');
Route::post("/jobdesc-by-id",[JobdescController::class,'JobdescByID'])->middleware('auth:sanctum');



Route::view('/jobdescPage','pages.dashboard.jobdesc-page');



//  //Employee
//Route::GET('/companies-list',[CompaniesController::class,'index'] )->name('all_companies');
