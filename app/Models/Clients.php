<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class clients extends Sximo  {
	
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

	/**
	 * Get all of the contracts for the user.
	 */
	public function contracts()
	{
		return $this->hasMany('App\Contracts');
	}
	

}
