<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    //  $jobs =  Job::all();
    //  dd($jobs);
    return view('home', []);
});

/*Route::get('/jobs', function () {
    $jobs =  Job::with('employer')->latest()->paginate(12);
    //$jobs =  Job::all();
    return view('jobs.index', [
        'jobs' => $jobs
        ]);
        /**
         * string
         * view partial file can be blade.php / 
         
         });*/
         
         
         // Route::get('posts/{post:id}');
         
         //show
         //Route::get('/job/{job}', function (Job $job) {});
         
         
        
        Route::view('/','home');

        // Route::controller(JobController::class)->group(function(){
        //     //index
        //     Route::get('/jobs','index');
        //     //create
        //     Route::get('/jobs/create', 'create');
        //     //save job
        //     Route::post('/jobs','store');
        //     //show
        //     Route::get('/jobs/{job}', 'show');
        //     //edit
        //     Route::get('/jobs/{job}/edit', 'edit');
        //     //update
        //     Route::patch('/jobs/{job}', 'update');
        //     //destroy {no need to add /delete}
        //     Route::delete('/jobs/{job}','destroy');
        // });


        // Route::resource('jobs',JobController::class,[
        //   //  'except' => ['edit']
        //   'only' => ['index','show','create','store']
        // ]); 

Route::get('/contact', function () {
    return view('contact');});




//index
 Route::get('/jobs',[JobController::class,'index']);
 Route::get('/jobs/create', [JobController::class,'create']);
 //save job
 Route::post('/jobs',[JobController::class,'store'])->middleware('auth');
 //show
 Route::get('/jobs/{job}', [JobController::class,'show']);
 //edit
 Route::get('/jobs/{job}/edit', [JobController::class,'edit'])
    ->middleware('auth')
    ->can('edit-job', 'job');
 //update
 Route::patch('/jobs/{job}', [JobController::class,'update']);
 //destroy {no need to add /delete}
 Route::delete('/jobs/{job}',[JobController::class,'destroy']);
// Route::resource('jobs', JobController::class)->only(['index','show']);
// Route::resource('jobs', JobController::class)->except(['index','show'])->middleare('auth');



//    Route::delete('/jobs/{job}',[JobController::class,'destroy']);




    Route::get('/register',[RegisteredUserController::class, 'create']);
    Route::post('/register',[RegisteredUserController::class, 'store']);
    Route::get('/login',[SessionController::class, 'create']);
    Route::post('/login',[SessionController::class, 'store']);
    Route::post('/logout',[SessionController::class, 'destroy']);