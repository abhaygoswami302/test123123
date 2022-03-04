<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminCastingController;
use App\Http\Controllers\Admin\AdminCategoriesController;
use App\Http\Controllers\Admin\AdminCollectionsController;
use App\Http\Controllers\Admin\AdminContributorController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminEditorController;
use App\Http\Controllers\Admin\AdminFeedbackController;
use App\Http\Controllers\Admin\AdminLegoMinifigures;
use App\Http\Controllers\Admin\AdminLegoMiniFiguresFormController;
use App\Http\Controllers\Admin\AdminMainlineSeriesController;
use App\Http\Controllers\Admin\AdminProductsController;
use App\Http\Controllers\Admin\AdminSeriesController;
use App\Http\Controllers\Admin\AdminTemporaryController;
use App\Http\Controllers\Admin\AdminThemeController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\ClearProductsController;
use App\Http\Controllers\Admin\CollectionProductsController;
use App\Http\Controllers\Admin\CSVController;
use App\Http\Controllers\Admin\HotToysController;
use App\Http\Controllers\Admin\HotToysCsvController;
use App\Http\Controllers\Admin\SeriesShowController;
use App\Http\Controllers\AgreementController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetUccController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\BrowseProductsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CollectionProductController;
use App\Http\Controllers\Contributor\ContributorController;
use App\Http\Controllers\Contributor\ContributorHotToysController;
use App\Http\Controllers\Contributor\ContributorLegoMiniFiguresController;
use App\Http\Controllers\contributor\ContributorProductsController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\Editor\EditorController;
use App\Http\Controllers\Editor\EditorHotToysController;
use App\Http\Controllers\Editor\EditorLegoMiniFiguresController;
use App\Http\Controllers\editor\EditorProductsController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\Guest\FeedbackController;
use App\Http\Controllers\Guest\GuestCollectionController;
use App\Http\Controllers\Guest\GuestController;
use App\Http\Controllers\Guest\ProductsAddedByController;
use App\Http\Controllers\Guest\SaveToMyCollection;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsAddedByUserController;
use App\Http\Controllers\ProductsFilterController;
use App\Http\Controllers\removeProductFromCollectionController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\SubseriesController;
use App\Http\Controllers\TemporaryController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\LikedProductController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UpgradePlanController;
use App\Http\Controllers\User\UserCategoryController;
use App\Http\Controllers\User\UserCollectionController;
use App\Http\Controllers\User\UserHotToysController;
use App\Http\Controllers\User\UserLegoMiniFiguresController;
use App\Http\Controllers\User\UserProductController;
use App\Http\Controllers\User\VisibleHiddenProductsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WelcomeController::class, 'index'])->name('welcome');

Route::get('policies', function(){
    return view('guest.policies');
})->name('policies');

Route::get('feedback', [GuestController::class, 'feedback'])->name('feedback');
Route::get('coming_soon', [GuestController::class, 'coming_soon'])->name('guest.coming.soon');
Route::get('apps_coming_soon', [GuestController::class, 'apps_coming_soon'])->name('guest.apps.coming.soon');
Route::resource('forum', ForumController::class);
Route::resource('marketplace', MarketplaceController::class);

Route::post('suggestions', [GuestController::class, 'suggestionsPost'])->name('suggestions');

/*Route::get('pricing', [GuestController::class, 'pricing'])->name('pricing');*/

Route::get('pricing', [SubscriptionController::class, 'pricing'])->name('pricing');

Route::get('collection/products/{id}', [CollectionProductController::class, 'index'])->name('guest.collection.products');

Route::get('collections', [GuestCollectionController::class, 'index'])->name('my.guest.collections.route');

Route::resource('about', AboutController::class);

