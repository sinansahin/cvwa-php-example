<?php require_once("header.php");?>
<div class="row">
    <div class="col-lg-12 text-center">
        <h1>PHP File Inclusion Vulnerability Secure Code:</h1>
        
		<?php 
			$allowed = array(
			    'somefile.php',
			    'someotherfile.php'
			);

			if (in_array(basename($_GET['file']), $allowed)) {
			    include('./includes/' . basename($_GET['file']));
			}
		?>
		</div>
</div>
<!-- /.row -->
        
<?php require_once("footer.php");?>
