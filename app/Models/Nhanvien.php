<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    use HasFactory;
    protected $table='nhanvien';
    protected $fillable=['id','hoten','namsinh','gioitinh','diachi','phongban'];
}
