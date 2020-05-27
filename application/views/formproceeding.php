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
<section class="container border form my-5 py-3 px-3"> 
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Input Proceeding</h1>
                <!-- FORM -->
                <form class="p-3" method="post" action="<?= base_url('proceeding/uploud')?>">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="judulmakalah">Judul Makalah</label>
                            <input name="judulmakalah" type="text" class="form-control" id="judulmakalah" placeholder="Judul Makalah">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="namaforum">Nama Forum</label>
                                <input name="namaforum" type="text" class="form-control" id="namaforum" placeholder="Nama Forum">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                                <label for="tingkatforum">Tingkat Forum Ilmiah</label>
                                <input name="tingkatforum" type="text" class="form-control" id="tingkatforum" placeholder="Tingkat Forum Ilmiah">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="tahunpelaksanaan">Tahun Pelaksanaan</label>
                                <input name="tahunpelaksanaan"type="text" class="form-control" id="tahunpelaksanaan" placeholder="Tahun Pelaksanaan">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                                <label for="urljurnal">Url Jurnal</label>
                                <input name="urljurnal" type="text" class="form-control" id="urljurnal" placeholder="Url Jurnal">
                        </div>
                        <div class="form-group col-md">
                                <label for="institusipenyelenggara">Institusi Penyelengara</label>
                                <input name="institusipenyelenggara" type="text" class="form-control" id="institusipenyelenggara" placeholder="Institusi Penyelenggara">
                        </div>

                    </div>
                    <h6>Waktu Penyelengara</h6>
                    <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="daritanggal">Dari Tanggal</label>
                                    <input name="daritanggal" type="date" class="form-control" id="daritanggal" placeholder="Tanggal Pelaksanaan">
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="sampaitanggal">Sampai Tanggal</label>
                                    <input name="sampaitanggal" type="date" class="form-control" id="sampaitanggal" placeholder="Tanggal Pelaksanaan">
                            </div>
                        </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                                <label for="tempatpelaksanaan">Tempat Pelaksanaan</label>
                                <input name="tempatpelaksanaan" type="text" class="form-control" id="tempatpelaksanaan" placeholder="Tempat Pelaksanaan">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="status">Status Pemakalah</label>
                                <input name="status" type="text" class="form-control" id="status" placeholder="Status Pemakalah">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="namadosen">Nama Dosen</label>
                                <input name="namadosen" type="text" class="form-control" id="namadosen" placeholder="Nama Dosen">
                        </div>
                        <div class="form-group col-md-4 ">
                                <label for="nidndosen">NIDN</label>
                                <input name="nidndosen" type="text" class="form-control" id="nidndosen" placeholder="NIDN Dosen" readonly>
                        </div>
                        <div class="form-group col-md-4">
                                <label for="prodi">Program Studi</label>
                                <input name="prodi" type="text" class="form-control" id="prodi" placeholder="Program Studi">
                        </div>
                    </div>
                    <button name="proceeding_submit" id="submit" type="submit" class="btn btn-primary flex-row-reverse">Submit</button>
                </form>
            </div>
        </div>
    </section>
<!-- ...Filling Form -->
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
