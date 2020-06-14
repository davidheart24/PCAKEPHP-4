<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
		// Configure::write('new_admin_password', $password = \App\Controller\UsersController::_password(16));
		$hasher = new \Cake\Auth\DefaultPasswordHasher();
		$data = [
			[
				'id'        => 1,
				'user_name' => 'admin',
				'password'  => $hasher->hash('admin'),
				'email'     => 'iam.davidheart@gmail.com',
			],
		];

		$table = $this->table('users');
		$table->insert($data)->save();
    }
}
