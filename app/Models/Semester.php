<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use MultiTenantModelTrait, HasFactory;

    public $table = 'semesters';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'mahasiswa_id',
        'tahunangkatan',
        'semester',
        'created_at',
        'frs',
        'sks',
        'ipsfile',
        'ips',
        'approved',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getFrs()
    {
        if (substr($this->frs, 0, 5) == "https") {
            return $this->frs;
        }

        if ($this->frs) {
            return asset('/uploads/frs/' . $this->frs);
        }

        return 'https://via.placeholder.com/500x500.png?text=No+Cover';
    }

    public function getIps()
    {
        if (substr($this->ipsfile, 0, 5) == "https") {
            return $this->ipsfile;
        }

        if ($this->ipsfile) {
            return asset('/uploads/ipsfile/' . $this->ipsfile);
        }

        return 'https://via.placeholder.com/500x500.png?text=No+Cover';
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}