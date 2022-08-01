<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_name',
        'client_email',
        'wedding_date',
        'number_guests',
        'budget',
        'new_request',
    ];
};
