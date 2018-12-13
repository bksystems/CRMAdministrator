<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TestFieldsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TestFieldsTable Test Case
 */
class TestFieldsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TestFieldsTable
     */
    public $TestFields;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.test_fields'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TestFields') ? [] : ['className' => TestFieldsTable::class];
        $this->TestFields = TableRegistry::getTableLocator()->get('TestFields', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TestFields);

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
