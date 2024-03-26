<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel_ALT1 extends Model{
    protected $table = 'data_alt1';
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
        $builder = $this->db->table('data_alt1')
        ->orderBy('waktu', 'DESC');
        $query = $builder->get();

        // Format data ke dalam array untuk CSV
        $data = $query->getResultArray();

        return $data;
    }

    public function checklimitResult()
{
    $builder = $this->db->table('data_alt1')
        ->select('L6_ALT1_RESULT_CELL1 AS limit_Cell1, L6_ALT1_RESULT_CELL3 AS limit_Cell2, L6_ALT1_RESULT_CELL5 AS limit_Cell3, waktu')
        ->where('(L6_ALT1_RESULT_CELL1 >', 3)
        ->orWhere('L6_ALT1_RESULT_CELL3 >', 3)
        ->orWhere('L6_ALT1_RESULT_CELL5 >', 3)
        ->groupEnd() // menutup tanda kurung
        ->orderBy('waktu', 'DESC');

    $result = $builder->get();

    return $result->getResultArray();
}
public function ALT1_Cell1()
    {
        $builder = $this->db->table($this->table)
                           ->select('L6_ALT1_RESULT_CELL1')
                           ->get();

        $dataCounts = [];

        foreach ($builder->getResultArray() as $row) {
            $value = $row['L6_ALT1_RESULT_CELL1'];
            if (!isset($dataCounts[$value])) {
                $dataCounts[$value] = 1;
            } else {
                $dataCounts[$value]++;
            }
        }

        return $dataCounts;
    }

    public function ALT1_Cell3()
    {
        $builder = $this->db->table($this->table)
                           ->select('L6_ALT1_RESULT_CELL3')
                           ->get();

        $dataCounts = [];

        foreach ($builder->getResultArray() as $row) {
            $value = $row['L6_ALT1_RESULT_CELL3'];
            if (!isset($dataCounts[$value])) {
                $dataCounts[$value] = 1;
            } else {
                $dataCounts[$value]++;
            }
        }

        return $dataCounts;
    }


    public function ALT1_Cell5()
    {
        $builder = $this->db->table($this->table)
                           ->select('L6_ALT1_RESULT_CELL5')
                           ->get();

        $dataCounts = [];

        foreach ($builder->getResultArray() as $row) {
            $value = $row['L6_ALT1_RESULT_CELL5'];
            if (!isset($dataCounts[$value])) {
                $dataCounts[$value] = 1;
            } else {
                $dataCounts[$value]++;
            }
        }

        return $dataCounts;
    }

}