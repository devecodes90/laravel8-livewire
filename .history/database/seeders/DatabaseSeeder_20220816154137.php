<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Client;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeArticleTableSeeder::class);
        Article::factory(100)->create();
        Client::factory(100)->create();
        User::factory(10)->create();

        $this->call(RoleTableSeeder::class);
        $this->call(StatutLocationTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(DureeLocationTableSeeder::class);

        $user = User::find(1);
        $role = Role::find(1);

        DB::table('user_role')->insert($user, $role);

        User::find(1)->roles()->attach(1);
    }
}
