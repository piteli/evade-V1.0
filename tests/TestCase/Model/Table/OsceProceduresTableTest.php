<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OsceProceduresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OsceProceduresTable Test Case
 */
class OsceProceduresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OsceProceduresTable
     */
    public $OsceProcedures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.osce_procedures'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OsceProcedures') ? [] : ['className' => 'App\Model\Table\OsceProceduresTable'];
        $this->OsceProcedures = TableRegistry::get('OsceProcedures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OsceProcedures);

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
