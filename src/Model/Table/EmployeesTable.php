<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @property \App\Model\Table\OrganizationOfficesTable|\Cake\ORM\Association\BelongsTo $OrganizationOffices
 * @property \App\Model\Table\EmployeePositionsTable|\Cake\ORM\Association\BelongsTo $EmployeePositions
 * @property \App\Model\Table\StatusEmployeesTable|\Cake\ORM\Association\BelongsTo $StatusEmployees
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Employee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employee newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employee|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employee findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployeesTable extends Table
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

        $this->setTable('employees');
        $this->setDisplayField('full_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('OrganizationOffices', [
            'foreignKey' => 'organization_office_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('EmployeePositions', [
            'foreignKey' => 'employee_position_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('StatusEmployees', [
            'foreignKey' => 'status_employee_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'employee_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('roster')
            ->requirePresence('roster', 'create')
            ->notEmpty('roster')
            ->add('roster', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 100)
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->scalar('mother_name')
            ->maxLength('mother_name', 100)
            ->allowEmpty('mother_name');

        $validator
            ->scalar('names')
            ->maxLength('names', 150)
            ->requirePresence('names', 'create')
            ->notEmpty('names');

        $validator
            ->boolean('is_employee_system')
            ->requirePresence('is_employee_system', 'create')
            ->notEmpty('is_employee_system');

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
        $rules->add($rules->isUnique(['roster']));
        $rules->add($rules->existsIn(['organization_office_id'], 'OrganizationOffices'));
        $rules->add($rules->existsIn(['employee_position_id'], 'EmployeePositions'));
        $rules->add($rules->existsIn(['status_employee_id'], 'StatusEmployees'));

        return $rules;
    }
}
