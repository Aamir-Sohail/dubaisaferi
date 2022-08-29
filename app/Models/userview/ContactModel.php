<?php

namespace App\Models\userview;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;
    protected $table =('contactus');
    protected $fillable =([
        'username',
        'email',
        'phone',
        'location',
        'subject',
        'message',
    ]);

   
    
}
