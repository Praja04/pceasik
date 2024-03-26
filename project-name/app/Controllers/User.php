<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\DataModel_H2;
use App\Models\DataModel_ALT1;
use App\Models\DataModel_ALT2;

class User extends BaseController
{
    public function index()
    {
        if (session()->get('user_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }

    
        return view('admin/dashboard');
    }

    //--------------------------------------------------------------------
    public function downloadCSV()
    {
        // Panggil model untuk mengambil data dari database
        $dataModel = new DataModel();
        $data = $dataModel->getDataForCSV(); // Method baru untuk mendapatkan data untuk CSV

        // Nama file CSV yang akan diunduh
        $filename = 'data HSM Line 6 Head 1.csv';

        // Buat file CSV sementara
        $file = fopen('php://temp', 'w');

        // Tulis nama kolom ke file CSV
        $columns = array_keys($data[0]); // Ambil nama kolom dari data pertama
        fputcsv($file, $columns);

        // Tulis data ke file CSV
        foreach ($data as $row) {
            fputcsv($file, $row);
        }

        // Pindahkan kursor ke awal file
        fseek($file, 0);

        // Set header untuk file unduhan
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        // Salin isi file CSV sementara ke output
        fpassthru($file);
        fclose($file);

        exit();
    }

    public function downloadCSV2()
    {
        // Panggil model untuk mengambil data dari database
        $dataModel = new DataModel_H2();
        $data = $dataModel->getDataForCSV(); // Method baru untuk mendapatkan data untuk CSV

        // Nama file CSV yang akan diunduh
        $filename = 'data HSM Line 6 Head 2.csv';

        // Buat file CSV sementara
        $file = fopen('php://temp', 'w');

        // Tulis nama kolom ke file CSV
        $columns = array_keys($data[0]); // Ambil nama kolom dari data pertama
        fputcsv($file, $columns);

        // Tulis data ke file CSV
        foreach ($data as $row) {
            fputcsv($file, $row);
        }

        // Pindahkan kursor ke awal file
        fseek($file, 0);

        // Set header untuk file unduhan
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        // Salin isi file CSV sementara ke output
        fpassthru($file);
        fclose($file);

        exit();
    }

    public function getData()
    {
        $dataModel = new DataModel();
        $dataModel2 = new DataModel_H2();
        
        $dataTodayModel1 = $dataModel->getTodayData();
        $dataTodayModel2 = $dataModel2->getTodayData();
        $totalTodayData =  $dataTodayModel1 + $dataTodayModel2 ;

        $dataTotalModel1 = $dataModel->getTotal();
        $dataTotalModel2 = $dataModel2->getTotal();
        $totalDataALL = $dataTotalModel1 + $dataTotalModel2;

        $data['result'] = $dataModel->getData();
        $data['total'] = $totalDataALL;
        $data['modeleft'] = $dataModel->getModeTempLeft();
        $data['moderight'] = $dataModel->getModeTempRight();
        $data['datatoday'] = $totalTodayData;
        $data['temperatureData'] = $dataModel->checkTemperatureBelowLimit(); // Menyimpan hasil temperatur dalam array
        $data['temperatureData2'] = $dataModel->checkTemperatureBelowLimit2(); // Menyimpan hasil temperatur dalam array


        // Get upper and lower limits from database
        $data['upperLimit'] = $dataModel->getUpperLimit(); // Adjust method name according to your model
        $data['lowerLimit'] = $dataModel->getLowerLimit(); // Adjust method name according to your model
        $this->response->setContentType('application/json');
        return $this->response->setJSON($data);
    }

    public function getData2()
    {
        $dataModel = new DataModel_H2();
        $data['result'] = $dataModel->getData();
        $data['total'] = $dataModel->getTotal();
        $data['modeleft'] = $dataModel->getModeTempLeft();
        $data['moderight'] = $dataModel->getModeTempRight();
        $data['datatoday'] = $dataModel->getTodayData();
        $data['temperatureData'] = $dataModel->checkTemperatureBelowLimit(); // Menyimpan hasil temperatur dalam array
        $data['temperatureData2'] = $dataModel->checkTemperatureBelowLimit2(); // Menyimpan hasil temperatur dalam array


        // Get upper and lower limits from database
        $data['upperLimit'] = $dataModel->getUpperLimit(); // Adjust method name according to your model
        $data['lowerLimit'] = $dataModel->getLowerLimit(); // Adjust method name according to your model
        $this->response->setContentType('application/json');
        return $this->response->setJSON($data);
    }


    ///Controller ALT
    public function ALT1()
    {
        if (session()->get('user_nama') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }

    
        return view('admin/dashboard_alt');
    }

    public function getDataALT1(){
        $dataModel = new DataModel_ALT1();
        $dataModel2 = new DataModel_ALT2();
        $dataTodayModel1 = $dataModel->getTodayData();
        $dataTodayModel2 = $dataModel2->getTodayData();
        $totalTodayData =  $dataTodayModel1 + $dataTodayModel2 ;
        $dataTotalModel1 = $dataModel->getTotal();
        $dataTotalModel2 = $dataModel2->getTotal();
        $totalDataALL = $dataTotalModel1 + $dataTotalModel2;
        $data['result'] = $dataModel->getData();
        $data['total'] =  $totalDataALL;
        $data['limit'] = $dataModel->checklimitResult();
        $data['datatoday'] = $totalTodayData;
        $data['dataCell1'] = $dataModel->ALT1_Cell1();
        $data['dataCell3'] = $dataModel->ALT1_Cell3();
        $data['dataCell5'] = $dataModel->ALT1_Cell5();
        $this->response->setContentType('application/json');
        return $this->response->setJSON($data);
    }

    public function downloadCSV_ALT1()
    {
        // Panggil model untuk mengambil data dari database
        $dataModel = new DataModel_ALT1();
        $data = $dataModel->getDataForALT(); // Method baru untuk mendapatkan data untuk CSV

        // Nama file CSV yang akan diunduh
        $filename = 'data ALT 1 Line 6.csv';

        // Buat file CSV sementara
        $file = fopen('php://temp', 'w');

        // Tulis nama kolom ke file CSV
        $columns = array_keys($data[0]); // Ambil nama kolom dari data pertama
        fputcsv($file, $columns);

        // Tulis data ke file CSV
        foreach ($data as $row) {
            fputcsv($file, $row);
        }

        // Pindahkan kursor ke awal file
        fseek($file, 0);

        // Set header untuk file unduhan
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        // Salin isi file CSV sementara ke output
        fpassthru($file);
        fclose($file);

        exit();
    }

    public function getDataALT2(){
        $dataModel = new DataModel_ALT2();

        $data['result'] = $dataModel->getData();
        $data['total'] = $dataModel->getTotal();
        $data['limit'] = $dataModel->checklimitResult();
        $data['datatoday'] = $dataModel->getTodayData();
        $data['dataCell2'] = $dataModel->ALT2_Cell2();
        $data['dataCell4'] = $dataModel->ALT2_Cell4();
        $data['dataCell6'] = $dataModel->ALT2_Cell6();
        $this->response->setContentType('application/json');
        return $this->response->setJSON($data);
    }

    public function downloadCSV_ALT2()
    {
        // Panggil model untuk mengambil data dari database
        $dataModel = new DataModel_ALT2();
        $data = $dataModel->getDataForALT(); // Method baru untuk mendapatkan data untuk CSV

        // Nama file CSV yang akan diunduh
        $filename = 'data ALT 2 Line 6.csv';

        // Buat file CSV sementara
        $file = fopen('php://temp', 'w');

        // Tulis nama kolom ke file CSV
        $columns = array_keys($data[0]); // Ambil nama kolom dari data pertama
        fputcsv($file, $columns);

        // Tulis data ke file CSV
        foreach ($data as $row) {
            fputcsv($file, $row);
        }

        // Pindahkan kursor ke awal file
        fseek($file, 0);

        // Set header untuk file unduhan
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        // Salin isi file CSV sementara ke output
        fpassthru($file);
        fclose($file);

        exit();
    }
}
