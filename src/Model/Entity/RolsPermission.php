<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RolsPermission Entity
 *
 * @property int $id
 * @property int $rol_id
 * @property int $permission_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Rol $rol
 * @property \App\Model\Entity\Permission $permission
 */
class RolsPermission extends Entity
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
        'rol_id' => true,
        'permission_id' => true,
        'created' => true,
        'modified' => true,
        'rol' => true,
        'permission' => true
    ];
}
