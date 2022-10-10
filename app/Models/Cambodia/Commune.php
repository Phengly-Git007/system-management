<?php

namespace App\Models\Cambodia;

use App\Models\Branch\CreditOfficer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $gaurded = ['id'];
    protected $table = 'communes';
    protected $fillable = ['code','district','name','kh_name','modify_date','status','prefix','deleted_at'];

    public function getVillages(){
        return $this->hasMany(Village::class,'commune','id');
        //
    }
    public function getDistrict(){
        return $this->belongsTo(District::class ,'district','id');
        //
    }
    public function credit_officers()
    {
        return $this->belongsToMany(CreditOfficer::class,'co_has_zones','commune_id','co_id');
    }

}
