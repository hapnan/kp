$(document).ready(function(e){
    $('#menupilih').on('shown.bs.collapse', function (e) {
        $('.menubutton').click(function(){
            $('#menupilih').collapse('dispose');
        });
      });
});
