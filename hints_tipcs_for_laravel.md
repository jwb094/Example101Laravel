composer require barryvdh/laravel-debugbar --dev

https://medium.com/@AceKYD/custom-pagination-view-in-laravel-5-with-arrays-769cd21bea74

php artisan vendor:publish = overwrite built-in logic/componentns/features



Factories used for scaffold data & prepare tests

Database seeders are classes that can trigger 1+ factories /DB calls


FORM + CSRF 

View  
<form method="POST" action="/jobs">
    @csrf

</form >
Route 
route::post('jobs/create ,function () {
    Logic
    
})



Cross Script Request Forgery = help prevent malparactice from hackers


Access Request  Attributes 

request('title') //request()->all()


FIllable vs guarded 

[https://codewithtravel.medium.com/laravel-mass-assignment-guarded-or-fillable-7c3a64b49ca6](Laravel Mass Assignment, Guarded or Fillable? - Code With Travel)

Main topic is main assignment  - process of sending an array of data to be saved to a model at once


Authorization

Policies- policies connected to eloqient models "Like a Gate"



FORMS

Route Reloaded

normal = 
<?php
Route::get('/job/{id}', function ($id) 

Route::get('/job/{job}', function (Job $job) 



<x-layout></x-layout>  == layout = layout.blade.php
<x-form-field></x-form-field>  == components = form-field.blade.php


Assets Build 

- vite = preinstalled

npm run biuld/dev
HOT Reloading(HMR) - instant updates without reloading the pag or losing app state 

A pick between vite pre install and Laravel mix