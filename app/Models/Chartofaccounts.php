<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class chartofaccounts extends Sximo  {
	
	protected $table = 'chart_of_account';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT chart_of_account.* FROM chart_of_account  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE chart_of_account.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
