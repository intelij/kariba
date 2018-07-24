<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class office extends Sximo  {
	
	protected $table = 'office';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT office.* FROM office  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE office.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
