<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // TaskSeeder（シーダークラス）の呼び出し
        if (config('app.env') == 'local') {
            $this->call(TaskSeeder::class);
        }
    }
}
