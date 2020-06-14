<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $user_name
 * @property string|null $password
 * @property string|null $email
 * @property \Cake\I18n\FrozenTime|null $last_login
 * @property string|null $client_ip
 *
 * @property \App\Model\Entity\Lock[] $locks
 * @property \App\Model\Entity\Person[] $people
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_name'     => true,
        'password'      => true,
        'email'         => true,
        'last_login'    => true,
        'client_ip'     => true,
        'locks'         => true, //Table
        'people'        => true, //Table
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
