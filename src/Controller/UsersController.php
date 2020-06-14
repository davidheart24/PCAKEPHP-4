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

    /**
     * Index method
     */
    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    /**
     * View method
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Locks', 'People'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     */
    public function add(){
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     */
    public function edit($id = null){
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     */
    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }


}
