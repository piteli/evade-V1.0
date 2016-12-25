<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NlogNskills5Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NlogNskills5Table Test Case
 */
class NlogNskills5TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NlogNskills5Table
     */
    public $NlogNskills5;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nlog_nskills5',
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
        $config = TableRegistry::exists('NlogNskills5') ? [] : ['className' => 'App\Model\Table\NlogNskills5Table'];
        $this->NlogNskills5 = TableRegistry::get('NlogNskills5', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NlogNskills5);

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
