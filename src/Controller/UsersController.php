<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

	/**
	 * _noAuthenticationActions method
	 *
	 * @return array of actions that can be taken even by visitors that are not logged in.
	 */
	protected function _noAuthenticationActions() {
		return ['login', 'logout', 'create_account', 'reset_password'];
	}


    /**
     * Login function
     *
     * @return void
     */
	public function login() {

        $this->viewBuilder()->setLayout('login');

		$result = $this->Authentication->getResult();
		// Regardless of POST or GET, redirect if user is logged in
		if ($result->isValid()) {
			return $this->redirect('/');
		}

		if ($this->request->is(['post'])) {
            $this->Flash->error(__('Username or Password is incorrect'));
            $this->set('failed', true);
		} else {
            $this->set('failed', false);
		}
    }

    public function logout(){
        return $this->redirect($this->Authentication->logout());
    }

}
