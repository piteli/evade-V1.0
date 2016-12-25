<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PelajarTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PelajarTable Test Case
 */
class PelajarTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PelajarTable
     */
    public $Pelajar;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pelajar',
        'app.students'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pelajar') ? [] : ['className' => 'App\Model\Table\PelajarTable'];
        $this->Pelajar = TableRegistry::get('Pelajar', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pelajar);

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
