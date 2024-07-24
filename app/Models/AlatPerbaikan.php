<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AlatPerbaikan extends Model
{
    use HasFactory;
    protected $table = 'alat_perbaikan';
    protected $guarded = [];
}
