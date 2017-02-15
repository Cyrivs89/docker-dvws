<!DOCTYPE html>
<html lang="en">


	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Command Injection</title>

    <?php require("".dirname(__FILE__)."../../../bootstrap.php") ?>

</head>
   <body>

		 <!-- Sidebar -->
	 <div id="wrapper">

		 <div class="col-md-3">
     <?php require("".dirname(__FILE__)."../../../sidebar.php") ?>
</div>

        <!-- /#sidebar-wrapper -->

      <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Command Injection</h1>
                        <p>Command injection is an attack in which the goal is execution of arbitrary commands on the host operating system via a vulnerable application. Command injection attacks are possible when an application passes unsafe user supplied data (forms, cookies, HTTP headers etc.) to a system shell. In this attack, the attacker-supplied operating system commands are usually executed with the privileges of the vulnerable application. </p>

                              <h2>More Information</h2>
	<ul>
		<li><a href="http://hiderefer.com/?https://www.owasp.org/index.php/Command_Injection" target="_blank">https://www.owasp.org/index.php/Command_Injection</a></li>
		<li><a href="http://hiderefer.com/?https://www.owasp.org/index.php/Testing_for_Command_Injection_%28OTG-INPVAL-013%29" target="_blank">https://www.owasp.org/index.php/Testing_for_Command_Injection_%28OTG-INPVAL-013%29</a></li>
		</ul>
                        <p><br>This webpage provides information on how long the system has been running,  how  many  users  are
       currently  logged  on,  and the system load averages for the past 1, 5,and 15 minutes.<br></p>

      <form action="<?php $_PHP_SELF ?>" method="POST">
<b>Select the format you want to view the system uptime on</b><br>
  <input type="radio" name="name" value=" ">Normal format<br>
  <input type="radio" name="name" value="-s">MM:HH:SS format<br>
  <input type="radio" name="name" value="-p">Short Format<br>
    <input type="radio" name="name" value="find">Windows Format (Only on Windows Systems)<br>
<br><input type="Submit" /><br>
      </form>

   </body>
   </html>

<?php
require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://127.0.0.1/'.$dir.'/vulnerabilities/cmdi/server.php');

// performs some basic operation

try {
	echo 'This application is using <i>'.$myExample->giveMeSomeData('name').' to execute commands:</i><br />'."\n";
	$myExample->changeYourState('I am using this function from the network');

} catch (Exception $e) {
	echo nl2br($e->getMessage()).'<br />'."\n";
}
	 if (isset( $_POST["name"]))
		{
		echo '<br /><b>The current system uptime is</b><br />'."\n";
		try {
			echo $myExample->getsystemstatus($_POST["name"]);
} 			catch (Exception $e) {
			echo nl2br($e->getMessage());
		}
}


?>
