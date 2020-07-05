<?php

use Illuminate\Database\Seeder;

class EdulevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('edulevels')->insert([
        [
            'nama' => 'SDN 107',
            'desc' => 'SD / MI',
        ],

        [
            'nama' => 'MTS MANNILINGI',
            'desc' => 'MTS / MANNILINGI',
        ],


        [
            'nama' => 'MA MANNILINGI',
            'desc' => 'MA / MANNILINGI',
        ]

        ]);
    }
}
