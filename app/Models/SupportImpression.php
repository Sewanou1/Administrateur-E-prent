<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $centre_impression_id
 * @property string $libelle
 * @property string $created_at
 * @property string $updated_at
 * @property CentreImpression $centreImpression
 */
class SupportImpression extends Model
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
    protected $fillable = ['centre_impression_id', 'libelle', 'created_at', 'updated_at'];

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
}
