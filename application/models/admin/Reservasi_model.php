<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi_model extends CI_Model
{
    
    function GetData($tabel)
    {
        $query= $this->db->get($tabel);
        return $query->result();
    }

    function GetDataWhere($tabel,$id,$nilai)
    {
        $this->db->where($id,$nilai);
        $query= $this->db->get($tabel);
        return $query;
    }

    function getAll()
    {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->join('kamar', 'reservasi.id_kamar=kamar.id_kamar');
        $this->db->join('pengguna', 'reservasi.id_pengguna=pengguna.id_pengguna');
        $query = $this->db->get();
        return $query->result();
    }

    function GetDataJoinWhere($tabel1, $tabel2, $onjoin, $id, $data)
    {

        $this->db->select('*');
        $this->db->from($tabel1);
        $this->db->join($tabel2, $onjoin);
        $this->db->where($id, $data);
        $query = $this->db->get();
        return $query;
    }

    function GetFilterWhere($tglCekIn)
    {
        $query = $this->db->query("SELECT * FROM reservasi JOIN pegawai ON reservasi.id_pegawai=pegawai.id_pegawai JOIN pengguna ON reservasi.id_pengguna=pengguna.id_pengguna JOIN kamar ON reservasi.id_kamar=kamar.id_kamar WHERE tgl_check_in LIKE '%$tglCekIn%'");
        return $query->result();
    }
} ?>

