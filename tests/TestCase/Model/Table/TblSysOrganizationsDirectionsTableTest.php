<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblSysOrganizationsDirectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblSysOrganizationsDirectionsTable Test Case
 */
class TblSysOrganizationsDirectionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblSysOrganizationsDirectionsTable
     */
    public $TblSysOrganizationsDirections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tbl_sys_organizations_directions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TblSysOrganizationsDirections') ? [] : ['className' => TblSysOrganizationsDirectionsTable::class];
        $this->TblSysOrganizationsDirections = TableRegistry::getTableLocator()->get('TblSysOrganizationsDirections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblSysOrganizationsDirections);

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
