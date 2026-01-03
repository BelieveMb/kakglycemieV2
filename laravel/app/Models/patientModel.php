<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patientModel extends Model
{
    protected $table = 'traitement2';
    //préciser la table  de sélection
    use HasFactory;
}
