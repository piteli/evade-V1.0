<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Nursing Entity.
 *
 * @property int $nursing_id
 * @property \App\Model\Entity\Nursing $nursing
 * @property string $nursing_no
 * @property string $nursing_name
 * @property string $nursing_sem
 * @property string $nursing_placement
 * @property string $eva_nskill
 * @property string $eva_askill
 * @property string $eva_osce
 * @property int $eva_osce2
 * @property int $eva_osce3
 * @property int $eva_osce4
 * @property int $eva_osce5
 * @property \App\Model\Entity\OsceSkill $osce_skill
 * @property \App\Model\Entity\AreaskillAttribute $areaskill_attribute
 */
class Nursing extends Entity
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
        'nursing_id' => false,
    ];
}
