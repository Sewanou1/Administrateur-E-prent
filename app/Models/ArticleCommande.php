<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $commande_id
 * @property int $quantite
 * @property float $prix
 * @property float $montant
 * @property string $type_impression
 * @property string $format
 * @property string $document_imprimer
 * @property string $commentaire
 * @property string $support_impression
 * @property string $created_at
 * @property string $updated_at
 * @property Commande $commande
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
    protected $fillable = ['commande_id', 'quantite', 'prix', 'montant', 'type_impression', 'format', 'document_imprimer', 'commentaire', 'support_impression', 'created_at', 'updated_at'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commande()
    {
        return $this->belongsTo('App\Models\Commande');
    }
}
