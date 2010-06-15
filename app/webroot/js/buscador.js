$(function(){
    $('.loader').hide();
    $('#szona').hide();
    $('#zonas').hide();
    $('#ciudad').change(function(){
        $('.loader').show();
        $.getJSON("/zonas/getAll/"+$(this).val(), {}, 
            function(data, status){
                $('#zonas').empty();
                $.each(data.items, function(id, nombre){
                    $('#zonas').append($("<option></option>").attr("value", id).text(nombre));
                });
                if(status == "success") {
                    $('.loader').hide();
                }
            }
        );
        $('#szona').show();
        $('#zonas').show();
    });
});
