<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OsceSkills2Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OsceSkills2Table Test Case
 */
class OsceSkills2TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OsceSkills2Table
     */
    public $OsceSkills2;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.osce_skills2',
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
        $config = TableRegistry::exists('OsceSkills2') ? [] : ['className' => 'App\Model\Table\OsceSkills2Table'];
        $this->OsceSkills2 = TableRegistry::get('OsceSkills2', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OsceSkills2);

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
