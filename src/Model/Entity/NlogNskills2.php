<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * NlogNskills2 Entity.
 *
 * @property int $Nskill2_Id
 * @property string $Nskill2_Name
 * @property string $Eva2_area
 * @property string $Eva2_date
 * @property int $nursing_id
 * @property \App\Model\Entity\Nursing $nursing
 * @property int $id
 */
class NlogNskills2 extends Entity
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
        'Nskill2_Id' => false,
    ];
}
