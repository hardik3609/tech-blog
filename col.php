<?php include"header.php";?>
<div class="panel-group" id="accordion">
	<div class="comments">
		<div class="clearfix">
			<img class="avatar img-circle" src="images/avatars/user-03.jpg" alt="">
			<div class="post-comments">
				<p class="meta">Dec 19, 2014 <a href="#">JohnDoe</a> says : <i class="pull-right"><span data-toggle="collapse" data-parent="#accordion" data-target="#collapse1"><small>Reply</small></span></i></p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a sapien odio, sit amet
				</p>
			</div>
			<!--write reply -->
			<div class="container-fluid">
				<div class="write-reply-comment">
					<form id="collapse1" class="panel-collapse collapse in">
						<div class="form-group">
							<div class="text-center">
								<div>
									<input type="text" class="form-control" placeholder="Write your Reply" />
									<button type="submit" class=""> <i class="fa fa-paper-plane" aria-hidden="true"> </i></button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--//write reply -->
		</div>
		<div class="clearfix">
			<img class="avatar img-circle" src="images/avatars/user-03.jpg" alt="">
			<div class="post-comments">
				<p class="meta">Dec 19, 2014 <a href="#">JohnDoe</a> says : <i class="pull-right"><span data-toggle="collapse" data-parent="#accordion" data-target="#collapse2"><small>Reply</small></span></i></p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a sapien odio, sit amet
				</p>
			</div>
			<!--write reply -->
			<div class="container-fluid">
				<div class="write-reply-comment">
					<form id="collapse2" class="panel-collapse collapse">
						<div class="form-group">
							<div class="text-center">
								<div>
									<input type="text" class="form-control" placeholder="Write your Reply" />
									<button type="submit" class=""> <i class="fa fa-paper-plane" aria-hidden="true"> </i></button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--//write reply -->
		</div>
	</div>
</div>



<div class="panel-group" id="accordion1">
	<div class="comments">
		<div class="panel-heading">
			<h4 class="panel-title">
				<img class="avatar img-circle" src="images/avatars/user-03.jpg" alt="">
			<div class="post-comments">
				<p class="meta">Dec 19, 2014 <a href="#">JohnDoe</a> says : <i class="pull-right"><span data-toggle="collapse" data-parent="#accordion" data-target="#collapse15"><small>Reply</small></span></i></p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a sapien odio, sit amet
				</p>
			</div>
			</h4>
		</div>
		<div id="collapse15" class="panel-collapse collapse in">
			<div class="panel-body"><!--write reply -->
			<div class="container-fluid">
				<div class="write-reply-comment">
					<form>
						<div class="form-group">
							<div class="text-center">
								<div>
									<input type="text" class="form-control" placeholder="Write your Reply" />
									<button type="submit" class=""> <i class="fa fa-paper-plane" aria-hidden="true"> </i></button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--//write reply --></div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
			  <a data-toggle="collapse" data-parent="#accordion1" href="#collapse9">Collapsible Group 2</a>
			</h4>
		</div>
		<div id="collapse9" class="panel-collapse collapse">
			<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
			  <a data-toggle="collapse" data-parent="#accordion1" href="#collapse10">Collapsible Group 3</a>
			</h4>
		</div>
		<div id="collapse10" class="panel-collapse collapse">
			<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		</div>
	</div>
</div>
<?php include"footer.php";?>