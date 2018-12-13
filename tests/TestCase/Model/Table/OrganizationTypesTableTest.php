<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrganizationTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrganizationTypesTable Test Case
 */
class OrganizationTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrganizationTypesTable
     */
    public $OrganizationTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.organization_types',
        'app.organization_offices'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrganizationTypes') ? [] : ['className' => OrganizationTypesTable::class];
        $this->OrganizationTypes = TableRegistry::getTableLocator()->get('OrganizationTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrganizationTypes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
