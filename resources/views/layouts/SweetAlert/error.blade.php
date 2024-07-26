@if (session('segurity_error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Información',
        text: '{{ session('segurity_error') }}!',
        footer: "<h5><b>"+"{{ env('COMPANY') }}"+"</b></h5>"
    })
</script>
@endif

@if (session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Información',
        text: '{{ session('error') }}',
        footer: "<h5><b>"+"{{ env('COMPANY') }}"+"</b></h5>"
    })
</script>
@endif

