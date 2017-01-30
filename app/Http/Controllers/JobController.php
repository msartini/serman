<?php

namespace Serman\Http\Controllers;

use Redirect;
use View;
use Illuminate\Http\Request;
use Serman\Job;
use Serman\Services\Validation\JobValidator as Validator;


class JobController extends Controller
{
    protected $validator;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function index()
    {
        $jobs = Job::orderBy('job')->get();

        return view('jobs.default', compact('jobs'));
    }

    public function store(Request $request)
    {
        if (! $this->validator->validate($request->all())) {
            return Redirect::back()->withErrors($this->validator->errors())->withInput();
        }

        Job::create($request->all());

        return Redirect::route('jobs.index');
    }
}
