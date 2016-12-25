<?php
namespace App\Model\Table;

use App\Model\Entity\NlogNskills5;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NlogNskills5 Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Nursings
 */
class NlogNskills5Table extends Table
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

        $this->table('nlog_nskills5');
        $this->displayField('Nskill5_Id');
        $this->primaryKey('Nskill5_Id');

        $this->belongsTo('Nursings', [
            'foreignKey' => 'nursing_id'
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
            ->integer('Nskill5_Id')
            ->allowEmpty('Nskill5_Id', 'create');

        $validator
            ->allowEmpty('Nskill5_Name');

        $validator
            ->requirePresence('Eva5_area', 'create')
            ->notEmpty('Eva5_area');

        $validator
            ->requirePresence('Eva5_date', 'create')
            ->notEmpty('Eva5_date');

        $validator
            ->integer('id')
            ->allowEmpty('id');

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
