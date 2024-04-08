## Installation

    > composer create-project laravel/laravel:^9.0 laravel-9

##
 
### Laravel Routes

- Default

    ```php
    Route::get('/', function () {
        return view('welcome');
    });
    ```

- Using Controller

    ```php
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/about', 'aboutPage');
        Route::get('/contact', 'contactPage');
    });
    ```







