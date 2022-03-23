<?php
	include_once("bootstrap_cdn.php");
	
?>

<style>
	.resp-sharing-button__link,
.resp-sharing-button__icon {
  display: inline-block
}

.resp-sharing-button__link {
  text-decoration: none;
  color: #fff;
  margin: 0.03em
}

.resp-sharing-button {
  border-radius: 5px;
  transition: 25ms ease-out;
  padding: 0.2em 0.3em;
  font-family: Helvetica Neue,Helvetica,Arial,sans-serif
}

.resp-sharing-button__icon svg {
  width: 0.3em;
  height:0.3em;
  margin-right: 0.3em;
  vertical-align: top
}

.resp-sharing-button--small svg {
  margin: 0;
  vertical-align: middle
}

/* Non solid icons get a stroke */
.resp-sharing-button__icon {
  stroke: #fff;
  fill: none
}

/* Solid icons get a fill */
.resp-sharing-button__icon--solid,
.resp-sharing-button__icon--solidcircle {
  fill: #fff;
  stroke: none
}

.resp-sharing-button--twitter {
  background-color: #55acee
}

.resp-sharing-button--twitter:hover {
  background-color: #2795e9
}

.resp-sharing-button--pinterest {
  background-color: #bd081c
}

.resp-sharing-button--pinterest:hover {
  background-color: #8c0615
}

.resp-sharing-button--facebook {
  background-color: #3b5998
}

.resp-sharing-button--facebook:hover {
  background-color: #2d4373
}

.resp-sharing-button--tumblr {
  background-color: #35465C
}

.resp-sharing-button--tumblr:hover {
  background-color: #222d3c
}

.resp-sharing-button--reddit {
  background-color: #5f99cf
}

.resp-sharing-button--reddit:hover {
  background-color: #3a80c1
}

.resp-sharing-button--google {
  background-color: #dd4b39
}

.resp-sharing-button--google:hover {
  background-color: #c23321
}

.resp-sharing-button--linkedin {
  background-color: #0077b5
}

.resp-sharing-button--linkedin:hover {
  background-color: #046293
}

.resp-sharing-button--email {
  background-color: #777
}

.resp-sharing-button--email:hover {
  background-color: #5e5e5e
}

.resp-sharing-button--xing {
  background-color: #1a7576
}

.resp-sharing-button--xing:hover {
  background-color: #114c4c
}

.resp-sharing-button--whatsapp {
  background-color: #25D366
}

.resp-sharing-button--whatsapp:hover {
  background-color: #1da851
}

.resp-sharing-button--hackernews {
background-color: #FF6600
}
.resp-sharing-button--hackernews:hover, .resp-sharing-button--hackernews:focus {   background-color: #FB6200 }

.resp-sharing-button--vk {
  background-color: #507299
}

.resp-sharing-button--vk:hover {
  background-color: #43648c
}

.resp-sharing-button--facebook {
  background-color: #3b5998;
  border-color: #3b5998;
}

.resp-sharing-button--facebook:hover,
.resp-sharing-button--facebook:active {
  background-color: #2d4373;
  border-color: #2d4373;
}

.resp-sharing-button--twitter {
  background-color: #55acee;
  border-color: #55acee;
}

.resp-sharing-button--twitter:hover,
.resp-sharing-button--twitter:active {
  background-color: #2795e9;
  border-color: #2795e9;
}

.resp-sharing-button--email {
  background-color: #777777;
  border-color: #777777;
}

.resp-sharing-button--email:hover,
.resp-sharing-button--email:active {
  background-color: #5e5e5e;
  border-color: #5e5e5e;
}

.resp-sharing-button--pinterest {
  background-color: #bd081c;
  border-color: #bd081c;
}

.resp-sharing-button--pinterest:hover,
.resp-sharing-button--pinterest:active {
  background-color: #8c0615;
  border-color: #8c0615;
}

.resp-sharing-button--linkedin {
  background-color: #0077b5;
  border-color: #0077b5;
}

.resp-sharing-button--linkedin:hover,
.resp-sharing-button--linkedin:active {
  background-color: #046293;
  border-color: #046293;
}

.resp-sharing-button--whatsapp {
  background-color: #25D366;
  border-color: #25D366;
}

.resp-sharing-button--whatsapp:hover,
.resp-sharing-button--whatsapp:active {
  background-color: #1DA851;
  border-color: #1DA851;
}

.resp-sharing-button--telegram {
  background-color: #54A9EB;
}

.resp-sharing-button--telegram:hover {
  background-color: #4B97D1;}

</style>

<!-- POSTS -->
<div  style="background: #F0F2F0;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #000C40, #F0F2F0);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #000C40, #F0F2F0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
<div class="container" >
		<div class="row">
			<div class="col-md-9 col-md-offset-1">

			<div class="panel panel-default">
				<!-- TITLE -->
		  		<div class="panel-heading" style="background: #7F7FD5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
		    		<h3 class="panel-title">
		    			<a href=<?php echo "post.php?id="; echo $id; ?> ><?php echo $title; ?></a>
		    		</h3>
		  		</div>

		  		<!-- 	CONTENT -->
		  		<div class="panel-body">
						<?php
							/*
		    			if($shortpost==1) {
									echo truncate($desc , "post.php" , "id" , $id);
							} else {
								echo $desc;
							}*/
							echo $desc;
		    		?>
		  		</div>

		  		<!-- FOOTER-->
		  		<div class="panel-footer" style="background: #7F7FD5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
						<span class="col-sm-2">
				  			<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				  		
										<?php echo $author?>
				  			
					</span>
					
				
				
					<span class="label label-default">
							<span class=" " aria-hidden="true"></span>  <?php include "sharingbuttons.php";?> 
						</span>
						<!-- time -->
		  			<span class="label label-default">
							<span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php echo $time ?>
						</span>
						

			  			<?php
			  				$delete_post_link='../posts/delete_post.php?postid='.$id;
							if(isset($_SESSION['username']) ) {
								if($_SESSION['username']==$author || $_SESSION['usertype']=='admin') {
									echo "
									<span class='pull-right'>
									<a href='update.php?id=$id'  type=\"button\" class=\"btn btn-sm btn-default\">
										<i class=\"glyphicon glyphicon-edit\"></i>
									</a>

									<a href=$delete_post_link type=\"button\" class=\"btn btn-sm btn-default\">
										<i class=\"glyphicon glyphicon-remove\"></i>
									</a>
									</span>
									";
								}
							}
						?>

		  		</div>

			<!-- comments -->
			<?php
					if(isset($_REQUEST['id'])) {
							include("../posts/comments.php");
							if(isset($_SESSION['username']))
									include("../include/commentform.php");
					}
			?>

			</div>
		
			
				<!-- end of panel -->
		</div>

		</div>
	
</div>
				</div>
				<div>
					
				</div>
