<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel_H2 extends Model
{
    protected $table = 'data_hsm2';

    public function getData()
    {
        return $this->findAll(); // Mengambil semua data dari tabel
    }
    public function getTotal()
    { 
        return $this->countAll();
    }

    public function getModeTempLeft()
    {
        $builder = $this->select('L6_HSM2_TEMP_LEFT, COUNT(	L6_HSM2_TEMP_LEFT) as jumlah_kemunculan')
            ->groupBy('	L6_HSM2_TEMP_LEFT')
            ->orderBy('jumlah_kemunculan', 'DESC')
            ->limit(1)
            ->get();

        return $builder->getRow(); // Mengembalikan nilai yang paling sering muncul
    }
    public function getModeTempRight()
    {
        $builder = $this->select('L6_HSM2_TEMP_RIGHT, COUNT( L6_HSM2_TEMP_RIGHT) as jumlah_kemunculan')
            ->groupBy('	L6_HSM2_TEMP_RIGHT')
            ->orderBy('jumlah_kemunculan', 'DESC')
            ->limit(1)
            ->get();

        return $builder->getRow(); // Mengembalikan nilai yang paling sering muncul
    }

    public function getTodayData()
    {
        date_default_timezone_set('Asia/Jakarta');
        $today = date('Y-m-d');
        return $this->where('DATE(waktu)', $today)->countAllResults();
    }

    public function checkTemperatureBelowLimit()
    {
        $builder = $this->select('L6_HSM2_TEMP_LEFT, waktu')
            ->where('L6_HSM2_TEMP_LEFT <', 360)
            ->orWhere('L6_HSM2_TEMP_LEFT >', 435)
            ->orderBy('waktu', 'DESC');

        $result = $builder->get();


        return $result->getResultArray();
    }

    public function checkTemperatureBelowLimit2()
    {
        $builder = $this->select('L6_HSM2_TEMP_RIGHT, waktu')
            ->where('L6_HSM2_TEMP_RIGHT < ', 360)
            ->orWhere('L6_HSM2_TEMP_RIGHT > ', 435)
            ->orderBy('waktu', 'DESC');

        $result = $builder->get();

        return $result->getResultArray();
    }

    public function getDataForCSV()
    {
       // Ambil data dari database
       $builder = $this->db->table('data_hsm2')
       ->orderBy('waktu', 'DESC');
       $query = $builder->get();

       // Format data ke dalam array untuk CSV
       $data = $query->getResultArray();

       return $data;
    }

    // In your DataModel.php
    public function getUpperLimit()
    {
        // Ganti 'UPPER_LIMIT_TEMP' dengan nama kolom yang sesuai di tabel Anda
        return $this->db->table('data_hsm2')
            ->select('UPPER_LIMIT_TEMP')
            ->orderBy('waktu', 'DESC') // Ganti 'waktu' dengan nama kolom waktu di tabel Anda
            ->get()
            ->getRowArray()['UPPER_LIMIT_TEMP'];
    }
    
    public function getLowerLimit()
    {
        // Ganti 'LOWER_LIMIT_TEMP' dengan nama kolom yang sesuai di tabel Anda
        return $this->db->table('data_hsm2')
            ->select('LOWER_LIMIT_TEMP')
            ->get()
            ->getRowArray()['LOWER_LIMIT_TEMP'];
    }

}
