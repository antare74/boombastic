<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use Notifiable;
    use SoftDeletes;
    protected $table    = 'contacts';
    protected $guarded  = [];
    public $timestamps  = true;
}
