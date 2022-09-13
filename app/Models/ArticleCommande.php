<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $article_commande_id
 * @property int $quantite
 * @property float $prix
 * @property float $montant
 * @property string $type_impression
 * @property string $format
 * @property string $info_specifique
 * @property string $support_impression
 * @property string $created_at
 * @property string $updated_at
 * @property ArticleCommande $articleCommande
 */
class ArticleCommande extends Model
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
    protected $fillable = ['article_commande_id', 'quantite', 'prix', 'montant', 'type_impression', 'format', 'info_specifique', 'support_impression', 'created_at', 'updated_at'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articleCommande()
    {
        return $this->belongsTo('App\Models\ArticleCommande');
    }
}
