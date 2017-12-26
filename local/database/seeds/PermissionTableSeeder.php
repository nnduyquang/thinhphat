<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
//            KHỞI TẠO BAN ĐẦU
//            [
//                'name' => 'role-list',
//                'display_name' => 'Xem Danh Sách Quyền',
//                'description' => 'Được Xem Danh Sách Quyền',
//                'category_permission_id' => 1
//            ],
//            [
//                'name' => 'role-create',
//                'display_name' => 'Tạo Quyền Mới',
//                'description' => 'Được Tạo Quyền Mới',
//                'category_permission_id' => 1
//            ],
//            [
//                'name' => 'role-edit',
//                'display_name' => 'Cập Nhật Quyền',
//                'description' => 'Được Cập Nhật Quyền',
//                'category_permission_id' => 1
//            ],
//            [
//                'name' => 'role-delete',
//                'display_name' => 'Xóa Quyền',
//                'description' => 'Được Xóa Quyền',
//                'category_permission_id' => 1
//            ]
//            ,
//            [
//                'name' => 'user-list',
//                'display_name' => 'Xem Danh Sách Users',
//                'description' => 'Được Xem Danh Sách Users',
//                'category_permission_id' => 2
//            ],
//            [
//                'name' => 'user-create',
//                'display_name' => 'Tạo User',
//                'description' => 'Được Tạo User Mới',
//                'category_permission_id' => 2
//            ],
//            [
//                'name' => 'user-edit',
//                'display_name' => 'Cập Nhật User',
//                'description' => 'Được Cập Nhật User',
//                'category_permission_id' => 2
//            ],
//            [
//                'name' => 'user-delete',
//                'display_name' => 'Xóa user',
//                'description' => 'Được Xóa User',
//                'category_permission_id' => 2
//            ],
//            [
//                'name' => 'news-list',
//                'display_name' => 'Xem Toàn Bộ Tin Tức',
//                'description' => 'Được Xem Toàn Bộ Tin Tức',
//                'category_permission_id'=>3
//            ],
//            [
//                'name' => 'news-create',
//                'display_name' => 'Tạo Tin Tức Mới',
//                'description' => 'Được Tạo Tin Tức Mới',
//                'category_permission_id'=>3
//            ],
//            [
//                'name' => 'news-edit',
//                'display_name' => 'Cập Nhật Tin Tức',
//                'description' => 'Được Cập Nhật Tin Tức',
//                'category_permission_id'=>3
//            ],
//            [
//                'name' => 'news-delete',
//                'display_name' => 'Xóa Tin Tức',
//                'description' => 'Được Xóa Tin Tức',
//                'category_permission_id'=>3
//            ],
//            [
//                'name' => 'config-list',
//                'display_name' => 'Toàn Quyền Cấu Hình',
//                'description' => 'Được Toàn Quyền Cấu Hình',
//                'category_permission_id'=>4
//            ],
//            [
//                'name' => 'config-create',
//                'display_name' => 'Thêm Mới Cấu Hình',
//                'description' => 'Được Thêm Mới Cấu Hình',
//                'category_permission_id'=>4
//            ],
//            [
//                'name' => 'config-edit',
//                'display_name' => 'Cập Nhật Cấu Hình',
//                'description' => 'Được Cập Nhật Cấu Hình',
//                'category_permission_id'=>4
//            ],
//            [
//                'name' => 'config-delete',
//                'display_name' => 'Xóa Cấu Hình',
//                'description' => 'Được Xóa Cấu Hình',
//                'category_permission_id'=>4
//            ],
//            [
//                'name' => 'category-list',
//                'display_name' => 'Xem Toàn Bộ Loại Sản Phẩm',
//                'description' => 'Được Xem Toàn Bộ Loại Sản Phẩm',
//                'category_permission_id'=>3
//            ],
//            [
//                'name' => 'category-create',
//                'display_name' => 'Tạo Loại Sản Phẩm Mới',
//                'description' => 'Được Tạo Loại Sản Phẩm Mới',
//                'category_permission_id'=>3
//            ],
//            [
//                'name' => 'category-edit',
//                'display_name' => 'Cập Nhật Loại Sản Phẩm',
//                'description' => 'Được Cập Nhật Loại Sản Phẩm',
//                'category_permission_id'=>3
//            ],
//            [
//                'name' => 'category-delete',
//                'display_name' => 'Xóa Loại Sản Phẩm',
//                'description' => 'Được Xóa Loại Sản Phẩm',
//                'category_permission_id'=>3
//            ],
            [
                'name' => 'product-list',
                'display_name' => 'Xem Toàn Bộ Sản Phẩm',
                'description' => 'Được Xem Toàn Bộ Sản Phẩm',
                'category_permission_id'=>4
            ],
            [
                'name' => 'product-create',
                'display_name' => 'Tạo Sản Phẩm Mới',
                'description' => 'Được Tạo Sản Phẩm Mới',
                'category_permission_id'=>4
            ],
            [
                'name' => 'product-edit',
                'display_name' => 'Cập Nhật Sản Phẩm',
                'description' => 'Được Cập Nhật Sản Phẩm',
                'category_permission_id'=>4
            ],
            [
                'name' => 'product-delete',
                'display_name' => 'Xóa Sản Phẩm',
                'description' => 'Được Xóa Sản Phẩm',
                'category_permission_id'=>4
            ],
        ];
        foreach ($permission as $key => $value) {
            Permission::create($value);
        }

    }
}
