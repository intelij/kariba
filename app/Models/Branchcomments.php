<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class branchcomments extends Sximo  {
	
	protected $table = 'branch_comments';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT branch_comments.* FROM branch_comments  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE branch_comments.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
