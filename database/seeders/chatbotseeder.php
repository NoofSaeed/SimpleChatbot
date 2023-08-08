<?php

namespace Database\Seeders;

use App\Models\Chatbot;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class chatbotseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $texts = [
            ["queries" => "hi","replies"=>"hello"],
            ["queries" => "السلام عليكم","replies"=>"وعليكم السلام"],
            ["queries" => " مرحبا","replies"=>"اهلا"],
            ["queries" => " how are you","replies"=>"I'm find"],
            ["queries" => " nice to meet you","replies"=>"oh, thanks"]
          ];

      foreach ($texts as $key => $data) {
          Chatbot::create($data);
      }
    }
}
