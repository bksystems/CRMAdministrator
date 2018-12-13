<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TestField Entity
 *
 * @property int $id
 * @property string $test_varchar
 * @property string $test_text
 * @property \Cake\I18n\FrozenTime $test_datetime
 * @property bool $test_bool
 * @property \Cake\I18n\FrozenDate $test_date
 */
class TestField extends Entity
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
        'test_varchar' => true,
        'test_text' => true,
        'test_datetime' => true,
        'test_bool' => true,
        'test_date' => true
    ];
}
