<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NursingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NursingsTable Test Case
 */
class NursingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NursingsTable
     */
    public $Nursings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nursings',
        'app.osce_skills',
        'app.areaskill_attributes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Nursings') ? [] : ['className' => 'App\Model\Table\NursingsTable'];
        $this->Nursings = TableRegistry::get('Nursings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Nursings);

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
