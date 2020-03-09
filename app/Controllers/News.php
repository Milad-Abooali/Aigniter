<?php

  namespace App\Controllers;
  use App\Models\NewsModel;
  use CodeIgniter\Controller;
/**
 * [News description]
 */
  class News extends Controller
  {
/**
 * [index description]
 * @return [type] [description]
 */
    public function index()
    {
      $model = new NewsModel();

      $data = [
              'news'  => $model->getNews(),
              'title' => 'News archive',
      ];

      echo view('templates/header', $data);
      echo view('news/overview', $data);
      echo view('templates/footer');
    }

/**
 * [view description]
 * @param  [type] $slug [description]
 * @return [type]       [description]
 */
   public function view($slug = NULL)
   {
     $model = new NewsModel();

     $data['news'] = $model->getNews($slug);
     if (empty($data['news'])) {
             throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
     }
     $data['title'] = $data['news']['title'];

     echo view('templates/header', $data);
     echo view('news/view', $data);
     echo view('templates/footer');
   }
  }
