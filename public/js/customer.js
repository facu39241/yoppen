function btnAgregarProducto(id) {
   $('.row-'+ id).clone().appendTo('#productosAgregados');
}

$(".select-provicioner").change(function (e) {

    var selected = $(".select-provicioner").val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    e.preventDefault();

    $.ajax({
        url: 'ajaxProviders',
        data: {
            id: selected
        },
        dataType: "json",
        type: "POST",
        success: function (response) {
            if (response != '') {
                var trHTML = '';
                $.each(response, function (i, item) {
                    var inputHiddend = '<input type="hidden" name="id[]" value="'+ item.id +'">';
                    var numbersProduct = "<input type='number' name='quantity[]' value='1' class='numberProduct" + item.id + "' >";
                    var btn = '<a onClick="btnAgregarProducto('+ item.id +')" class="btn btn-primary pull-right btn-addProductProvicioner" ><i class="fa fa-shopping-cart"></i></a>';
                    trHTML = '<tr class="row-'+ item.id +'">' +
                        '<td class="hidden"> ' + inputHiddend + ' </td>' +
                        '<td> ' + item.name + ' </td>' +
                        '<td> ' + item.code + ' </td>' +
                        '<td> ' + item.price + ' </td>' +
                        '<td> ' + numbersProduct + '</td>' +
                        '<td> ' + btn + ' </td>' +
                        '</tr>';
                    $('#productProvider_table').append(trHTML);
                    $('#productProvider_table').show();
                
                });
            } else {
                $('#productProvider_table').hide();
                $('.alert-nullProdict').show();

            }
        },
        statusCode: {

            404: function () {
                alert('web not found');
            }
        },
        error: function (x, xs, xt) {
            //nos dara el error si es que hay alguno
            //window.open(JSON.stringify(x));
            //alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);

        }
    });
});
