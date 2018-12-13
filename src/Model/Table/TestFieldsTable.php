<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TestFields Model
 *
 * @method \App\Model\Entity\TestField get($primaryKey, $options = [])
 * @method \App\Model\Entity\TestField newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TestField[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TestField|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TestField|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TestField patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TestField[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TestField findOrCreate($search, callable $callback = null, $options = [])
 */
class TestFieldsTable extends Table
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

        $this->setTable('test_fields');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('test_varchar')
            ->maxLength('test_varchar', 100)
            ->requirePresence('test_varchar', 'create')
            ->notEmpty('test_varchar');

        $validator
            ->scalar('test_text')
            ->requirePresence('test_text', 'create')
            ->notEmpty('test_text');

        $validator
            ->dateTime('test_datetime')
            ->requirePresence('test_datetime', 'create')
            ->notEmpty('test_datetime');

        $validator
            ->boolean('test_bool')
            ->requirePresence('test_bool', 'create')
            ->notEmpty('test_bool');

        $validator
            ->date('test_date')
            ->requirePresence('test_date', 'create')
            ->notEmpty('test_date');

        return $validator;
    }
}
