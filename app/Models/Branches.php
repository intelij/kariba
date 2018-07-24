<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class branches extends Sximo  {
	
	protected $table = 'branch';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT branch.* FROM branch  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE branch.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
