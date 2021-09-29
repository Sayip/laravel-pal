<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitor extends Model
{
    protected $fillable=[
        'no_dok', // nama dokumen
        'id_kategori', // nomor dokumen
        'nama_dok', // divisi pembuat
        'tgl_terbit', // tanggal dokumen diterbitkan
        'status_review', // telah direvisi berapa kali atau belum
        'status_revisi', // telah direview atau belum
        'status_dok' // proses dokumen sudah selesai atau belum (sudah sampai di divisi HCM atau belum)
    ];

    public function kategori(){
        return $this->belongsTo(kategori::class, 'id_kategori', 'id');
    }
}
