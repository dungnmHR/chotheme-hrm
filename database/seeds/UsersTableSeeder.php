<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nguyễn Minh Dũng',
            'email' => 'admin@admin.com',
            'phone' => '0123456789',
            'password' => bcrypt('secret'),
            'role' => 'admin',
            'status' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Nguyễn Anh Tuấn',
            'email' => 'tuanna@hrm.com',
            'phone' => '088888888',
            'password' => bcrypt('secret'),
            'role' => 'customer',
            'status' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Trần Văn Chung',
            'email' => 'chungtv@hrm.com',
            'phone' => '099999999',
            'password' => bcrypt('secret'),
            'role' => 'customer',
            'status' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Bảo Đạt',
            'email' => 'datb@hrm.com',
            'phone' => '0666666666',
            'password' => bcrypt('secret'),
            'role' => 'customer',
            'status' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Vũ Đình Phú',
            'email' => 'ph@hrm.com',
            'phone' => '0988888888',
            'password' => bcrypt('secret'),
            'role' => 'customer',
            'status' => '1',
        ]);

    }
}
