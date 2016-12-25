<?php
namespace App\Model\Table;

use App\Model\Entity\AreaskillAttribute;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AreaskillAttributes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Nursings
 */
class AreaskillAttributesTable extends Table
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

        $this->table('areaskill_attributes');
        $this->displayField('Attribute_Id');
        $this->primaryKey('Attribute_Id');

        $this->belongsTo('Nursings', [
            'foreignKey' => 'nursing_id',
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
            ->integer('Attribute_Id')
            ->allowEmpty('Attribute_Id', 'create');

        $validator
            ->allowEmpty('Attribute_Name');

        $validator
            ->allowEmpty('Attribute_No');

        $validator
            ->numeric('Attribute_Score1')
            ->allowEmpty('Attribute_Score1');

        $validator
            ->numeric('Attribute_Score2')
            ->allowEmpty('Attribute_Score2');

        $validator
            ->numeric('Attribute_Score3')
            ->allowEmpty('Attribute_Score3');

        $validator
            ->numeric('Attribute_Score4')
            ->allowEmpty('Attribute_Score4');

        $validator
            ->numeric('Attribute_Score5')
            ->allowEmpty('Attribute_Score5');

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
