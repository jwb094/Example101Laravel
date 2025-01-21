<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Job;
use App\Models\User;
class JobController extends Controller
{
    //
    public function index(){
       // dd("hi");

        $jobs =  Job::with('employer')->latest()->paginate(12);

        return view('jobs.index', [
        'jobs' => $jobs
    ]);
    }


    public function create(){
        return view('jobs.create');
    }


    public function show(Job $job,User $user){
       // $user = auth()->user();
        //dd( $user->id);
        $editMode = true;
        //dd(auth()->user());
        if(auth()->user() == null){
            $editMode = false;
        }  else if($job->employer['user_id'] !== auth()->user()->id){
            $editMode = false;
         }
         //['job' => $job,' editMode' =>  $editMode ]
        return view('jobs.show', compact( 'job','editMode' ));
    }


    public function store(){
        request()->validate([
            'title' => ['required','min:3'],
            'salary' => ['required'],
        ]);
    
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1  
        ]);
    
        return redirect('/jobs');
    }


    public function update(Job $job){
        request()->validate([
            'title' => ['required','min:3'],
            'salary' => ['required'],
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
           
        ]);

        return redirect('/jobs/'. $job->id);
    }


    public function edit(Job $job){
        //Gates Step 2
        // Gate::define('edit-job',function(User $user, Job $job){
        //     return $job->employer->user->is($user);
        // });

        Gate::authorize('edit-job',$job);
        //Step 4Can
        // if(Auth::user()->cannot('edit-job', $job))
        // {
        //         dd('failure');
        // }
        
        //In Line & Layered Step 1
        //if a guest user
        //if(Auth::guest()){
         //   return redirect('/login');
        //}

        
        //Not the same user who created the Job
        // if($job->employer->user->isNot(Auth::user())){
        //     abort(403);
        // }

        return view('jobs.edit', ['job' => $job]);
    }

    public function destroy(Job $job){
        Job::findOrFail($job)->delete();

        //redirect
        return redirect('/jobs');
    }
}
