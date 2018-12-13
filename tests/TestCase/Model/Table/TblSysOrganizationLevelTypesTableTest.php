<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblSysOrganizationLevelTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblSysOrganizationLevelTypesTable Test Case
 */
class TblSysOrganizationLevelTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblSysOrganizationLevelTypesTable
     */
    public $TblSysOrganizationLevelTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tbl_sys_organization_level_types',
        'app.tbl_sys_organizations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TblSysOrganizationLevelTypes') ? [] : ['className' => TblSysOrganizationLevelTypesTable::class];
        $this->TblSysOrganizationLevelTypes = TableRegistry::getTableLocator()->get('TblSysOrganizationLevelTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblSysOrganizationLevelTypes);

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
