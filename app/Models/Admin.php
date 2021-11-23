<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $collection = 'admin';
}