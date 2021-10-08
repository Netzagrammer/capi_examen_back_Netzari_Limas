<?php

use Illuminate\Support\Facades\DB;
use App\Users;
use Illuminate\Database\Seeder;

class SeederUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Users::class)->times(100)->create();
    }
}
