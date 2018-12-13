<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblSysEmployeePositionTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblSysEmployeePositionTypesTable Test Case
 */
class TblSysEmployeePositionTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblSysEmployeePositionTypesTable
     */
    public $TblSysEmployeePositionTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tbl_sys_employee_position_types',
        'app.tbl_sys_employees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TblSysEmployeePositionTypes') ? [] : ['className' => TblSysEmployeePositionTypesTable::class];
        $this->TblSysEmployeePositionTypes = TableRegistry::getTableLocator()->get('TblSysEmployeePositionTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblSysEmployeePositionTypes);

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
