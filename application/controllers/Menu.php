<?php

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Menu';
        $data['Menu'] = $this->Menu_model->getAllMenu();

        $this->load->view('templates/header', $data);
        $this->load->view('Menu/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Menu';
        $data['Menu'] = $this->Menu_model->getMenuById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('Menu/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Stok Menu';
        $data['Menu'] = $this->Menu_model->getMenuById($id);

        $this->form_validation->set_rules('stok', 'Stok', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('Menu/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Menu_model->ubahDataMenu();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Menu');
        }
    }

}
