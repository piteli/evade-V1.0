<?php
namespace App\Model\Table;

use App\Model\Entity\OsceSkills3;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OsceSkills3 Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Nursings
 */
class OsceSkills3Table extends Table
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

        $this->table('osce_skills3');
        $this->displayField('osceSkill3_Id');
        $this->primaryKey('osceSkill3_Id');

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
            ->integer('osceSkill3_Id')
            ->allowEmpty('osceSkill3_Id', 'create');

        $validator
            ->integer('osceSkill_sta3')
            ->requirePresence('osceSkill_sta3', 'create')
            ->notEmpty('osceSkill_sta3');

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
