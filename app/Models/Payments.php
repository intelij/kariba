<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class payments extends Sximo  {
	
	protected $table = 'payments';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT payments.* FROM payments  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE payments.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
