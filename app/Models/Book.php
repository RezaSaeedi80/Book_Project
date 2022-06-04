<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{

    protected $fillable = ['name', 'price', 'isbn'];

    use HasFactory, SoftDeletes;
}
