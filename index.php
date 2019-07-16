<?php
session_start();
if(!$_SESSION['username']){
		header("location:login.php?login&next=index");
}
?>
<!-- header file for index.php file -->
<?php require ('includes/index.inc.nav.php'); ?>
<!-- //modal -->
<div style="position:absolute;" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Write your post here</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form action="includes/post_engine.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<textarea class="form-control" id="message-text" name="question" placeholder="What is on your mind?"></textarea>
					</div>

						 <input type="submit" class="btn btn-success" value="Post" name="submit">
				</form>
			</div>
		</div>
	</div>
</div>
		<div class="container body_section mt-5" style="margin-top:40px;">
				<div class="row">
						<div class="col-md-2 profile_section">
							<div class="profile" style=" border: 1px solid rgb(238, 235, 235);padding:10px;margin-top:28px;">

								 <div class="media">
								<img src = "img/kisan.png" alt="profile_picture" class="profile_picture" style="width:32px;height:32px;">
								<div class="media-body">
								<a class="mt-0 ml-2" style="font-size:14px; color:#000;" href="profile.php">Kisan Tamang
								<small id="emailHelp" class="form-text text-muted ml-2">Developer</small></a>
								</div>
								</div>
								<p><u>Your tags</u></p>
								<p>#JavaScript</p>
								<p>#PHP</p>
								<p>#Python</p>
								</div>
						</div>

						<div class="col-md-8 post_wrapper">
						<!-- post -->
<?php 
require ('./includes/database_detail.php');
$sql = 'SELECT * FROM post_table';
$stmt = $conn->query($sql);
if($stmt->num_rows>0){
		while($row = $stmt->fetch_assoc()){
				echo '
								<div class="post">
								<div class="media">
								<img src = "img/kisan.png" alt="profile_picture" class="profile_picture">
								<div class="media-body">
								<h6 class="mt-3 ml-2">Kisan Tamang</h6>
								<small>July 10</small>

								</div>
								</div>

									<h5 class="mt-3">'.$row["post"].'</h5>
									<div class="mt-3" style="color:green;">
									<span><i class="fa fa-heart" style="color:#000;font-size:18px;"></i> 100</span>
									<span><i class="fa fa-comment" style="color:#000;font-size:18px;"></i> 200</span>
									<span><i class="fa fa-share-alt" style="color:#000;font-size:18px;"></i> 134</span>

									<a href="includes/delete.inc.php?id='. $row['pid'] .'" class="btn btn-danger mr-auto">Delete</a>

								 <button  type="button" class="btn btn-secondary  my-sm-0 " data-toggle="modal" data-target="#exampleModal'.$row['pid'].'" data-whatever="@mdo" name="write" style="height:35px;margin-left:20px;" id=> Edit</button>
									</div>
								</div>


								';

				echo '
				<!-- +++++++++++ Update modal ++++++++++   -->

						<div style="position:absolute;" class="modal fade" id="exampleModal'.$row["pid"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Update your post?</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body">
						<form action="includes/update.inc.php?id='.$row["pid"].'" method="post" enctype="multipart/form-data">
						<div class="form-group">
						<textarea class="form-control" id="message-text" name="question" value="">'.$row['post'].'</textarea>
						</div>
						<input type="submit" class="btn btn-success" value="Update" name="update">
						</form>
						</div>
						</div>
						</div>
						</div>
';
		}
}
?>
				 </div>

						<div class="col-md-2" style="margin-top:20px;">
								<h5>#Tags</h5>
							 <ul class="list-group list-group-flush">
<?php 
require ('./includes/database_detail.php');
$sql = "SELECT * FROM tags_table";
$statement = $conn->query($sql);
if($statement->num_rows>0){
		while($row = $statement->fetch_assoc()){
				echo  '<li class="list-group-item">' .$row['tags']. '</li>';
		}
}
?>
						</ul>
						 <form action="includes/add_tag.php" method="post">
						 <input type="text" class="form-control mr-sm-2" name="tags" placeholder="tag">
								<input type="submit" class="btn btn-success my-2 my-sm-0" name="tag-submit" value="Add+" style="height:35px;width:55px;">
								</form>
						</div>
				</div>
		</div>


<?php require ('includes/footer.php'); ?>


