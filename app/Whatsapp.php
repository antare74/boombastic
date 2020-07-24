<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Whatsapp extends Model
{
    use Notifiable;
    use SoftDeletes;
    protected $table    = 'whatsapps';
    protected $guarded  = [];
    public $timestamps  = true;
}
