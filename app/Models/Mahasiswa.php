<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use MultiTenantModelTrait, HasFactory;

    public $table = 'mahasiswas';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const STATUS_SELECT = [
        'aktif'      => 'Aktif',
        'lulus'      => 'Lulus',
        'tidakaktif' => 'Tidak Aktif',
    ];

    protected $fillable = [
        'nim',
        'nama',
        'nik',
        'ttl',
        'perguruan_id',
        'prodi_id',
        'alamat',
        'email',
        'beasiswa',
        'nohp',
        'nama_ortu',
        'noortu',
        'poto',
        'created_at',
        'status',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function mahasiswaSemesters()
    {
        return $this->hasMany(Semester::class, 'mahasiswa_id', 'id');
    }

    public function perguruan()
    {
        return $this->belongsTo(PerguruanTinggi::class, 'perguruan_id');
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}