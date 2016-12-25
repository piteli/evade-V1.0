<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OsceSkills4Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OsceSkills4Table Test Case
 */
class OsceSkills4TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OsceSkills4Table
     */
    public $OsceSkills4;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.osce_skills4',
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
        $config = TableRegistry::exists('OsceSkills4') ? [] : ['className' => 'App\Model\Table\OsceSkills4Table'];
        $this->OsceSkills4 = TableRegistry::get('OsceSkills4', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OsceSkills4);

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
