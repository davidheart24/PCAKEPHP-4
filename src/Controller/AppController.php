<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', ['enableBeforeRedirect' => false]);
        $this->loadComponent('Flash');

		$this->loadComponent('Authentication.Authentication', [
			'logoutRedirect' => '/'
        ]);

        $this->Authentication->allowUnauthenticated(['index', 'login']);
    }

	/**
	 * _offAuthentication method
	 * By default, nothing is available to unauthenticated users.
	 * Any controller with special permissions must override this function.
	 * @return array of actions that can be taken even by visitors that are not logged in.
	 */
	protected function _offAuthentication() {
		return [];
    }

    public function beforeRender(EventInterface  $event){
        // $this->viewBuilder()->setClassName('AdminLTE.AdminLTE');
        $this->viewBuilder()->setTheme('AdminLTE');

    }

}
