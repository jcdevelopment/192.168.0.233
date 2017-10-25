<?php defined('C5_EXECUTE') or die(_("Access Denied."));
require_once('header-page.php');
$this->addHeaderItem('<script type="text/javascript" src="/js/quote.js"></script>');
$this->addHeaderItem('<script type="text/javascript" src="//cdn.rawgit.com/mir3z/texthighlighter/master/src/TextHighlighter.js"></script>');
$this->addHeaderItem('<script type="text/javascript" src="//cdn.rawgit.com/mir3z/texthighlighter/master/src/jquery.textHighlighter.js"></script>');

print "test";

//$today = date('Y-m-d');
//$placedDate = '2017-07-18 16:43:51';

//$dayOfWeek = date('w',strtotime($placedDate));
//$datetime = explode(' ',$placedDate);

//$datetime[1] = date('H:i:s');
//print_r($datetime[1]);
//exit;
// $theHour = date('H',strtotime($datetime[1]));
// print_r('Placed Date: '.$placedDate);
// print('<br />');
// print_r('Week Day: '.$datetime[0]);
// print('<br />');
// print_r('Today: '.$today.' '.'Time: '.$theHour);
// print('<br />');
// $testnum = 3;
// $testnum -= 1;
// print($testnum);
// print('<br />');
// if (date('Y-m-d',strtotime($datetime[0])) == $today && $theHour >= '16'){
	
// 	print('After 4');
// 	print('<br />');
// 	print_r($today);
// 	exit;
// } else {
// 	$day_before = date( 'Y-m-d', strtotime( $placedDate. ' -1 day' ) );
// 	print('before 4');
// 	print('<br />');
// 	print_r($day_before);
// 	exit;
// }
//print_r($datetime);
//exit;













//phpinfo();
//PASSWORD ENCDEC
// Loader::model('vault');
// $vault = new vault();

// $pwd = $vault->encrypt_decrypt('encrypt','laymon0535');

// print_r($pwd);


// echo "<br/><br />";

// //CONNECT TO FTP
// $filename = '10000273.csv';
// $path = '/csv/';
// $useCache = 1;

// $ftp_server = "active.ehomemarketing.com";

// $ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
// $ftp_user = 'accudata';
// $ftp_pwd = 'dataaccu!';
// //$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);



// static $cache_ftp_nlist = array();
// static $cache_signature = '';

// $new_signature = "$ftp_server/$path";

// if(!$useCache || $new_signature!=$cache_signature)
// {
// 	$useCache = 0;
// 	//$new_signature = $cache_signature;
// 	$cache_signature = $new_signature;
// 	// setup the connection
// 	$conn_id         = ftp_connect($ftp_server) or die("Error connecting $ftp_server");
// 	$ftp_login           = ftp_login($conn_id, $ftp_user, $ftp_pwd);
// 	$cache_ftp_nlist = ftp_nlist($conn_id, $path);

// 	if ($cache_ftp_nlist===FALSE)die("erro no ftp_nlist");
// }

// //$check_file_exist = "$path/$file";
// $check_file_exist = $filename;

// if(in_array($check_file_exist, $cache_ftp_nlist))
// {
// 	echo "Found: ".$check_file_exist." in folder: ".$path;
// }
// else
// {
// 	echo "Not Found: ".$check_file_exist." in folder: ".$path;
// };
// // use for debuging: var_dump($cache_ftp_nlist);
// if(!$useCache) ftp_close($conn_id);




// if (file_exists($filename)) {
// 	echo "The file $filename exists";
// } else {
// echo "The file $filename does not exist";
// 	}

	
	
// 	echo "<br/><br />";	
	
// $server = 'active.ehomemarketing.com';
// $user   = 'accudata';
// $pwd    = 'dataaccu!';

// $conn = ftp_connect($server);
// $ret = ftp_login($conn, $user, $pwd);

