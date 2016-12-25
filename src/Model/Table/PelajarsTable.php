<?php
namespace App\Model\Table;

use App\Model\Entity\Pelajar;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pelajars Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Pelajars
 */
class PelajarsTable extends Table
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

        $this->table('pelajars');
        $this->displayField('student_id');
        $this->primaryKey('student_id');

        $this->belongsTo('Pelajars', [
            'foreignKey' => 'pelajar_id',
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
            ->requirePresence('pelajar_no', 'create')
            ->notEmpty('pelajar_no');

        $validator
            ->requirePresence('pelajar_name', 'create')
            ->notEmpty('pelajar_name');

        $validator
            ->integer('pelajar_sem')
            ->requirePresence('pelajar_sem', 'create')
            ->notEmpty('pelajar_sem');

        $validator
            ->requirePresence('pelajar_placement', 'create')
            ->notEmpty('pelajar_placement');

        $validator
            ->requirePresence('evaluated_by', 'create')
            ->notEmpty('evaluated_by');

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
        $rules->add($rules->existsIn(['pelajar_id'], 'Pelajars'));
        return $rules;
    }
}
