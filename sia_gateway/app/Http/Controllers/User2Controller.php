<?php

namespace App\Http\Controllers;

use App\Services\User2Service;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class User2Controller extends Controller
{
     use ApiResponser;

     public $User2Service;

     public function __construct(User2Service $User2Service) {
        $this->User2Service = $User2Service;
    }

    public function index() {
        return $this->successResponse($this->User2Service->obtainUsers());
    }

    public function show($id) {
        return $this->successResponse($this->User2Service->obtainUser2($id));
    }

    public function add(Request $request) {
        return $this->successResponse($this->User2Service->createUser($request->all(), Response::HTTP_CREATED));
    }
    
    public function edit(Request $data, $id) {
        return $this->successResponse($this->User2Service->updateUser2($data->all(), $id));
    }

    public function delete($id) {
        return $this->successResponse($this->User2Service->deleteUser2($id));
    }
}
