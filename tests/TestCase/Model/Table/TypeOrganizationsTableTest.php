<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeOrganizationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeOrganizationsTable Test Case
 */
class TypeOrganizationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeOrganizationsTable
     */
    public $TypeOrganizations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.type_organizations',
        'app.organizations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TypeOrganizations') ? [] : ['className' => TypeOrganizationsTable::class];
        $this->TypeOrganizations = TableRegistry::getTableLocator()->get('TypeOrganizations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TypeOrganizations);

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
