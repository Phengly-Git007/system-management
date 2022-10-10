<?php

namespace App\Models\Cambodia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    protected $gaurded = ['id'];
    protected $table = 'villages';
    protected $fillable = ['code','commune','name','kh_name','modify_date','status','prefix','deleted_at'];

    public function village(){
        return $this->belongsTo(Commune::class);
        // ,'commune','id'
    }
}
