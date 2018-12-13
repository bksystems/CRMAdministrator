<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblSysEmployeesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblSysEmployeesTable Test Case
 */
class TblSysEmployeesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblSysEmployeesTable
     */
    public $TblSysEmployees;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tbl_sys_employees',
        'app.tbl_sys_organizations',
        'app.tbl_sys_employee_position_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TblSysEmployees') ? [] : ['className' => TblSysEmployeesTable::class];
        $this->TblSysEmployees = TableRegistry::getTableLocator()->get('TblSysEmployees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblSysEmployees);

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
