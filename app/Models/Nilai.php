<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';

    protected $fillable = ['id', 'nilai', 'id_user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
