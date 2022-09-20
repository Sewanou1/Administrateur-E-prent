<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $type_impression_id
 * @property integer $format_id
 * @property string $libelle
 * @property float $prix
 * @property string $photo
 * @property string $support_impression
 * @property string $created_at
 * @property string $updated_at
 * @property Format $format
 * @property TypeImpression $typeImpression
 */
class Article extends Model
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
    protected $fillable = ['type_impression_id', 'format_id', 'libelle', 'prix', 'photo', 'support_impression', 'created_at', 'updated_at'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function format()
    {
        return $this->belongsTo('App\Models\Format');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typeImpression()
    {
        return $this->belongsTo('App\Models\TypeImpression');
    }
}
