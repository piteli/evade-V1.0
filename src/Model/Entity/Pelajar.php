<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pelajar Entity.
 *
 * @property int $pelajar_id
 * @property \App\Model\Entity\Pelajar $pelajar
 * @property string $pelajar_no
 * @property string $pelajar_name
 * @property int $pelajar_sem
 * @property string $pelajar_placement
 * @property string $evaluated_by
 */
class Pelajar extends Entity
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
        'student_id' => false,
    ];
}
