<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentModel extends Model
{
    use HasFactory;
    protected $table ='agent';

    protected $fillable = [
        'idagent',
        'nomAgent',
        'phone',
        'password',

    ];

}
