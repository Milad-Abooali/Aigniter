<?php

  namespace App\Controllers;
  use CodeIgniter\Controller;

    class Start extends CI_COntroller
    {
      pubblic function index ()
      {
        echo "Start Page";
      }
      public function showme($page = 'home')
      {
        // echo $page;
      }

    }

 ?>
