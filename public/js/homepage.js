$( document ).ready(function() {
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: false,
        loop: true,
        autoplay: {
            delay: 5500,
            disableOnInteraction: false,
        },
    
    });
    
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        // items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        }
    });

    var date = 1;

    $.ajax({
        url: 'ajaxProduct',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            date: date
        },
        dataType: 'JSON',
        type: "POST",
        success: function (response) {
            if (response != '') {
                var trHTML = '';
                $.each(response, function (i, item) {
                    var inputHiddend = '<input type="hidden" name="id[]" value="'+ item.id +'">';
                    var numbersProduct = "<input type='number' name='quantity[]' value='1' class='numberProduct" + item.id + "' >";
                    var btn = '<a onClick="btnAgregarProducto('+ item.id +')" class="btn btn-primary pull-right btn-addProductProvicioner" ><i class="fa fa-shopping-cart"></i></a>';
                    trHTML = '<div class="owl-item col-md-3" ">'+
                    '<div class="card" style="width: 18rem; height:400px">'+
                        '<img class="card-img-top" src="../img_product/'+item.image+'"  alt="...">'+
                        '<div class="card-body" style="height:150px">'+
                            '<h5 class="card-title">'+item.name+'</h5>'+
                            '<p class="card-text">'+item.description+'</p>'+
                        '</div>'+
                        '</div>'+
                        '</div>';
                    $('#container-productoWeb').append(trHTML);
                    $('#container-productoWeb').show();
                
                });
                console.log(response);
                
            }
        }
    });
});
