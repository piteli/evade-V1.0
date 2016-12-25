<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OsceSkills3 Entity.
 *
 * @property int $osceSkill3_Id
 * @property int $osceSkill_sta3
 * @property int $nursing_id
 * @property \App\Model\Entity\Nursing $nursing
 * @property int $id
 */
class OsceSkills3 extends Entity
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
        '*' => true,
        'osceSkill3_Id' => false,
    ];
}
