<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/kiosk_user_purchase_request', 'KioskPRUserController@index');

Route::get('/home', 'HomeController@index');

// Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'AdminPostsController@post']);

Route::get('/kiosk_user', [
        'uses' => 'KioskUserController@index',
        'as' => 'kiosk_user'
    ]);

// Route::get('/kiosk_user_purchase_request', [
//         'uses' => 'PurchaseRequestUserController@index',
//         'as' => 'kiosk_user_purchase_request'
//     ]);

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('index');
    })->name('main');

    Route::get('/author', [
        'uses' => 'AppController@getAuthorPage',
        'as' => 'author',
        'middleware' => 'roles',
        'roles' => ['Author']
    ]);

    Route::get('/author/generate-article', [
        'uses' => 'AppController@getGenerateArticle',
        'as' => 'author.article',
        'middleware' => 'roles',
        'roles' => ['Author']
    ]);

    Route::get('/admin', [
        'uses' => 'AppController@getAdminPage',
        'as' => 'admin',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);


    Route::get('/budget', [
        'uses' => 'AppController@getBudgetPage',
        'as' => 'budget',
        'middleware' => 'roles',
        'roles' => ['Budget']
    ]);

    Route::get('/accounting', [
        'uses' => 'AppController@getAccountingPage',
        'as' => 'accounting',
        'middleware' => 'roles',
        'roles' => ['Accounting']
    ]);

    Route::get('/treasurer', [
        'uses' => 'AppController@getTreasurerPage',
        'as' => 'treasurer',
        'middleware' => 'roles',
        'roles' => ['Treasurer']
    ]);

    Route::get('/bac', [
        'uses' => 'AppController@getBACPage',
        'as' => 'bac',
        'middleware' => 'roles',
        'roles' => ['BAC']
    ]);

    Route::get('/governor', [
        'uses' => 'AppController@getPGOPage',
        'as' => 'governor',
        'middleware' => 'roles',
        'roles' => ['PGO']
    ]);

    Route::get('/pgso', [
        'uses' => 'AppController@getPGSOPage',
        'as' => 'pgso',
        'middleware' => 'roles',
        'roles' => ['PGSO']
    ]);

    Route::get('/provadmin', [
        'uses' => 'AppController@getProvAdminPage',
        'as' => 'provadmin',
        'middleware' => 'roles',
        'roles' => ['ProvAdministrator']
    ]);

    Route::post('/admin/assign-roles', [
        'uses' => 'AppController@postAdminAssignRoles',
        'as' => 'admin.assign',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);

    Route::get('/signup', [
        'uses' => 'AuthController@getSignUpPage',
        'as' => 'signup'
    ]);

    Route::post('/signup', [
        'uses' => 'AuthController@postSignUp',
        'as' => 'signup'
    ]);

    Route::get('/signin', [
        'uses' => 'AuthController@getSignInPage',
        'as' => 'signin'
    ]);

    Route::post('/signin', [
        'uses' => 'AuthController@postSignIn',
        'as' => 'signin'
    ]);

    Route::get('/logout', [
        'uses' => 'AuthController@getLogout',
        'as' => 'logout'
    ]);

    Route::post('/dashboard', [
        'uses' => 'AuthController@getDashboardPage',
        'as' => 'dashboard'
    ]);


    

    Route::get('/acc_vouchers', [
        'uses' => 'AccountingController@index',
        'as' => 'acc_vouchers'
    ]);

    Route::get('/acc_payrolls', [
        'uses' => 'PayrollAccountingController@index',
        'as' => 'acc_payrolls'
    ]);



    Route::get('/acc_prs', [
        'uses' => 'PRAccountingController@index',
        'as' => 'acc_prs'
    ]);

    Route::get('/acc_purchase_orders', [
        'uses' => 'AccountingPurchaseOrderController@index',
        'as' => 'acc_purchase_orders'
    ]);

    Route::get('/acc_reqs', [
        'uses' => 'RequisitionAccountingController@index',
        'as' => 'acc_reqs'
    ]);

    Route::get('/admin_acc_payrolls', [
        'uses' => 'AdminAccountingController@index',
        'as' => 'admin_acc_payrolls'
    ]);

    Route::get('/admin_vouchers', [
        'uses' => 'AdminVoucherController@index',
        'as' => 'admin_vouchers'
    ]);

    Route::get('/admin_purchase_request', [
        'uses' => 'AdminPurchaseRequestController@index',
        'as' => 'admin_purchase_request'
    ]);

    Route::get('/bac_prs', [
        'uses' => 'PRBACController@index',
        'as' => 'bac_prs'
    ]);

    Route::get('/bac_prs_released', [
        'uses' => 'BACPRsReleasedController@index',
        'as' => 'bac_prs_released'
    ]);

    Route::get('/bac_vouchers', [
        'uses' => 'VouchersBACController@index',
        'as' => 'bac_vouchers'
    ]);

    Route::get('/bac_reqs', [
        'uses' => 'RequisitionBACController@index',
        'as' => 'bac_reqs'
    ]);

    Route::get('/bac_payrolls', [
        'uses' => 'PayrollBACController@index',
        'as' => 'bac_payrolls'
    ]);

    Route::get('/bac_purchase_order', [
        'uses' => 'BACPurchaseOrderController@index',
        'as' => 'bac_purchase_order'
    ]);



    Route::get('/bud_vouchers', [
        'uses' => 'VoucherBudgetController@index',
        'as' => 'bud_vouchers'
    ]);

    Route::get('/bud_vouchers_released', [
        'uses' => 'BudgetVoucherReleasedController@index',
        'as' => 'bud_vouchers_released'
    ]);

    Route::get('/bud_prs', [
        'uses' => 'BudgetPRsController@index',
        'as' => 'bud_prs'
    ]);

    Route::get('/bud_purchase_orders', [
        'uses' => 'BudgetPurchaseOrderController@index',
        'as' => 'bud_purchase_orders'
    ]);

    Route::get('/pgo_payrolls', [
        'uses' => 'PGOPayrollController@index',
        'as' => 'pgo_payrolls'
    ]);

    Route::get('/pgo_payroll_released', [
        'uses' => 'PGOPayrollReleasedController@index',
        'as' => 'pgo_payroll_released'
    ]);

    Route::get('/pgo_purchase_request', [
        'uses' => 'PGOPurchaseRequestController@index',
        'as' => 'pgo_purchase_request'
    ]);

    Route::get('/pgo_purchase_request_released', [
        'uses' => 'PGOPurchaseRequestReleasedController@index',
        'as' => 'pgo_purchase_request_released'
    ]);

    Route::get('/pgo_purchase_order', [
        'uses' => 'PGOPurchaseOrderController@index',
        'as' => 'pgo_purchase_order'
    ]);

    Route::get('/pgo_purchase_order_released', [
        'uses' => 'PGOPurchaseOrderReleasedController@index',
        'as' => 'pgo_purchase_order_released'
    ]);


    Route::get('/pgo_vouchers', [
        'uses' => 'PGOVoucherController@index',
        'as' => 'pgo_vouchers'
    ]);

    Route::get('/pgo_voucher_released', [
        'uses' => 'PGOVoucherReleasedController@index',
        'as' => 'pgo_voucher_released'
    ]);



    Route::post('is_released', [
    'uses' => 'PRBudgetController@update',
    'as' => 'is_released'
    ]);

    Route::get('/bud_released', [
        'uses' => 'BudgetRelPRsController@index',
        'as' => 'bud_released'
    ]);

    Route::get('/bud_purchase_order_released', [
        'uses' => 'BudgetPurchaseOrderReleasedController@index',
        'as' => 'bud_purchase_order_released'
    ]);

    Route::get('/bud_payroll_released', [
        'uses' => 'BudgetRelPayrollController@index',
        'as' => 'bud_payroll_released'
    ]);

    Route::get('/bud_voucher_released', [
        'uses' => 'BudgetRelVoucherController@index',
        'as' => 'bud_voucher_released'
    ]);

    Route::get('/bud_purchase_order', [
        'uses' => 'BudgetPurchaseRequestController@index',
        'as' => 'bud_purchase_order'
    ]);

    Route::get('/acc_prs_released', [
        'uses' => 'AccRelPRsController@index',
        'as' => 'acc_prs_released'
    ]);

    Route::get('/acc_payroll_released', [
        'uses' => 'AccRelPayrollController@index',
        'as' => 'acc_payroll_released'
    ]);

    Route::get('/acc_voucher_released', [
        'uses' => 'AccRelVoucherController@index',
        'as' => 'acc_voucher_released'
    ]);

    Route::get('/acc_purchase_order', [
        'uses' => 'AccountingPurchaseOrderController@index',
        'as' => 'acc_purchase_order'
    ]);

    Route::get('/acc_purchase_order_released', [
        'uses' => 'AccountingPurchaseOrderReleasedController@index',
        'as' => 'acc_purchase_order_released'
    ]);
    
    // Route::get('/bud_purchase_order', [
    //     'uses' => 'BudgetPurchaseRequestController@index',
    //     'as' => 'bud_purchase_order'
    // ]);


     Route::get('/treas_purchase_order', [
        'uses' => 'TreasurerPurchaseOrderController@index',
        'as' => 'treas_purchase_order'
    ]);

     Route::get('/treas_purchase_order_released', [
        'uses' => 'TreasurerPurchaseOrderReleasedController@index',
        'as' => 'treas_purchase_order_released'
    ]);


    Route::get('/treas_prs_released', [
        'uses' => 'TreasRelPRsController@index',
        'as' => 'treas_prs_released'
    ]);

    Route::get('/treas_payroll_released', [
        'uses' => 'TreasRelPayrollController@index',
        'as' => 'treas_payroll_released'
    ]);

    Route::get('/bud_reqs', [
        'uses' => 'RequisitionBudgetController@index',
        'as' => 'bud_reqs'
    ]);

    Route::get('/bud_payrolls', [
        'uses' => 'PayrollBudgetController@index',
        'as' => 'bud_payrolls'
    ]);

    

    Route::get('/treas_vouchers', [
        'uses' => 'TreasurerController@index',
        'as' => 'treas_vouchers'
    ]);

    Route::get('/treas_voucher_released', [
        'uses' => 'TreasurerVoucherReleasedController@index',
        'as' => 'treas_voucher_released'
    ]);

   
    Route::get('/treas_prs', [
        'uses' => 'TreasPRsController@index',
        'as' => 'treas_prs'
    ]);

    // Route::get('/treas_reqs', [
    //     'uses' => 'TreasurerController@index',
    //     'as' => 'treas_reqs'
    // ]);

    Route::get('/treas_payroll', [
        'uses' => 'TreasPayrollController@index',
        'as' => 'treas_payroll'
    ]);

    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);

    Route::get('/pgso_home', [
        'uses' => 'PGSOController@index',
        'as' => 'pgso_home'
    ]);

    Route::get('/pgso_vouchers', [
        'uses' => 'PGSOVoucherController@index',
        'as' => 'pgso_vouchers'
    ]);

    

    Route::get('/pgso_prs', [
        'uses' => 'PGSOPRController@index',
        'as' => 'pgso_prs'
    ]);

    Route::get('/pgso_prs', [
        'uses' => 'PGSOPRController@index',
        'as' => 'pgso_prs'
    ]);

    Route::get('/user_search', [
        'uses' => 'KioskController@index',
        'as' => 'user_search'
         ]);

    Route::get('/user_web', [
        'uses' => 'UserIndexController@index',
        'as' => 'user_web'
         ]);

    Route::get('/user_search_pr_input', [
        'uses' => 'UserWebPRSearchController@index',
        'as' => 'user_search_pr_input'
         ]);

    Route::get('/user_search_payroll_input', [
        'uses' => 'UserWebPayrollSearchController@index',
        'as' => 'user_search_payroll_input'
         ]);

    Route::get('/user_search_voucher_input', [
        'uses' => 'UserWebVoucherSearchController@index',
        'as' => 'user_search_voucher_input'
         ]);

    Route::get('/user_search_pr_result', [
        'uses' => 'UserWebPRSearchResultController@index',
        'as' => 'user_search_pr_result'
         ]);

    Route::get('/user_search_payroll_result', [
        'uses' => 'UserWebPayrollSearchResultController@index',
        'as' => 'user_search_payroll_result'
         ]);

    Route::get('/user_search_voucher_result', [
        'uses' => 'UserWebVoucherSearchResultController@index',
        'as' => 'user_search_voucher_result'
         ]);



    Route::get('/bac_prs', [
        'uses' => 'PRBACController@index',
        'as' => 'bac_prs'
    
    ]);

    Route::get("my-search_voucher","KioskController@index");

    Route::get("my-search_prs","KioskPurchaseRequestController@index");

    Route::get("my-search_pos","KioskPurchaseOrderController@index");

    Route::get("my-search_payroll","KioskPayrollController@index");

    Route::resource('/kiosk_user','KioskUserController');
    Route::resource('/acc_purchase_orders','AccountingPurchaseOrderController');
    Route::resource('/bac_purchase_order','BACPurchaseOrderController');
    Route::resource('/bud_purchase_order','BudgetPurchaseOrderController');
    Route::resource('/bud_voucher','VoucherBudgetController');
    Route::resource('/is_released','PRBudgetController');
    Route::resource('/treas_payrolls','TreasPayrollController');
    Route::resource('/pgo_payroll','PGOPayrollController');
    Route::resource('/pgo_voucher','PGOVoucherController');
    Route::resource('/pgso_vouchers','PGSOVoucherController');
    Route::resource('/pgso_prs','PGSOPRController');
    // Route::resource('/pgso_payrolls','PGSOPRsController');

    Route::resource('/treas_voucher','TreasurerController');

    Route::resource('/pgo','AppController@getIndex');
    
    
    Route::resource('/treasurer_prs','TreasPRsController');
    
    Route::get('/budget_payrolls', [
        'uses' => 'PayrollBudgetController@index',
        'as' => '/budget_payrolls'
    ]);



    
});
    Route::resource('/pgo_payroll','PGOPayrollController');

    Route::resource('/treasurer_payroll','TreasurerPayrollController');

    Route::resource('/account_payroll','PayrollAccountingController');
   
    Route::resource('/budget_payrolls','PayrollBudgetController');

    Route::resource('/bac_pos','BACPurchaseOrderController');
    Route::resource('/acc_payrollses','PayrollAccountingController');
    Route::resource('/treas_payrollses','TreasurerPayrollController');
    Route::resource('/pgo_pgo', 'PGOPurchaseRequestController');
    Route::resource('/treasurer_prs', 'TreasPRsController');
    Route::resource('/treasurer_vouchers', 'TreasurerController');
     Route::resource('/governor_vouchers', 'TreasurerController');

    Route::resource('/bud_prequest','BudgetPRsController');
    Route::resource('/vouchers','VoucherController');
    Route::resource('/budget_vouchers','BudgetVoucherController');
    Route::resource('/bac_payrollss','BACPayrollController');
    Route::resource('/bac_prses','BACPRsController');
    //Route::resource('/bac_prs','BACPRsController');

    Route::resource('/department','DepartmentController');
    Route::resource('/claimant','ClaimantController');
    Route::resource('/contractor','SupplierContractorController');
    Route::resource('/purchase_request','PurchaseRequestController');
    Route::resource('/requisition','RequisitionController');
    
    Route::resource('/vnoobrs','VoucherNoOBRController');
    Route::resource('/payrolls','PayrollController');
    Route::resource('/category','CategoryclientController');
    Route::resource('/budget_admin','BudgetAdminController');

    Route::resource('/accounting_vouchers','AccountingController');
    // Route::resource('/budget_vouchers','BudgetController');
    Route::resource('/accounting_prs','PRAccountingController');

    Route::resource('/budget_prs','PRBudgetController');

    Route::resource('/bacs','PRBACController');

    Route::resource('/bacs_pos','BACPurchaseOrderController');

    Route::resource('/budget_payrolls','PayrollBudgetController');

    Route::resource('/reqs','RequisitionAccountingController');

    Route::resource('/admin_index','AdminIndexController');

    Route::resource('/is_released','PRBudgetController');

    Route::resource('/requisition','RequisitionBudgetController');
    

Route::get('/admin_lte', function(){

    return view('admin_template');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/search','SearchRecordController@index');
Route::resource('/accounting_vouchers_users','UsersAccountingController');
Route::resource('/wells','WellsController');
Route::resource('/user_prs','UserPayrollController');
Route::resource('/acc_voucherses','VoucherAccountController');
Route::resource('/acc_prses','PRAccountController');

Route::resource('/acc_prequest','PRAccountController');

Route::resource('user_account','AccountUserController');
