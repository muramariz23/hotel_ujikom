<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model
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
        $this->db->from('kamar');
        $this->db->join('fasilitas', 'kamar.id_fasilitas=fasilitas.id_fasilitas');
        $query = $this->db->get();
        return $query->result();
    }

    function getDataJoinWhere($id_kamar)
    {
        
        $this->db->join('fasilitas', 'kamar.id_fasilitas=fasilitas.id_fasilitas');
        $query = $this->db->get_where('kamar', ["id_kamar" => $id_kamar]);
        return $query->row();
    }


}