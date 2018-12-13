<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrganizationOffices Model
 *
 * @property \App\Model\Table\OrganizationSubdirectionsTable|\Cake\ORM\Association\BelongsTo $OrganizationSubdirections
 * @property \App\Model\Table\OrganizationTypesTable|\Cake\ORM\Association\BelongsTo $OrganizationTypes
 *
 * @method \App\Model\Entity\OrganizationOffice get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrganizationOffice newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OrganizationOffice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrganizationOffice|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrganizationOffice|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrganizationOffice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrganizationOffice[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrganizationOffice findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrganizationOfficesTable extends Table
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

        $this->setTable('organization_offices');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('OrganizationSubdirections', [
            'foreignKey' => 'organization_subdirection_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('OrganizationTypes', [
            'foreignKey' => 'organization_type_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('cost_center')
            ->requirePresence('cost_center', 'create')
            ->notEmpty('cost_center')
            ->add('cost_center', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->boolean('enabled')
            ->requirePresence('enabled', 'create')
            ->notEmpty('enabled');

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
        $rules->add($rules->isUnique(['cost_center']));
        $rules->add($rules->isUnique(['name']));
        $rules->add($rules->existsIn(['organization_subdirection_id'], 'OrganizationSubdirections'));
        $rules->add($rules->existsIn(['organization_type_id'], 'OrganizationTypes'));

        return $rules;
    }
}
