<?php
class about extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman About Me';
        $data['nama'] = 'Herlina Novialita';
        $data['alamat'] = 'Jl. A. Yani Gg. Abadi No.27 Martapura';
        $data['no_hp'] = '085249999322';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
