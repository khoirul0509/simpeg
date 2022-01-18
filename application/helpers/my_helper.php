<?php

function ubah_tanggal_indo($tanggal){
    if($tanggal!=""||$tanggal!="0000-00-00" || !empty($tanggal)){
    $tanggalan=explode('-',$tanggal);
    $array=array($tanggalan[2],$tanggalan[1],$tanggalan[0]);
    $hasil=implode('-',$array);
    }else{
      $hasil="";
    }
    return $hasil;
}

function simpanTanggal($tanggal){
    $cek_tgl=validasiTanggal($tanggal);
    if($cek_tgl){
      $hasil=date('Y-m-d',strtotime($tanggal));
    }else{
      $hasil=NULL;
    }
    return $hasil;
}

function validasiTanggal($date, $format = 'd-m-Y')
  {
      $d = DateTime::createFromFormat($format, $date);     
      return $d && $d->format($format) === $date;
  }
