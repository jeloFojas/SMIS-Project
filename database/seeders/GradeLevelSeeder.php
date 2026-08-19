<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeLevelSeeder extends Seeder
{
    public function run(): void
    {
        $gradeLevels = [
            [
                'code' => 'G7',
                'name' => 'Grade 7',
                'level_order' => 7,
            ],
            [
                'code' => 'G8',
                'name' => 'Grade 8',
                'level_order' => 8,
            ],
            [
                'code' => 'G9',
                'name' => 'Grade 9',
                'level_order' => 9,
            ],
            [
                'code' => 'G10',
                'name' => 'Grade 10',
                'level_order' => 10,
            ],
            [
                'code' => 'G11',
                'name' => 'Grade 11',
                'level_order' => 11,
            ],
            [
                'code' => 'G12',
                'name' => 'Grade 12',
                'level_order' => 12,
            ],
        ];

        foreach ($gradeLevels as $gradeLevel) {
            DB::table('grade_levels')->updateOrInsert(
                ['code' => $gradeLevel['code']],
                [
                    'name' => $gradeLevel['name'],
                    'level_order' => $gradeLevel['level_order'],
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );
        }
    }
}