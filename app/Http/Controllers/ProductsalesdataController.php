<?php namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\Productsalesdata;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect ; 


class ProductsalesdataController extends Controller {

	protected $layout = "layouts.main";
	protected $data = array();	
	public $module = 'productsalesdata';
	static $per_page	= '10';
	const LOAN_TYPE = 'HCST';
	private $array2xml;


	public function __construct()
	{
		
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->model = new Productsalesdata();
		$this->info = $this->model->makeInfo( $this->module);
		$this->access = $this->model->validAccess($this->info['id']);
		$this->array2xml = new Array2XML();
	
		$this->data = array(
			'pageTitle'	=> 	$this->info['title'],
			'pageNote'	=>  $this->info['note'],
			'pageModule'=> 'productsalesdata',
			'return'	=> self::returnUrl()
			
		);
		
	}

	public function getIndex( Request $request )
	{

		if($this->access['is_view'] ==0) 
			return Redirect::to('dashboard')
				->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');

		
		return view('productsalesdata.index',$this->data);
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
		return view('productsalesdata.form',$this->data);
	}	

	public function getShow( $id = null)
	{
	
		if($this->access['is_detail'] ==0) 
			return Redirect::to('dashboard')
				->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus','error');
					
		
		$this->data['access']		= $this->access;
		return view('productsalesdata.view',$this->data);	
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

	public function generateXMLFile()
	{
		$array_data = array(
			'CoreItems' => array(
				'FirmReferenceNumber' => '123456',
				'TransRef' => 'UniqueTransRef-JanFile-02',
				'Cancellation' => false

			),
			'ShortTermLoans' => array(
				'TransactionDate' => '2015-02-20',
				'LoanAmount' => rand(100, 10000),
				'LoanType' => self::LOAN_TYPE,
				'APR' => rand(9, 158),
				'ArrangementFee' => rand(50, 200),
				'TotalAmountPayable' => rand(200, 1200),
				'Rollover' => 'N',
				'OrderOfRollover' => 0,
				'LengthOfTerm' => rand(1,31),
				'ReasonForLoan' => 'S',
				'DOBOfBorrower' => '1980-04-18',
				'PostCode' => 'SW1 1WS',
				'MonthlyIncomeOfBorrower' => rand(2100, 7000),
				'MaritalStatusOfBorrower' => 'M',
				'ResidentialStatusOfBorrower' => 'O',
				'EmploymentStatusOfBorrower' => 'EF'
			),
		);

		$data = [];

		array_push($data, $array_data);
		array_push($data, $array_data);
		array_push($data, $array_data);
		array_push($data, $array_data);
		array_push($data, $array_data);
		array_push($data, $array_data);
		array_push($data, $array_data);
		array_push($data, $array_data);
		array_push($data, $array_data);
		array_push($data, $array_data);
		array_push($data, $array_data);

		$productSalesData = array(
			'@attributes' => array(
				'xmlns' => "urn:fsa-gov-uk:MER:PSD006:1",
				'xmlns:xsi' => "http://www.w3.org/2001/XMLSchema-instance",
				'xsi:schemaLocation' => "urn:fsa-gov-uk:MER:PSD006:1 http://www.fsa.gov.uk/MER/DRG/PSD006/v1/PSD006-Schema.xsd"
			),
			'PSDFeedHeader' => array(
				'Submitter' => array(
					'SubmittingFirm' => 123456
				),
				'ReportDetails' => array(
					'ReportCreationDate' => '2016-01-24',
					'ReportIdentifier' => 'UniqueReportID-001-01',


				),
			),
			'PSD006FeedMsgs' => $data,
		);

		$version ='1.0';
		$encoding = 'UTF-8';
		$filename = date('YmdHis');

		Array2XML::init($version, $encoding);
		$xml = Array2XML::createXML('PSD006-ShortTermLoans', $productSalesData);

		header('Content-type: "text/xml"; charset="utf8"');

		header('Content-disposition: attachment; filename="PSD006-ShortTermLoans-'.$filename.'.xml"');

		echo $xml->saveXML();

	}

}
