<?php

namespace App\Console\Commands;

use App\Services\RenameUserService;
use Illuminate\Console\Command;

class RenameUser extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'rename:user';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Renomeia nome de usuário específico a cada 1 minuto';

  /**
   * Create a new command instance.
   *
   * @return void
   */
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Execute the console command.
   *
   * @return mixed
   */
  public function handle()
  {
    $renameUser = new RenameUserService();

    $renameUser->execute(date("Y-m-d H:i:s"));
  }
}
