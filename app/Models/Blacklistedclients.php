<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class blacklistedclients extends Sximo  {
	
	protected $table = '_clients';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT _clients.* FROM _clients  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE _clients.id IS NOT NULL
AND _clients.client_state = 'Blacklisted' ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
