<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    App\User::create([
      'name' => Str::random(10),
      'email' => Str::random(10) . '@gmail.com',
      'password' => Hash::make('password'),
    ]);
  }
}
