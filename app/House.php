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
    protected $fillable = ['cat_id', 'sub_cat_id', 'cat_name','description','photo'];

   
}

