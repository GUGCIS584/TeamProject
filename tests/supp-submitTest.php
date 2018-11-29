<?php

use PHPUnit\Framework\TestCase;

class supp-submitTest extends TestCase
{
    public function testCanBeCreatedFromValidIndex()
    {
		$data['name'] = 'Test Test';
        $this->assertEquals('1',
            supp-submit::index($data)
        );
    }

	public function testCannonBeCreatedFromInvalidName()
    {
		$data['name'] = '';
        $this->assertEquals('0',
            supp-submit::index($data)
        );
    }
}
