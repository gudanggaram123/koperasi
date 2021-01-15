<?php

function generate_code()
{
    $data=DB::table('nasabah')->where("kd_nasabah","<>",null)->orderBy("id","desc")->first();
    $no=isset($data)?$data->kd_nasabah:null;
    if ($no==null){
    $no ="0001";
    } else{
        $no=(int)substr($no,-4);
        $no++;
        if(strlen($no) == 1){
            $no = "000".$no;
        }elseif(strlen($no) == 2){
            $no = "00".$no;
        }elseif(strlen($no) == 3){
            $no = "0".$no;
        }else{
            $no = $no;
        }

    }
    return "NB-".$no;


}

function generate_codetr()
{
    $data=DB::table('transaksi_pinjam_uang')->where("id_transaksi","<>",null)->orderBy("id","desc")->first();
    $no=isset($data)?$data->id_transaksi:null;
    if ($no==null){
    $no ="0001";
    } else{
        $no=(int)substr($no,-4);
        $no++;
        if(strlen($no) == 1){
            $no = "000".$no;
        }elseif(strlen($no) == 2){
            $no = "00".$no;
        }elseif(strlen($no) == 3){
            $no = "0".$no;
        }else{
            $no = $no;
        }

    }
    return "TR-".$no;


}

?>