<?php
Route::get('/', function () {
    return response()->json(['No api params'],404);
});
