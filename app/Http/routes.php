<?php
Route::get('/test', 'MainController@test');
Route::get('/', 'MainController@index');

Route::group(['prefix' => 'livescores'], function()
{
    Route::get('/', ['uses' => 'MainController@eventSports']);
    Route::get('/ratio/{id}', ['as' => 'livescores.ratio', 'uses' =>'MainController@eventRatio']);
    Route::post('/deposit', ['as' => 'livescores.deposit', 'uses' =>'MainController@eventDeposit']);
});

Route::get('/login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('/login', ['as' => 'auth.login-post', 'uses' => 'Auth\AuthController@postLogin']);


// Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('/register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('/register', ['as' => 'auth.register-post', 'uses' => 'Auth\AuthController@postRegister']);
Route::get('/password', ['as' => 'auth.password', 'uses' => 'Auth\PasswordResetController@getPasswordReset']);
Route::post('/password',        ['as' => 'auth.password-post', 'uses' => 'Auth\PasswordResetController@postPasswordReset']);
Route::get('/password/{token}', ['as' => 'auth.reset', 'uses' => 'Auth\PasswordResetController@getPasswordResetForm']);
Route::post('/password/{token}',['as' => 'auth.reset-post', 'uses' => 'Auth\PasswordResetController@postPasswordResetForm']);

Route::get('download/{orderId}/{filename}', 'OrderController@download');
Route::get('products/images/{filename}', [
	'as' => 'images', 'uses' => 'ProductController@get']);
Route::get('/{slug}.{product_id}', [
	'as' => 'product.view', 'uses' => 'MainController@viewProduct', 'where' => ['slug', '[A-Za-z0-9_\-]+', 'product_id' => '[0-9]+']]);

// social

$a = 'social.';
Route::get('/social/redirect/{provider}',   ['as' => $a . 'redirect',   'uses' => 'Auth\AuthController@getSocialRedirect']);
Route::get('/social/handle/{provider}',     ['as' => $a . 'handle',     'uses' => 'Auth\AuthController@getSocialHandle']);

// Route::get('facebook/login', function(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb)
// {
//     // Send an array of permissions to request
//     $login_url = $fb->getLoginUrl(['email']);

//     // Obviously you'd do this in blade :)
//     echo '<a href="' . $login_url . '">Logins</a>';
// });
// Route::get('facebook/callback', 'FacebookController@getUserInfo');
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function()
{
    $a = 'admin.';
    Route::get('/', ['as' => $a . 'index', 'uses' => 'AdminController@index']);
    Route::get('/user', ['uses' => 'AdminController@userManager', 'as' => 'admin.user']);
    Route::group(['prefix' => 'event'], function()
    {
        Route::get('/', ['as' => 'event.index', 'uses' => 'EventSportController@index']);
        Route::group(['prefix' => 'import', 'as' => 'event.import'], function()
        {
            Route::get('/', 'TeamController@importEventSport'); // from team
            Route::post('/', 'TeamController@importCsvEventSport');
        });
        Route::group(['prefix' => 'update/{id}', 'where' => ['id' => '[0-9]+', 'status' => '[0-1]+'], 'as' => 'event.update'], function()
        {
            Route::get('/', 'EventSportController@edit'); // from team
            Route::post('/', 'EventSportController@update');
        });
    });
    Route::group(['prefix' => 'ratio'], function()
    {
        Route::get('/', ['as' => 'ratio.index', 'uses' => 'EventRatioController@index']);
        Route::group(['prefix' => 'update/{id}', 'where' => ['id' => '[0-9]+', 'status' => '[0-1]+'], 'as' => 'ratio.update'], function()
        {
            Route::get('/', 'EventRatioController@edit'); // from team
            Route::post('/', 'EventRatioController@update');
        });
    });
    Route::group(['prefix' => 'team'], function()
    {

        Route::get('/', ['as' => 'home', 'uses' => 'TeamController@index']);

        Route::group(['prefix' => 'create', 'as' => 'Team.create'], function()
        {
            Route::get('/', 'TeamController@create');
            Route::post('/', 'TeamController@store');
        });
        Route::group(['prefix' => 'update/{id}', 'as' => 'Team.update'], function()
        {
            Route::get('/', 'TeamController@edit');
            Route::post('/', 'TeamController@update');
        });
        Route::get('destroy/{id}', ['uses' => 'TeamController@destroy', 'where' => ['id' => '[0-9]+'], 'as' => 'Team.delete']);
        Route::group(['prefix' => 'importTeam', 'as' => 'Team.importTeam'], function()
        {
            Route::get('/import', 'TeamController@import');
            Route::post('/importTeam', 'TeamController@importTeam');
        });
    });
    Route::group(['prefix' => 'products'], function()
        {

            Route::get('/', ['as' => 'products.home', 'uses' => 'ProductController@index']);
            Route::group(['prefix' => 'create', 'as' => 'products.create'], function()
            {
                Route::get('/', 'ProductController@newProduct');
                Route::post('/', 'ProductController@add');
            });
            Route::group(['prefix' => 'update/{id}', 'as' => 'products.update'], function()
            {
                Route::get('/', 'ProductController@edit');
                Route::post('/', 'ProductController@update');
            });
            Route::get('destroy/{id}', ['uses' => 'ProductController@destroy', 'where' => ['id' => '[0-9]+'], 'as' => 'products.delete']);
        });
});

Route::group(['' => 'auth:all'], function()
{
	Route::group(['prefix' => 'user'], function()
	{
	    $a = 'user.';
	    Route::get('/', ['as' => $a . 'index', 'uses' => 'UserController@index' ]);
	    Route::get('/home', ['as' => $a . 'home', 'uses' => 'UserController@home']);

        Route::group(['prefix' => 'account', 'as' => $a.'account'], function()
        {
            Route::get('/', ['uses' => 'UserController@account']);
            Route::post('/', ['uses' =>'UserController@updateAccount']);
            
        });
        Route::group(['prefix' => 'products'], function()
        {

            Route::get('/', ['as' => 'products.home', 'uses' => 'ProductController@index']);
            Route::group(['prefix' => 'create', 'as' => 'products.create'], function()
            {
                Route::get('/', 'ProductController@newProduct');
                Route::post('/', 'ProductController@add');
            });
            Route::group(['prefix' => 'update/{id}', 'as' => 'products.update'], function()
            {
                Route::get('/', 'ProductController@edit');
                Route::post('/', 'ProductController@update');
            });
            Route::get('destroy/{id}', ['uses' => 'ProductController@destroy', 'where' => ['id' => '[0-9]+'], 'as' => 'products.delete']);
        });
	});
    $a = 'authenticated.';
    Route::get('/logout', ['as' => $a . 'logout', 'uses' => 'Auth\AuthController@getLogout']);
    
	Route::get('/settings', 'ProductController@settings');
	Route::get('/order/{orderId}', 'OrderController@viewOrder');
	Route::get('/ordered/{orderedId}', 'OrderController@viewOrdered');
    Route::get('/order', 'OrderController@index');
    Route::get('/ordered', 'OrderController@ordered');
    Route::post('/checkout', 'OrderController@checkout');
	Route::get('/addProduct/{productId}', 'CartController@addItem');
	Route::get('/removeItem/{productId}', 'CartController@removeItem');
	Route::get('/cart', 'CartController@showCart');
});

