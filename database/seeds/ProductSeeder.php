<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'name' => '30 Day Challenge- Active Living',
                'description' => 'This program lasts for 30 days and includes:
                    - 1-2 daily exercise(s) to perform (rotating through 5 different ones), walking days, supportive daily auto messages (about mindful eating and gratitude journaling), and a start and finish progress assessment.',
                'price' => 15.95,
                'duration' => 5,
                'imageUrl' => "https://images.unsplash.com/photo-1518310383802-640c2de311b2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80",
                'trainerizeUrl' => "https://www.trainerize.me/profile/karliefit/?planID=58953",
            ]
        );
        DB::table('products')->insert(
            [
                'name' => '8 Week Arms',
                'description' => "This program lasts for 8 weeks and includes:
                    - 2 workouts (Triceps + Presses; Biceps + Pulls) scheduled for Tuesdays and Thursdays.
                    - Assessments at the start, week 5, and at completion.",
                'price' => 9.95,
                'duration' => 8,
                'imageUrl' => "https://images.pexels.com/photos/3757376/pexels-photo-3757376.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
                'trainerizeUrl' => "https://www.trainerize.me/profile/karliefit/?planID=58956",
            ]
        );
    }
}
