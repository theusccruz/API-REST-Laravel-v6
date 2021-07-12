<?php

namespace App\Services;

use App\User;

class RenameUserService
{
  private $model;

  function __construct()
  {
    $this->model = new User();
  }

  public function execute($name)
  {
    $user = $this->model->find(4);
    if (!$user) {
      return response()->json([
        'message' => 'Record not found'
      ], 404);
    }

    $user->name = $name;

    $user->save();
  }
}
