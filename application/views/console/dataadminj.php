<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/datatable/datatables.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/data.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container-fluid mt-3 mx-4">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="jurnaltab" data-toggle="tab" href="#home" role="tab" aria-controls="jurnal" aria-selected="true">jurnal</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="procedingtab" data-toggle="tab" href="#proceding" role="tab" aria-controls="proceding" aria-selected="false">proceding</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active mt-2" id="home" role="tabpanel" aria-labelledby="jurnaltab">
        <table class="table" id="datatablej">
            <thead class="thead-dark text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Jurnal</th>
                    <th scope="col">Judul Publikasi</th>
                    <th scope="col">jenis Publikasi</th>
                    <th scope="col">Tahun Publikasi</th>
                    <th scope="col">ISSN Jurnal</th>
                    <th scope="col">url Jurnal</th>
                    <th scope="col">Details</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
              
            </tbody>
        </table>
      </div>
      <div class="tab-pane fade mt-2" id="proceding" role="tabpanel" aria-labelledby="procedingtab">
      <table class="table ">
        <thead class="thead-dark text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Makalah</th>
                <th scope="col">Nama Forum</th>
                <th scope="col">Tingkat Forum</th>
                <th scope="col">Tahun Pelaksanaan</th>
                <th scope="col">Institusi Penyelenggara</th>
                <th scope="col">Url Proceding</th>
                <th scope="col">Details</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Makalah</th>
                <th scope="col">Nama Forum</th>
                <th scope="col">Tingkat Forum</th>
                <th scope="col">Tahun Pelaksanaan</th>
                <th scope="col">Institusi Penyelenggara</th>
                <th scope="col">Url Proceding</th>
                <th scope="col">Details</th>
                <th scope="col">action</th>
            </tr>
        </tbody>
  </table>
      </div>
    </div>
  </div>
  

  <div class="modal fade" id="modaleditor" tabindex="-1" role="dialog" aria-labelledby="modaleditorLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modaleditorLabel">Assign to Editor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="editorselect">Silahkan dipilih</label>
            <select class="form-control" id="editorselect">
              
            </select>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary save" id="save" name="save" value="">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalterima" tabindex="-1" role="dialog" aria-labelledby="modalterimaLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalterimaLabel">Konfirmasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <h3>Tekan "YES" untuk lanjut</h3>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
          <button type="button" class="btn btn-primary save" id="terima" name="save" value="">YES</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modaltolak" tabindex="-1" role="dialog" aria-labelledby="modaltolakLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modaltolakLabel">Konfirmasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <h3>Tekan "YES" untuk lanjut</h3>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
          <button type="button" class="btn btn-primary save" id="tolak" name="save" value="">YES</button>
        </div>
      </div>
    </div>
  </div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.js') ?>" ></script>
    <script src="<?php echo base_url('assets/datatable/datatables.js') ?>"" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript">
      
      $(document).ready(function(){
        $('#datatablej').DataTable( {
          "processing": true,
          "serverSide": true,
          "ajax": {
                  "url": "<?= site_url('console/get_ajax')?>",
                  "type": "POST"
                },
                "columnDefs": [
                  { "orderable": false, "targets": 2 },
                  { "orderable": false, "targets": 3 },
                  { "orderable": false, "targets": 5 },
                  { "orderable": false, "targets": 6 },
                  { "orderable": false, "targets": 7 },
                  { "orderable": false, "targets": 8 },
                  { "searchable": false, "targets": 0 },
                  { "searchable": false, "targets": 3 },
                  { "searchable": false, "targets": 4 },
                  { "searchable": false, "targets": 5 },
                  { "searchable": false, "targets": 6 },
                  { "searchable": false, "targets": 7 },
                  { "searchable": false, "targets": 8 },
                  

                ]
        });
				function jurnal() {
					$.ajax({
						type:'GET',
						url:'<?= base_url().'console/datajournal';?>',
            dataType: 'json',
            error:function(data){
              alert('wkwkwkwkwkwk')
            },
						success: function(data){
							var baris='';
							for (var i = 0; i < data.length; i++) {
								var sum = i+1;
								baris +='<tr>'+
																'<td>'+sum+'</td>'+
																'<td>'+data[i].namajurnal+'</td>'+
																'<td>'+data[i].jdl_publikasi+'</td>'+
                                '<td>'+data[i].jns_publikasi+'</td>'+
																'<td>'+data[i].thn+'</td>'+
																'<td>'+data[i].issn+'</td>'+
																'<td>'+'<a class="btn btn-link" href="'+data[i].url+'" target="_blank">'+'link'+'</a>'+'</td>'+
																'<td class="detail">'+'<a href="<?php echo base_url('');?>console/details/'+data[i].id+'" class="btn btn-link details" id="details" target="_blank"  value="'+data[i].id+'">'+
																			  '<i class="material-icons edit" >'+"Details"+'</i>'+
																			'</a>'+'</td>'+
                                
                                '<td>'+'<button class="btn btn-warning editor mx-1" id="editor" value="'+data[i].id+'" status="'+data[i].status+'" data-toggle="modal" data-target="#modaleditor">'+
																			  "Assign to Editors"+'</button>'+
                                        '<button class="btn btn-success editor mx-1" id="terima" value="'+data[i].id+'" status="'+data[i].status+'" data-toggle="modal" data-target="#modalterima">'+
																			  "accept"+'</button>'+
                                        '<button class="btn btn-danger editor mx-1" id="tolak" value="'+data[i].id+'" status="'+data[i].status+'" data-toggle="modal" data-target="#modaltolak">'+
																			  "refuse"+'</button>'+
                                        '</td>'+
												'</tr>';
							}
              $('#target').html(baris);
						}
					})
        };

        $('#editor').attr('disabled', true);
        $('#terima').attr('disabled', true);
        $('#tolak').attr('disabled', true);
        
        var status1 = $('#editor').val("status");
        if(status1 != null){
          $('#editor').attr("disabled", true);
        }else{
          $('#editor').attr("disabled", true)
        }

        var status2 = $('#terima').val("status");
        if(status2 == 1 || status2 == 2 ){
          $('#terima').attr("disabled", true);
        }else{
          $('#terima').attr("disabled", true)
        }

        var status3 = $('#tolak').val("status");
        if(status2 == 1 || status2 == 2 ){
          $('#editor').attr("disabled", true);
        }else{
          $('#editor').attr("disabled", true)
        }
        function proceding() {
					$.ajax({
						type:'GET',
						url:'<?= base_url().'console/dataproceding';?>',
            dataType: 'json',
            error:function(data){
              alert('wkwkwkwkwkwk')
            },
						success: function(data){
							var baris='';
							for (var i = 0; i < data.length; i++) {
								var sum = i+1;
								baris +='<tr>'+
																'<td>'+sum+'</td>'+
																'<td>'+data[i].jdl_makalah+'</td>'+
																'<td>'+data[i].nm_forum+'</td>'+
                                '<td>'+data[i].tgk_forum_ilm+'</td>'+
																'<td>'+data[i].thn_pelaksanaan+'</td>'+
																'<td>'+data[i].ins_penyelenggara+'</td>'+
																'<td>'+'<a class="btn btn-link" href="'+data[i].url_jurnal+'" target="_blank">'+'link'+'</a>'+'</td>'+
																'<td class="detail">'+'<a href="<?php echo base_url('');?>console/details/'+data[i].id+'" class="btn btn-link details" id="details" target="_blank"  value="'+data[i].id+'">'+
																			  '<i class="material-icons edit" >'+"Details"+'</i>'+
																			'</a>'+'</td>'+
                                
                                '<td>'+'<button class="btn btn-warning editor mx-1" id="editor" value="'+data[i].id+'" data-toggle="modal" data-target="#modaleditor">'+
																			  "Assign to Editors"+'</button>'+
                                        '<button class="btn btn-success editor mx-1" id="terima" value="'+data[i].id+'" data-toggle="modal" data-target="#modalterima">'+
																			  "accept"+'</button>'+
                                        '<button class="btn btn-danger editor mx-1" id="tolak" value="'+data[i].id+'" data-toggle="modal" data-target="#modaltolak">'+
																			  "refuse"+'</button>'+
                                        '</td>'+
												'</tr>';
                  if (data[i].status==1 || data[i].status==2){
                    $('#editor').attr('disable', true)
                    $('#terima').attr('disable', true)
                    $('#tolak').attr('disable', true)
                  } else {
                    $('#editor').attr('disable', false)
                    $('#terima').attr('disable', false)
                    $('#tolak').attr('disable', false)
                  }
								
							}
              $('#target-p').html(baris);
						}
					})
        };
        
      })
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        geteditordata()

        function geteditordata() {
					$.ajax({
						type:'GET',
						url:'<?= base_url().'userlist/geteditor';?>',
            dataType: 'json',
            error:function(data){
              alert('wkwkwkwkwkwk')
            },
						success: function(data){
							var baris='';
							for (var i = 0; i < data.length; i++) {
								var sum = i+1;
								baris +='<option id="editoroption" value="'+data[i].id+'">'+data[i].nama_user+'</option>';
								
							}
              $('#editorselect').html(baris);
						}
					})

          var idjurnal = null

          $('#modalterima').on('shown.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            idjurnal = button.val()// Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          })

          $('#modaltolak').on('shown.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            idjurnal = button.val()// Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          })


          $('#terima').click(function(){
            var status = 1
            
            $.ajax({
              type : 'POST',
              url : '<?= base_url().'journal/updatestatus'?>',
              data : {status:status, id:idjurnal},
              success: function(data){
							  alert("Terima kasih");
							  $('#modalterima').modal('hide');
						  },
						  error: function(){
							  alert("Gagal ubah status");
					  	}
            })
          })

          $('#tolak').click(function(){
            var status = 2
            var id = $(this).val()
            $.ajax({
              type : 'POST',
              url : '<?= base_url().'journal/updatestatus'?>',
              data : {status:status, id:idjurnal},
              success: function(data){
							  alert("Terima kasih");
							  $('#modaltolak').modal('hide');
						  },
						  error: function(){
							  alert("Gagal ubah status");
					  	}
            })
          })
        };

        var userid

        $('#modaleditor').on('shown.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            userid = button.val()// Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          })

        $('#save').click(function(){
          
          var select = $('#editorselect option:selected').val()

          
          $.ajax({
            type : 'POST',
            url : '<?= base_url().'journal/updatejournal'?>',
            data : {id:select, jurnalid:userid},
            success: function(data){
							alert("User berhasil di update");
							$('#modaleditor').modal('hide');
						},
						error: function(){
							alert("User gagal di tambahkan");
						}
          })
        });
      })
    </script>
  </body>
</html>