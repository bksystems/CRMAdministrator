<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrganizationSubdirectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrganizationSubdirectionsTable Test Case
 */
class OrganizationSubdirectionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrganizationSubdirectionsTable
     */
    public $OrganizationSubdirections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.organization_subdirections',
        'app.organization_directions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrganizationSubdirections') ? [] : ['className' => OrganizationSubdirectionsTable::class];
        $this->OrganizationSubdirections = TableRegistry::getTableLocator()->get('OrganizationSubdirections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrganizationSubdirections);

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
