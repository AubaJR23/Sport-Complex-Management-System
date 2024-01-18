<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maintenance extends Model
{
    protected $table = 'maintenances';
    protected $primaryKey = 'facility_id';
    use HasFactory;
}
