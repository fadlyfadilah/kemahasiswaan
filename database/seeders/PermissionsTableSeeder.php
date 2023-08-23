<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'perguruan_tinggi_create',
            ],
            [
                'id'    => 18,
                'title' => 'perguruan_tinggi_edit',
            ],
            [
                'id'    => 19,
                'title' => 'perguruan_tinggi_show',
            ],
            [
                'id'    => 20,
                'title' => 'perguruan_tinggi_delete',
            ],
            [
                'id'    => 21,
                'title' => 'perguruan_tinggi_access',
            ],
            [
                'id'    => 22,
                'title' => 'mahasiswa_create',
            ],
            [
                'id'    => 23,
                'title' => 'mahasiswa_edit',
            ],
            [
                'id'    => 24,
                'title' => 'mahasiswa_show',
            ],
            [
                'id'    => 25,
                'title' => 'mahasiswa_delete',
            ],
            [
                'id'    => 26,
                'title' => 'mahasiswa_access',
            ],
            [
                'id'    => 27,
                'title' => 'prodi_create',
            ],
            [
                'id'    => 28,
                'title' => 'prodi_edit',
            ],
            [
                'id'    => 29,
                'title' => 'prodi_show',
            ],
            [
                'id'    => 30,
                'title' => 'prodi_delete',
            ],
            [
                'id'    => 31,
                'title' => 'prodi_access',
            ],
            [
                'id'    => 32,
                'title' => 'semester_create',
            ],
            [
                'id'    => 33,
                'title' => 'semester_edit',
            ],
            [
                'id'    => 34,
                'title' => 'semester_show',
            ],
            [
                'id'    => 35,
                'title' => 'semester_delete',
            ],
            [
                'id'    => 36,
                'title' => 'semester_access',
            ],
            [
                'id'    => 37,
                'title' => 'laporan_semester_access',
            ],
            [
                'id'    => 38,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}