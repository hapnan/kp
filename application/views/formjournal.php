<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/js/jquery-ui.css')?>">
    <title>Hello, world!</title>
  </head>
  <body>

<!-- Filling Form -->

<div class="container border form my-5 py-3 px-3"> 
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Input Jurnal</h1>

            <!-- FORM -->
            <form class="p-3"  method="post" action="<?= base_url('journal/uploud')?>">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="namajurnal">Nama Jurnal</label>
                        <input name="namajurnal" type="text" class="form-control" id="namajurnal" placeholder="Nama Jurnal" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="judulpublikasi">Judul Publikasi</label>
                        <input name="judulpublikasi" type="text" class="form-control" id="judulpublikasi" placeholder="Judul Publikasi" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="jenispublikasi">Jenis Publikasi</label>
                        <input name="jenispublikasi" type="text" class="form-control" id="jenispublikasi" placeholder="Jenis Publikasi" required>
                    </div>
                    <div class="form-group col-md-4">
                            <label for="tahunpublikasi">Tahun Publikasi</label>
                            <input name="tahunpublikasi" type="year" class="form-control" id="tahunpublikasi" placeholder="Tahun Publikasi" required>
                    </div>
                    <div class="form-group col-md-4">
                            <label for="issnjurnal">ISSN Jurnal</label>
                            <input name="issnjurnal" type="text" class="form-control" id="issnjurnal" placeholder="ISSN Jurnal" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-7">
                            <label for="urljurnal">Url Jurnal</label>
                            <input name="urljurnal" type="text" class="form-control" id="urljurnal" placeholder="Url Jurnal" required>
                    </div>
                    <div class="form-group col">
                            <label for="volumejurnal">Volume Jurnal</label>
                            <input name="volumejurnal" type="text" class="form-control" id="volumejurnal" placeholder="Volume Jurnal" required>
                    </div>
                    <div class="form-group col">
                            <label for="nomorjurnal">Nomor Jurnal</label>
                            <input name="nomorjurnal" type="text" class="form-control" id="nomorjurnal" placeholder="Nomor Jurnal" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                            <label for="halamanartikel">Halaman Artikel</label>
                            <input name="halamanartikel" type="text" class="form-control" id="halamanartikel" placeholder="Halaman Artikel" required>
                    </div>
                    <div class="form-group col-md-4">
                            <label for="indexscopus">Index Scopus</label>
                            <input name="indexscopus" type="text" class="form-control" id="indexscopus" placeholder="Index Scopus" required>
                    </div>
                    <div class="form-group col-md-4">
                            <label for="penuliske">Penulis Ke..</label>
                            <input name="penuliske" type="text" class="form-control" id="penuliske" placeholder="Penulis Ke.." required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="namadosen">Nama Dosen</label>
                        <input name="namadosen" type="text" class="form-control" id="namadosen" placeholder="Nama Dosen" required>
                    </div>
                    <div class="form-group col-md-6 ">
                            <label for="nidndosen">NIDN</label>
                            <input name="nidndosen" type="text" class="form-control" id="nidndosen" placeholder="NIDN Dosen" readonly>
                    </div>
                </div>
                
                <button name="journal_submit" id="submit" type="submit" class="btn btn-primary flex-row-reverse" >Submit</button>
        </form>
        

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery-3.4.1.js')?>"></script>
    <script src="<?= base_url('assets/js/jquery-1.12.4.js')?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/jquery-ui.js')?>"></script>
    <script type="text/javascript">
            $(function(){
                $('#namadosen').autocomplete({
                    source: "<?= base_url('journal/getdosen')?>",
                    select: function(event, ui){
                        $("#namadosen").val(ui.item.nama);
                        $("#nidndosen").val(ui.item.nidn);
                        return false;
                    }
                })
                .autocomplete("instance")._renderItem = function(ul, item){
                    return $("<li>").append("<div>" + item.nama + "<br>" + item.nidn + "</div>").appendTo(ul);
                }
            })
    
    </script>
</body>
</html>
