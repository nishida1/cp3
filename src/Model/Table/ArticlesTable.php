<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ArticlesTable extends Table{
    
    public function validationDefault(Validator $validator){

        $validator
        ->scalar('title')
        ->notEmpty('title', 'required');

        $validator
        ->scalar('content')
        ->notEmpty('content', 'required');

        return $validator;

    }

}