<?php
namespace App\Controller;

use App\Controller\AppController;

class ArticlesController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->autoLayout(false);
        $data = $this->Articles->find('all');
        $this->set('data', $data);
	}

}