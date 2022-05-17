<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi_model extends CI_Model
{
    function AddData($tabel, $data)
    {
        $this->db->insert($tabel,$data);
    }

    function UpdateData($tabel,$fieldid,$fieldvalue,$data)
    {
        $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }

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
        $query = $this->db->get();
        return $query->result();
    }

    function getAllKamar()
    {
        $this->db->select('*');
        $this->db->from('kamar');
        $this->db->join('fasilitas', 'kamar.id_fasilitas=fasilitas.id_fasilitas');
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

    function GetDataReservasiKamar($id_kamar)
    {
        $query = $this->db->query("SELECT * FROM reservasi WHERE id_kamar = '$id_kamar' ORDER BY id_reservasi DESC;");
        return $query->result();
        
    }

    function AmbilDataPengguna($id_login)
    {
        $query = $this->db->query("SELECT * FROM pengguna WHERE id_login = '$id_login'");
        return $query;
    }

    function CariDataKamar($tipe_kasur,$tipe_kamar)
    {
        $query = $this->db->query("CALL cari_kamar('single','standar');");
        return $query;
    }

    function GetPesananBaru($id_pengguna)
    {
        $query = $this->db->query("SELECT * FROM reservasi JOIN pengguna ON reservasi.id_pengguna=pengguna.id_pengguna JOIN kamar ON reservasi.id_kamar=kamar.id_kamar WHERE reservasi.id_pengguna='$id_pengguna' ORDER BY reservasi.id_reservasi DESC LIMIT 1");
        return $query;
    }
} ?>