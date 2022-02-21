<?php 

class Login_model extends CI_Model {
    function auth($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('login');
        return $result;
    }
}