<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AreaskillAttribute Entity.
 *
 * @property int $Attribute_Id
 * @property string $Attribute_Name
 * @property int $nursing_id
 * @property string $Attribute_No
 * @property float $Attribute_Score1
 * @property float $Attribute_Score2
 * @property float $Attribute_Score3
 * @property float $Attribute_Score4
 * @property float $Attribute_Score5
 * @property \App\Model\Entity\Nursing $nursing
 */
class AreaskillAttribute extends Entity
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
        'Attribute_Id' => false,
    ];
}
