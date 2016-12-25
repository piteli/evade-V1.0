<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OsceSkills5Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OsceSkills5Table Test Case
 */
class OsceSkills5TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OsceSkills5Table
     */
    public $OsceSkills5;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.osce_skills5',
        'app.nursings',
        'app.osce_skills',
        'app.osce_actions',
        'app.questions',
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
        $config = TableRegistry::exists('OsceSkills5') ? [] : ['className' => 'App\Model\Table\OsceSkills5Table'];
        $this->OsceSkills5 = TableRegistry::get('OsceSkills5', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OsceSkills5);

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
