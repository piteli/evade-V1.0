<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GrandTotalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GrandTotalsTable Test Case
 */
class GrandTotalsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GrandTotalsTable
     */
    public $GrandTotals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.grand_totals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GrandTotals') ? [] : ['className' => 'App\Model\Table\GrandTotalsTable'];
        $this->GrandTotals = TableRegistry::get('GrandTotals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GrandTotals);

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
