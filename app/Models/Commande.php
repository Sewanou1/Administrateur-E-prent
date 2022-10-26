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
 * @property string $type_livraison
 * @property string $reference
 * @property float $montant
 * @property float $prix_livraison
 * @property int $nombre_article
 * @property float $montant_total
 * @property boolean $statut
 * @property boolean $etat
 * @property string $created_at
 * @property string $updated_at
 * @property CentreImpression $centreImpression
 * @property User $user
 * @property ArticleCommande[] $articleCommandes
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
    protected $fillable = ['centre_impression_id', 'user_id', 'nom', 'prenom', 'email', 'adresse', 'date_commande', 'delais', 'type_livraison', 'reference', 'montant', 'prix_livraison', 'nombre_article', 'montant_total', 'statut', 'etat', 'created_at', 'updated_at'];

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
    public function articleCommandes()
    {
        return $this->hasMany('App\Models\ArticleCommande');
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
