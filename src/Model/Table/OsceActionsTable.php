<?php
namespace App\Model\Table;

use App\Model\Entity\OsceAction;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OsceActions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Questions
 */
class OsceActionsTable extends Table
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

        $this->table('osce_actions');
        $this->displayField('Question_id');
        $this->primaryKey('Question_id');

        $this->belongsTo('osce_actions', [
            'foreignKey' => 'Question_id',
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
            ->requirePresence('Question_name', 'create')
            ->notEmpty('Question_name');

        $validator
            ->integer('Question_station')
            ->requirePresence('Question_station', 'create')
            ->notEmpty('Question_station');

        $validator
            ->integer('Question_fmark')
            ->requirePresence('Question_fmark', 'create')
            ->notEmpty('Question_fmark');

        $validator
            ->integer('Question_set')
            ->requirePresence('Question_set', 'create')
            ->notEmpty('Question_set');

        $validator
            ->requirePresence('Question_sem', 'create')
            ->notEmpty('Question_sem');

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
        $rules->add($rules->existsIn(['Question_id'], 'osce_actions'));
        return $rules;
    }
}
