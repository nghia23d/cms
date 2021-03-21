<?php

Route::group(
    [
        'prefix' => 'cms',
        'namespace' => 'ngia23d\cms\Http\Controllers',
        'as' => 'cms.'
    ],
    function () {
        Route::view('/', 'cms::test');
    }
);
