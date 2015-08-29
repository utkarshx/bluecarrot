<?php

use Illuminate\Database\Seeder;

class ContentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('content_types')
            ->insert([
                [
                    'name'=>'Links'
                ],
                [
                    'name'=>'Videos'
                ],
                [
                    'name'=>'Images'
                ],
                [
                    'name'=>'Articles'
                ],
                [
                    'name'=>'Games'
                ]
            ]);
    }
}
