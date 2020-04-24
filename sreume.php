<?php
$n=$_POST['name'];
$DOB=$_POST['DOB'];
$g=$_POST['g'];
$Father=$_POST['Father'];
$Mother=$_POST['Mother'];
$Address=$_POST['Address'];
$pc=$_POST['pc'];
$EMail=$_POST['E-MAIL'];
$Contact=$_POST['CONTACT'];
$m=$_POST['m'];
$l=$_POST['l'];
$pe=$_POST['pe'];
$h=$_POST['h'];
$i=$_POST['i'];
$d=$_POST['d'];
$df=$_POST['df'];
?>
<!DOCTYPE html>
<html>
<head>
<title> Resume </title>
  <body><h1><u><center>Resume</center></u> </h1>
  <br><br>  
  <font size="5"> <?php echo $n; ?></font>
   <div align="left"><address><?php echo $Address; ?>
  <br>Pin - <?php echo $pc; ?>
  <br>Contact No. - <?php echo $Contact; ?>
  <br>Email - <?php echo $EMail; ?>
 </address>
</div><hr />
  <br><b>&emsp;Objective:-</b>
  <br><br>&emsp;&ensp;To pursue a challenging career and to work with full determination in an environment which challenges <br>&emsp;&ensp;my ability, enhance my skills and help mutual growth.
  <br><br><b>&emsp;Qualification:-</b>
  <ul>
    <li>High school from <?php echo $h; ?>.</li>
    <li>Intermediate from <?php echo $i; ?>.</li>
    <li>Degree/Diploma in <?php echo $d; ?> from <?php echo $df; ?>.</li>
  </ul>
  <b>&emsp;Additional Qualification:-</b>
  <ul>
    <li>Training of Amazon Web Service with Wordpress hosting.</li>
	<li>Certificate of Basic Computer knowledge.</li>
  </ul>
  <b>&emsp;Professional Experience:-</b>
  <ul>
      <li><?php echo $pe; ?></li></ul>
  <b>&emsp;Hobbies:-</b>
   <ul>
    <li>Reading Books</li>
	<li>Web Designing & Ecploring new things</li>
  </ul>
  <b>&emsp;Personal profile:-</b>
  <br><br>&emsp;&emsp;Father's Name &emsp;&emsp;&ensp;:&emsp;&emsp;&nbsp;&nbsp;  <?php echo $Father; ?>
  <br>&emsp;&emsp;Date of birth   &emsp;&emsp;&emsp;  :&emsp;&emsp;&nbsp;  <?php echo $DOB; ?>
  <br>&emsp;&emsp;Gender          &emsp;&emsp;&emsp;&emsp;&ensp; &ensp; : &emsp;&emsp; <?php echo $g; ?>
  <br>&emsp;&emsp;Maritial Status &emsp;&emsp;&nbsp;  : &emsp;&emsp;&nbsp;<?php echo $m; ?>
  <br>&emsp;&emsp;Language Known  &emsp; : &emsp;&emsp; <?php echo $l; ?>
  <br><br><b>&emsp;Declaration:-</b>
  <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; I hereby declare that the information given above is true and to the best of my knowledge <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; and belief.
<br><br><br><br>
 &emsp;Date : _________ &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>(<?php echo $n; ?>)</b>                                  
 <br><br>
 &emsp;Place : _________
 </body>	
  </html>
