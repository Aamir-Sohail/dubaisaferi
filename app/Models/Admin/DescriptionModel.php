<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescriptionModel extends Model
{
    use HasFactory;
    protected $table =('description');
    protected $fillable =([
        'description',
        'ckeditor',
    ]);
}
