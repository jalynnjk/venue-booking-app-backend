<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRequest extends Model
{
    use HasFactory;
    protected $casts = [
        'client_name' => 'string',
        'client_email' => 'string',
        'wedding_date' => 'datetime:d-m-Y',
        'number_guests' => 'integer',
        'budget' => 'integer',
        'ceremony_location' => 'string',
        'reception_location' => 'string',
        'new_request' => 'Boolean',
    ];
};
