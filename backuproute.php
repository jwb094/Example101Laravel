<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    //  $jobs =  Job::all();
    //  dd($jobs);
    return view('home', []);
});

//index
Route::get('/jobs',[JobController::class,'index']);
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
Route::get('/job/{job}', function (Job $job) {});
//Route::get('/job/{job}', function (Job $job) {
    // $job = Job::find($id);
    // if (!$job) {
    //     abort(404);
    // }
//      return view('jobs.show', ['job' => $job]);
// });



//create
Route::get('/jobs/create', [JobController::class,'create']);
// Route::get('/jobs/create', function () {
//     return view('jobs.create');
// });

//save job
Route::post('/jobs',[JobController::class,'store']);
// dd(request()->all());


//Edit
Route::get('/job/{job}/edit', [JobController::class,'edit']);



//update
Route::patch('/job/{job}', [JobController::class,'update']);
    //validate

    //authorize
    //update the job
  //  $job = Job::findOrFail($id);
  
    /**
    * $job->title = request('title');
    * $job->salary = request('salary');
    * $job->save()
    */
    

    //dd($job);
    // and persist
    //redirect to the job page
 
});


//destroy {no need to add /delete}
Route::delete('/jobs/{job}',[JobController::class,'destroy']) {

    //autorise
   // dd(":)");
    //delete the job
 

});

Route::get('/contact', function () {
    return view('contact');
});
