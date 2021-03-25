<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
  protected $fillable = ['doc'];
    public function Students() {
      return $this->hasMany('App\Student', 'doc_id');
    }
}
