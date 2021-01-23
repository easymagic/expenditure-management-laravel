<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    use HasFactory;

    function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    function scopeConfirmedExpenditure(Builder $builder){
        return $builder->where('status',1);
    }



    function scopePendingExpenditure(Builder $builder){
        return $builder->where('status',0);
    }


}
