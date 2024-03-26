<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel_ALT2 extends Model{
    protected $table = 'data_alt2';
    public function getData()
    {
        return $this->findAll(); // Mengambil semua data dari tabel
        
    }
    public function getTotal()
    {
        return $this->countAll();
    }

    public function getTodayData()
    {
        // Mengambil data yang masuk pada hari ini
        date_default_timezone_set('Asia/Jakarta');
        $today = date('Y-m-d');
        return $this->where('DATE(waktu)', $today)->countAllResults();
    }

    public function getDataForALT()
    {
        // Ambil data dari database
        $builder = $this->db->table('data_alt2')
        ->orderBy('waktu', 'DESC');
        $query = $builder->get();

        // Format data ke dalam array untuk CSV
        $data = $query->getResultArray();

        return $data;
    }

    public function checklimitResult()
    {
        $builder = $this->db->table('data_alt2')
            ->select('L6_ALT2_RESULT_CELL2 AS limit_Cell1, L6_ALT2_RESULT_CELL4 AS limit_Cell2, L6_ALT2_RESULT_CELL6 AS limit_Cell3, waktu')
            ->where('(L6_ALT2_RESULT_CELL2 >', 3)
            ->orWhere('L6_ALT2_RESULT_CELL4 >', 3)
            ->orWhere('L6_ALT2_RESULT_CELL6 >', 3)
            ->groupEnd() // menutup tanda kurung
            ->orderBy('waktu', 'DESC');
    
        $result = $builder->get();
    
        return $result->getResultArray();
    }

    public function ALT2_Cell2()
    {
        $builder = $this->db->table($this->table)
                           ->select('L6_ALT2_RESULT_CELL2')
                           ->get();

        $dataCounts = [];

        foreach ($builder->getResultArray() as $row) {
            $value = $row['L6_ALT2_RESULT_CELL2'];
            if (!isset($dataCounts[$value])) {
                $dataCounts[$value] = 1;
            } else {
                $dataCounts[$value]++;
            }
        }

        return $dataCounts;
    }

    public function ALT2_Cell4()
    {
        $builder = $this->db->table($this->table)
                           ->select('L6_ALT2_RESULT_CELL4')
                           ->get();

        $dataCounts = [];

        foreach ($builder->getResultArray() as $row) {
            $value = $row['L6_ALT2_RESULT_CELL4'];
            if (!isset($dataCounts[$value])) {
                $dataCounts[$value] = 1;
            } else {
                $dataCounts[$value]++;
            }
        }

        return $dataCounts;
    }

    public function ALT2_Cell6()
    {
        $builder = $this->db->table($this->table)
                           ->select('L6_ALT2_RESULT_CELL6')
                           ->get();

        $dataCounts = [];

        foreach ($builder->getResultArray() as $row) {
            $value = $row['L6_ALT2_RESULT_CELL6'];
            if (!isset($dataCounts[$value])) {
                $dataCounts[$value] = 1;
            } else {
                $dataCounts[$value]++;
            }
        }

        return $dataCounts;
    }
}