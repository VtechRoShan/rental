<?php

namespace App\Models;

// use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mycarts extends Model
{
    protected $table = 'mycarts';
    use HasFactory;
    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'user_id',
        'property_id',
        'property_type',
        'property_creator'
    ];
}
