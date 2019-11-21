<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Email extends CI_Controller {
  function __construct()
  {
        parent::__construct();
        $this->load->model('M_Contact');
  }

    public function index()
    {
      $tangkapNama    =$this->input->post('nama');
      $tangkapEmail   =$this->input->post('email');
      $tangkapTopik   =$this->input->post('topik');
      $tangkapPesan   =$this->input->post('pesan');


      $data=array(//petik satu itu dalam field db
          'nama_pengguna'    => $tangkapNama,
          'email_pengguna'   => $tangkapEmail,
          'topik_pesan'      => $tangkapTopik,
          'waktu_pesan'      => date('Y-m-d H:i:s'),
          'pesan'            => $tangkapPesan

      );

      $this->M_Contact->insertTable('pesan',$data);
      //email


      $config = [
          'mailtype'  => 'html',
          'charset'   => 'utf-8',
          'protocol'  => 'smtp',
          'smtp_host' => 'smtp.gmail.com',
          'smtp_user' => 'siuph2017@gmail.com',   // Email gmail
          'smtp_pass'   => 'sisteminformasi2017',     // Password gmail
          'smtp_crypto' => 'ssl',
          'smtp_port'   => 465,
          'crlf'    => "\r\n",
          'newline' => "\r\n"
      ];

      // Load library email dan konfigurasinya
      $this->load->library('email', $config);

      // Email dan nama pengirim
      $this->email->from('siuph2017@gmail.com',$tangkapNama);

      // Email penerima
      $this->email->to('angelinekartikaa@gmail.com');

      // Subject
      $this->email->subject($tangkapTopik);

      // Isi
      $this->email->message($tangkapPesan);

      if ($this->email->send()) {
          echo 'Sukses! email berhasil dikirim.';
          redirect('#contact-section');
      } else {
          echo 'Error! email tidak dapat dikirim.';
      }

      }

    }
