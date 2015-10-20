<?php
class Applications extends CI_Controller {
  
  public function view($page = 'home') {
    if (! file_exists(APPPATH.'/views/applications/'.$page.'.php')) {
      show_404();
    }

    $data['title'] = ucwords(str_replace("_", " ", $page));
    $data['application'] = $page;

    $this->load->view('templates/header', $data);
    $this->load->view('applications/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }
}