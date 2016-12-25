<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreaskillScoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreaskillScoresTable Test Case
 */
class AreaskillScoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AreaskillScoresTable
     */
    public $AreaskillScores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.areaskill_scores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AreaskillScores') ? [] : ['className' => 'App\Model\Table\AreaskillScoresTable'];
        $this->AreaskillScores = TableRegistry::get('AreaskillScores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AreaskillScores);

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
