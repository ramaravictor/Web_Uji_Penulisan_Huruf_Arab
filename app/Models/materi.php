<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class materi extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug', 'kategori_id', 'body', 'image'];

    public function getRouteKeyName()
    {
        return('slug');
    }

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
}
