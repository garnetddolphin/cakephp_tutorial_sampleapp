<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class CustomersController extends AppController
{

	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
	}

	public function isAuthorized($user)
	{
		return true;
	}

	public function index()
	{
		$this->set('customers',$this->Customers->find('all'));
	}

	public function view($id = null)
	{
		$customer = $this->Customers->get($id);
		$this->set(compact('customer'));

		$requests = TableRegistry::get('Requests');
		$this->set('requests',$requests->find('all'));
	}

	public function add()
	{
		$customer = $this->Customers->newEntity();
		if($this->request->is('post')){
      $customer = $this->Customers->patchEntity($customer, $this->request->data);
			if($this->Customers->save($customer)){
				$this->Flash->success(__('The customer has been saved'));
				return $this->redirect(['action' => 'add']);
			}
			$this->Flash->error(__('Unabled to add the customer.'));
		}
		$this->set('customer',$customer);
	}
}