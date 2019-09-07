<?php

class About extends Controller {

  public function index($nama = 'adisri', $Hobi = 'musik')
  {
    $data ['nama'] = $nama;
    $data ['hobi'] = $Hobi;
    $data['judul'] = 'About';
    $this->view('template/Header', $data);
    $this->view('About/index', $data);
  }

  public function page()
  {
    $data['judul'] = 'About';
    $this->view('template/Header', $data);
     $this->view("About/page");
  }

}
