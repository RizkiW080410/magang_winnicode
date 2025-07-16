<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // $user = \App\Models\User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        // ]);

        // $user->assignRole('super_admin');

        // $this->seedUsers();
        // $this->callSeeders();
        // 1) Seed Roles & Permissions terlebih dahulu
        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,
        ]);

        // 2) Baru seed Users (Admin, Penulis, Pengunjung)
        $this->seedUsers();
    }

    private function seedUsers(): void
    {
        // 1) Admin
        if (! User::where('email', 'admin@admin.com')->exists()) {
            $admin = User::factory()->create([
                'name'     => 'Admin',
                'email'    => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]);
            $admin->assignRole('super_admin');
        }

        // 2) Penulis
        if (! User::where('email', 'penulis@contoh.com')->exists()) {
            $penulis = User::factory()->create([
                'name'     => 'Penulis',
                'email'    => 'penulis@contoh.com',
                'password' => bcrypt('password'),
            ]);
            $penulis->assignRole('Penulis');
        }

        // 3) Pengunjung
        if (! User::where('email', 'pengunjung@contoh.com')->exists()) {
            $pengunjung = User::factory()->create([
                'name'     => 'Pengunjung',
                'email'    => 'pengunjung@contoh.com',
                'password' => bcrypt('password'),
            ]);
            $pengunjung->assignRole('Pengunjung');
        }
    }
}
