<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  
/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
	Step 2: Make a forloop  that displays 10 numbers
	Step 3 : Make a switch Statement that test againts one condition with 5 cases
 */
if (true == false) {} elseif (1 == 0) {} else echo "<p>I love PHP</p>";

for ($i = 0; $i < 10; $i++) {
	echo "<p>$i</p>";
}

switch (true) {
	case 1 == 1:
		echo "true";
		break;
	case 1 == 0:
		echo "true";
		break;
	case 0 == 1:
		echo "true";
		break;
	case 0 == 0:
		echo "true";
		break;
	default:
		echo "true";
		break;	
}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>