<?php
namespace App\Model\Table;

use App\Model\Entity\OsceSkills2;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OsceSkills2 Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Nursings
 */
class OsceSkills2Table extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('osce_skills2');
        $this->displayField('osceSkill2_Id');
        $this->primaryKey('osceSkill2_Id');

        $this->belongsTo('Nursings', [
            'foreignKey' => 'nursing_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('osceSkill2_Id')
            ->allowEmpty('osceSkill2_Id', 'create');

        $validator
            ->requirePresence('osceSkill_sta2', 'create')
            ->notEmpty('osceSkill_sta2');

        $validator
            ->integer('id')
            ->requirePresence('id', 'create')
            ->notEmpty('id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['nursing_id'], 'Nursings'));
        return $rules;
    }
}
