<?php

namespace App\Models;

// use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log_books extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'log_books';
    protected $fillable = [
        'name',
        'email',
        'role',
        'action',
        'property_type',
        'property_id'
    ];
}


