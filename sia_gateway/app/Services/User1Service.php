<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User1Service {
     use ConsumesExternalService;

     public $secret;
     public $baseUri;

     public function __construct() {
          $this->baseUri = config('services.site1.base_uri');
          $this->secret = config('services.site1.secret');
     }

     public function obtainUsers() {
          return $this->performRequest('GET', 'api/users');
     }

     public function obtainUser1($id) {
          return $this->performRequest('GET', "api/users/{$id}");
     }

     public function createUser($data) {
          return $this->performRequest('POST', 'api/users/', $data);
     }

     public function updateUser1($data, $id) {
          return $this->performRequest('PATCH', "api/users/{$id}", $data);
     }

     public function deleteUser1($id) {
          return $this->performRequest('DELETE', "api/users/{$id}");
     }

     public function obtainUserJobs() {
          return $this->performRequest('GET', 'api/userjob');
     }

     public function obtainUserJob1($id) {
          return $this->performRequest('GET', "api/userjob/{$id}");
     }
}