// foreach(array(
//     'csv/10000273.csv'
// ) as $file) {
//     $listing = ftp_nlist($conn, $file);
//     if(empty($listing)) {
//         echo "$file was not found on $server\n";
//     } else {
//         echo "$file was found on $server\n";
//     }
// }
	
	

// $local_file = "order.csv";
// $server_file = "csv/10000273.csv";

// // download server file
// if (ftp_get($ftp_conn, $local_file, $server_file, FTP_ASCII))
// {
// 	echo "Successfully written to $local_file.";
// }
// else
// {
// echo "Error downloading $server_file.";
// }

// close connection
//ftp_close($ftp_conn);

/*$temp = 'RMAT00000007';

$rmat = 'RMAT12';
$exp=str_split($rmat, 4);
$count = strlen($exp[1]);

if ($count == 1) {
	$rmatfull = 'RMAT0000000'.$exp[1];
} elseif ($count == 2){
	$rmatfull = 'RMAT000000'.$exp[1];;
} elseif ($count == 3){
	$rmatfull = 'RMAT00000'.$exp[1];;
} elseif ($count == 4){
	$rmatfull = 'RMAT0000'.$exp[1];;
} elseif ($count == 5){
	$rmatfull = 'RMAT000'.$exp[1];;
} elseif ($count == 6){
	$rmatfull = 'RMAT00'.$exp[1];;
} elseif ($count == 7){
	$rmatfull = 'RMAT0'.$exp[1];;
}

echo $rmatfull;
//print_r($exp[1]);
exit;*/

// $loc = '/home/sites/mytmg/attachments/OEM000017017';

// $dirPath = "/home/sites/mytmg/attachments/OEM000017017";

// $destdir = $dirPath;

// $handle = opendir($destdir);
// $c = 0;
// while ($file = readdir($handle)&& $c<3) {
// 	$c++;
// }

// if ($c>2) {
// 	print "Not empty";
// } else {
// 	print "Empty";
// }


 






//phpinfo();

// $cq = 'CQI00000234';
// $qu = 'QUO00000123';

// $cut = substr($qu, 0, 3);
// $cut2 = substr($cq, 0, 3);

// print_r($cut);
// print '<br/>';
// print_r($cut2);
// function encrypt_decrypt($action, $string) {
// 	$output = false;
// 	$key = 'tmg0535';

// 	// initialization vector
// 	$iv = md5(md5($key));

// 	if ($action == 'encrypt' ) {
// 		$output = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, $iv);
// 		$output = base64_encode($output);
// 	} else if ($action == 'decrypt') {
// 		$output = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, $iv);
// 		$output = rtrim($output, "");
// 	}
// 	return trim($output);
// }

// Loader::model('viper');
// $viperModel = new Viper(); 
// $credentials = $viperModel->getUserCred();
// $machineOptions = "<pre>";
// foreach($credentials as $row)
// {
	
	
// 	$machineOptions .= " <b>Login:</b> ".$row['uName'];
// 	$machineOptions .= " <b>Email:</b> ".$row['uEmail'];
// 	$machineOptions .= " <b>Password:</b> ".encrypt_decrypt('decrypt',$row['uPassword'])."<br />";
// }
// $machineOptions .= "</pre>";
// print_r($machineOptions);
// exit;

?>

<style>

/**
 * The following is not related to the plugin
 */
body {
  background: #fbfcfc;
}

.container {
  max-width: 700px;
}

.log:not(:empty) {
  padding: 5px;
  background: #16a085;
  color: #fff;
}
</style>



<br /><br />

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      
    </div>
    <div class="panel-body context">
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
        takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="panel-footer"></div>
  </div>
  <div>Last selected text:</div>
  <div class="log"></div>
</div>

<script>
$(function() {
	  var $context = $(".context");
	  var $log = $(".log");
	  $context.textHighlighter({
	    "onAfterHighlight": function(arr, element) {
	      $log.html(element[0].innerHTML);
	    }
	  });
	});

</script>