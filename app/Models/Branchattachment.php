<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class branchattachment extends Sximo  {
	
	protected $table = 'branch_attachment';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT branch_attachment.* FROM branch_attachment  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE branch_attachment.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
