<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Arsip extends Model
{
    use HasFactory;

    protected $table = 'arsip';
    protected $primaryKey = 'id' ;
    protected $fillable = ['id','nomor_surat', 'kategori_id', 'judul', 'file_surat', 'waktu_arsip'];

    // Relasi dengan Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
