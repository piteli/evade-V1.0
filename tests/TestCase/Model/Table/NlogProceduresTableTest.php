<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NlogProceduresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NlogProceduresTable Test Case
 */
class NlogProceduresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NlogProceduresTable
     */
    public $NlogProcedures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nlog_procedures'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('NlogProcedures') ? [] : ['className' => 'App\Model\Table\NlogProceduresTable'];
        $this->NlogProcedures = TableRegistry::get('NlogProcedures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NlogProcedures);

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
}
