<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $table = 'employe';
    protected $primaryKey = 'Id';
    public $timestamps = false;

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
