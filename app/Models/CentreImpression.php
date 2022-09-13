<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom
 * @property int $telephone
 * @property string $adresse
 * @property float $longitude
 * @property float $lagitude
 * @property string $ifu
 * @property string $created_at
 * @property string $updated_at
 * @property Commande[] $commandes
 * @property Format[] $formats
 * @property TypeImpression[] $typeImpressions
 */
class CentreImpression extends Model
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
    protected $fillable = ['nom', 'telephone', 'adresse', 'longitude', 'lagitude', 'ifu', 'created_at', 'updated_at'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commandes()
    {
        return $this->hasMany('App\Models\Commande');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function formats()
    {
        return $this->hasMany('App\Models\Format');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function typeImpressions()
    {
        return $this->hasMany('App\Models\TypeImpression');
    }
}
