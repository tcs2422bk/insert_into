<?php 
//所以作法通常是設定一個hidden欄位，把js處理過的變數值放入，最後送出表單
//由接收表單的PHP去做相關的資料新增、修改和刪除https://dotblogs.com.tw/jellycheng/archive/2011/02/15/21379.aspx
	function createAns($d)
	{
		$poker=range(0,9);
		shuffle($poker);
		for($i=0;$i<$d;$i++)
		{ 
			$ans .=$poker[$i];
		}
		return $ans;
	}
	function checkAB($ans,$gus)
	{
		$a=$b=0;
		
		return "{$a}A{$b}B";
	}
	function preCheckTWId($id)
	{
		
	}	
	function checkTWId($id)
	{
		// $check = array('A'=>10, 'B'=>11 ...);
		$all = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';		
	}
?>
<?php 
	// database API
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = 'root';
	$db_name = 'data';
	//連接到資料庫
	$link = mysqli_connect($db_host,$db_user,$db_pass,$db_name)
			or die("Sever Error");
	//和資料庫傳遞預設utf8(要與eclipse對應)
	mysqli_query($link,'SET NAME utf8');
?>