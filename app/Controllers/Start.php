<?php

  namespace App\Controllers;
  use CodeIgniter\Controller;

  class Start extends Controller
    {
      public function index ()
      {
        echo "Start Page";
      }
      public function showme($page = 'home', $name = NULL)
      {
              if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
              {
                  // Whoops, we don't have a page for that!
                  throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
              }

              $data['title'] = ucfirst($page); // Capitalize the first letter
              $data['name'] = $name;

              echo view('templates/header', $data);
              echo view('pages/'.$page, $data);
              echo view('templates/footer', $data);
      }

    }

 ?>
