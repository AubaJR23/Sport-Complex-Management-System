<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membership extends Model
{
    protected $table = 'memberships';
    protected $primaryKey = 'membership_id';
    use HasFactory;
}
