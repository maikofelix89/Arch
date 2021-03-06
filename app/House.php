<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'houses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['sub_cat_id', 'house_name','description','photo'];

   
}

