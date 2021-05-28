<?php
/**
 *
 */
class dashboard extends CI_Controller
{

  public function index()
  {
    $data['page'] = 'dashboard';
    $this->load->view('siakadku', $data);
  }
}



 ?>
