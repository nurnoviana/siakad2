<?php

/**
 *
 */
class dosen extends CI_Controller
{
  //menampilkan semua data dosen
  public function index()
  {
    $query = $this->db->query("SELECT * FROM dosen");
    $data['dosen'] = $query->result();
    $data['total'] = $query->num_rows();
    $data['page'] = 'dosen/showall';
    $this->load->view('siakadku', $data);
  }

  //memunculkan form input data
  public function input()
  {
    $data['page'] = 'dosen/forminput';
    $this->load->view('siakadku', $data);
  }

  //delete data dosen
  public function del($iddosen)
  {
    $query = $this->db->query("DELETE FROM dosen WHERE iddosen = '$iddosen'");
    $this->index();
  }

  //update data dosen
  public function edit($iddosen)
  {
    $query = $this->db->query("SELECT * FROM dosen WHERE iddosen = '$iddosen'");
    $data['dosen'] = $query->row();
    $data['page'] = 'dosen/formedit';
    $this->load->view('siakadku', $data);
  }

  //membaca form untuk input ke database
  public function add()
  {
    $iddosen    = $this->input->post('iddosen');
    $namadosen   = $this->input->post('namadosen');
    $alamatdosen = $this->input->post('alamatdosen');
    $notlpdosen = $this->input->post('notlpdosen');
    $genderdosen = $this->input->post('genderdosen');

    $query = $this->db->query("INSERT INTO dosen VALUES ('$iddosen', '$namadosen', '$alamatdosen', '$notlpdosen', '$genderdosen')");
    if ($query) {
      $this->index();
    } else {
      echo "<h2>Input Gagal</h2>";
    }
  }

  public function update()
  {
    $iddosen    = $this->input->post('iddosen');
    $namadosen   = $this->input->post('namadosen');
    $alamatdosen = $this->input->post('alamatdosen');
    $notlpdosen = $this->input->post('notlpdosen');
    $genderdosen = $this->input->post('genderdosen');

    $query = $this->db->query("UPDATE dosen
      SET namadosen = '$namadosen', alamatdosen = '$alamatdosen', notlpdosen = '$notlpdosen', genderdosen = '$genderdosen' WHERE iddosen = '$iddosen'");
    if ($query) {
      $this->index();
    } else {
      echo "<h2>Input Gagal</h2>";
    }
  }
}


 ?>
