<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiHeader extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the kasir that owns the TransaksiHeader
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kasir()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
