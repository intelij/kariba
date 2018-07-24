<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class deposittransactions extends Sximo  {
	
	protected $table = 'deposits';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT deposits.* FROM deposits  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE deposits.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
