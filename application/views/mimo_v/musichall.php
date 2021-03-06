<body>
	<!-- Top Nav Bar -->
   <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"><strong>MimO</strong> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
			 <form class="navbar-form navbar-left">
                    <div class="input-group">
						<!--Search Bar -->
                        <input class="form-control searchbar" type="text" placeholder="Search">
                        <div class="input-group-btn">
                            <a class="btn btn-default btn-block" role="button" href="#"> <i class="glyphicon glyphicon-search"></i></a>
                        </div>
                    </div>
                </form>
				<!-- Nav Items -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="#"><i class="material-icons">speaker</i>Music Hall</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="material-icons">equalizer</i>Browse <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#"><i class="material-icons">person</i>Artist </a></li>
                            <li role="presentation"><a href="#"><i class="material-icons">music_note</i>Genre </a></li>
                            <li role="presentation"><a href="#"><i class="material-icons">show_chart</i>Chart </a></li>
                        </ul>
                    </li>
					 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="material-icons">file_upload</i>Release <span class="caret"></span></a>
						 <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#"><i class="material-icons">comments</i> Thoughts</a></li>
                            <li role="presentation"><a href="#"><i class="material-icons">music_note</i> Audio</a></li>
						</ul>
                    <li role="presentation"><a href="#"><i class="material-icons">headset_mic</i>My Studio</a></li>	
					 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="material-icons">settings</i> <span class="caret"></span></a>
						 <ul class="dropdown-menu" role="menu">
                            <li role="presentation">
								<a href="/Mimo/settings">Account Settings</a></li>
                            <li role="presentation"><a href="#">Logout</a></li>
						</ul>
                </ul>
            </div>
        </div>
    </nav>
	<!--This is below Top Navigation Section -->
	
	<!-- Left Nav Section -->
<div class="row">
		<div id="leftnav" class="col-md-3 hidden-xs">
		
			<!-- Left Nav Profile Section -->
			<div class="row">
				<!-- Header -->
					<!-- Sa 'background-image: url('') mo ilagay yung mga header at profile pic -->
				<div style="width: 100%; height: 170px; background-image:url('assets/img/s.jpg'); margin-left: 15px; 
					background-size: cover; padding-top: 10px;">
					<!--DP-->
						<div style="width: 100px; height: 100px; background-image:url('assets/img/sam.jpg'); border-radius: 50%; 
							background-size: cover; margin: 0 auto; border: 2px solid orange"></div>
							
						<div class="col-md-12" style="background: linear-gradient(transparent,rgba(0,0,0,0.7)); 
												background-size: cover">
						<!-- Full name yung sa h4 at username/stagename yung sa h6 -->
						<a style="color: white" class="text-center user"><h4>Samantha Millos</h4></a>
						<a style="color: white" class="text-center user"><h6>nightingale07</h6></a>
						</div>
				</div>
			
			</div>
			
			<!-- End of Left Nav Profile Section -->

				<div class="row">
					<div id="listNav" class="col-md-12">
						<div class="btn-group btn-group-justified">
						<a  href="" class="listnav btn btn-group">
						<i class="material-icons">local_mall</i>
						<p class="">Collection</p>
						</a>
			
						<a  href="" class="listnav btn btn-group">
						<i class="material-icons">library_music</i>
						<p class="">Playlist</p>
						</a>
					
						<a  href="" class="listnav btn btn-group">
						<i class="material-icons">favorite</i>
						<p class="">Favorites</p>
						</a>
		
					</div>
					<hr />
				</div>
			</div>
		</div>
		<!--End of Left Nav Section -->
		
		
	<!-- Content Section -->
	
	<!-- Post Body (Thoughts) -->
	<div class="col-md-6 belowtn col-xs-12">
		<div class="postcont">
		
		<!--Start to place Here the Post/Thought Templates-->
		<?php $this->load->view('templates/post_temp')?>
		<?php $this->load->view('templates/post_temp')?>
		<?php $this->load->view('templates/post_temp')?>
		
		<!--End of Post Section -->	
		</div>
		<!-- End of Contents Divisions-->
	</div>
	
	
<!-- Third Column Div (Beside Contents)-->
	<div class="col-md-3">
	<br />
	<br />
	
	</div>
		
</div><!--End of the Whole Row (LeftNav, Contents, Third Column -->
</body>