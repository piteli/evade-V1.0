<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NlogNskills6Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NlogNskills6Table Test Case
 */
class NlogNskills6TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NlogNskills6Table
     */
    public $NlogNskills6;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nlog_nskills6',
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
        $config = TableRegistry::exists('NlogNskills6') ? [] : ['className' => 'App\Model\Table\NlogNskills6Table'];
        $this->NlogNskills6 = TableRegistry::get('NlogNskills6', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NlogNskills6);

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
