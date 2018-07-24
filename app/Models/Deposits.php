<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class deposits extends Sximo  {
	
	protected $table = 'accounts';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT accounts.* FROM accounts  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE accounts.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
