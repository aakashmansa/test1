<?php include 'header.php'; ?>
<style type="text/css">
	video{
		background: #000;
		height: 100%;
		width: 100%;
	}
	.detailBox {
		width:320px;
		border:1px solid #bbb;
		margin:50px;
	}
	.titleBox {
		background-color:#fdfdfd;
		padding:10px;
	}
	.titleBox label{
		color:#444;
		margin:0;
		display:inline-block;
	}

	.commentBox {
		padding:10px;
		border-top:1px dotted #bbb;
	}
	.commentBox .form-group:first-child, .actionBox .form-group:first-child {
		width:80%;
	}
	.commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {
		width:18%;
	}
	.actionBox .form-group * {
		width:100%;
	}
	.taskDescription {
		margin-top:10px 0;
	}
	.commentList {
		padding:0;
		list-style:none;
		max-height:200px;
		overflow:auto;
	}
	.commentList li {
		margin:0;
		margin-top:10px;
	}
	.commentList li > div {
		display:table-cell;
	}
	.commenterImage {
		width:30px;
		margin-right:5px;
		height:100%;
		float:left;
	}
	.commenterImage img {
		width:100%;
		border-radius:50%;
	}
	.commentText p {
		margin:0;
	}
	.sub-text {
		color:#aaa;
		font-family:verdana;
		font-size:11px;
	}
	.actionBox {
		border-top:1px dotted #bbb;
		padding:10px;
	}
	.like, .dislike{
		cursor: pointer;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-offset-1 col-md-10" style="margin-top:20px">
			<video></video>
		</div>
	</div>
	<div class="row">
		<div class="col-md-offset-1 col-md-10" style="margin-top:20px">
			<h2>Demo sports show</h2>
			<div class="row" style="position:relative">
				<div class="col-md-2">
					<img src="images/analyst.jpg" class="img-responsive" />
				</div>
				<div class="col-md-8">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ipsum dolor sit amet, consectetur adipiscing elit
						ipsum dolor sit amet, consectetur adipiscing elit ipsum dolor sit amet, consectetur adipiscing elit
						ipsum dolor sit amet, consectetur adipiscing elit ipsum dolor sit amet, consectetur adipiscing elit
					</p>
				</div>
				<div style="position:absolute;bottom:0;right:0">
					<a class="like">
						<i class="glyphicon glyphicon-thumbs-up"></i>  Like
					</a>
					<a class="dislike">
						<i class="glyphicon glyphicon-thumbs-down"></i> Dislike 
					</a>
				</div>
			</div>
			<h3>Comments</h3>
			<div>
				<div class="actionBox">
					<ul class="commentList">
						<li>
							<div class="commenterImage">
								<img src="http://lorempixel.com/50/50/people/6" />
							</div>
							<div class="commentText">
								<p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2015</span>

							</div>
						</li>
						<li>
							<div class="commenterImage">
								<img src="http://lorempixel.com/50/50/people/7" />
							</div>
							<div class="commentText">
								<p class="">Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span class="date sub-text">on March 5th, 2015</span>

							</div>
						</li>
						<li>
							<div class="commenterImage">
								<img src="http://lorempixel.com/50/50/people/9" />
							</div>
							<div class="commentText">
								<p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2015</span>

							</div>
						</li>
					</ul>
					<form class="form-inline" role="form">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Your comments" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include 'footer.php' ?>