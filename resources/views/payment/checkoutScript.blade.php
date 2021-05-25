<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
    // Agrega credenciales de SDK
    const mp = new MercadoPago("{{env('MP_PIBLIC_KEY')}}", {
            locale: 'es-AR'
    });

    // Inicializa el checkout
    mp.checkout({
        preference: {
            id: '{{$preference->id}}'
        },
        render: {
            container: '.MP-button', // Indica dónde se mostrará el botón de pago
            label: 'Pagar', // Cambia el texto del botón de pago (opcional)
        }
    });
</script>