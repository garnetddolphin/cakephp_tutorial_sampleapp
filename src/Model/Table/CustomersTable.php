<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CustomersTable extends Table
{
	public function validationDefault(Validator $validator)
	{
		return $validator
					->notEmpty('first_name','First name is requied')
					->notEmpty('last_name', 'Last name is requied');
	}
}