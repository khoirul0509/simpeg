<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporanfpdf extends CI_Controller {
 
    function __construct(){
        parent::__construct();
        $this->load->library('cetak_pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
    }
 
    function index()
    {
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm','Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'Daftar Pegawai ',0,1,'C');
        $pdf->Cell(0,7,'Pemerintah Kota  ',0,1,'C');

        $pdf->Cell(10,7,'',0,1);
 
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(40,6,'Nik',1,0,'C');
        $pdf->Cell(40,6,'Nama',1,0,'C');
        $pdf->Cell(40,6,'Tempat Lahit',1,0,'C');
        $pdf->Cell(40,6,'Tanggal Lahit',1,0,'C');
        $pdf->Cell(40,6,'Status Kontak',1,0,'C');
        $pdf->Cell(65,6,'Unit Kerja',1,1,'C');
 
        $pdf->SetFont('Arial','',10);
        $m_thl = $this->db->get('m_thl')->result();
        $no=0;
        foreach ($m_thl as $data){
            $no++;
                $pdf->Cell(10,6,$no,1,0, 'C');
                $pdf->Cell(40,6,$data->nik,1,0);
                $pdf->Cell(40,6,$data->nama,1,0);
                $pdf->Cell(40,6,$data->tempat_lahir,1,0);
                $pdf->Cell(40,6,$data->tgl_lahir,1,0);
                $pdf->Cell(40,6,$data->status_kontrak,1,0);
                $pdf->Cell(65,6,$data->kdunor,1,1);

        }
        $pdf->Output();
    }
}