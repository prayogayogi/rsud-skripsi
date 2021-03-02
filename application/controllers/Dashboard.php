<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_master');
    $this->load->model('m_tambah');
    $this->load->library('pagination');
  }

  // Tampilan Dashboard Utama
  public function index()
  {
    $data['gol_A'] = $this->m_master->hitungJumlahGolA();
    $data['gol_B'] = $this->m_master->hitungJumlahGolB();
    $data['gol_AB'] = $this->m_master->hitungJumlahGolAB();
    $data['gol_O'] = $this->m_master->hitungJumlahGolO();
    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['numrows'] = $this->db->get('data_donor')->num_rows();

    // untuk get stok darah
    $data['stokDarah'] = $this->m_master->getStokDarah()->num_rows();

    // akhir get stok darah
    $data['title'] = 'Dashboard';

    // Pagination untuk dashboard
    $config['base_url'] = 'http://localhost/rsud/dashboard/index';
    $config['total_rows'] = $data['numrows'];
    $config['per_page'] = 10;


    // customes pagiantion
    $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center mt-3">';
    $config['full_tag_close'] = '</ul></nav>';

    $config['first_link'] = 'First';
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';

    $config['last_link'] = 'Last';
    $config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';

    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';

    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';

    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';

    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

    $config['attributes'] = ['class' => 'page-link'];
    $this->pagination->initialize($config);
    $data['start'] = $this->uri->segment(3);
    $data['user'] = $this->m_master->tampil_data($config['per_page'], $data['start'])->result_array();
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('master/dashboard', $data);
    $this->load->view('template/footer', $data);
  }


  // Tambah Data Pendonor
  public function tambah_data_pendonor()
  {
    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['numrows'] = $this->db->get('data_donor')->num_rows();
    $config['base_url'] = 'http://localhost/rsud/dashboard/tambah_data_pendonor/index';
    $config['total_rows'] = $data['numrows'];
    $config['per_page'] = 15;


    // style pagination B4
    $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul></nav>';

    $config['first_link'] = 'First';
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';

    $config['last_link'] = 'Last';
    $config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';

    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';

    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';

    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';

    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

    $config['attributes'] = ['class' => 'page-link'];

    $this->pagination->initialize($config);

    $data['start'] = $this->uri->segment(4);
    $data['pendonor'] = $this->m_master->tampil_data_pagination($config['per_page'], $data['start'])->result_array();

    $data['title'] = 'Tambah Data Pendonor';
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('master/tambah_donor', $data);
    $this->load->view('template/footer', $data);
  }


  // view tambah data penonor 
  public function tambahPendonor()
  {
    $data['pendonor'] = $this->m_master->tampil()->result_array();
    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['title'] = 'Tambah Data Pendonor';
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('master/form_view_tambah_pendonor', $data);
    $this->load->view('template/footer', $data);
  }

  // aksi tambah data pendonor
  public function aksi_tambahdataRsud()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nama_pendonor', 'Nama Pendonor', 'required|trim');
    $this->form_validation->set_rules('nama_pasien', 'Nama pasien', 'required|trim');
    $this->form_validation->set_rules('ruang_pasien', 'Ruang Pasien', 'required|trim');
    $this->form_validation->set_rules('gol_darah', 'Golongan Darah', 'required|trim');
    $this->form_validation->set_rules('alamat', 'Alamat', 'trim');
    $this->form_validation->set_rules('agama', 'agama', 'required|trim');
    $this->form_validation->set_rules('no_tali', 'No tali', 'required|trim');
    $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'required|trim');
    $this->form_validation->set_rules('bb_tensi', 'Bb tensi', 'required|trim');
    $this->form_validation->set_rules('hb', 'Hb', 'required|trim');
    $this->form_validation->set_rules('no_hp', 'No hp', 'numeric|min_length[12]', ['min_length' => 'Minimal 12 angka']);

    if ($this->form_validation->run() == false) {
      $data['pendonor'] = $this->m_master->tampil_data()->result_array();
      $data['user1'] = $this->m_master->dataAdmin()->row_array();
      $data['title'] = 'Tambah Data Pendonor';
      $this->load->view('template/sidebar', $data);
      $this->load->view('template/header', $data);
      $this->load->view('master/form_view_tambah_pendonor', $data);
      $this->load->view('template/footer', $data);
    } else {
      $data['alamat'] = str_replace(' ', '', $this->input->post('alamat', true));
      $data = [
        'nama_pendonor' => $this->input->post('nama_pendonor', true),
        'nama_pasien' => $this->input->post('nama_pasien', true),
        'ruang_pasien' => $this->input->post('ruang_pasien', true),
        'gol_darah' => $this->input->post('gol_darah', true),
        'alamat_pendonor' => $data['alamat'],
        'agama' => $this->input->post('agama', true),
        'no_tali' => $this->input->post('no_tali', true),
        'pekerjaan' => $this->input->post('pekerjaan', true),
        'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
        'bb_tensi' => $this->input->post('bb_tensi', true),
        'hb' => $this->input->post('hb', true),
        'hiv' => ('-'),
        'hcv' => ('-'),
        'hbsag' => ('-'),
        'sypilis' => ('-'),
        'tgl_donor' => strtotime($this->input->post('tgl_donor', true)),
        'no_hp' => $this->input->post('no_hp', true),
        'petugas' => $this->input->post('petugas', true)
      ];
      $this->m_tambah->tambahDataPendonor($data);
      $this->session->set_flashdata('pesan', 'Data Berhasil di tamabah.');
      redirect('dashboard/tambah_data_pendonor');
    }
  }

  // function Hapus Data Pendonor
  public function hapusDataPendonor($id)
  {
    $id_hapus = [
      'id' => $id
    ];
    $this->m_master->hapusDataPendonor($id_hapus);
    $this->session->set_flashdata('pesan', 'Berhasil Di Hapus.');
    redirect('dashboard/tambah_data_pendonor');
  }

  // Ubah Data Pendonor
  public function editDataPendonor()
  {
    $data = [
      'nama_pendonor' => $this->input->post('nama'),
      'gol_darah' => $this->input->post('gol_darah'),
      'alamat_pendonor' => $this->input->post('alamat'),
      'hiv' => $this->input->post('hiv'),
      'hcv' => $this->input->post('hcv'),
      'hbsag' => $this->input->post('hbsag'),
      'sypilis' => $this->input->post('sypilis'),
      'no_hp' => $this->input->post('no_hp')
    ];

    $this->m_master->EditDataPendonor($data);
    $this->session->set_flashdata('pesan', ' Data Berhasil di ubah.');
    redirect('dashboard/tambah_data_pendonor');
  }

  // Cari Data Penonor
  public function cariData()
  {
    $data['gol_A'] = $this->m_master->hitungJumlahGolA();
    $data['gol_B'] = $this->m_master->hitungJumlahGolB();
    $data['gol_AB'] = $this->m_master->hitungJumlahGolAB();
    $data['gol_O'] = $this->m_master->hitungJumlahGolO();
    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['title'] = 'Dashboard';

    $cari_berdasarkan = $this->input->post('cari_berdasarkan', true);
    $yang_dicari = $this->input->post('yang_dicari', true);
    if ($this->input->post('yang_dicari', true)) {
      $data['user'] = $this->m_master->cariData($yang_dicari, $cari_berdasarkan);
      $this->load->view('template/sidebar', $data);
      $this->load->view('template/header', $data);
      $this->load->view('master/dashboard', $data);
      $this->load->view('template/footer', $data);
    } else {
      $data['user'] = $this->db->get('data_donor')->result_array();
      $this->load->view('template/sidebar', $data);
      $this->load->view('template/header', $data);
      $this->load->view('master/dashboard', $data);
      $this->load->view('template/footer', $data);
    }
  }
}
