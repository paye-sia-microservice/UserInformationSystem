<?php

namespace App\Http\Controllers;

use App\Services\User1Service;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Exceptions\Handler;

class UserJob1Controller extends Controller
{
    use ApiResponser;

    private $User1Service;

    public function __construct(User1Service $User1Service)
    {
        $this->User1Service = $User1Service;
    }

    public function index() 
    {
        return $this->successResponse($this->User1Service->obtainUserJobs());
    }

    public function show($id) 
    {
        return $this->successResponse($this->User1Service->obtainUserJob1($id));
    } 
}