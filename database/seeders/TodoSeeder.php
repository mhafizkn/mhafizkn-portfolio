<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todos = [
            [
                "title" => "wpKualaLumpur",
                "status" => "1",
            ],
            [
                "title" => "wpPutrajaya",
                "status" => "0",
            ],
            [
                "title" => "wpLabuan",
                "status" => "1",
            ],
        ];

        foreach ($todos as $todo){
            Todo::updateOrCreate(
                ["title" =>  $todo["title"],
                "status" => $todo["status"]]
            );
        }
    }
}
