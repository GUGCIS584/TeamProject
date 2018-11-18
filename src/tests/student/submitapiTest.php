<?php

use PHPUnit\Framework\TestCase;

class submitApiTest extends TestCase
{
    public function testIndex()
    {
		$data['name'] = 'Test Test';
        $this->assertEquals(
            '1',
            submitapi::index($data)
        );
    }
	
	public function testWithoutName()
    {
		$data['name'] = '';
        $this->assertEquals(
            '0',
            submitapi::index($data)
        );
    }
}