<?php
	include("bootstrap_cdn.php");
?>

<head>
	  	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
	  	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	  	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<div style="background: #7F7FD5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
<div class="container" style="background: #7F7FD5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
	<div class="row"style="background: #7F7FD5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
	<div class="panel panel-default">
			    <div class="panel-heading"style="background: #7F7FD5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">Update Post</div>
			    <div class="panel-body"style="background: #7F7FD5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">

			     <!-- FORM STARTS HERE -->
			      <form role="form" method="POST" action=<?php echo "update.php?id=".$id ; ?>>
					  <div class="form-group">
					    <label class="control-label">Title</label>
					    <input type="" class="form-control" name="postTitle" value=<?php  echo $title; ?>>
					  </div>

					  <div class="form-group">
  						<label for="Description">Description : </label>
  						<textarea class="form-control" rows="8" id="content" name="postDesc">
  							<?php  echo $desc; ?>
  						</textarea>
  						<script type="text/javascript">
        					CKEDITOR.replace( 'content' );
      					</script>
					  </div>

					  <div class="form-group">
					    <label class="control-label">Tag</label>
					    <input type="text" class="form-control" name="postTag" value=<?php  echo $tags; ?> >
					  </div>

				  	   <button type="submit" class="btn btn-default" name="submit">
				  	   	Update
				  	   </button>
				  </form>

				<!-- FORM ENDS HERE -->

			  </div>
	</div>
	</div>
</div>
</div>
