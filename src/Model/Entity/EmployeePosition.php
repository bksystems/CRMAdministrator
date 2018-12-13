<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployeePosition Entity
 *
 * @property int $id
 * @property string $position
 * @property string $description
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employee[] $employees
 */
class EmployeePosition extends Entity
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
        'position' => true,
        'description' => true,
        'enabled' => true,
        'created' => true,
        'modified' => true,
        'employees' => true
    ];
}