Route::group(['middleware'=>[ 'UsersMiddleware', 'prevent-back-history']],function(){
    Route::resource('collection', CollectionController::class);
    Route::resource('category', CategoryController::class);
    
    Route::resource('saveCollection', SaveToMyCollection::class);
    
    Route::get('product/user/{id}', [ProductsAddedByController::class, 'show'])->name('guest.productsaddedby');
    Route::post('product/index', [ProductsFilterController::class, 'filter'])->name('product.filter.post');
    Route::get('product/index', [ProductsFilterController::class, 'index'])->name('product.filter');
    Route::resource('product', ProductController::class);
    
    Route::post('feedbackStore', [FeedbackController::class, 'store'])->name('product.feedback.store');

    Route::resource('subseries', SubseriesController::class);
    Route::resource('theme', ThemeController::class);
    
    Route::get('byyear/{year}', [BrowseProductsController::class, 'byyear'])->name('byyear');
    Route::get('bycasting/{casting}', [BrowseProductsController::class, 'bycasting'])->name('bycasting');
    Route::get('byseries/{series}', [BrowseProductsController::class, 'byseries'])->name('byseries');
    Route::get('bytheme/{theme}', [BrowseProductsController::class, 'bytheme'])->name('bytheme');
    Route::get('byid/{id}', [BrowseProductsController::class, 'byid'])->name('byid');
    
    /***************************************** USER ROUTES **********************************/
    Route::group(['prefix'=>'user'], function(){

        Route::get('dashboard', [DashboardController::class, 'index'])->name('users.dashboard');
        Route::get('usercollection/{id}', [UserCollectionController::class, 'show'])->name('usercollection.show');
        Route::get('usercollection/products/{id}', [UserCollectionController::class, 'collection_products'])->name('usercollection.products');
    
        Route::get('usercategory/{id}', [UserCategoryController::class, 'show'])->name('usercategory.show');
        //Route::post('product/import', [ProductImportController::class, 'ProductImport'])->name('ProductImport');
        Route::get('userproducts', [UserProductController::class, 'index'])->name('userproduct.index');
        Route::get('userproduct/create', [UserProductController::class, 'create'])->name('userproduct.create');
        Route::post('userproduct/store', [UserProductController::class, 'store'])->name('userproduct.store');
        Route::get('userproduct/edit/{id}', [UserProductController::class, 'edit'])->name('userproduct.edit');
        Route::patch('userproduct/update/{id}', [UserProductController::class, 'update'])->name('userproduct.update');
        Route::delete('userproduct/destroy/{id}', [UserProductController::class, 'destroy'])->name('userproduct.destroy');
        Route::get('userproduct/{id}', [UserProductController::class, 'show'])->name('userproduct.show');
    
        // Lego Minifigures
        Route::get('lego_minifigures', [UserLegoMiniFiguresController::class, 'create'])->name('user.lego.minifigures.create');
        Route::post('lego_minifigures',[UserLegoMiniFiguresController::class, 'selectForm'])->name('user.lego.minifigures.select');
        Route::post('lego_minifigures/store', [UserLegoMiniFiguresController::class, 'store'])->name('user.lego.minifigures.store');

        // Hot Toys
        Route::resource('user_hot_toys', UserHotToysController::class);

        Route::get('visibleProducts', [VisibleHiddenProductsController::class, 'visibleProducts'])->name('visibleProducts');
        Route::get('hiddenProducts', [VisibleHiddenProductsController::class, 'hiddenProducts'])->name('hiddenProducts');
    
        Route::get('liked', [LikedProductController::class, 'index'])->name('userliked.products');
    
        Route::post('import', [TemporaryController::class, 'import'])->name('tempImport');
        Route::get('temporaryProducts', [TemporaryController::class, 'index'])->name('tempIndex');
        Route::get('tempLoadProducts', [TemporaryController::class, 'loadProducts'])->name('tempLoadProducts');
        Route::get('tempShow/{id}', [TemporaryController::class, 'tempShow'])->name('tempShow');
        Route::post('tempEdit/{id}', [TemporaryController::class, 'tempEdit'])->name('tempEdit');
        Route::delete('tempShow/delete/{id}', [TemporaryController::class, 'tempDelete'])->name('tempDelete');
    
        Route::get('profile_settings', [ProfileController::class, 'edit'])->name('user_profile_settings');
        Route::post('profile_settings/store', [ProfileController::class, 'store'])->name('user_profile.store');
    
        Route::delete('removeProductFromCollection/{id}', [removeProductFromCollectionController::class, 'destroy'])->name('removeProductFromCollection');
    
        // Upgrade Plan Routes
        Route::get('index', [UpgradePlanController::class, 'index'])->name('user_upgradePlan.index');
        Route::get('upgradePlan/{flag1}/{flag2}', [UpgradePlanController::class, 'create'])->name('user_upgradePlan.create');
        Route::get('updatePlan/{flag1}/{flag2}', [UpgradePlanController::class, 'register'])->name('user_upgradePlan.register');
        Route::post('changePlan', [UpgradePlanController::class, 'changePlan'])->name('user_upgradePlan.postregister');
       
        // Subscription Plans
        Route::post('createAgreement', [UpgradePlanController::class, 'createAgreement'])->name('upgradeplan_paypal.createAgreement');
        Route::get('activatePlan/{planID}', [UpgradePlanController::class, 'executeAgreement'])->name('upgradeplan_paypal.executeAgreement');

    
    });
});






