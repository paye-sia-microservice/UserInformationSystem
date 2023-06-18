<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User2Service {
     use ConsumesExternalService;

     public $secret;
     public $baseUri;

     public function __construct() {
          $this->baseUri = config('services.site2.base_uri');
          $this->secret = config('services.site2.secret');
     }

     public function obtainUsers() {
          return $this->performRequest('GET', 'api/users');
     }

     public function obtainUser2($id) {
          return $this->performRequest('GET', "api/users/{$id}");
     }


     public function createUser($data) {
          return $this->performRequest('POST', 'api/users/', $data);
     }

     public function updateUser2($data, $id) {
          return $this->performRequest('PATCH', "api/users/{$id}", $data);
     }

     public function deleteUser2($id) {
          return $this->performRequest('DELETE', "api/users/{$id}");
     }

     public function obtainUserJobs() {
          return $this->performRequest('GET', 'api/userjob');
     }

     public function obtainUserJob2($id) {
          return $this->performRequest('GET', "api/userjob/{$id}");
     }
}