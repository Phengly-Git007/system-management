<?php

namespace App\Models\Cambodia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $gaurded = ['id'];
    protected $table = 'provinces';
    protected $fillable = ['code','name','kh_name','modify_date','status','prefix','deleted_at'];

    public function getDistrict(){
        return $this->hasMany(District::class,'district','id');
    }
}
