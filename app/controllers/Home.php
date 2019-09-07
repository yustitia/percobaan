<?php

class Home extends Controller  {

  public function index()
  {
    $data['judul'] = 'Home';
    $this->view('template/Header', $data);
    $this->view('home/index');
    $this->view('template/Footer');
  }

}
