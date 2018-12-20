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
 * Add Testimonials
 */
Route::get('/messages/create', 'MessageController@create');

Route::post('/messages/post', 'MessageController@store');

/*
 * Show Testimonials
 */
Route::get('/messages/search', 'MessageController@index');



/*
 * Edit Testimonials
 */
Route::get('/messages/{id}', 'MessageController@crud');
Route::get('/messages/{id}/edit', 'MessageController@editMessage');
Route::get('/messages/{id}/delete', 'MessageController@deleteMessage');

Route::put('/messages/{id}', 'MessageController@update');





#######

Route::get('/test2', 'MessageController@practiceX');






Route::get('/test', function () {
    return view('abc');
});