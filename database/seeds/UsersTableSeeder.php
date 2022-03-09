<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Student;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //as admin
        $admin = factory(User::class)->create([
            'name'      => 'dede',
            'email'     => 'dede@gmail.com',
            'email_verified_at' => now(),
            'password'  => bcrypt('albahri'),
        ]);

        $admin->assignRole('admin');

        $this->command->info('>_ Here Is Your Admin Details To Login');
        $this->command->warn($admin->email);
        $this->command->warn('Password is "albahri"');
        
        // as bendahara
        $bendahara = factory(User::class)->create([
            'name'      => 'dede1',
            'email'     => 'dede1@gmail.com',
            'email_verified_at' => now(),
            'password'  => bcrypt('albahri'),
        ]);
        
        $bendahara->assignRole('bendahara');

        $this->command->info('>_ Here Is Your Bendahara Details To Login');
        $this->command->warn($bendahara->email);
        $this->command->warn('Password is "albahri"');
        
        //as siswa
        $student = factory(User::class)->create([
            'name'      => 'dede2',
            'email'     => 'dede2@gmail.com',
            'email_verified_at' => now(),
            'password'  => bcrypt('albahri'),
        ]);

        if($student->save()){
            $anggota = Student::create([
                'user_id'   => $student->id,
            ]);
        }

        $student->assignRole('student');

        $this->command->info('>_ Here Is Your student Details To Login');
        $this->command->warn($student->email);
        $this->command->warn('Password is "albahri"');

        //bersihkan cache
        $this->command->call('cache:clear');

    }
}
