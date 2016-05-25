<?php require_once("header.php");?>
<div class="row">
    <div class="col-lg-12 text-center">
        <h1>PHP File Inclusion Vulnerability Example 1:</h1>
        <?php
        	if(GET["file"]){
        		include(GET["file"]);
        	}

        ?>
    </div>
</div>
<!-- /.row -->
<?php require_once("footer.php");?>