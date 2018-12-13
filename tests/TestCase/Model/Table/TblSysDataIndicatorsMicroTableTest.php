<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TblSysDataIndicatorsMicroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TblSysDataIndicatorsMicroTable Test Case
 */
class TblSysDataIndicatorsMicroTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TblSysDataIndicatorsMicroTable
     */
    public $TblSysDataIndicatorsMicro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tbl_sys_data_indicators_micro',
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
        $config = TableRegistry::getTableLocator()->exists('TblSysDataIndicatorsMicro') ? [] : ['className' => TblSysDataIndicatorsMicroTable::class];
        $this->TblSysDataIndicatorsMicro = TableRegistry::getTableLocator()->get('TblSysDataIndicatorsMicro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TblSysDataIndicatorsMicro);

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
