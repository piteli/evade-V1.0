<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ta Entity.
 *
 * @property int $tas_id
 * @property \App\Model\Entity\Ta $ta
 * @property string $tas_name
 * @property int $question_id
 * @property int $nursing_id
 * @property int $user_id
 */
class Ta extends Entity
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
        'tas_id' => false,
    ];
}
