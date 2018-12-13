<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrganizationOffice Entity
 *
 * @property int $id
 * @property int $cost_center
 * @property string $name
 * @property int $organization_subdirection_id
 * @property int $organization_type_id
 * @property string $description
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\OrganizationSubdirection $organization_subdirection
 * @property \App\Model\Entity\OrganizationType $organization_type
 */
class OrganizationOffice extends Entity
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
        'cost_center' => true,
        'name' => true,
        'organization_subdirection_id' => true,
        'organization_type_id' => true,
        'description' => true,
        'enabled' => true,
        'created' => true,
        'modified' => true,
        'organization_subdirection' => true,
        'organization_type' => true
    ];
}
