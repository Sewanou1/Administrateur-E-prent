<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $centre_impression_id
 * @property integer $user_id
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $adresse
 * @property string $date_commande
 * @property string $delais
 * @property string $format
 * @property string $type_impression
 * @property string $type_livraison
 * @property string $commentaire
 * @property string $reference
 * @property float $prix_livraison
 * @property float $montant
 * @property float $montant_total
 * @property string $support_impression
 * @property string $created_at
 * @property string $updated_at
 * @property CentreImpression $centreImpression
 * @property User $user
 * @property Facture[] $factures
 */
class Commande extends Model
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
    protected $fillable = ['centre_impression_id', 'user_id', 'nom', 'prenom', 'email', 'adresse', 'date_commande', 'delais', 'format', 'type_impression', 'type_livraison', 'commentaire', 'reference', 'prix_livraison', 'montant', 'montant_total', 'support_impression', 'created_at', 'updated_at'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function centreImpression()
    {
        return $this->belongsTo('App\Models\CentreImpression');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function factures()
    {
        return $this->hasMany('App\Models\Facture');
    }

    public function articles_commande () {
        return $this->hasMany(ArticleCommande::class, 'commande_id');
    }
}
