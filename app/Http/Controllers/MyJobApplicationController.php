<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class MyJobApplicationController extends Controller
{
    public function index()
    {
        return view(
            'my-job-application.index',
            [
                'applications' => auth()->user()->jobApplication()
                    ->with([
                        'job' => fn($query) => $query->withCount('jobApplications')
                            ->withAvg('jobApplications', 'expected_salary')
                            ->withTrashed(),
                    ])
                    ->latest()->get()
            ]
        );
    }

    public function destroy(JobApplication $myJobApplication)
    {
        //
        $myJobApplication->delete();

        return redirect()->back()->with(
            'success',
            'Job application removed.'
        );
    }
}
