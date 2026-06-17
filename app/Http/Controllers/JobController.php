<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use PhpParser\Builder\Function_;
use App\Models\Job;
//use App\Models\User;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{

    public function student()
    {
        return view('students', [
        'jobs' => Job::with('employer')->simplePaginate(19)

        ]);
    }


    public function index()
    {
     return view('jobs.index', [
       'jobs' => Job::with('employer')->latest()->simplePaginate(7)


    ]);    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);

    }

    public function store()
    {
        //dd(request('title')); validation
        request()-> validate([
        'title' => ['required', 'min:3'],
        'pay' => ['required'],
        ]);
        //create job
        Job::create([
            'title'=> request('title'),
            'pay'=> request('pay'),
            'employer_id'=> 16
        ]);
        //return a view
        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        //authorize (on hold..)

        //validate
        request()-> validate([
            'title' => ['required', 'min:3'],
            'pay' => ['required'],
            ]);

        //update job
        $job -> update([
            'title' => request('title'),
            'pay' => request('pay'),

        ]);

        //redirect to job page
        return redirect('/jobs/'. $job-> id);
    }

    public function destory(Job $job)
    {
        //authorize the request (on hold)

        //delete the job
       // $job->delete();

        //redirect
        return redirect('/jobs');
    }
}
