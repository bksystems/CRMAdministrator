<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Permission Entity
 *
 * @property int $id
 * @property string $controller
 * @property string $action
 * @property bool $enabled
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Permission extends Entity
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
        'controller' => true,
        'action' => true,
        'enabled' => true,
        'description' => true,
        'created' => true,
        'modified' => true
    ];

    protected $_virtual = ['full_name'];

    protected function _getFullName() {
        return 'Controlador: ' . $this->controller . ', Acción: ' . $this->action;
    }
}
