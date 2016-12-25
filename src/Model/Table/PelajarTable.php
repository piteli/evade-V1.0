<?php
namespace App\Model\Table;

use App\Model\Entity\Pelajar;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pelajar Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Students
 */
class PelajarTable extends Table
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

        $this->table('pelajar');
        $this->displayField('student_id');
        $this->primaryKey('student_id');

        $this->belongsTo('Students', [
            'foreignKey' => 'student_id',
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
            ->requirePresence('student_no', 'create')
            ->notEmpty('student_no');

        $validator
            ->requirePresence('student_name', 'create')
            ->notEmpty('student_name');

        $validator
            ->integer('student_sem')
            ->requirePresence('student_sem', 'create')
            ->notEmpty('student_sem');

        $validator
            ->requirePresence('student_placement', 'create')
            ->notEmpty('student_placement');

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
        $rules->add($rules->existsIn(['student_id'], 'Students'));
        return $rules;
    }
}
