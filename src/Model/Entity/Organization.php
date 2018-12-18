<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Organization Entity
 *
 * @property int $id
 * @property int $id_unique
 * @property int $cost_center
 * @property string $name
 * @property int $organization_id
 * @property int $type_organization_id
 * @property string $description
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Organization[] $organizations
 * @property \App\Model\Entity\TypeOrganization $type_organization
 */
class Organization extends Entity
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
        'id_unique' => true,
        'cost_center' => true,
        'name' => true,
        'organization_id' => true,
        'type_organization_id' => true,
        'description' => true,
        'enabled' => true,
        'created' => true,
        'modified' => true,
        'organizations' => true,
        'type_organization' => true
    ];
}
