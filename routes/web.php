<?php



Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }
    dump($debug);
});


/*
 * Home
 */
Route::get('/', 'WelcomeController');

/*
 * Show All Testimonials
 */
Route::get('/messages', 'MessageController@index');

/*
 * Add Testimonials - View
 */
Route::get('/messages/create', [
    'middleware' => 'auth',
    'uses' => 'MessageController@create'
]);

/*
 * Add Testimonials - Process
 */

Route::post('/messages', 'MessageController@store');

/*
 * Edit Single Testimonial - View
 */
Route::get('/messages/{id}/edit', 'MessageController@editMessage');

/*
 * Edit Single Testimonial - Process
 */
Route::put('/messages/{id}', 'MessageController@updateMessage');

/*
 * Delete Single Testimonial
 */
Route::delete('/messages/{id}/delete', 'MessageController@destroy');

#######


Auth::routes();

Route::get('/show-login-status', function () {
    $user = Auth::user();

    if ($user) {
        dump('You are logged in.', $user->toArray());
    } else {
        dump('You are not logged in.');
    }

    return;
});

/*
 * View About page
 */
Route::get('/about', 'MessageController@about');



