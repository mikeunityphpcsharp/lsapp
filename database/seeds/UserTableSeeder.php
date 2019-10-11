<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Автор не известен',
                'email' => 'author_unknown@hmail.com',
                'password' => bcrypt(Str::random(16)),
            ],
            [
                'name' => 'Автор Mike',
                'email' => 'mike@gmail.com',
                'password' => bcrypt('valera7873'),
            ],
        ];
        DB::table('users')->insert($data);
    }
}
