<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class divisi extends Model
{
    protected $fillable=[
        'nama_div',// nama divisi
        'dokumen'// nama dokumen yang ada(sop/sk) diisi setiap divisi. untuk format hampir sama dengan role permissions laravel-admin
    ];
}
