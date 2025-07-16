<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // 1) Definisikan permissions sesuai policy Anda
        //
        $resources = [
            // Berita
            'berita'            => ['view', 'view_any', 'create', 'update', 'delete', 'delete_any'],
            // Category Berita (gunakan key 'category::berita')
            'category::berita'  => ['view', 'view_any', 'create', 'update', 'delete', 'delete_any'],
            // Penulis
            'penulis'           => ['view', 'view_any', 'update', 'delete', 'delete_any'],
        ];

        //
        // 2) Buat permission jika belum ada
        //
        foreach ($resources as $resourceKey => $actions) {
            foreach ($actions as $action) {
                Permission::firstOrCreate([
                    'name'       => "{$action}_{$resourceKey}",
                    'guard_name' => 'web',
                ]);
            }
        }

        //
        // 3) Pastikan roles sudah ada
        //
        $penulisRole    = Role::firstOrCreate([ 'name' => 'Penulis',    'guard_name' => 'web' ]);
        $pengunjungRole = Role::firstOrCreate([ 'name' => 'Pengunjung', 'guard_name' => 'web' ]);

        //
        // 4) Sync permissions ke masing-masing role
        //
        // Penulis: semua permission di resources
        $penulisPerms = [];
        foreach ($resources as $resourceKey => $actions) {
            foreach ($actions as $action) {
                $penulisPerms[] = "{$action}_{$resourceKey}";
            }
        }
        $penulisRole->syncPermissions($penulisPerms);

        // Pengunjung: hanya lihat berita
        $pengunjungRole->syncPermissions([
            'view_berita',
            'view_any_berita',
            'view_category::berita',
            'view_any_category::berita',
        ]);
    }
}
