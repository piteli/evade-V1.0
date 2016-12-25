<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NstudentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NstudentsTable Test Case
 */
class NstudentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NstudentsTable
     */
    public $Nstudents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nstudents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Nstudents') ? [] : ['className' => 'App\Model\Table\NstudentsTable'];
        $this->Nstudents = TableRegistry::get('Nstudents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Nstudents);

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
