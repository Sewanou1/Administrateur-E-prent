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
 * @property string $photo
 * @property string $facebook
 * @property string $instagram
 * @property string $linkedIn
 * @property string $twitter
 * @property string $delais
 * @property string $created_at
 * @property string $updated_at
 * @property Commande[] $commandes
 * @property Format[] $formats
 * @property SupportImpression[] $supportImpressions
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
    protected $fillable = ['nom', 'telephone', 'adresse', 'longitude', 'lagitude', 'ifu', 'photo', 'facebook', 'instagram', 'linkedIn', 'twitter','delais', 'created_at', 'updated_at'];

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
    public function supportImpressions()
    {
        return $this->hasMany('App\Models\SupportImpression');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function typeImpressions()
    {
        return $this->hasMany('App\Models\TypeImpression');
    }
}
