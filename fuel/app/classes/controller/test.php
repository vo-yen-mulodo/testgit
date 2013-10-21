<?php
use Fuel\Core\Controller_Rest;
class Controller_Test extends Controller_Rest{
	public function get_index(){
		return $this->response(array('a'=>'abc','v'=>'ascasc',array('c'=>'aascasca')),200);
	}
} 