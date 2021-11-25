<?php

namespace App\Models;

class MongoUser extends MongoModel
{
    protected $connection = 'mongodb';

    protected $collection = 'users';
}
