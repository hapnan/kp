<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama Jurnal</th>
                <th scope="col">Judul Publikasi</th>
                <th scope="col">jenis Publikasi</th>
                <th scope="col">Tahun Publikasi</th>
                <th scope="col">ISSN Jurnal</th>
                <th scope="col">url Jurnal</th>
                <th scope="col">Volume Jurnal</th>
                <th scope="col">Nomor Jurnal</th>
                <th scope="col">Halaman Artikel</th>
                <th scope="col">Index Scopus</th>
                <th scope="col">Penulis Ke</th>
                <th scope="col">Nama Dosen</th>
                <th scope="col">NIDN</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr id="targer">
                
            </tr>
        </tbody>
  </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function(){
				ajaxsearch();
				
				function ajaxsearch() {

					$.ajax({
						type:'POST',
						url:'<?= base_url().'/console/datajournal';?>',
						dataType: 'json',
						success: function(data){
							var baris='';
							for (var i = 0; i < data.length; i++) {
								var sum = i+1;
								baris +='<tr>'+
																'<td>'+data[i].namajurnal+'</td>'+
																'<td>'+data[i].jdl_publikasi+'</td>'+
																'<td>'+data[i].jns_publikasi+'</td>'+
                                '<td>'+data[i].thn+'</td>'+
                                '<td>'+data[i].issn+'</td>'+
                                '<td>'+data[i].url+'</td>'+
                                '<td>'+data[i].volume+'</td>'+
                                '<td>'+data[i].nomor+'</td>'+
                                '<td>'+data[i].halaman+'</td>'+
                                '<td>'+data[i].indexscopus+'</td>'+
                                '<td>'+data[i].penulis+'</td>'+
                                '<td>'+data[i].namadosen+'</td>'+
                                '<td>'+data[i].nidn+'</td>'+
																'<td class="action">'+'<a href="javascript:;" class="item-edit" id="item-edit" data="'+data[i].id+'">'+
																			'<i class="material-icons edit" >'+"edit"+'</i>'+
																			'</a>'+
																			'<a class="reject" id="reject" data="'+data[i].id+'" href="javascript:;">'+
																			'<i class="material-icons delete" >'+"delete"+'</i>'+
																			'</a>'+
																'</td>'+
																
												'</tr>';
								
							}
							$('#target').html(baris);
						}
					})
				};
      })
    </script>
  </body>
</html>