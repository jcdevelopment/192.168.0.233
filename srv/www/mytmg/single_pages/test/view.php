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