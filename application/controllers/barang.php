<?php

class Barang extends CI_Controller{
    public function index()
    {
       $this->load->model('m_toko');
       $data['barang'] = $this->m_toko->tampilData();
       $data['title']="Data Barang - Toko";
       $this->load->view('tampil_toko', $data);
    }
    public function form_tambah()
    {
        $this->load->view('form_tambah');
    }

    
    public function prosesTambah()
    {
        $nama_brg   = $this->input->post('nama');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');   
        $tgl_kirim  = $this->input->post('tgl_kirim');
        $expiret    = $this->input->post('expiret');
        $stok       = $this->input->post('stok');
        $gambar     =  $_FILES['gambar'];
        $nama_gambar =  $gambar['name'];

        if($gambar !=''){
            $config['upload_path']    = './asset/gambar';
            $config['allowed_types']  = 'JPG|jpg|png|gif|jpeg';
  
            $this->load->library('upload');
            $this->upload->initialize($config);

           if(!$this->upload->do_upload('gambar')){
               $error= [
                    'error' => $this->upload->display_errors()
               ];
                echo "Upload Gagal ". $error['error']; die();
          }else{ 
            echo "Anda belum memasukkan gambbar";
         }
       }



       $data = [
         'nama_brg'      => $nama_brg,
         'kategori'      => $kategori,
         'harga'         => $harga,
         'tgl_kirim'     => $tgl_kirim,
         'expiret'       => $expiret,
         'stok'          => $stok,
         'gambar'        => $nama_gambar,
       ];

    
      $input = $this->m_toko->inputData($data);
            if($input){
              redirect(base_url());
          }else {
              echo "gagal";
          }
    }


    public function kehalamanEdit($id)
    {
      $data['barang']= $this->m_toko->getData($id)->row();

      $option = [
        'snack'   => 'Snack',
        'minuman' => 'Minuman',
        'bumbu'   => 'Bumbu'
      ];
       
      $data['kategori'] = $option;
      $this->load->view('form_edit', $data);
    }

    public function editBarang(){
      $data = [
        'nama_brg'   => $this->input->post('nama'),
        'kategori'   => $this->input->post('kategori'),
        'harga'      => $this->input->post('harga'),
        'tgl_kirim'   => $this->input->post('tgl_kirim'),
        'expiret'    => $this->input->post('expiret'),
        'stok'       => $this->input->post('stok'),
      ];
      $id = $this->input->post('id');
      $update = $this->m_toko->updateBarang($id, $data);

      if($update){
        redirect(base_url());
      }else {
        echo "gagal";
      }
    }

    public function hapus($id)
    {
       $delete = $this->m_toko->hapusData($id);
       redirect(base_url());
    }

    public function detailBarang($id)
    {
      $this->load->model('m_toko');
      $detail = $this->m_toko->detailBarang($id);
      $data['detail'] = $detail;

      $this->load->view('detailBarang', $data);
    }

}
