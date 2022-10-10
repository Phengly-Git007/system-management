<?php

namespace App\Models\Branch;

use App\Models\Cambodia\Commune;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditOfficer extends Model
{
    use HasFactory;
    protected $table = 'credit_officers';
    protected $fillable = [
        'name','name_kh','gender','dob','id_card','phone','address'
    ];

    public function scopeSearch($query, $q){
        return $query->where('name','like',"%$q%")
        ->orWhere('name_kh','like',"%$q%")
        ->orWhere('phone','like',"%$q%");
    }

    public function zones()
    {
        return $this->belongsToMany(Commune::class,'co_has_zones','commune_id','co_id');
    }
}
