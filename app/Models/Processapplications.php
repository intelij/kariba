<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class processapplications extends Sximo  {
	
	protected $table = 'processing';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT processing.* FROM processing  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE processing.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
