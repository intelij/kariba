<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class productsalesdata extends Sximo  {
	
	protected $table = 'account';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT account.* FROM account  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE account.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
