onload = function(){
    var ele = document.querySelectorAll('.validanumericos')[0];
    ele.onkeypress = function(e) {
      if(isNaN(this.value+String.fromCharCode(e.charCode)))
        return false;
    }
    ele.onpaste = function(e){
      e.preventDefault();
    }
}

$("#btn_buscar").on('click',function(e) {
    var doc = $("#doc").val();
    if(doc.length == 8) { searchPatient(); }
    else{ toastr.warning('La cantidad de dígitos es incorrecto', null, { "closeButton": true, "progressBar": true }); }
});

$("#clear").click(function(){
    $(".info_head").empty();
    $(".patient").empty();
    $("#doc").val('');
});


function searchVaccinesCovid() {
    var doc = $("#documento").val();
    var datos = { "doc": doc };
    $.ajax({
        type: "POST",
        url: "./s36_qu3ry_y0urV4cc1n4t10n.php",
        data: datos,
        success: function(data) {
            var expresionRegular = /\s*---\s*/;
            var lista_id = data.split(expresionRegular);
            var id = [];
            for (i = 0; i < lista_id.length; i++) {
                id.push(lista_id[i]);
            }

            console.log(id);

            if(id[0] == ''){
                $(".vacunas_covid").html('<div class="alert alert-danger" role="alert">Usuario No Encontrado...</div>');
            }else{
                $(".vacunas_covid").html(id[0]);
            }
        }
    });
}

$("#btnBuscarVacuna").on('click',function(e) {
    var doc = $("#documento").val();
    if(doc.length == 8) { searchVaccinesCovid(); }
    else{ toastr.warning('La cantidad de dígitos es incorrecto', null, { "closeButton": true, "progressBar": true });
    $(".vacunas_covid").html('');}
});

$("#documento").keyup(function(e) {
    if(e.keyCode == 13){
        var doc = $("#documento").val();
        if(doc.length == 8) { searchVaccinesCovid(); }
        else{ toastr.warning('La cantidad de dígitos es incorrecto', null, { "closeButton": true, "progressBar": true });
        $(".vacunas_covid").html('');}
    }
});

$("#clearV").click(function(){
    $("#documento").val('');
    $(".vacunas_covid").empty();
});