<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\BadRequestException;

/**
 * Users Controller
 */
class UsersController extends AppController
{


     public function index(){
        $rows = ['a' => 'testA', 'b' => 'testB'];
        $this->set('rows', $rows);
        // $_ext = $this->request->getParam('_ext');
        //   if ($_ext === 'xlsx') {
        // }
     }

     public function export(){
     }

}
