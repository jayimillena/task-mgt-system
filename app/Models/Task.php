<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'tasks';
    
    protected $fillable = [
        'title',
        'description',
        'long_description',
    ];
}
