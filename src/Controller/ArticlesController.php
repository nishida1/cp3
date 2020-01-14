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

    public function edit(){
        $this->viewBuilder()->autoLayout(false);
        $id = $this->request->query['id'];
        $entity = $this->Articles->get($id);
        $this->set('entity', $entity);
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

    public function update(){
        if($this->request->is('post')){
                $data = $this->request->data['Articles'];
                $entity = $this->Articles->get($data['id']);
                $this->Articles->patchEntity($entity, $data);
                $this->Articles->save($entity);
        }
        return $this->redirect(['action'=>'index']);
    }
}
