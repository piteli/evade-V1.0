<?php
namespace App\Model\Table;

use App\Model\Entity\NlogNskill;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NlogNskills Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Nursings
 */
class NlogNskillsTable extends Table
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

        $this->table('nlog_nskills');
        $this->displayField('Nskill_Id');
        $this->primaryKey('Nskill_Id');

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
            ->integer('Nskill_Id')
            ->allowEmpty('Nskill_Id', 'create');

        $validator
            ->requirePresence('Nskill_Name', 'create')
            ->notEmpty('Nskill_Name');

        $validator
            ->requirePresence('Eva_area', 'create')
            ->notEmpty('Eva_area');

        $validator
            ->requirePresence('Eva_date', 'create')
            ->notEmpty('Eva_date');

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
