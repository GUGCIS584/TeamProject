<?php use PHPUnit\Framework\TestCase;

final class StudentTest extends TestCase
{
	
	public function __construct()
	{
		$this->studentSubmit = new Submit();
	}
	public function addStudent()
	{
		$data['name'] = 'Test';
		$data['department'] = 'CS';
		$data['major'] = 'Test';
		$data['noc'] = 'test';
		$data['fpc'] = 'Test';
		$data['ws'] = 'Test';
		$data['noh'] = '10';
		$data['tow'] = 'Test';
		$data['pph'] = '5';
		$res = $this->studentSubmit->index($data);
			$this->assertEquals(
            '1',
            $res
        );
	}
	
	public function emptyName()
	{
		
		$data['name'] = '';
		$data['department'] = 'CS';
		$data['major'] = 'Test';
		$data['noc'] = 'test';
		$data['fpc'] = 'Test';
		$data['ws'] = 'Test';
		$data['noh'] = '10';
		$data['tow'] = 'Test';
		$data['pph'] = '5';
		$res = $this->studentSubmit->index($data);
			$this->assertEquals(
            '0',
            $res
        );
	}
	
	public function emptyDepartment()
	{
		$data['name'] = 'Test';
		$data['department'] = '';
		$data['major'] = 'Test';
		$data['noc'] = 'test';
		$data['fpc'] = 'Test';
		$data['ws'] = 'Test';
		$data['noh'] = '10';
		$data['tow'] = 'Test';
		$data['pph'] = '5';
		$res = $this->studentSubmit->index($data);
			$this->assertEquals(
            '0',
            $res
        );
	}
	
	public function emptyMajor()
	{
		$data['name'] = 'Test';
		$data['department'] = 'CS';
		$data['major'] = '';
		$data['noc'] = 'test';
		$data['fpc'] = 'Test';
		$data['ws'] = 'Test';
		$data['noh'] = '10';
		$data['tow'] = 'Test';
		$data['pph'] = '5';
		$res = $this->studentSubmit->index($data);
			$this->assertEquals(
            '0',
            $res
        );
	}
	
	public function emptyNOC()
	{
		$data['name'] = 'Test';
		$data['department'] = 'CS';
		$data['major'] = 'Test';
		$data['noc'] = '';
		$data['fpc'] = 'Test';
		$data['ws'] = 'Test';
		$data['noh'] = '10';
		$data['tow'] = 'Test';
		$data['pph'] = '5';
		$res = $this->studentSubmit->index($data);
			$this->assertEquals(
            '0',
            $res
        );
	}
	
	public function emptyFPC()
	{
		$data['name'] = 'Test';
		$data['department'] = 'CS';
		$data['major'] = 'Test';
		$data['noc'] = 'test';
		$data['fpc'] = '';
		$data['ws'] = 'Test';
		$data['noh'] = '10';
		$data['tow'] = 'Test';
		$data['pph'] = '5';
		$res = $this->studentSubmit->index($data);
			$this->assertEquals(
            '0',
            $res
        );
	}
	
	public function emptyWS()
	{
		$data['name'] = 'Test';
		$data['department'] = 'CS';
		$data['major'] = 'Test';
		$data['noc'] = 'test';
		$data['fpc'] = 'Test';
		$data['ws'] = '';
		$data['noh'] = '10';
		$data['tow'] = 'Test';
		$data['pph'] = '5';
		$res = $this->studentSubmit->index($data);
			$this->assertEquals(
            '0',
            $res
        );
	}
	public function emptyNOH()
	{
		$data['name'] = 'Test';
		$data['department'] = 'CS';
		$data['major'] = 'Test';
		$data['noc'] = 'test';
		$data['fpc'] = 'Test';
		$data['ws'] = 'Test';
		$data['noh'] = '';
		$data['tow'] = 'Test';
		$data['pph'] = '5';
		$res = $this->studentSubmit->index($data);
			$this->assertEquals(
            '0',
            $res
        );
	}
	
	public function emptyTOW()
	{
		$data['name'] = 'Test';
		$data['department'] = 'CS';
		$data['major'] = 'Test';
		$data['noc'] = 'test';
		$data['fpc'] = 'Test';
		$data['ws'] = 'Test';
		$data['noh'] = '10';
		$data['tow'] = '';
		$data['pph'] = '5';
		$res = $this->studentSubmit->index($data);
			$this->assertEquals(
            '0',
            $res
        );
	}
	
	public function emptyPPH()
	{
		$data['name'] = 'Test';
		$data['department'] = 'CS';
		$data['major'] = 'Test';
		$data['noc'] = 'test';
		$data['fpc'] = 'Test';
		$data['ws'] = 'Test';
		$data['noh'] = '10';
		$data['tow'] = 'Test';
		$data['pph'] = '';
		$res = $this->studentSubmit->index($data);
			$this->assertEquals(
            '0',
            $res
        );
	}
	
	public function nonNumericNPH()
	{
		$data['name'] = 'Test';
		$data['department'] = 'CS';
		$data['major'] = 'Test';
		$data['noc'] = 'test';
		$data['fpc'] = 'Test';
		$data['ws'] = 'Test';
		$data['noh'] = 'Test';
		$data['tow'] = 'Test';
		$data['pph'] = '5';
		$res = $this->studentSubmit->index($data);
			$this->assertEquals(
            '0',
            $res
        );
	}
	
	public function nonNumericPPH()
	{
		$data['name'] = 'Test';
		$data['department'] = 'CS';
		$data['major'] = 'Test';
		$data['noc'] = 'test';
		$data['fpc'] = 'Test';
		$data['ws'] = 'Test';
		$data['noh'] = '10';
		$data['tow'] = 'Test';
		$data['pph'] = 'tEST';
		$res = $this->studentSubmit->index($data);
			$this->assertEquals(
            '0',
            $res
        );
	}
}