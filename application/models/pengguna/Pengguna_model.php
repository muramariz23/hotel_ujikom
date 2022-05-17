<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model
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

    function GetDataBaru($tabel,$id)
    {
        $this->db->order_by($id,'DESC');
        $this->db->limit(1);
        $query= $this->db->get($tabel);
        return $query->result();
    }

    function CekData($id_login)
    {
        // $this->db->select('*');
        // $this->db->join('pengguna', 'login.id_login=pengguna.id_login');
        $query = $this->db->query("SELECT id_login FROM pengguna WHERE id_login='$id_login'");
        return $query->row();
    }
    function getAll()
    {
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->join('login', 'pengguna.id_login=login.id_login');
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

    function AmbilDataWhere($id_login)
    {
         $query = $this->db->query("SELECT * FROM pengguna WHERE id_login = $id_login");

        return $query;
    }

}