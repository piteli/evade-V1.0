<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NlogScoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NlogScoresTable Test Case
 */
class NlogScoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NlogScoresTable
     */
    public $NlogScores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nlog_scores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('NlogScores') ? [] : ['className' => 'App\Model\Table\NlogScoresTable'];
        $this->NlogScores = TableRegistry::get('NlogScores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NlogScores);

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
