<?php

use App\Models\Students;
use App\Models\Todo;
use Illuminate\Support\Facades\Route;


//Home route
 Route::get('/', function () {
     return view('welcome');
 });

 //Student route
Route::get('/students', function () {
    return view('students', [
        'students'=> Students::all()
    ]); });

//About route
Route::get('/about', function () {
    return view ('about');
});

//Todo route
Route::get('/todo', function () {
    return view ('todo',['todo' => Todo::all()]);

});

//Todo (POST) route
Route:: post('/todo', function(){
    request()-> validate([
    'task' => ['required', 'min:3'],
    'time' => ['required']
    ]);

    Todo::create([
        'task' => request('task'),
        'time' => request('time'),

    ]);

    return redirect('/todo');
});
Route::delete('todo/{id}', function ($id) {
    $todo = Todo::findorfail($id);
    $todo->delete();

    return redirect('/todo');

});
Route::delete('/todo/{id}', function ($id){
    //authorize the request (on hold)

    //delete the job
    Todo::findorfail($id)->delete();

    //redirect
    return redirect('/todo');



});

