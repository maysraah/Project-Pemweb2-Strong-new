<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    use HasFactory;
    protected $table = 'kuis';

    protected $fillable = ['id_soal', 'soal', 'pil_a', 'pil_b', 'pil_c', 'pil_d', 'kunci_jawaban', 'gambar'];
}
