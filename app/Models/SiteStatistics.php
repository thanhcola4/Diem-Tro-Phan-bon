<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteStatistics extends Model
{
    use HasFactory;

    // Đặt tên bảng tương ứng với bảng trong cơ sở dữ liệu
    protected $table = 'site_statistics';

    // Định nghĩa các cột có thể gán giá trị đại diện cho các thuộc tính của bảng
    protected $fillable = ['views'];

    // Tự động quản lý timestamps
    public $timestamps = true;
}
