<?php

require 'DatabaseConnection.php';
require 'Dbconfig.php';
ini_set('memory_limit', '-1');//Increase memory limit
//equire 'Main.php';

date_default_timezone_set('America/New_York');//timezone

$currdate= date("Ymd");
 
$currenttime = date("H:i");
$currtime= preg_replace('/-|:/', null, $currenttime);//time without slashes

 

$dropboxval= $_POST['myList'];
 $databasename= $dbarray[$dropboxval]['database'];//Dbname.Tablename
 $tablename= $dbarray[$dropboxval]['table'];
 //$name= explode(".",$dbname);//Split the Dbname and Table Name
//	$databasename=$name[0];
//	$tablename=$name[1];
 
 $stdate= $_POST['startDatepicker'];
 $endate = $_POST['endDatepicker'];
 $startdate= preg_replace('/-|:/', null, $stdate);//Date without slashes
 $enddate= preg_replace('/-|:/', null, $endate); //Date without slashes



 
 
 $reportname=$dropboxval."_".$startdate."_".$enddate."_".$currdate."_".$currtime.".csv";
 $datefield=$dbarray[$dropboxval]['datefield'];//filter
 //echo $reportname;
 
try{
 // Connect to the database
  $connection = mysqli_connect($host,$user,$pass,$databasename);
}
catch(exception $e){
	echo "Cannot connect to the database.: ".$e;
}

class CSVexporter

{

	public $_conn;
	public $_dbName;
	public $_tableName;
	public $_startDate;
	public $_endDate;
	public $_datefield;//filter
    
    
    public function __construct($dbname,$tblname,$startdate,$enddate,$conn,$datefield)
    {
        $this->_dbName = $dbname;
		$this->_tableName=$tblname;
		$this->_startDate=$startdate;
		$this->_endDate=$enddate;
		$this->_conn=$conn;
		$this->_datefield=$datefield;
    }
	
function exportMysqlToCsv($reportname){

try{

	$csv_terminated = "\n";
    $csv_separator = ",";
    $csv_enclosed = '"';
    $csv_escaped = "\\";
	
	$dtField=$this->_datefield;
	$tbname=$this->_tableName;
	$stdate=$this->_startDate;
	$enddate=$this->_endDate;
	
	
	$query="Select * from $tbname where $dtField between '$stdate' and '$enddate' order by  $dtField";
	//echo $query;
	
	$result= mysqli_query($this->_conn ,$query);
	
	if (!$result) die('Couldn\'t fetch records');
	$headers = $result->fetch_fields();//Headers for excel
	foreach($headers as $header) {
		$head[] = $header->name;
	}
	$fp = fopen('php://output', 'w');

if ($fp && $result) {
    header('Content-Type: a/csv');
    header('Content-Disposition: attachment; filename='.$reportname);
    header('Pragma: no-cache');
    header('Expires: 0');
    fputcsv($fp, array_values($head)); 
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        fputcsv($fp, array_values($row));
    }
    die;
}
}
catch(exception $e){
	echo "Export to Csv failed: ".$e;
}
mysqli_close($this->_conn);//Close db connection
}
}

$csvObject = new CSVexporter($databasename,$tablename,$stdate,$endate,$connection,$datefield);

$csvObject->exportMysqlToCsv($reportname);



?>