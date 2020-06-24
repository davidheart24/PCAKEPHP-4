<?php

namespace App\Controller\Api;

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Event\Event;

/**
 * API Controller
 *
 * Add your api methods in the class below, your controllers will inherit them.
 */
class ApiController extends Controller {

    /**
     * data object & key
     */
    protected $_datas = array();
    const PAYLOAD_DATA   = 'data';

    /**
     * error object & key
     */
    protected $_errors = array();
    const PAYLOAD_ERROR        = 'error';
    const PAYLOAD_ERROR_STATUS = 'code';
    const PAYLOAD_ERROR_CODE   = 'app_code';
    const PAYLOAD_ERROR_MSG    = 'message';


    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }


    public function beforeFilter(Event $event)
    {
        // To be honest, this looks like a lot of fiddling... Maybe a middleware would be a better way to archive that.
        $result = $this->request->getAttribute('authentication')->getResult();

        $this->RequestHandler->renderAs($this, 'json');
        $this->RequestHandler->respondAs('json');

        if ($result->isValid() === false) {
            $return = $this->request->getAttribute('authentication')->clearIdentity($this->request, $this->response);
            return $return['response']
               ->withStatus('401')
               ->withStringBody(json_encode(['message' => 'Requires authentication']));
        }
    }

        /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event){
        // Serialize all view vars.
        $this->set('_serialize', true);
    }

}
