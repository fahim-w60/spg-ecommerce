<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\{
    AuthOtpController,
    GoogleAuthController,
    FacebookAuthController,
};
use App\Http\Controllers\{
    ProfileController,
    LanguageController,
};

use App\Http\Controllers\admin\{
    AdminController,
    BrandController,
    CategoryController,
    SubcategoryController,
    ProductAttributeSetController,
    ProductAttributeController,
    ProductController,
    ProductInventoryController,
    ProductVideoController,
    RoleController,
    PermissionController,
    AdminUserController,
};


use App\Http\Controllers\frontend\{
    IndexController,
};

use App\Http\Controllers\vendor\{
    VendorController,
};

use App\Http\Controllers\user\{
    UserController,
};

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

//  frontpage
Route::get('/',[IndexController::class,'index']);



//  unuseful
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// redirect dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard',function(){
            $auth_user = \Auth::user();
            if($auth_user->role=='admin'){
                
                return redirect()->route('admin.dashboard');
            }
            else if($auth_user->role=='vendor')
            {
                return redirect()->route('vendor.dashboard');
            }
            else if($auth_user->role=='user')
            {
                return redirect()->route('user.dashboard');
            }

    })->name('dashboard');
});

require __DIR__.'/auth.php';




// mobile otp 
Route::controller(AuthOtpController::class)->group(function(){
    Route::get('/otp/load', 'generate')->name('otp.load');
    Route::post('/otp/login', 'loginWithOtp')->name('otp.getlogin');
});


// google login 
Route::controller(GoogleAuthController::class)->group(function(){
    Route::get('auth/google', 'redirect')->name('google.auth');
    Route::get('auth/google/call-back', 'callbackGoogle');

});

// facebook login
Route::controller(FacebookAuthController::class)->group(function(){
    Route::get('auth/facebook', 'redirect')->name('facebook.auth');
    Route::get('auth/facebook/callback', 'callbackFacebook');

});


//language change
Route::get('change/lang', [LanguageController::class, 'lang_change'])->name('LangChange');



// Admin Dashboard
Route::middleware(['auth','role:admin'])->group(function(){
    Route::prefix('admin')->group(function(){

        Route::get('/dashboard',[AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

        //Profile Section
        Route::get('/profile',[AdminController::class, 'AdminProfile'])->name('admin.profile');
        Route::post('/profile/store',[AdminController::class, 'StoreAdminProfile'])->name('store.admin.profile');
        Route::get('/password',[AdminController::class, 'ChangeAdminPassword'])->name('admin.password');
        Route::post('/change/password',[AdminController::class, 'UpdateAdminPassword'])->name('admin.update.password');
        Route::get('/user/list', [AdminController::class, 'AllUserListForAdmin'])->name('all.user.list.admin');
        Route::get('/vendor/list', [AdminController::class, 'AllVendorListForAdmin'])->name('all.vendor.list.admin');


        //Brand Section
        Route::controller(BrandController::class)->group(function(){
            Route::get('/brand', 'index')->name('admin.brand');
            Route::post('/brand/store', 'StoreBrand')->name('admin.store.brand');
            Route::get('/brand/list', 'AllBrandListForAdmin')->name('all.brand.list.admin');
            Route::get('/brand/edit/{id}', 'EditBrand')->name('admin.edit.brand');
            Route::put('/brand/update/{id}', 'UpdateBrand')->name('admin.update.brand');
            Route::delete('/brand/delete/{id}', 'DeleteBrand')->name('admin.brand.destroy');
        });

        //Category Section
        Route::controller(CategoryController::class)->group(function(){
            Route::get('/category', 'index')->name('admin.category');
            Route::post('/category/store', 'StoreCategory')->name('admin.store.category');
            Route::get('/category/edit/{id}', 'EditCategory')->name('admin.edit.category');
            Route::put('/category/update/{id}', 'UpdateCategory')->name('admin.update.category');
            Route::get('/category/list', 'AllCategoryListForAdmin')->name('admin.category.list');
            Route::delete('/category/delete/{id}', 'DeleteCategory')->name('admin.category.destroy');
        });

        //Subcategory Section
        Route::resource('subcategory', SubcategoryController::class);
        
        //Product Attribute Set
        Route::resource('attributeSet', ProductAttributeSetController::class);

        //Product Attribute
        Route::resource('attribute', ProductAttributeController::class);
        Route::get('/get-attributs/{id}', [ProductAttributeController::class, 'getAttributes']);

        //Product Section
        Route::resource('product', ProductController::class);

        //Product Inventory
        Route::resource('inventory',ProductInventoryController::class);
        Route::get('/get-inventory-details/{id}', [ProductInventoryController::class,'getInventoryDetails']);

        //Product Video
        Route::resource('productvideo', ProductVideoController::class);
        Route::get('/get-video-details/{id}', [ProductVideoController::class,'getVideoDetails']);

        //Role
        Route::resource('roles',RoleController::class);
        Route::get('/add-roles-in-permission', [RoleController::class, 'addRoleInPermission'])->name('addRoleInPermission');
        Route::post('/store-roles-in-permission', [RoleController::class, 'storeRoleInPermission'])->name('storeRoleInPermission');
        Route::get('/edit-role-in-permission/{id}', [RoleController::class, 'editRoleInPermission'])->name('role.permission.edit');
        Route::post('/update-roles-in-permission', [RoleController::class, 'updateRoleInPermission'])->name('updateRoleInPermission');

        //Permission
        Route::resource('permission',PermissionController::class);

        //admin user
        Route::resource('adminUser',AdminUserController::class);
    });
    
}); 


// User Dashboard
Route::middleware(['auth','role:user'])->group(function(){
    Route::prefix('user')->group(function(){
        Route::get('',[UserController::class, 'UserDashboard'])->name('user.dashboard');
    });
    
});



// Vendor Dashboard
Route::middleware(['auth','role:vendor'])->group(function(){
    Route::prefix('vendor')->group(function(){
        Route::get('/dashboard',[VendorController::class, 'VendorDashboard'])->name('vendor.dashboard');
    });
    
});


Route::resource('index', IndexController::class);
