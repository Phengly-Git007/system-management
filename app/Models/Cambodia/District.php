<?php

namespace App\Models\Cambodia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $gaurded = ['id'];
    protected $table = 'districts';
    protected $fillable = ['code','province','name','kh_name','modify_date','status','prefix','deleted_at'];
    public function getCommunes(){
        return $this->hasMany(Commune::class);
        // ,'province','id'
    }
    public function getProvince(){
        return $this->belongsTo(Province::class,'province','id');
    }
}
