<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Utility\Security;

/**
 * User Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property string $username
 * @property string $password
 * @property int $rol_id
 * @property int $status_user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\Rol $rol
 * @property \App\Model\Entity\StatusUser $status_user
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
        'employee_id' => true,
        'username' => true,
        'password' => true,
        'rol_id' => true,
        'status_user_id' => true,
        'created' => true,
        'modified' => true,
        'employee' => true,
        'rol' => true,
        'status_user' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password){
        if (strlen($password) > 0) {
            //return (new DefaultPasswordHasher)->hash($password);
            $sha256 = Security::hash($password, 'sha256', false);
            return $sha256;
          }
    }
}


//$sha1 = Security::hash('CakePHP Framework', 'sha1', 'my-salt');