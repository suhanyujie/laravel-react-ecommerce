<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'name' => '综合部1',
                'slug' => Str::slug('综合部1'),
                'active' => true,
                'created_at' => now(),
            ],
            [
                'name' => '综合部2',
                'slug' => Str::slug('综合部2'),
                'active' => true,
                'created_at' => now(),
            ],
            [
                'name' => '文化部 culture',
                'slug' => Str::slug('文化部 culture'),
                'active' => true,
                'created_at' => now(),
            ],
            [
                'name' => '技术部 tech',
                'slug' => Str::slug('技术部 tech'),
                'active' => true,
                'created_at' => now(),
            ],
        ];
        DB::table('departments')->insert($departments);
    }

}
