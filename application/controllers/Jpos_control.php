<?php

class Jpos_control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jpos_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Kode Pos Tulungagung';
        $data['tulungagung'] = $this->Jpos_model->getAllJpos();
        if( $this->input->post('keyword') ) {
            $data['tulungagung'] = $this->Jpos_model->cariData();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('jpos/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data';

        $this->form_validation->set_rules('kode_pos', 'kode_pos', 'required|numeric');
        $this->form_validation->set_rules('desa', 'desa', 'required');
        $this->form_validation->set_rules('wilayah', 'wilayah', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('jpos/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Jpos_model->tambahData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Jpos_control');
        }
    }

    public function hapus($id)
    {
        $this->Jpos_model->hapusData($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Jpos_control');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Kode Pos';
        $data['tulungagung'] = $this->Jpos_model->GetId($id);
        $this->load->view('templates/header', $data);
        $this->load->view('jpos/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data';
        $data['tulungagung'] = $this->Jpos_model->GetId($id);

        $this->form_validation->set_rules('kode_pos', 'kode_pos', 'required|numeric');
        $this->form_validation->set_rules('desa', 'desa', 'required');
        $this->form_validation->set_rules('wilayah', 'wilayah', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('jpos/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Jpos_model->ubahData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Jpos_control');
        }
    }

}
