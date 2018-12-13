<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatusUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatusUsersTable Test Case
 */
class StatusUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatusUsersTable
     */
    public $StatusUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.status_users',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('StatusUsers') ? [] : ['className' => StatusUsersTable::class];
        $this->StatusUsers = TableRegistry::getTableLocator()->get('StatusUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatusUsers);

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
