<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreaskillAttributesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreaskillAttributesTable Test Case
 */
class AreaskillAttributesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AreaskillAttributesTable
     */
    public $AreaskillAttributes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.areaskill_attributes',
        'app.nursings',
        'app.area_skill_atrributes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AreaskillAttributes') ? [] : ['className' => 'App\Model\Table\AreaskillAttributesTable'];
        $this->AreaskillAttributes = TableRegistry::get('AreaskillAttributes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AreaskillAttributes);

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
