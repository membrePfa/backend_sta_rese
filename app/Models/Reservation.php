<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    // protected $table = 'reservations';
   protected $primaryKey = 'id';
   protected $fillable = ['stade_id', 'dateReservation', 'heureReservation', 'prix'];
}
