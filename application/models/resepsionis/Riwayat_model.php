<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_model extends CI_Model
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
        $this->db->from('riwayat_reservasi');
        $this->db->join('kamar', 'riwayat_reservasi.id_kamar=kamar.id_kamar');
        $this->db->join('pengguna', 'riwayat_reservasi.id_pengguna=pengguna.id_pengguna');
        $this->db->join('pegawai', 'riwayat_reservasi.id_pegawai=pegawai.id_pegawai');
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

    function AmbilDataPegawai($id_login)
    {
        $query = $this->db->query("SELECT * FROM pegawai WHERE id_login = '$id_login'");
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

    function Batal($id_reservasi,$pegawai)
    {
        $query = $this->db->query("UPDATE reservasi SET
    id_pegawai = $pegawai,
    keterangan = 'DIBATALKAN'
    WHERE id_reservasi = $id_reservasi;");
        return $query;
    }

    function GetFilterWhere($tglCekIn)
    {
        $query = $this->db->query("SELECT * FROM riwayat_reservasi JOIN pegawai ON riwayat_reservasi.id_pegawai=pegawai.id_pegawai JOIN pengguna ON riwayat_reservasi.id_pengguna=pengguna.id_pengguna JOIN kamar ON riwayat_reservasi.id_kamar=kamar.id_kamar WHERE tgl_check_in LIKE '%$tglCekIn%'");
        return $query->result();
    }
} ?>

