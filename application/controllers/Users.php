<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users extends CI_Controller
{
    public function index()
    {
        $query = $this->db->query("SELECT * FROM users ORDER BY id ASC");
        $result = $query->result();

        $data['title'] = 'Daftar Pengguna';
        $data['result'] = $result;

        $this->load->view('inc/header');
        $this->load->view('inc/sidebar');
        $this->load->view("users/users", $data);
        $this->load->view('inc/footer');
    }
    public function users_tambah()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('level_users', 'Level Pengguna', 'required');

        if ($this->form_validation->run() === TRUE) {
            $password = $this->input->post('password');
            $array_insert = array(
                'username' => $this->input->post('username'),
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'password' => md5($password),
                'phone' => $this->input->post('phone'),
                'level_users' => $this->input->post('level_users'),
                'ip_address' => '127.0.0.1',
                'active' => $this->input->post('active')
            );

            $insert_data = $this->db->insert('users', $array_insert);

            if ($insert_data == TRUE) {
                $this->session->set_flashdata('action_status', '<div class="alert alert-success">User Berhasil ditambahkan</div>');
                redirect('users');
            }
        } else {
            $this->load->view('inc/header');
            $this->load->view('inc/sidebar');
            $this->load->view("users/users_tambah");
            $this->load->view('inc/footer');
        }
    }

    public function users_edit($id)
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('level_users', 'Level Pengguna', 'required');
        $this->form_validation->set_rules('active', 'Status Aktif', 'required');

        if ($this->form_validation->run() === FALSE) {
            $query = $this->db->get_where('users', ['id' => $id]);
            if ($query->num_rows() == 1) {
                $data['user'] = $query->row();
            } else {
                $this->session->set_flashdata('action_status', '<div class="alert alert-warning">User Tidak ada</div>');
                redirect('users');
            }

            $this->load->view('inc/header');
            $this->load->view('inc/sidebar');
            $this->load->view("users/users_edit", $data);
            $this->load->view('inc/footer');
        } else {
            $array_update = array(
                'username' => $this->input->post('username'),
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'level_users' => $this->input->post('level_users'),
                'active' => $this->input->post('active')
            );

            $this->db->where('id', $id);
            $update_data = $this->db->update('users', $array_update);

            if ($update_data == TRUE) {
                $this->session->set_flashdata('action_status', '<div class="alert alert-success">User Berhasil diupdate</div>');
                redirect('users');
            }
        }
    }

    public function users_hapus($id)
    {
        $query = $this->db->get_where('users', ['id' => $id]);
        if ($query->num_rows() == 1) {
            $this->db->where('id', $id);
            $delete_data = $this->db->delete('users');
        } else {
            $delete_data = false;
        }

        if ($delete_data == TRUE) {
            $this->session->set_flashdata('action_status', '<div class="alert alert-success">User Berhasil dihapus</div>');
        } else {
            $this->session->set_flashdata('action_status', '<div class="alert alert-danger">User Gagal dihapus</div>');
        }
        redirect('users');
    }
}
