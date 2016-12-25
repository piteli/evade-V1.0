<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * NlogNskills5 Entity.
 *
 * @property int $Nskill5_Id
 * @property string $Nskill5_Name
 * @property string $Eva5_area
 * @property string $Eva5_date
 * @property int $nursing_id
 * @property \App\Model\Entity\Nursing $nursing
 * @property int $id
 */
class NlogNskills5 extends Entity
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
        'Nskill5_Id' => false,
    ];
}
