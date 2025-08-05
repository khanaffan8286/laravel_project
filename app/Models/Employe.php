<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employe extends Authenticatable
{
    use HasFactory;

    protected $table = 'employe';
    protected $primaryKey = 'Id';
    public $timestamps = false;
     protected $hidden = [
        'password',
    ];

   public function setNameattribute($value){
    $this->attributes['name'] = ucwords($value);
   }

   public function setAddressattribute($value){
    $this->attributes['address'] = ucwords($value); 
   }

  public function getAddedOnAttribute($value){
    return date('d-m-Y', strtotime($value));
}

}
