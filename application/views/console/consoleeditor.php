<div class="wrapper">

<!-- Sidebar -->
	<nav id=" accordionSidebar" class="sidebar accordion">
			<div class="sidebar-header">
				<div class="user-img">
					<img src="<?= base_url('assets/img/profile.png')?>" alt="" class="profil rounded-circle">
				</div>
				<div class="user-info">
					<span class="user-name"><?= $user['nama']; ?></span>
					<small class="user-role"><?= $user['role']?></small>
				</div>
				
			</div>
			<hr>
			<div class="components mt-1">
				<h5>Selamat Datang</h5>
				
				<div class="interface">
					<span class="pl-2" style="font-size: 11px; color: rgb(185, 185, 185);">INTERFACE</span>
					<div class="accordian" id="accordianExaple">
						<a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="dropdown-toggle"><i class="far fa-keyboard"></i> Input</a>
						<div class="collapse card" id="collapseExample">
							<div class="card-body ">
								<a class="text-dark" href="javascript:;">Jurnal</a>
							
								<a class="text-dark" href="javascript:;">Procceding</a>
							</div>	
						</div>
					</div>
					<div class="data-input">
						<a href="#"><i class="fas fa-table"></i> Data Input</a>
					</div>
				</div>
				<hr>
				<div class="logout">
					<a href="<?= base_url('login/logout')?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
				</div>
				<hr>
			</div>
	</nav>

<!-- Page Content -->
<div id="content-wrapper" class="d-flex flex-column">
	<div class="content">
		<nav class="navbar navbar-light bg-light mb-4">
			<a class="navbar-brand">Navbar</a>
			<div class="form-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</div>
		</nav>

		
		<div class="row">
			<div class="col-md-12">
				<div class="contentload" id="content-load">

				</div>
			</div>
		</div>
	</div>
	
</div>


