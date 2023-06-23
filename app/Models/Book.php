<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Book extends Model
{
    
    use  HasFactory, Notifiable;

    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'name',
        'isbn',
        'value',
    ];
    
}
