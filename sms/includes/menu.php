<nav class="navbar navbar-default" style="margin-top: 20px;">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">SDJIC</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Modules <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="students.php">Students</a></li>
						<li><a href="#">Faculties</a></li>
						<li><a href="#">Staff</a></li>
						<li role="separator" class="divider"></li>
						<li class="dropdown-header">Exams</li>
						<li><a href="#">Create New Exam</a></li>
						<li><a href="#">Results</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['userid'])) : ?>
					<li><a href="profile.php"><?php echo $_SESSION['username']; ?></a></li>
					<li><a href="logout.php">Logout</a></li>
				<?php else : ?>
					<li><a href="login.php">Login</a></li>
				<?php endif; ?>
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
	<!--/.container-fluid -->
</nav>