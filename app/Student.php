<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{

  use SoftDeletes;


  protected $fillable = [
    'name', 'email', 'codedapogee', 'cin', 'doc_id'
  ];
  protected $dates = ['deleted_at'];
    public function documents()
  {
      return $this->belongsTo('App\Document');
  }
}
