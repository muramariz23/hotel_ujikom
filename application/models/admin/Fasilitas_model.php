<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas_model extends CI_Model
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

}