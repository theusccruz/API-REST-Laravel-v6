<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JobsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    App\Job::create([
      'title' => Str::random(10),
      'description' => Str::random(1000),
      'local' => 'São Paulo/SP',
      'remote' => 'no',
      'type' => 3,
      'user_id' => 1,
    ]);
  }
}
