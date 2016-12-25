<?php
namespace App\Model\Table;

use App\Model\Entity\NlogNskills2;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NlogNskills2 Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Nursings
 */
class NlogNskills2Table extends Table
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

        $this->table('nlog_nskills2');
        $this->displayField('Nskill2_Id');
        $this->primaryKey('Nskill2_Id');

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
            ->integer('Nskill2_Id')
            ->allowEmpty('Nskill2_Id', 'create');

        $validator
            ->allowEmpty('Nskill2_Name');

        $validator
            ->requirePresence('Eva2_area', 'create')
            ->notEmpty('Eva2_area');

        $validator
            ->requirePresence('Eva2_date', 'create')
            ->notEmpty('Eva2_date');

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
