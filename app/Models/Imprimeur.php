<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property int $telephone
 * @property string $adresse
 * @property string $password
 * @property string $email_verified_at
 * @property string $created_at
 * @property string $updated_at
 * @property Appartenir[] $appartenirs
 */
class Imprimeur extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nom', 'prenom', 'email', 'telephone', 'adresse', 'password', 'email_verified_at', 'created_at', 'updated_at'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appartenirs()
    {
        return $this->hasMany('App\Models\Appartenir');
    }
}
