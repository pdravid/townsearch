<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <?php include('head.php'); 
	
	?>
	<head>
	<script src="ckeditor/ckeditor.js"></script>
	<link href="sample.css" rel="stylesheet">
	<script>
CKEDITOR.on( 'instanceReady', function( ev ) {
	document.getElementById( 'eMessage' ).innerHTML = 'Instance <code>' + ev.editor.name + '<\/code> loaded.';
	document.getElementById( 'eButtons' ).style.display = 'block';
});

function InsertHTML() {
	var editor = CKEDITOR.instances.editor1;
	var value = document.getElementById( 'htmlArea' ).value;
	if ( editor.mode == 'wysiwyg' )
	{
		editor.insertHtml( value );
	}
	else
		alert( 'You must be in WYSIWYG mode!' );
}

function InsertText() {
	var editor = CKEDITOR.instances.editor1;
	var value = document.getElementById( 'txtArea' ).value;
	if ( editor.mode == 'wysiwyg' )
	{
		editor.insertText( value );
	}
	else
		alert( 'You must be in WYSIWYG mode!' );
}

function SetContents() {
	var editor = CKEDITOR.instances.editor1;
	var value = document.getElementById( 'htmlArea' ).value;
	editor.setData( value );
}

function GetContents() {
	var editor = CKEDITOR.instances.editor1;
	alert( editor.getData() );
}

function ExecuteCommand( commandName ) {
	var editor = CKEDITOR.instances.editor1;
	if ( editor.mode == 'wysiwyg' )
	{
		editor.execCommand( commandName );
	}
	else
		alert( 'You must be in WYSIWYG mode!' );
}

function CheckDirty() {
	var editor = CKEDITOR.instances.editor1;
	alert( editor.checkDirty() );
}

function ResetDirty() {
	var editor = CKEDITOR.instances.editor1;
	editor.resetDirty();
	alert( 'The "IsDirty" status has been reset' );
}

function Focus() {
	CKEDITOR.instances.editor1.focus();
}

function onFocus() {
	document.getElementById( 'eMessage' ).innerHTML = '<b>' + this.name + ' is focused </b>';
}

function onBlur() {
	document.getElementById( 'eMessage' ).innerHTML = this.name + ' lost focus';
}
	</script>

	
	
	</head>
	

<?php include('functions.php'); ?>


  <body>

  <section id="container" >
      <!--header start-->
     <?php include('header.php'); ?>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php include('sidebar.php'); ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	  <?php

if(isset($_POST['submit'])){
	
	$serv=$_POST['editor1'];
	//move_uploaded_file($image_tmp,"images/$shoplogo");
	$insert_query = "update rest set serv='$serv' where mobno='$user_mobno'";
	//mysqli_query($con,"insert into users(id,mobno,username,password,user_level,type) values('','$mobno','$username','$password','2','a')");
	if(mysqli_query($con,$insert_query)){
		echo "Success!";
	}

	}
	?>
	  <?php
					$ad_query=mysqli_query($con,"select serv from rest where mobno='$user_mobno'");
					$run_ad=mysqli_fetch_array($ad_query);
					
				?>
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row mt">
          <div class="col-lg-11" style="background:#fff;box-shadow:5px 5px 5px 2px;gray;border-radius:5px;margin-left:10px;"></br>
<form action="services.php" method="post">
		<textarea  id="editor1" name="editor1" rows="20" style="height:800px;"><?php echo $run_ad['serv']; ?></textarea><br>
		<button class="btn btn-theme btn-block"  type="submit" name="submit" style="width:200px;" ><i class="fa fa-lock" ></i> Update your services</button>
		</form></br></br>
				
		<script>
			// Replace the <textarea id="editor1"> with an CKEditor instance.
			CKEDITOR.replace( 'editor1');
			/*	on: {
					focus: onFocus,
					blur: onBlur,

					// Check for availability of corresponding plugins.
					pluginsLoaded: function( evt ) {
						var doc = CKEDITOR.document, ed = evt.editor;
						if ( !ed.getCommand( 'bold' ) )
							doc.getById( 'exec-bold' ).hide();
						if ( !ed.getCommand( 'link' ) )
							doc.getById( 'exec-link' ).hide();
					}
				}*/
	
		</script>
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
