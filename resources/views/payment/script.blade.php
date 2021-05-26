
<script>
var articles = new Array()
var articlesQuantity = new Array()
var clientId = '';
$(document).ready(()=>{
    $('.datatable-articles').DataTable()

    $('#searchClient').change(()=>{
        $.get('getClientByDni/' + $('#searchClient').val(), (data) => {
            if (data == 0) {
                $("#errorSearchClient").text("DNI no encontrado")
                $("#errorSearchClient").show();
                $("#clientName").val("")
                $("#clientDni").val("")
                $("#clientDirection").val("")
                $("#clientPhone").val("")
                $("#totalPrices").val(0)
   
            }else{
                $("#totalPrices").val(1)
         
                $(".pay").prop('disabled', false);

                $("#errorSearchClient").hide()
                $("#clientName").val(data[0].name)
                $("#clientDni").val(data[0].dni)
                $("#clientDirection").val(data[0].direction)
                $("#clientPhone").val(data[0].phone)
                window.clientId = data[0].id
            }
        })
    })

    $('.validate-quantity').change((e) => {
        quantity = $(e.target).val()
        if (quantity < 1) {
            $(".span-quantity-" + $(e.target).data("id")).text("La cantidad debe ser superior a 1")
            quantity = $(e.target).val("1")
        }else{
            $(".span-quantity-" + $(e.target).data("id")).text("")
        }
    })

    $('.add-article').click((e) => {
        id = $(e.target).data('id')
        code = $(e.target).data('code')
        name = $(e.target).data('name')
        price = $(e.target).data('price')
        quantity = $(".quantity-" + id).val()
        pushdata = pushData(id, quantity)
        if (pushdata) {
            showInTable(id, code, name, quantity, price)
        }
        calculateTotal();
    })

 $(".pay").click(()=>{
    data = {
        clientId: window.clientId,
        articles: window.articles,
        articlesQuantity: window.articlesQuantity
    }
    $("#form-data").val(JSON.stringify(data));
    $("#form-checkout").submit();
    
    // $.ajax({
    //     type: "POST",
    //     url: url,
    //     data: data,
    //     headers: {
    //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //   },
    // });
 })

})

$('.add-article').click((e) => {
        id = $(e.target).data('id')
        code = $(e.target).data('code')
        name = $(e.target).data('name')
        price = $(e.target).data('price')
        quantity = $(".quantity-" + id).val()
        pushdata = pushData(id, quantity)
        if (pushdata) {
            showInTable(id, code, name, quantity, price)
        }
        calculateTotal();
    })
function removeItemFromArr (id) {
    var i = window.articles.indexOf(id)
    i !== -1 && window.articles.splice(i,1)
    i !== -1 && window.articlesQuantity.splice(i,1)
}

function deleteArticle (id) {
    removeItemFromArr(id)
    $(".delete_article_" + id).parent().parent().remove()
    setTimeout(calculateTotal(),250)
}

function calculateTotal() {
    calculate = 0
    $(".p-total").each((x,y) => {
        calculate += parseInt($(y).text());
    })
    $(".total-price").text("Total= $" + calculate)
    var totalPrice= $("#totalPrices").val()
    if (calculate == 0 && totalPrice == 0) {
        $(".pay").prop('disabled', true);
    }else {
        var clienteValidate = $('#clientName').val();
        if (clienteValidate != '') {
            $(".pay").prop('disabled', false);
        }
       
    }
}

function pushData(id,quantity) {
    if (window.articles.includes(id)) {
        deleteArticle(id)
    } 
    window.articles.push(id)
    window.articlesQuantity.push(quantity)
    calculateTotal()
    return true
}

function showInTable(id, code, name, quantity, price) {
    fa_trash = $('<i/>', { class: "fa fa-trash" })
    button_delete = $('<button class="delete_article_'+ id +' btn btn-danger pull" onclick="deleteArticle('+ id +')"/>')
    delet_td = $('<td/>').append(button_delete.append(fa_trash))
    tr = $('<tr/>', {class: "tr-" + id })
    tr.append($('<td/>',{ text: code }))
    tr.append($('<td/>',{ text: name }))
    tr.append($('<td/>',{ text: quantity }))
    tr.append($('<td/>',{ text: price }))
    tr.append($('<td/>',{ text: price * quantity, class: "p-total" }))
    tr.append(delet_td)
    $(".selected-articles").append(tr)
}



</script>