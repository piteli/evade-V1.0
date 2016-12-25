<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OsceSkill Entity.
 *
 * @property int $osceSkill_Id
 * @property int $nursing_id
 * @property \App\Model\Entity\Nursing $nursing
 * @property float $osceSkill_sta1
 * @property int $id
 */
class OsceSkill extends Entity
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
        'osceSkill_Id' => false,
    ];
}
