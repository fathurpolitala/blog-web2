<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Blog extends CI_Controller
{
    public function index($nama, $alamat, $usia)
    {
        // echo 'Selamat Datang ' . $nama . ', beralamat di ' . $alamat . ', usianya adalah ' . $usia;
        // echo "<br>";
        // echo "<h1>Selamat Datang $nama</h1>";
        // echo "<h2>Alamat:  $alamat</h2>";
        // echo "<h2>Usia: $usia</h2>";

        $data['nama'] = $nama;
        $data['alamat'] = $alamat;
        $data['usia'] = $usia;

        $this->load->view('blog', $data);
    }

    public function listdata()
    {
        $this->load->view('list_data');
    }

    public function detail()
    {
        $this->load->view('detail_blog');
    }
}
