<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
/**
 * User Entity.
 *
 * @property int $id
 * @property string $fname
 * @property string $lname
 * @property string $position
 * @property string $email
 * @property string $password
 * @property int $role
 * @property \App\Model\Entity\Nursing[] $nursings
 * @property \App\Model\Entity\NlogNskill[] $nlog_nskills
 */
class User extends Entity
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
        'id' => false,
    ];

    /**
     * Fields that are excluded from JSON an array versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($value)
     {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);

    }

    
}