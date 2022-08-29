<?php

namespace App\Models\userview;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingModel extends Model
{
    use HasFactory;
    protected $table =('booking');
    protected $fillable =([
        'name',
        'email',
        'contact',
        'adult',
        'child',
        'interst',
        'date',
        'message',
    ]);
}
