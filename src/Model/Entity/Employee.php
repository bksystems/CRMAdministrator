<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property int $roster
 * @property string $last_name
 * @property string $mother_name
 * @property string $names
 * @property int $organization_id
 * @property int $employee_position_id
 * @property int $status_employee_id
 * @property bool $is_employee_system
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Organization $organization
 * @property \App\Model\Entity\EmployeePosition $employee_position
 * @property \App\Model\Entity\StatusEmployee $status_employee
 * @property \App\Model\Entity\User[] $users
 */
class Employee extends Entity
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
        'roster' => true,
        'last_name' => true,
        'mother_name' => true,
        'names' => true,
        'organization_id' => true,
        'employee_position_id' => true,
        'status_employee_id' => true,
        'is_employee_system' => true,
        'created' => true,
        'modified' => true,
        'organization' => true,
        'employee_position' => true,
        'status_employee' => true,
        'users' => true
    ];

    protected $_virtual = ['full_name'];

    protected function _getFullName() {
        return $this->last_name . ' - ' . $this->mother_name . ', ' . $this->names;
    }
}
