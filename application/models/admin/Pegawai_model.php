<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{
    function AddDataUser($uname,$pass,$stat)
    {
         $query = $this->db->query("CALL simpan_login('$uname','$pass','$stat');");

        return $query;
    }

    function Lengkapi($id_log)
    {
         $query = $this->db->query("CALL panggil_login_kondisi('$id_log');");

        return $query->row();
    }

    function AddDataPegawai($id_log,$nam_peg,$alamat,$stat_peg)
    {
         $query = $this->db->query("CALL simpan_pegawai('$id_log','$nam_peg','$alamat','$stat_peg');");

        return $query;
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
        $this->db->from('pegawai');
        $this->db->join('login', 'pegawai.id_login=login.id_login');
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


}