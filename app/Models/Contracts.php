<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class contracts extends Sximo  {
	
	protected $table = 'contracts';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT contracts.* FROM contracts  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE contracts.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
