<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OsceSkills3Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OsceSkills3Table Test Case
 */
class OsceSkills3TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OsceSkills3Table
     */
    public $OsceSkills3;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.osce_skills3',
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
        $config = TableRegistry::exists('OsceSkills3') ? [] : ['className' => 'App\Model\Table\OsceSkills3Table'];
        $this->OsceSkills3 = TableRegistry::get('OsceSkills3', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OsceSkills3);

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
