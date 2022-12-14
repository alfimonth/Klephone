<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['title'] = 'Customer';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['cos'] = $this->ModelCos->getCos()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('customer/index');
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['title'] = 'Tambah customer';
        $data['brand'] = $this->ModelProduk->getBrand()->result_array();

        // validasi data
        $this->form_validation->set_rules('name', 'name', 'required|trim|min_length[3]', [
            'required' => 'Harap isi nama customer',
            'min_length' => 'Nama terlalu pendek'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('customer/tambah');
            $this->load->view('templates/auth_footer');
        } else {

            $data = [
                'name' => $this->input->post('name', true),
                'tlp' => $this->input->post('tlp', true),
                'catatan' => $this->input->post('catatan', true),
            ];

            $this->ModelCos->simpanCos($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">1 customer berhasil ditambahkan</div>');
            redirect('customer');
        }
    }
    public function edit()
    {
        $data['title'] = 'Edit customer';
        $data['cos'] = $this->ModelCos->getCosWhere($this->uri->segment(3))->row_array();
        $data['id'] = $this->uri->segment(3);

        // validasi data

        $this->form_validation->set_rules('name', 'name', 'required|min_length[3]', [
            'required' => 'Input tidak boleh kosong',
            'min_length' => 'Nama terlalu pendek'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('customer/edit');
            $this->load->view('templates/auth_footer');
        } else {

            $data = [
                'name' => $this->input->post('name', true),
                'tlp' => $this->input->post('tlp', true),
                'catatan' => $this->input->post('catatan', true),
            ];

            $this->ModelCos->updateCos(['id' => $this->input->post('id')], $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data customer berhasil diubah</div>');
            redirect('customer');
        }
    }
    public function hapus()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelCos->hapusCos($where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Data customer berhasil dihapus</div>');
        redirect('customer');
    }
}
