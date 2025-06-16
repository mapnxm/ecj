<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasiltugas extends Model
{
    use HasFactory;
    protected $table = 'hasiltgs';
    protected $fillable = [
        'akun_id',
        'tugas_id',
        'nama',
        'nim',
        'jurusan',
        'dokumen',
        'audio',
        'semester',
        'topic',
        'tgl_pengumpulan',
        'nilai',
    ];

    const STATUS_SUBMITTED = 'submitted';
    const STATUS_GRADED = 'graded';

    public function user() {
        return $this->belongsTo(User::class);
    }
}
