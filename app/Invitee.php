<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitee extends Model
{
    protected $fillable = ['attending', 'guests', 'firstname', 'lastname'];
}