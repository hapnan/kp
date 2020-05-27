<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/detail.css') ?>">
    <title>Hello, world!</title>
  </head>
  <body>
    <section class="detail mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Detail</h3>
                    <hr>
                    <form class="p-3"  method="post" action="<?= base_url()?>journal/updatejurnalall">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="namajurnal">Nama Jurnal</label>
                                <input name="namajurnal" type="text" class="form-control" id="namajurnal" value="<?= $user['namajurnal']; ?>" placeholder="Nama Jurnal" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="judulpublikasi">Judul Publikasi</label>
                                <input name="judulpublikasi" type="text" class="form-control" id="judulpublikasi" value="<?= $user['jdl_publikasi']; ?>" placeholder="Judul Publikasi" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="jenispublikasi">Jenis Publikasi</label>
                                <input name="jenispublikasi" type="text" class="form-control" id="jenispublikasi" value="<?= $user['jns_publikasi']; ?>" placeholder="Jenis Publikasi" required>
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="tahunpublikasi">Tahun Publikasi</label>
                                    <input name="tahunpublikasi" type="year" class="form-control" id="tahunpublikasi" value="<?= $user['thn']; ?>" placeholder="Tahun Publikasi" required>
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="issnjurnal">ISSN Jurnal</label>
                                    <input name="issnjurnal" type="text" class="form-control" id="issnjurnal" value="<?= $user['issn']; ?>" placeholder="ISSN Jurnal" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                    <label for="urljurnal">Url Jurnal</label>
                                    <input name="urljurnal" type="text" class="form-control" id="urljurnal" value="<?= $user['url']; ?>" placeholder="Url Jurnal" required>
                            </div>
                            <div class="form-group col">
                                    <label for="volumejurnal">Volume Jurnal</label>
                                    <input name="volumejurnal" type="text" class="form-control" id="volumejurnal" value="<?= $user['volume']; ?>" placeholder="Volume Jurnal" required>
                            </div>
                            <div class="form-group col">
                                    <label for="nomorjurnal">Nomor Jurnal</label>
                                    <input name="nomorjurnal" type="text" class="form-control" id="nomorjurnal" value="<?= $user['nomor']; ?>" placeholder="Nomor Jurnal" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                    <label for="halamanartikel">Halaman Artikel</label>
                                    <input name="halamanartikel" type="text" class="form-control" id="halamanartikel" value="<?= $user['halaman']; ?>" placeholder="Halaman Artikel" required>
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="indexscopus">Index Scopus</label>
                                    <input name="indexscopus" type="text" class="form-control" id="indexscopus" value="<?= $user['indexscopus']; ?>" placeholder="Index Scopus" required>
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="penuliske">Penulis Ke..</label>
                                    <input name="penuliske" type="text" class="form-control" id="penuliske" value="<?= $user['penulis']; ?>" placeholder="Penulis Ke.." required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="namadosen">Nama Dosen</label>
                                <input name="namadosen" type="text" class="form-control" id="namadosen" value="<?= $user['namadosen']; ?>" placeholder="Nama Dosen" required>
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="nidndosen">NIDN</label>
                                <input name="nidndosen" type="text" class="form-control" id="nidndosen" value="<?= $user['nidn']; ?>" placeholder="NIDN Dosen" readonly>
                            </div>
                            <div class="form-group col-md-4 editorv">
                                <label for="editorview">Editor</label>
                                <input name="editorview" type="text" class="form-control" id="editorview" value="<?= $user['editor']?>" placeholder="NIDN Dosen" readonly>
                            </div>
                            <div class="form-group col-md-4 editori">
                                <label for="editorinput">Editor</label>
                                <select id="editorinput" class="form-control">
                                    <?php foreach ($editor as $row['nama']):?>
                                        <option value="<?= $editor['id'];?>"><?= $editor['nama'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mr-3">
                            <button name="journal_submit" id="edit"  type="button" class="btn btn-danger mr-2" >Edit</button>
                            <button name="journal_submit" id="cancel"  type="button" class="btn btn-danger mr-2" >Cancel</button>
                            <button name="journal_submit" id="save" type="button" class="btn btn-success" value="<?= $user['id']?>" >Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){

        

            var namajurnal = $('#namajurnal').val();
            var judulpublikasi = $('#judulpublikasi').val();
            var jenispublikasi = $('#jenispublikasi').val();
            var tahunpublikasi = $('#tahunpublikasi').val();
            var issnjurnal = $('#issnjurnal').val();
            var urljurnal = $('#urljurnal').val();
            var volumejurnal = $('#volumejurnal').val();
            var nomorjurnal = $('#nomorjurnal').val();
            var halamanartikel = $('#halamanartikel').val();
            var indexscopus = $('#indexscopus').val();
            var penuliske = $('#penuliske').val();
            var namadoesn = $('#namadosen').val();
            var nidn = $('#nidndosen').val();
            var editor = $('#editorinput option:selected').val();

            
            if(namajurnal!=null){
                $('#namajurnal').attr('readonly', true);
            };
            if(judulpublikasi!=null){
                $('#judulpublikasi').attr('readonly', true);
            };
            if(jenispublikasi != null){
                $('#jenispublikasi').attr('readonly', true);
            };
            if(tahunpublikasi != null){
                $('#tahunpublikasi').attr('readonly', true);
            };
            if(issnjurnal !=null){
                $('#issnjurnal').attr('readonly', true);
            };
            if(urljurnal != null){
                $('#urljurnal').attr('readonly', true);
            };
            if(volumejurnal!=null){
                $('#volumejurnal').attr('readonly', true);
            };
            if(nomorjurnal!=null){
                $('#nomorjurnal').attr('readonly', true);
            };
            if(halamanartikel!=null){
                $('#halamanartikel').attr('readonly', true);
            };
            if(indexscopus!=null){
                $('#indexscopus').attr('readonly', true);
            };
            if(penuliske!=null){
                $('#penuliske').attr('readonly', true);
            };
            if(namadosen!=null){
                $('#namadosen').attr('readonly', true);
            };
            if(nidn!=null){
                $('#nidndosen').attr('readonly', true);
            };
            if(editor!=null){
                $('#editorview').attr('readonly', true);
            };
            
            $('#save').attr('disabled', true);
            $('#edit').show();
            $('#cancel').hide();

            $('#edit').on('click', function(){
                $('#edit').hide();
                $('#cancel').show();
                $('#namajurnal').attr('readonly', false);
                $('#judulpublikasi').attr('readonly', false);
                $('#jenispublikasi').attr('readonly', false);
                $('#tahunpublikasi').attr('readonly', false);
                $('#issnjurnal').attr('readonly', false);
                $('#urljurnal').attr('readonly', false);
                $('#volumejurnal').attr('readonly', false);
                $('#nomorjurnal').attr('readonly', false);
                $('#halamanartikel').attr('readonly', false);
                $('#indexscopus').attr('readonly', false);
                $('#penuliske').attr('readonly', false);
                $('#namadosen').attr('readonly', false);
                $('#nidndosen').attr('readonly', false);
                $('.form-group.col-md-4.editori').show();
                $('.form-group.col-md-4.editorv').hide();
                $('#save').attr('disabled', false);
            });

            $('#cancel').click(function(){
                $('#edit').show();
                $('#cancel').hide();
                $('#save').attr('disabled', true);
                $('#namajurnal').attr('readonly', true);
                $('#judulpublikasi').attr('readonly', true);
                $('#jenispublikasi').attr('readonly', true);
                $('#tahunpublikasi').attr('readonly', true);
                $('#issnjurnal').attr('readonly', true);
                $('#urljurnal').attr('readonly', true);
                $('#volumejurnal').attr('readonly', true);
                $('#nomorjurnal').attr('readonly', true);
                $('#halamanartikel').attr('readonly', true);
                $('#indexscopus').attr('readonly', true);
                $('#penuliske').attr('readonly', true);
                $('#namadosen').attr('readonly', true);
                $('#nidndosen').attr('readonly', true);
                $('.form-group.col-md-4.editori').hide();
                $('.form-group.col-md-4.editorv').show();
            })

            
           
        });
    </script>
    </body>
</html>