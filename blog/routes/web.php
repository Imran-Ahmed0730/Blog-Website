<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CommentController;

Route::get('/',[BlogController::class, 'index'])->name('/');
Route::get('/all-blogs',[BlogController::class, 'allBlogs'])->name('all.blogs');
Route::get('/about-website',[BlogController::class, 'about'])->name('about.website');
Route::get('/about-category/{id}',[BlogController::class, 'aboutCategory'])->name('about.category');
Route::get('/contact-us',[BlogController::class, 'contact'])->name('contact.us');
Route::get('/about-author/{id}',[BlogController::class, 'aboutAuthor'])->name('about.author');
Route::get('/blog-details/{slug}',[BlogController::class, 'blogDetails'])->name('blog.details');


Route::get('/customer-register', [CustomerController::class, 'index'])->name('customer.register');
Route::post('/new-register', [CustomerController::class, 'newCustomer'])->name('new.register');
Route::get('/customer-login', [CustomerController::class, 'customerLogin'])->name('customer.login');
Route::post('/customer-login', [CustomerController::class, 'customerLoginCheck'])->name('customer.login');
Route::get('/customer-logout', [CustomerController::class, 'customerLogout'])->name('customer.logout');

Route::post('/save-comment', [CommentController::class, 'saveComment'])->name('save.comment');

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-category', [CategoryController::class, 'index'])->name('add.category');
    Route::post('/new-category', [CategoryController::class, 'newCategory'])->name('new.category');
    Route::get('/manage-category', [CategoryController::class, 'manageCategory'])->name('manage.category');
    Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory'])->name('edit.category');
    Route::post('/update-category', [CategoryController::class, 'updateCategory'])->name('update.category');
    Route::get('/status-category/{id}', [CategoryController::class, 'statusCategory'])->name('status.category');
    Route::post('/delete-category', [CategoryController::class, 'deleteCategory'])->name('delete.category');

    Route::get('/add-author', [AuthorController::class, 'index'])->name('add.author');
    Route::post('/new-author', [AuthorController::class, 'newAuthor'])->name('new.author');
    Route::get('/manage-author', [AuthorController::class, 'manageAuthor'])->name('manage.author');
    Route::get('/edit-author/{id}', [AuthorController::class, 'editAuthor'])->name('edit.author');
    Route::post('/update-author', [AuthorController::class, 'updateAuthor'])->name('update.author');
    Route::get('/status-author/{id}', [AuthorController::class, 'statusAuthor'])->name('status.author');
    Route::post('/delete-author', [AuthorController::class, 'deleteAuthor'])->name('delete.author');

    Route::get('/add-blog', [blogController::class, 'addBlog'])->name('add.blog');
    Route::post('/new-blog', [blogController::class, 'newBlog'])->name('new.blog');
    Route::get('/manage-blog', [blogController::class, 'manageBlog'])->name('manage.blog');
    Route::get('/edit-blog/{id}', [blogController::class, 'editBlog'])->name('edit.blog');
    Route::post('/update-blog', [blogController::class, 'updateBlog'])->name('update.blog');
    Route::get('/status-blog/{id}', [blogController::class, 'statusBlog'])->name('status.blog');
    Route::post('/delete-blog', [blogController::class, 'deleteBlog'])->name('delete.blog');

    Route::get('/manage-comment', [CommentController::class, 'manageComment'])->name('manage.comment');
    Route::get('/status-comment/{id}', [CommentController::class, 'statusComment'])->name('status.comment');
    Route::post('/delete-comment', [CommentController::class, 'deleteComment'])->name('delete.comment');
});
