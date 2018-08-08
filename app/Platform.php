<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    // Table Name
    protected $table = 'platforms';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
