<?php

return [
    'userManagement' => [
        'title'          => 'Manajemen User',
        'title_singular' => 'Manajemen User',
    ],
    'permission' => [
        'title'          => 'Izin',
        'title_singular' => 'Izin',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Peranan',
        'title_singular' => 'Peranan',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Daftar Pengguna',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'approved'                 => 'Approved',
            'approved_helper'          => ' ',
        ],
    ],
    'perguruanTinggi' => [
        'title'          => 'Perguruan Tinggi',
        'title_singular' => 'Perguruan Tinggi',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'nama'              => 'Nama Perguruan Tinggi',
            'nama_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'prodi'             => 'Program Studi',
            'prodi_helper'      => ' ',
        ],
    ],
    'mahasiswa' => [
        'title'          => 'List Mahasiswa',
        'title_singular' => 'List Mahasiswa',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'nim'               => 'NIM',
            'nim_helper'        => ' ',
            'nama'              => 'Nama Lengkap',
            'nama_helper'       => ' ',
            'nik'               => 'NIK',
            'nik_helper'        => ' ',
            'ttl'               => 'Tempat Tanggal lahir',
            'ttl_helper'        => ' ',
            'perguruan'         => 'Perguruan Tinggi',
            'perguruan_helper'  => ' ',
            'alamat'            => 'Alamat',
            'alamat_helper'     => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'beasiswa'          => 'Jenis Beasiswa',
            'beasiswa_helper'   => 'Kosongkan Jika tidak mengikuti beasiswa apapun.',
            'nohp'              => 'No Handphone',
            'nohp_helper'       => ' ',
            'nama_ortu'         => 'Nama OrangTua/Wali',
            'nama_ortu_helper'  => ' ',
            'noortu'            => 'No OrangTua/Wali',
            'noortu_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
            'prodi'             => 'Program Studi',
            'prodi_helper'      => ' ',
            'poto'              => 'Poto Profil',
            'poto_helper'       => ' ',
            'status'            => 'Status Mahasiswa',
            'status_helper'     => ' ',
        ],
    ],
    'prodi' => [
        'title'          => 'Program Studi',
        'title_singular' => 'Program Studi',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'nama'              => 'Nama Prodi',
            'nama_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'semester' => [
        'title'          => 'Semester',
        'title_singular' => 'Semester',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'mahasiswa'            => 'Nama mahasiswa',
            'mahasiswa_helper'     => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
            'created_by'           => 'Created By',
            'created_by_helper'    => ' ',
            'tahunangkatan'        => 'Tahun Angkatan',
            'tahunangkatan_helper' => ' ',
            'semester'             => 'Semester',
            'semester_helper'      => ' ',
            'frs'                  => 'FRS',
            'frs_helper'           => ' ',
            'sks'                  => 'SKS',
            'sks_helper'           => ' ',
            'ipsfile'              => 'File IPS',
            'ipsfile_helper'       => ' ',
            'ips'                  => 'IPS',
            'ips_helper'           => ' ',
        ],
    ],
    'laporanSemester' => [
        'title'          => 'Laporan Semester',
        'title_singular' => 'Laporan Semester',
    ],

];