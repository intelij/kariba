<?php namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\Blank;
use App\Models\Contracts;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect ;
use DB;
use Auth;


class BlankController extends Controller {

	protected $layout = "layouts.main";
	protected $data = array();	
	public $module = 'blank';
	static $per_page	= '10';

	public function __construct()
	{
		
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->model = new Blank();
		$this->info = $this->model->makeInfo( $this->module);
//		$this->access = $this->model->validAccess($this->info['id']);
	
		$this->data = array(
			'pageTitle'	=> 	$this->info['title'],
			'pageNote'	=>  $this->info['note'],
			'pageModule'=> 'blank',
			'return'	=> self::returnUrl()
			
		);
		\App::setLocale(CNF_LANG);
		if (defined('CNF_MULTILANG') && CNF_MULTILANG == '1') {

		$lang = (\Session::get('lang') != "" ? \Session::get('lang') : CNF_LANG);
		\App::setLocale($lang);
		}  
		
		
	}

	public function getIndex( Request $request )
	{

		if($this->access['is_view'] ==0)
			return Redirect::to('dashboard')
				->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');

		$currentUser = Auth::user();

		if ($currentUser['group_id'] == 1 || $currentUser['group_id'] == 2) {
			$users = DB::table('clients')
				->join('contracts', 'clients.id', '=', 'contracts.application_id')
				->get();
		} elseif ($currentUser['group_id'] == 3) {
			$users = DB::table('clients')
				->join('contracts', 'clients.id', '=', 'contracts.application_id')
				->where('contracts.application_id', '=', $currentUser['id'])
				->get();
		}

		$this->data = $users;

		return view('blank.index')->with('data', $this->data);
	}



	function getUpdate(Request $request, $id = null)
	{
	
		if($id =='')
		{
			if($this->access['is_add'] ==0 )
			return Redirect::to('dashboard')->with('messagetext',\Lang::get('core.note_restric'))->with('msgstatus','error');
		}	
		
		if($id !='')
		{
			if($this->access['is_edit'] ==0 )
			return Redirect::to('dashboard')->with('messagetext',\Lang::get('core.note_restric'))->with('msgstatus','error');
		}				
				
		$this->data['access']		= $this->access;
		return view('blank.form',$this->data);
	}	

	public function getShow( $id = null)
	{
	
		if($this->access['is_detail'] ==0) 
			return Redirect::to('dashboard')
				->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');
					
		
		$this->data['access'] = $this->access;

		$currentUser = Auth::user();

		$users = DB::table('clients')
			->join('contracts', 'clients.id', '=', 'contracts.application_id')
			->where('contracts.application_id', '=', $id)
			->get();

		return view('blank.view',$this->data)->with('data', $users);;
	}	

	function postSave( Request $request)
	{
		
	
	}	

	public function postDelete( Request $request)
	{
		
		if($this->access['is_remove'] ==0) 
			return Redirect::to('dashboard')
				->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');
		
	}			


}