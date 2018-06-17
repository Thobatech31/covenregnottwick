<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trainingtable extends Model
{
    //Table Name 
   protected $table = 'trainingtables';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamp
   public $timestamps = true;
}
