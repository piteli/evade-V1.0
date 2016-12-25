<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreaskillItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreaskillItemsTable Test Case
 */
class AreaskillItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AreaskillItemsTable
     */
    public $AreaskillItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.areaskill_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AreaskillItems') ? [] : ['className' => 'App\Model\Table\AreaskillItemsTable'];
        $this->AreaskillItems = TableRegistry::get('AreaskillItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AreaskillItems);

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
