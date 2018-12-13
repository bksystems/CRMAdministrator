<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblSysOrganizationsSubdirectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblSysOrganizationsSubdirectionsTable Test Case
 */
class TblSysOrganizationsSubdirectionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblSysOrganizationsSubdirectionsTable
     */
    public $TblSysOrganizationsSubdirections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tbl_sys_organizations_subdirections',
        'app.tbl_sys_organization_directions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TblSysOrganizationsSubdirections') ? [] : ['className' => TblSysOrganizationsSubdirectionsTable::class];
        $this->TblSysOrganizationsSubdirections = TableRegistry::getTableLocator()->get('TblSysOrganizationsSubdirections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblSysOrganizationsSubdirections);

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
