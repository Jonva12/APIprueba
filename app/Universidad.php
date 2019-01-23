<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
	protected $table="universidades";

  	public function proyecto(){
  		return $this->hasMany('App\Proyecto');
  	}
}