<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class loantransactions extends Sximo  {
	
	protected $table = 'loans';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT loans.* FROM loans  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE loans.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
