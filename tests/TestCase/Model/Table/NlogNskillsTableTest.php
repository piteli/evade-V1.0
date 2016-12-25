<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NlogNskillsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NlogNskillsTable Test Case
 */
class NlogNskillsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NlogNskillsTable
     */
    public $NlogNskills;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nlog_nskills',
        'app.ns'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('NlogNskills') ? [] : ['className' => 'App\Model\Table\NlogNskillsTable'];
        $this->NlogNskills = TableRegistry::get('NlogNskills', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NlogNskills);

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
