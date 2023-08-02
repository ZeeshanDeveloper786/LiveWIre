<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\comment;

class messageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' =>1, 'comment' => 'this is zeeshan and i m working as a trainee software engineer', 'user_id'=> 1]
        ];

        comment::insert($data);
    }
}
