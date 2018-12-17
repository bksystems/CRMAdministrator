<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TypeOrganization Entity
 *
 * @property int $id
 * @property string $type
 * @property string $description
 * @property bool $enabled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modfied
 *
 * @property \App\Model\Entity\Organization[] $organizations
 */
class TypeOrganization extends Entity
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
        'type' => true,
        'description' => true,
        'enabled' => true,
        'created' => true,
        'modfied' => true,
        'organizations' => true
    ];
}
