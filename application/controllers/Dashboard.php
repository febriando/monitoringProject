<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('M_dashboard');
    }

    public function index()
    {
        $data['title'] = "Project Monitoring";

        $data['monitoring'] = $this->M_dashboard->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('dashboard/v_data', $data);
        $this->load->view('v_footer');
    }

    // function tambah()
    // {
    //     $data['title'] = "Tambah Data Pasien";

    //     $this->load->view('v_header', $data);
    //     $this->load->view('pasien/v_data_tambah');
    //     $this->load->view('v_footer');
    // }

    // function insert()
    // {
    //     $nama = $this->input->post('nama_pasien');
    //     $jk = $this->input->post('jenis_kelamin');
    //     $umur = $this->input->post('umur');

    //     $data = array(
    //         'nama_pasien' => $nama,
    //         'jenis_kelamin' => $jk,
    //         'umur' => $umur
    //     );

    //     $this->m_pasien->insert_data($data);

    //     redirect('pasien');
    // }

    function edit($id)
    {
        $data['title'] = "Edit Data Monitoring";

        $where = array('id' => $id);
        $data['m'] = $this->M_dashboard->edit_data($where)->row_array();

        $this->load->view('v_header', $data);
        $this->load->view('dashboard/v_data_edit', $data);
        $this->load->view('v_footer');
    }

    function update()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('project_name');
        $client = $this->input->post('client');
        $leader = $this->input->post('project_leader');
        // $e_leader = $this->input->post('email_leader');
        $s_date = $this->input->post('start_date');
        $n_date = $this->input->post('end_date');
        $progres = $this->input->post('progres');

        $data = array(
            'project_name' => $name,
            'client' => $client,
            'project_leader' => $leader,
            // 'email_leader' => $e_leader,
            'start_date' => $s_date,
            'end_date' => $n_date,
            'progres' => $progres
        );

        $where = array('id' => $id);
        $this->M_dashboard->update_data($data, $where);

        redirect('dashboard');
    }

    function hapus($id)
    {
        $where = array('id' => $id);
        $this->M_dashboard->hapus_data($where);
        redirect('pasien');
    }
}
