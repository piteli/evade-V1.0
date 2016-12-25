<?php
namespace App\Model\Table;

use App\Model\Entity\Nursing;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Nursings Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Nursings
 */
class NursingsTable extends Table
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

        $this->table('nursings');
        $this->displayField('nursing_id');
        $this->primaryKey('nursing_id');
        

        $this->belongsTo('Nursings', [
            'foreignKey' => 'nursing_id',
            'joinType' => 'INNER'
        ]);
         $this->hasOne('OsceSkills', [
            'foreignKey' => 'nursing_id',
            'joinType' => 'LEFT',
            'bindingKey' => 'nursing_id'
        ]);

         $this->hasOne('OsceSkills5', [
            'foreignKey' => 'nursing_id',
            'joinType' => 'LEFT',
            'bindingKey' => 'nursing_id'
        ]);

         $this->hasOne('OsceSkills2', [
            'foreignKey' => 'nursing_id',
            'joinType' => 'LEFT',
            'bindingKey' => 'nursing_id'
        ]);

         $this->hasOne('OsceSkills3', [
            'foreignKey' => 'nursing_id',
            'joinType' => 'LEFT',
            'bindingKey' => 'nursing_id'
        ]);

         $this->hasOne('OsceSkills4', [
            'foreignKey' => 'nursing_id',
            'joinType' => 'LEFT',
            'bindingKey' => 'nursing_id'
        ]);

         $this->hasOne('AreaskillAttributes', [
            'foreignKey' => 'nursing_id',
            'joinType' => 'LEFT',
            'bindingKey' => 'nursing_id'
        ]);

          $this->hasOne('OsceActions', [
            'foreignKey' => 'nursing_id',
            'joinType' => 'LEFT',
            'bindingKey' => 'nursing_id'
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
            ->requirePresence('nursing_no', 'create')
            ->notEmpty('nursing_no');

        $validator
            ->requirePresence('nursing_name', 'create')
            ->notEmpty('nursing_name');

        $validator
            ->allowEmpty('nursing_sem');

        $validator
            ->allowEmpty('nursing_placement');

        $validator
            ->allowEmpty('eva_nskill');

        $validator
            ->allowEmpty('eva_askill');

        $validator
            ->allowEmpty('eva_osce');

        $validator
            ->integer('eva_osce2')
            ->allowEmpty('eva_osce2');

        $validator
            ->integer('eva_osce3')
            ->allowEmpty('eva_osce3');

        $validator
            ->integer('eva_osce4')
            ->allowEmpty('eva_osce4');

        $validator
            ->integer('eva_osce5')
            ->allowEmpty('eva_osce5');

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
