<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model
{
    function AddData($no_kam,$tipe_kas,$tipe_kam,$id_fas,$gam_kam,$har_kam)
    {
        $query = $this->db->query("CALL simpan_kamar('$no_kam','$tipe_kas','$tipe_kam','$id_fas','$gam_kam','$har_kam');");

        return $query;
    }

    function UpdateData($id_kam,$no_kam,$tipe_kas,$tipe_kam,$id_fas,$gam_kam,$har_kam)
    {
        $query = $this->db->query("CALL ubah_kamar($id_kam,'$no_kam','$tipe_kas','$tipe_kam',$id_fas,'$gam_kam','$har_kam');");

        return $query;
    }

    function DeleteData($fieldid)
    {
       $query = $this->db->query("CALL hapus_kamar('$fieldid')");
    }

    function GetDatFas()
    { 
        $query = $this->db->query("CALL panggil_fasilitas");

        return $query->result();
    }


    function GetData($tabel)
    {
        $query= $this->db->get($tabel);
        return $query->result();
    }

    
    function getAll()
    {
         $query = $this->db->query("CALL panggil_kamar()");

        return $query->result();
    }

    function GetDataJoinWhere($id)
    {

        $query = $this->db->query("CALL panggil_kamar_kondisi($id)");
       return $query->row();
    }


}