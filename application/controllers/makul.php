<?php

/**
 *
 */
class makul extends CI_Controller
{
  //menampilkan semua data makul
  public function index()
  {
    $query = $this->db->query("SELECT * FROM makul");
    $data['makul'] = $query->result();
    $data['total'] = $query->num_rows();
    $data['page'] = 'mk/showall';
    $this->load->view('siakadku', $data);
  }

  //memunculkan form input data
  public function input()
  {
    $data['page'] = 'mk/forminput';
    $this->load->view('siakadku', $data);
  }

  //delete data makul
  public function del($kodemakul)
  {
    $query = $this->db->query("DELETE FROM makul WHERE kodemakul = '$kodemakul'");
    $this->index();
  }

  //update data makul
  public function edit($kodemakul)
  {
    $query = $this->db->query("SELECT * FROM makul WHERE kodemakul = '$kodemakul'");
    $data['makul'] = $query->row();
    $data['page'] = 'mk/formedit';
    $this->load->view('siakadku', $data);
  }

  //membaca form untuk input ke database
  public function add()
  {
    $kodemakul    = $this->input->post('kodemakul');
    $namamakul   = $this->input->post('namamakul');
    $smt = $this->input->post('smt');
    $sks = $this->input->post('sks');

    $query = $this->db->query("INSERT INTO makul VALUES ('$kodemakul', '$namamakul', '$smt', '$sks')");
    if ($query) {
      $this->index();
    } else {
      echo "<h2>Input Gagal</h2>";
    }
  }

  public function update()
  {
    $kodemakul    = $this->input->post('kodemakul');
    $namamakul   = $this->input->post('namamakul');
    $smt = $this->input->post('smt');
    $sks = $this->input->post('sks');

    $query = $this->db->query("UPDATE makul
      SET namamakul = '$namamakul', smt = '$smt', sks = '$sks' WHERE kodemakul = '$kodemakul'");
    if ($query) {
      $this->index();
    } else {
      echo "<h2>Input Gagal</h2>";
    }
  }
}


 ?>