/*------------------------------------------------------------------------------------------------------------------
=============================================== ADMIN ROUTES (GLOBAL ACCESS) ======================================================
-------------------------------------------------------------------------------------------------------------------*/

Route::group(['prefix'=>'admin'], function(){
    Route::group(['middleware'=>[ 'AdminMiddleware', 'prevent-back-history', 'auth']],function(){
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('visible_products', [AdminDashboardController::class, 'visible_products'])->name('admin.visible_products');
        Route::get('hidden_products', [AdminDashboardController::class, 'hidden_products'])->name('admin.hidden_products');
        
        Route::resource('admin_collections', AdminCollectionsController::class);
        Route::get('admin_collections/products/{id}', [CollectionProductsController::class, 'index'])->name('admin.collections.products');

        Route::resource('admin_categories', AdminCategoriesController::class);
        
        Route::resource('admin_series', AdminSeriesController::class);
        Route::get('admin_series/series/{series_name}', [SeriesShowController::class, 'index'])->name('admin.series.show.custom');

        Route::resource('admin_themes', AdminThemeController::class);
        Route::resource('admin_products', AdminProductsController::class);
        Route::resource('admin_castings', AdminCastingController::class);
        Route::resource('admin_mainline', AdminMainlineSeriesController::class);

        Route::get('users', [AdminUsersController::class, 'index'])->name('admin.users.index');
        Route::get('user/{id}', [AdminUsersController::class, 'show'])->name('admin.user.show');
        Route::get('users/create', [AdminUsersController::class, 'create'])->name('admin.users.create');        
        Route::post('users/store', [AdminUsersController::class, 'store'])->name('admin.users.store');        
        Route::delete('users/{id}', [AdminUsersController::class, 'destroy'])->name('admin.users.destroy');        
        Route::get('admin_users', [AdminUsersController::class, 'adminUsers'])->name('admin.users.admin_users');

        Route::resource('admin_editor', AdminEditorController::class);
        Route::resource('admin_contributor', AdminContributorController::class);        

        Route::get('premium', [AdminUsersController::class, 'premium'])->name('admin.user.premium');
        Route::get('standard', [AdminUsersController::class, 'standard'])->name('admin.user.standard');
        Route::get('basic', [AdminUsersController::class, 'basic'])->name('admin.user.basic');

        Route::get('csv/create', [CSVController::class, 'create'])->name('admin.csv.create');
        
        // Lego MiniFigures Routes
        Route::resource('lego_minifigures', AdminLegoMinifigures::class);
        Route::resource('lego_minifigures_form', AdminLegoMiniFiguresFormController::class);

        // Hot Toys Routes
        Route::resource('hotToysCsv', HotToysCsvController::class);
        Route::resource('hotToys', HotToysController::class);

        Route::post('import', [AdminTemporaryController::class, 'import'])->name('admin.tempImport');
        Route::get('temporaryProducts', [AdminTemporaryController::class, 'index'])->name('admin.tempIndex');
        Route::get('tempLoadProducts', [AdminTemporaryController::class, 'loadProducts'])->name('admin.tempLoadProducts');
        Route::get('tempEdit/{id}', [AdminTemporaryController::class, 'tempEdit'])->name('admin.tempEdit');
        Route::post('tempUpdate/{id}', [AdminTemporaryController::class, 'tempUpdate'])->name('admin.tempUpdate');
        Route::delete('tempShow/delete/{id}', [AdminTemporaryController::class, 'tempDelete'])->name('admin.tempDelete');
        Route::delete('tempDeleteAll', [AdminTemporaryController::class, 'destroy_temp_products'])->name('admin.destroy_temp_products');
    
        Route::get('allfeedback', [AdminFeedbackController::class, 'index'])->name('product.feedback.index');
        Route::get('feedback/{id}', [AdminFeedbackController::class, 'show'])->name('product.feedback.show');
        Route::delete('feedback/{id}/{flag}', [AdminFeedbackController::class, 'destroy'])->name('product.feedback.destroy');

        Route::resource('admin_about', AdminAboutController::class);

        // Clear Products
        Route::get('clearProducts', [ClearProductsController::class, 'index'])->name('clearProducts.index');
        Route::post('clearProducts', [ClearProductsController::class, 'store'])->name('clearProducts.store');
    });    
});



