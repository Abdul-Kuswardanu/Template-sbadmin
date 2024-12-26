<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_Users extends CI_Model {
    public function getDataUsers() {
        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
    }

    public function InsertDataUsers($data) {
        $this->db->insert('users', $data);
    }

    public function EditDataUsers($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    public function GetDataUsersDetail($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->row();
    }

    public function DeleteDataUsers($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }

    public function countUsers() {
        $this->db->from('users');
        return $this->db->count_all_results();
    }
 
}