<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ['title' => 'user_management_access',],
            ['title' => 'user_management_create',],
            ['title' => 'user_management_edit',],
            ['title' => 'user_management_view',],
            ['title' => 'user_management_delete',],
            ['title' => 'permission_access',],
            ['title' => 'permission_create',],
            ['title' => 'permission_edit',],
            ['title' => 'permission_view',],
            ['title' => 'permission_delete',],
            ['title' => 'role_access',],
            ['title' => 'role_create',],
            ['title' => 'role_edit',],
            ['title' => 'role_view',],
            ['title' => 'role_delete',],
            ['title' => 'user_access',],
            ['title' => 'user_create',],
            ['title' => 'user_edit',],
            ['title' => 'user_view',],
            ['title' => 'user_delete',],
            ['title' => 'question_access',],
            ['title' => 'question_create',],
            ['title' => 'question_edit',],
            ['title' => 'question_view',],
            ['title' => 'question_delete',],
            ['title' => 'option_access',],
            ['title' => 'option_create',],
            ['title' => 'option_edit',],
            ['title' => 'option_view',],
            ['title' => 'option_delete',],
            ['title' => 'class_access',],
            ['title' => 'class_create',],
            ['title' => 'class_edit',],
            ['title' => 'class_view',],
            ['title' => 'class_delete',],
            ['title' => 'result_access',],
            ['title' => 'siswa_access',],
            ['title' => 'guru_access',],
            ['title' => 'ujian_access',],
        ];

        Permission::insert($permissions);
    }
}
