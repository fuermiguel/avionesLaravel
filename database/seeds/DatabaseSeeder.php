<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::seedUsers();
        $this->command->info('Tabla Usuarios inicializada con datos!');
    }

    private function seedUsers() {
        DB::table('users')->delete();
            $u = new User();
            $u->name='miguel';
            $u->email='fuermiguel@yahoo.es';
            $u->password= bcrypt('A1981971');
            $u->save();
    }
}
