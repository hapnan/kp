<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
			rel="stylesheet">
			<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <title>Hello, world!</title>
  </head>
  <body>
		<section class="container-fluid">
			<div class="row mt-4">
				<div class="col-md-12 mx-">
					<form class="form-inline d-flex justify-content-center mt-3">
						<input class="form-control  w-50 mr-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<button type="button" class="btn btn-primary btn-tambah" data-toggle="modal" data-target="#modal_tambah">Tambah User</button>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-12">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama</th>
								<th scope="col">NIM/NIP</th>
								<th scope="col">Ket</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody id="target">
							
						</tbody>
					</table>
				</div>
			</div>
		</section>
		<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="modal_tambahLabel" aria-hidden="true">
			<div class="modal-dialog" >
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modal_tambahLabel">Tambah User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div id="formlaod">
							<div class="row">
								<div class="col-md-12">
									<form class="form">	
										<h1 class="text-center">Register</h1>	
										<div class="form-group">
											<label for="username" class="label-username"><span class="content-username">Username</span></label>
											<input type="text" class="form-control" name="username" id="username" required>
											<small class="error_form text-danger" id="username_error_message"></small>
										</div>
										<div class="form-group">
											<label for="name" class="label-name"><span class="content-name">Nama</span></label>
											<input type="text" class="form-control" name="name" id="name" required>
											<small class="error_form text-danger" id="name_error_message"></small>
										</div>

										<div class="form-group">
											<label for="alias" class="label-akias"><span class="content-alias">NIM/NIDN</span></label>
											<input type="text" class="form-control" name="alias" id="alias" required>
											<small class="error_form text-danger" id="alias_error_message"></small>
										</div>
														
										<div class="form-group">
											<label for="email" class="label-email"><span class="content-email">Email</span></label>
											<input type="email" class="form-control" name="email" id="email" required>
											<small class="error_form text-danger" id="email_error_message"></small>
										</div>
																
										<div class="form-group">
											<label for="password" class="label-password"><span class="content-password">Password</span></label>
											<input type="password" class="form-control" name="new-password" id="new-password" required>
											<small class="error_form text-danger" id="password_error_message"></small>
										</div>
															
										<div class="form-group">
											<label for="passwordv" class="label-passwordv"><span class="content-passwordv">Password Confirmation</span></label>
											<input type="password" class="form-control" name="new-passwordv" id="new-passwordv" required>
											<small class="error_form text-danger" id="passwordv_error_message"></small>
										</div> 
										<div class="form-group">
											<label for="role">Role</label>
											<select class="form-control" id="role">
											<option value="1">Admin</option>
											<option value="3">User</option>
											<option value="2">Editor</option>
											</select>
										</div> 
									</form>									
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary tambah" id="tambah">Tambah</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal edit-->
		<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="modal_editLabel" aria-hidden="true">
			<div class="modal-dialog" >
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modal_editLabel">Edit User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div id="formlaod">
							<div class="row">
								<div class="col-md-12">
									<form class="form">	
										<h1 class="text-center">Edit User</h1>	
										<div class="form-group">
											<label for="username" class="label-username"><span class="content-username">Username</span></label>
											<input type="text" class="form-control" name="username-edit" id="username-edit" required>
											<small class="error_form text-danger" id="username_error_message"></small>
										</div>
										<div class="form-group">
											<label for="name" class="label-name"><span class="content-name">Nama</span></label>
											<input type="text" class="form-control" name="name-edit" id="name-edit" required>
											<small class="error_form text-danger" id="name_error_message"></small>
										</div>

										<div class="form-group">
											<label for="alias" class="label-akias"><span class="content-alias">NIM/NIDN</span></label>
											<input type="text" class="form-control" name="alias-edit" id="alias-edit" required>
											<small class="error_form text-danger" id="alias_error_message"></small>
										</div>
														
										<div class="form-group">
											<label for="email" class="label-email"><span class="content-email">Email</span></label>
											<input type="email" class="form-control" name="email-edit" id="email-edit" required>
											<small class="error_form text-danger" id="email_error_message"></small>
										</div>
																
										<div class="form-group">
											<label for="password" class="label-password"><span class="content-password">Password</span></label>
											<input type="password" class="form-control" name="password-edit" id="password-edit" required>
											<small class="error_form text-danger" id="password_error_message"></small>
										</div>
										<div class="form-group select-role">
											<label for="role">Role</label>
											<select class="form-control" id="role">
												<option value="1">Admin</option>
												<option value="3">User</option>
												<option value="2">Editor</option>
											</select>
										</div> 
									</form>									
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary tambah" id="tambah">Tambah</button>
					</div>
				</div>
			</div>
		</div>
    <!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?= base_url('assets/js/jquery-3.4.1.js')?>"></script>
		<script src="<?= base_url('assets/js/style.js')?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script type="text/javascript">
		$(document).ready(function(){
				ajaxsearch();
				
				function ajaxsearch() {
					$.ajax({
						type:'POST',
						url:'<?= base_url().'/userlist/ambildata';?>',
						dataType: 'json',
						success: function(data){
							var baris='';
							for (var i = 0; i < data.length; i++) {
								var sum = i+1;
								baris +='<tr>'+
																'<td>'+sum+'</td>'+
																'<td>'+data[i].nama_user+'</td>'+
																'<td>'+data[i].alias+'</td>'+
																'<td>'+data[i].level+'</td>'+
																'<td class="action">'+'<button type:"button" class="edit btn btn-link" id="item-edit" value="'+data[i].id+'">'+
																			'<i class="material-icons edit" >'+"edit"+'</i>'+
																			'</button>'+
																			'<a class="hapus" velue="'+data[i].id+'" type:"button">'+
																			'<i class="material-icons delete" >'+"delete"+'</i>'+
																			'</a>'+
																'</td>'+
																
												'</tr>';
								
							}
							$('#target').html(baris);
						}
					})
				};

				$('#tambah').click(function() {
					var username = $("input[name='username']").val();
					var name = $("input[name='name']").val();
					var alias = $("input[name='alias']").val();
					var email = $("input[name='email']").val();
					var password = $("input[name='password']").val();
					var select = $('#role option:selected').val()

					$.ajax({
						type : 'post',
						url : '<?= base_url('register')?>',
						data : {username: username, nama: name, alias: alias, email: email, password: password, select: select},
						success: function(data){
							alert("User berhasil di Tambahkan");
							$('#modal_tambah').modal('hide');
							ajaxsearch();
						},
						error: function(){
							alert("User gagal di tambahkan");
						}
					
					})
				})

				$('#target').on('click', "#item-edit",function(){
					var id = $('#item-edit').val();
					$.ajax({
						type : 'POST',
						url : '<?= base_url(('userlist/getdatabyid'))?>',
						data : {id:id},
						error: function(data){
							alert("Maaf atas tidak kenyaman anda,Mohon hubungi andmin untuk melakukan perbaikan")
						},
						success: function(data){
							$('#modal_edit').modal('show');					
							$('#username-edit').val(data.username);
							$('#nama-edit').val(data.nama_user);
							$('#alias-edit').val(data.alias);
							$('#email-edit').val(data.email);
							$('#role').val(data.level);
						},
					});	
				});
			})
		</script>
  </body>
</html>

