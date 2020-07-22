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
				<div class="active mt-3">
					<span class="label pl-2" style="font-size: 11px; color: rgb(185, 185, 185);">UTILITIES</span>
					<a class="listuser" href="javascript:;"><i class="fas fa-users"></i> List Users</a>
				</div>
				<hr>
				<div class="interface">
					<span class="pl-2" style="font-size: 11px; color: rgb(185, 185, 185);">INTERFACE</span>
						<a data-toggle="collapse" href="#menupilih" role="button" aria-expanded="true" aria-controls="menupilih" class="menubutton"><i class="far fa-keyboard"></i> Input</a>
						<div class="collapse card" id="menupilih">
							<div class="card-body ">
								<a class="text-dark jurnal" href="javascript:;">Jurnal</a>
							
								<a class="text-dark proceding" href="javascript:;">Procceding</a>
							</div>	
						</div>
					<div class="data-input">
						<a href="javascript:;"><i class="fas fa-table data-input"></i> Data Input</a>
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
		</nav>

		
		<div class="row">
			<div class="col-md-12">
				<div class="contentload" id="content-load">

				</div>
			</div>
		</div>
	</div>
	
</div>


