<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Locks', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('People', [
            'foreignKey' => 'user_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('user_name')
            ->maxLength('user_name', 100)
            ->allowEmptyString('user_name')
            ->add('user_name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 100)
            ->allowEmptyString('password');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->dateTime('last_login')
            ->allowEmptyDateTime('last_login');

        $validator
            ->scalar('client_ip')
            ->maxLength('client_ip', 50)
            ->allowEmptyString('client_ip');

        return $validator;
    }

    /**
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        // $rules->add($rules->isUnique(['email']));
        // $rules->add($rules->isUnique(['user_name']));
        $rules->add($rules->isUnique(['user_name'], __('That username is already taken')));
        return $rules;
    }
}
