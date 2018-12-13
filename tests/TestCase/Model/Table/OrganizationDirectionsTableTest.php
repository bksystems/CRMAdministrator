<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrganizationDirectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrganizationDirectionsTable Test Case
 */
class OrganizationDirectionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrganizationDirectionsTable
     */
    public $OrganizationDirections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.organization_directions',
        'app.organization_subdirections'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OrganizationDirections') ? [] : ['className' => OrganizationDirectionsTable::class];
        $this->OrganizationDirections = TableRegistry::getTableLocator()->get('OrganizationDirections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrganizationDirections);

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
