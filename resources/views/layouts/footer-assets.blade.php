<!-- JAVASCRIPT -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
<script src="{{ asset('assets/template/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/template/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/template/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/template/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/template/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('assets/template/js/plugins.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('assets/template/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Vector map-->
<script src="{{ asset('assets/template/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('assets/template/libs/jsvectormap/maps/world-merc.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ asset('assets/template/js/pages/dashboard-analytics.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/template/js/app.js') }}"></script>

{{-- <script src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js"></script> --}}

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@yield('script-aux')

{{-- <script src="{{ asset('assets/system/js/libs/jquery/jquery.min.js') }}"></script> --}}
<script src="{{ asset('assets/system/js/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/system/js/shared/functions.js') }}"></script>



<script>
    window.addEventListener('swal', function(e) {
        Swal.fire(e.detail);
        setTimeout(() => {
            window.location.reload();
        }, 5000);
    });

    window.addEventListener('swal2', function(e) {
        Swal.fire(e.detail);
    });

    window.addEventListener('closeModal', function(e) {
        $(".fecharModal").click();
    });
</script>
