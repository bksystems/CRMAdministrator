<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrganizationOfficesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrganizationOfficesTable Test Case
 */
class OrganizationOfficesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrganizationOfficesTable
     */
    public $OrganizationOffices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.organization_offices',
        'app.organization_subdirections',
        'app.organization_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrganizationOffices') ? [] : ['className' => OrganizationOfficesTable::class];
        $this->OrganizationOffices = TableRegistry::getTableLocator()->get('OrganizationOffices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrganizationOffices);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
