<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * NlogNskill Entity.
 *
 * @property int $Nskill_Id
 * @property string $Nskill_Name
 * @property string $Eva_area
 * @property string $Eva_date
 * @property int $id
 * @property int $nursing_id
 * @property \App\Model\Entity\N $n
 */
class NlogNskill extends Entity
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
        'Nskill_Id' => false,
    ];
}
