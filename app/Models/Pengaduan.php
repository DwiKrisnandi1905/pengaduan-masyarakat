<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    
    use HasFactory;

    protected $table = 'pengaduan';

    protected $primaryKey = 'id_pengaduan';

    protected $fillable = [
        'tgl_pengaduan',
        'nik',
        'isi_laporan',
        'foto',
        'status',
        'anonym',
    ];

    protected $casts = ['tgl_pengaduan'=>'datetime'];

    public function user()
    {
        return $this->hasOne(Masyarakat::class, 'nik', 'nik');
    }
    public function getId()
    {
        return $this->attributes['id_pengaduan'];
    }
}
