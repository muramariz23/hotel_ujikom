<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fasilitas_model extends CI_Model
{
    function AddData($no_fas, $j_fas, $isi_fas)
    {
        $query = $this->db->query("CALL simpan_fasilitas('','$no_fas','$j_fas','$isi_fas');");

        return $query;
    }

        function UpdateData($id_fas,$no_fas, $j_fas, $isi_fas)
    {
        $query = $this->db->query("CALL ubah_fasilitas($id_fas,'$no_fas','$j_fas','$isi_fas');");

        return $query;
    }

    
     function GetData()
    {
        $query = $this->db->query("CALL panggil_fasilitas()");

        return $query->result();
    }

    function DeleteData($id)
    {
       $query = $this->db->query("CALL hapus_fasilitas('$id')");
    }

    function GetDataWhere($id)
    {
       $query = $this->db->query("CALL panggil_fasilitas_kondisi('$id')");
       return $query->row();
    }

    }


    //     function DeleteData($tabel,$fieldid,$fieldvalue)
    // {
    //     $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    // }

    //     function GetData($tabel)
    // {
    //     $query= $this->db->get($tabel);
    //     return $query->result();
    // }


    // function GetDataWhere($id,$nilai)
    // {
    //     $this->db->where($id,$nilai);
    //     $query= $this->db->get($tabel);
    //     return $query;
    // }
