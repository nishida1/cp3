<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ArticlesTable extends Table{
    
    public function validationDefault(Validator $validator){

        $validator
        ->scalar('title')
        ->maxLength('title', 5, 'maxLength error')
        ->notEmpty('title', 'required error');

        $validator
        ->scalar('content')
        ->maxLength('title', 50, 'maxLength error')
        ->notEmpty('content', 'required error');

        return $validator;

    }

}