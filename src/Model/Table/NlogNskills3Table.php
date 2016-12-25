<?php
namespace App\Model\Table;

use App\Model\Entity\NlogNskills3;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NlogNskills3 Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Nursings
 */
class NlogNskills3Table extends Table
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

        $this->table('nlog_nskills3');
        $this->displayField('Nskill3_Id');
        $this->primaryKey('Nskill3_Id');

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
            ->integer('Nskill3_Id')
            ->allowEmpty('Nskill3_Id', 'create');

        $validator
            ->allowEmpty('Nskill3_Name');

        $validator
            ->requirePresence('Eva3_area', 'create')
            ->notEmpty('Eva3_area');

        $validator
            ->requirePresence('Eva3_date', 'create')
            ->notEmpty('Eva3_date');

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
