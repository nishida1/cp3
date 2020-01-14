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
    
    public function add()
    {
        $this->viewBuilder()->autoLayout(false);
        $entity = $this->Articles->newEntity();
        $this->set('entity', $entity);
    }

    public function create()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data['Articles'];
            $entity = $this->Articles->newEntity($data);
            $this->Articles->save($entity);
        }
        return $this->redirect(['action'=>'index']);
    }
}
