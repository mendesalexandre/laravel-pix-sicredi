<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
  $hello = new MendesAlexandre\PixSicredi\Hello('Alexandre');
  return $hello->sayHello();
});
