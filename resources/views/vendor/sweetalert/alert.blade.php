@if (config('sweetalert.alwaysLoadJS') === true && config('sweetalert.neverLoadJS') === false)
    <script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
@endif

@if (Session::has('alert.config'))
    @if (config('sweetalert.animation.enable'))
        <link rel="stylesheet" href="{{ config('sweetalert.animatecss') }}">
    @endif

    @if (config('sweetalert.alwaysLoadJS') === false && config('sweetalert.neverLoadJS') === false)
        <script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Terima kasih telah menggunakan layanan kami.',
                html: 'Untuk dapat segera diproses, Anda dapat menghubungi kami melalui WhatsApp di <a href="https://wa.me/+6285162839410" target="_blank">tautan berikut</a>.',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        });
    </script>
@endif
