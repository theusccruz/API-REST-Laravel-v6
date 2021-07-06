<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class UsersController extends Controller
{
  private $model;

  function __construct()
  {
    $this->model = new User();
  }

  public function index()
  {
    $users = $this->model->all();
    return response()->json($users);
  }

  public function show($id)
  {
    $user = $this->model->find($id);
    if (!$user) {
      return response()->json([
        'message' => 'Record not found'
      ], 404);
    }

    return response()->json($user);
  }

  public function store(Request $request)
  {
    $request->merge(['password' => Hash::make('password')]);

    $user = $this->model->fill($request->all());
    $this->model->save();

    return response()->json($user, 201);
  }

  public function update(Request $request, $id)
  {
    $user = $this->model->find($id);
    if (!$user) {
      return response()->json([
        'message' => 'Record not found'
      ], 404);
    }

    $request->merge(['password' => Hash::make('password')]);

    $user->fill($request->all());
    $user->save();

    return response()->json($user);
  }

  public function destroy($id)
  {
    $user = $this->model->find($id);
    if (!$user) {
      return response()->json([
        'message' => 'Record not found'
      ], 404);
    }

    $user->delete();

    return response()->json([], 204);
  }
}
