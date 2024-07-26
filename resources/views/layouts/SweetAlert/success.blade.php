@if (session('alert_success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Information',
            text: '{{ session('alert_success') }}',
            footer: "<h5><b>"+"{{ env('COMPANY') }}"+"</b></h5>"
        })
    </script>
@endif
