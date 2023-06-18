<?php

namespace App\Http\Controllers;

use App\Services\User1Service;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class User1Controller extends Controller
{
     use ApiResponser;

     public $User1Service;

    public function __construct(User1Service $User1Service) {
        $this->User1Service = $User1Service;
    }

    public function index() {
        return $this->successResponse($this->User1Service->obtainUsers());
    }

    public function show($id) {
        return $this->successResponse($this->User1Service->obtainUser1($id));
    }

    public function add(Request $request) {
        return $this->successResponse($this->User1Service->createUser($request->all(), Response::HTTP_CREATED));
    }

    public function edit(Request $data, $id) {
        return $this->successResponse($this->User1Service->updateUser1($data->all(), $id));
    }
    
    public function delete($id) {
        return $this->successResponse($this->User1Service->deleteUser1($id));
    }
}