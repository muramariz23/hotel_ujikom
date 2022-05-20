<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model
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
        $this->db->from('transaksi');
        $this->db->join('reservasi', 'transaksi.id_reservasi=reservasi.id_reservasi');
        $this->db->join('pengguna', 'transaksi.id_pengguna=pengguna.id_pengguna');
        $this->db->join('pegawai', 'transaksi.id_pegawai=pegawai.id_pegawai');
        $query = $this->db->get();
        return $query->result();
    }

    function GetDataJoinWhere($tabel1, $tabel2, $onjoin, $id, $data)
    {

        $this->db->select('*');
        $this->db->from($tabel1);
        $this->db->join($tabel2, $onjoin);
        $this->db->join($tabel3, $onjoin);
        $this->db->where($id, $data);
        $query = $this->db->get();
        return $query;
    }

     function GetDataReservasi($id_reservasi)
    {

        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->join('kamar', 'reservasi.id_kamar=kamar.id_kamar');
        $this->db->join('pengguna', 'reservasi.id_pengguna=pengguna.id_pengguna');
        $this->db->join('pegawai', 'reservasi.id_pegawai=pegawai.id_pegawai');
        $this->db->where('id_reservasi', $id_reservasi);
        $query = $this->db->get();
        return $query;
    }

    function CekIn($id_reservasi,$pegawai)
    {
        $query = $this->db->query("UPDATE reservasi SET
    id_pegawai = $pegawai,
    stat_pemesanan = 'masuk'
    WHERE id_reservasi = $id_reservasi;");
        return $query;
    }

    function AmbilDataPegawai($id_login)
    {
        $query = $this->db->query("SELECT * FROM pegawai WHERE id_login = '$id_login'");
        return $query;
    }


}