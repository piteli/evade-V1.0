<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OsceAction Entity.
 *
 * @property int $Question_id
 * @property \App\Model\Entity\Question $question
 * @property string $Question_name
 * @property int $Question_station
 * @property int $Question_fmark
 * @property int $Question_set
 * @property string $Question_sem
 * @property \App\Model\Entity\Nursing $nursing
 */
class OsceAction extends Entity
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
        'Question_id' => false,
    ];
}
