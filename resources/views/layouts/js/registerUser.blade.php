<script>
    $(document).ready(function() {
        fieldsClear();
    });
    $("#createAccount").click(function(e) {
        $('#error_name').hide();
        $('#error_email').hide();
        $('#error_password').hide();
        $('#error_confirmPassword').hide();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            dataType: 'json',
            url: "{{ route('createAccount') }}",
            data: {
                'name': $('#name').val(),
                'email': $('#email').val(),
                'password': $('#password').val(),
                'confirmPassword': $('#confirmPassword').val()
            },
            beforeSend: function() {
                $('#loadPageM').show();
            },
            complete: function() {
                $('#loadPageM').hide();
            },
            success: function(response) {
                //console.log(response)
                switch (response.code) {
                    case 400:
                        $.each(response.data.error, function(i, item) {
                            $('#error_' + i).show();
                            $('#error_' + i).html(
                                "<i class='fa fa-exclamation-circle' aria-hidden='true'></i>" +
                                item);
                        });

                        break;
                    case 201:
                        Swal.fire({
                            //position: "top-end",
                            icon: "success",
                            title: "El registro fue éxitoso !",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        fieldsClear();
                        break;

                    default:
                        console.log("ERROR code not exist");
                        break;
                }
            },
            error: function(jqXHR) {
                Swal.fire({
                    //position: "top-end",
                    icon: "error",
                    title: "Tenemos problemas para registrar su usuario, por favor contacte al administrador.",
                    showConfirmButton: false,
                    timer: 1500
                });

            }
        });
    });

    function fieldsClear() {
        $('#name').val('');
        $('#email').val('');
        $('#password').val('');
        $('#confirmPassword').val('');
    }
</script>
