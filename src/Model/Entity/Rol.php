<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rol Entity
 *
 * @property int $id
 * @property string $rol_name
 * @property string $description
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User[] $users
 */
class Rol extends Entity
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
        'rol_name' => true,
        'description' => true,
        'enabled' => true,
        'created' => true,
        'modified' => true,
        'users' => true
    ];
}
