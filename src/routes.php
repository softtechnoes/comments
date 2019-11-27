<?php

Route::post('comments', config('comments.controller') . '@store');
Route::GET('delete-comments/{comment}', config('comments.controller') . '@destroy');
Route::GET('comments/{comment}', config('comments.controller') . '@update');
Route::post('reply-comments/{comment}', config('comments.controller') . '@reply');
