<?php

namespace App\Models;

use illuminate\Database\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInsert extends Model
{

     protected $table = 'contacts';
     public $timestamps = true;
     protected $fillable = [
          'name', 'email', 'phone', 'message'
     ];
}
