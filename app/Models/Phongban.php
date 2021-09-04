<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nhanvien;


class Phongban extends Model
{
    use HasFactory;
    protected $table='phongban';
    protected $fillable =['id','tenphong'];
    public function nhanvien(){
        return $this->hasOne('App\Models\Nhanvien','phongban','id');
    }
}
