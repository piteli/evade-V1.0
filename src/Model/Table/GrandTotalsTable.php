<?php
namespace App\Model\Table;

use App\Model\Entity\GrandTotal;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GrandTotals Model
 *
 */
class GrandTotalsTable extends Table
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

        $this->table('grand_totals');
        $this->displayField('Gtotal_Id');
        $this->primaryKey('Gtotal_Id');
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
            ->integer('Gtotal_Id')
            ->allowEmpty('Gtotal_Id', 'create');

        $validator
            ->numeric('Gtotal_total')
            ->requirePresence('Gtotal_total', 'create')
            ->notEmpty('Gtotal_total');

        $validator
            ->numeric('Super_total')
            ->requirePresence('Super_total', 'create')
            ->notEmpty('Super_total');

        return $validator;
    }
}
