<?php
namespace App\Controller;

class RequestsController extends AppController
{
	public function initialize()
	{
		parent::initialize();

		$this->loadComponent('Flash');
	}

	public function isAuthorized($user)
	{
		return true;
	}

	public function index()
	{
		$requests = $this->Requests->find('all');
		$this->set(compact('requests'));
	}

	public function view($id = null)
	{
		$request = $this->Requests->get($id);
		$this->set(compact('request'));
	}

	public function add()
	{
		$request = $this->Requests->newEntity();
		if($this->request->is('post')){
			$request = $this->Requests->patchEntity($request,$this->request->query);
			if($this->Requests->save($request)){
				$this->Flash->success(__('Your request has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Unable to add your request'));
		}
		$this->set('request',$request);
	}
}