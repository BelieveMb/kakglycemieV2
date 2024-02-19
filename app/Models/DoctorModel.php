<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorModel extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table ='medecin';
    use HasFactory;

    // Méthode pour obtenir le nom de la colonne d'identification (par défaut 'id')
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    // Méthode pour obtenir l'identifiant de l'utilisateur
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    // Méthode pour obtenir le mot de passe de l'utilisateur
    public function getAuthPassword()
    {
        return $this->password;
    }

    // Autres méthodes nécessaires pour l'interface Authenticatable si besoin
}
