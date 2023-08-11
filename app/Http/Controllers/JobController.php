<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Job::class);
        $filters = request()->only(
            'search', 
            'min_salary', 
            'max_salary', 
            'experience', 
            'category'
        );
        return view('job.index', 
        ['jobs'=>Job::with('employer')->latest()->filter($filters)->get()]);
    }

    public function show(Job $job)
    {
        $this->authorize('view', $job);
        return view('job.show', 
        ['job' => $job->load('employer.jobs')]);
    }


}
