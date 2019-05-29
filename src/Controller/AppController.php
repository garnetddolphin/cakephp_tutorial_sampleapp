<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

    public function initialize() /* modify */
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
                'authorize' => ['Controller'],
                'loginRedirect' => [
                    'controller' => 'Users',
                    'action' => 'index'
                ],
                'logoutRedirect' => [
                    'controller' => 'Users',
                    'action' => 'login'
                ]
        ]);
    }

    public function isAuthorized($user) /* add */
    {
        return false;
    }
}
