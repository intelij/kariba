<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class products extends Sximo  {
	
	protected $table = 'products';
	protected $primaryKey = '';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT products.* FROM products  ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE products.product is not null ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
