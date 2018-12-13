<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblSysOrganizationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblSysOrganizationsTable Test Case
 */
class TblSysOrganizationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblSysOrganizationsTable
     */
    public $TblSysOrganizations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tbl_sys_organizations',
        'app.tbl_sys_organization_level_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TblSysOrganizations') ? [] : ['className' => TblSysOrganizationsTable::class];
        $this->TblSysOrganizations = TableRegistry::getTableLocator()->get('TblSysOrganizations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblSysOrganizations);

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