/*------------------------------------------------------------------------------------------------------------------
=============================================== ADMIN ROUTES ENDS HERE======================================================
-------------------------------------------------------------------------------------------------------------------*/

Route::group(['prefix'=>'editor'], function(){
    Route::group(['middleware'=>[ 'EditorMiddleware', 'prevent-back-history', 'auth']],function(){
        Route::resource('editor', EditorController::class);
        Route::resource('editor_products', EditorProductsController::class);
        Route::resource('editor_lego_minifigures_form', EditorLegoMiniFiguresController::class);
        Route::resource('editor_hot_toys', EditorHotToysController::class);
    });
});

Route::group(['prefix'=>'contributor'], function(){
    Route::group(['middleware'=>[ 'ContributorMiddleware', 'prevent-back-history', 'auth']],function(){
        Route::resource('contributor', ContributorController::class);
        Route::resource('contributor_products', ContributorProductsController::class);
        Route::resource('contributor_lego_minifigures', ContributorLegoMiniFiguresController::class);
        Route::resource('contributor_hottoys', ContributorHotToysController::class);
    });
});




/*------------------------------------------------------------------------------------------------------------------
=============================================== EDITOR ROUTES (ABILITY TO ADD/EDIT & DEACTIVATE PRODUCT) ======================================================
-------------------------------------------------------------------------------------------------------------------*/









/*------------------------------------------------------------------------------------------------------------------
=============================================== AUTH ROUTES ======================================================
-------------------------------------------------------------------------------------------------------------------*/

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register/{planID}/{flag}', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('post.register');

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class , 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);

// Custom Password Reset Route
Route::get('emailPost', [PasswordResetUccController::class, 'index'])->name('password.email.ucc.index');
Route::post('emailPost', [PasswordResetUccController::class, 'emailPost'])->name('password.email.ucc');
Route::get('ResetPassword/{token}/{email}', [PasswordResetUccController::class, 'reset_password_custom'])->name('reset_password_custom')->middleware('prevent-back-history');
Route::post('ResetPasswordEdit', [PasswordResetUccController::class, 'reset_password_edit'])->name('password.email.ucc.edit');

Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

/*------------------------------------------------------------------------------------------------------------------
=============================================== AUTH ROUTES END ======================================================
-------------------------------------------------------------------------------------------------------------------*/

/* Auth::routes(); */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Subscription Plans
Route::get('createPlan', [PlanController::class, 'createPlan']);
Route::get('activatePlan/{planID}', [PlanController::class, 'executePlan'])->name('execute.plan');

// Document Routes
Route::get('general_disclaimer', [DocumentsController::class, 'general_disclaimer'])->name('general_disclaimer');
Route::get('privacy_policy', [DocumentsController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('terms_and_conditions', [DocumentsController::class, 'terms_and_conditions'])->name('terms_and_conditions');

// Agreement Routes
Route::post('createAgreement', [AgreementController::class, 'createAgreement'])->name('paypal.createAgreement');
Route::get('execute-agreement/{token}', [AgreementController::class, 'executeAgreement'])->name('paypal.executeAgreement');


