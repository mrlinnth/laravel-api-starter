<?php

namespace App\Models;

class Admin extends MongoModel
{
    protected $connection = 'mongodb';

    protected $collection = 'admin';
}
