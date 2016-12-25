<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OsceActionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OsceActionsTable Test Case
 */
class OsceActionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OsceActionsTable
     */
    public $OsceActions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.osce_actions',
        'app.questions',
        'app.nursings',
        'app.osce_skills',
        'app.osce_skills5',
        'app.osce_skills2',
        'app.osce_skills3',
        'app.osce_skills4',
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
        $config = TableRegistry::exists('OsceActions') ? [] : ['className' => 'App\Model\Table\OsceActionsTable'];
        $this->OsceActions = TableRegistry::get('OsceActions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OsceActions);

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
