<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Sparepart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Sparepart_model');
    }
    public function index()
    {
        $data['judul'] = "Halaman Sparepart";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sparepart'] = $this->Sparepart_model->get();
        $this->load->view("layout/admin_header", $data);
        $this->load->view("Sparepart/vw_sparepart", $data);
        $this->load->view("layout/admin_footer", $data);
    }

    public function hapus($id)
    {
        $this->Sparepart_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Sparepart tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Sparepart Berhasil Dihapus!</div>');
        }
        redirect('Sparepart');
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Sparepart";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['sparepart'] = $this->Sparepart_model->get();
        $this->form_validation->set_rules('nama', 'Nama Sparepart', 'required', [
            'required' => 'Nama Sparepart Wajib di isi'
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required', [
            'required' => 'Stok Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required', [
            'required' => 'Harga Wajib di isi'
        ]);
        $this->form_validation->set_rules('gambar', 'Gambar', 'required', [
            'required' => 'Gambar Wajib di isi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin_header", $data);
            $this->load->view("Sparepart/vw_tambah_Sparepart", $data);
            $this->load->view("layout/admin_footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga')
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/sparepart';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Sparepart_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Sparepart Berhasil Ditambah!</div>');
            redirect('Sparepart');
        }
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Sparepart";
        $data['sparepart'] = $this->Sparepart_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        //$data['sparepart'] = $this->Sparepart_model->get();
        $this->form_validation->set_rules('nama', 'Nama Sparepart', 'required', [
            'required' => 'Nama Sparepart Wajib di isi'
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required', [
            'required' => 'Stok Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required', [
            'required' => 'Harga Wajib di isi'
        ]);
        $this->form_validation->set_rules('gambar', 'Gambar', 'required', [
            'required' => 'Gambar Sparepart Wajib di isi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin_header", $data);
            $this->load->view("Sparepart/vw_ubah_Sparepart", $data);
            $this->load->view("layout/admin_footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga')
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/sparepart';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id = $this->input->post('id');
            $this->Sparepart_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Sparepart Berhasil Diubah!</div>');
            redirect('Sparepart');
        }
    }

    // public function update()
    // {
    //     $data = [
    //         'nama' => $this->input->post('nama'),
    //         'ruangan' => $this->input->post('ruangan'),
    //         'jurusan' => $this->input->post('jurusan'),
    //         'akreditasi' => $this->input->post('akreditasi'),
    //         'nama_kaprodi' => $this->input->post('nama_kaprodi'),
    //         'tahun_berdiri' => $this->input->post('tahun_berdiri'),
    //         'output_lulusan' => $this->input->post('output_lulusan')
    //     ];
    //     $id = $this->input->post('id');
    //     $this->Sparepart_model->update(['id' => $id], $data);
    //     redirect('Sparepart');
    // }
}
