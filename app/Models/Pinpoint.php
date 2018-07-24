<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class pinpoint extends Sximo  {
	
	protected $table = 'clients';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT clients.* FROM clients  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE clients.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
