<?php
/**
 * Tests for BlockRay
 */

use PHPUnit\Framework\TestCase;
use Blockray\Blockray;

class BlockrayTest extends TestCase {
    private Blockray $instance;

    protected function setUp(): void {
        $this->instance = new Blockray(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockray::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
