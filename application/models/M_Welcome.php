<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class M_Welcome extends CI_Model 
{
    public function regist_users($data)
    {
        $this->$db->insert('users' ,$data);
    }

    public function DataLogin($gmail)
    {
        $this->$db->where('gmail', $gmail);
        $query = $this->db->get('users');
        return $query->row();
    }

    function getLoginUser($gmail, $password)
    {
    $this->$db->where('gmail', $gmail);
    $this->$db->where('password', $password);
    $query = $this->db->get('users');
    return $query->row();
    }
    
}