<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    private $coursesData = [];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('mentors')->delete();
        // DB::table('courses')->delete();


        $mentors = [
            [
                'name' => 'Riki',
                'profile' => Str::random(10),
                'profession' => 'Frontend Engineer',
                'email' => 'rikipebrianto@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Andi',
                'profile' => Str::random(10),
                'profession' => 'Backend Engineer',
                'email' => 'andi@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];


        // DB::table('mentors')->insert($mentors);
        for ($i = 0; $i <= 10; $i++) {
            $courseData[] = [
                'name' => Str::random(15),
                'certificate' => true,
                'type' => 'premium',
                'status' => 'draft',
                'price' => 100000,
                'level' => 'beginner',
                'mentor_id' => 3,
                'created_at' => now()->toDateTimeLocalString(),
                'updated_at' => now()->toDateTimeLocalString(),
            ];
        }

        foreach ($courseData as $course) {
            DB::table('courses')->insert($course);
        }
    }
}
