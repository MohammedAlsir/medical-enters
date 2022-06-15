 <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 rtl -->
    <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    {{-- <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script> --}}
    <!-- Sparkline -->
    {{-- <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script> --}}
    <!-- JQVMap -->
    {{-- <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script> --}}
    {{-- <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.world.js')}}"></script> --}}
    <!-- jQuery Knob Chart -->
    {{-- <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script> --}}
    <!-- daterangepicker -->
    {{-- <script src="{{asset('plugins/moment/moment.min.js')}}"></script> --}}
    {{-- <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script> --}}
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    {{-- <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script> --}}
    <!-- overlayScrollbars -->
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>

     <script>
    $("#example1").dataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/1.11.4/i18n/ar.json",
        },
    });
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,

        });
    });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `هل تريد حذف هذا السجل بالفعل ؟`,
                text: "في حالة الموافقة لا يمكنك التراجع عن هذا الاجراء !",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                ButtonColor: "#1cc88a",
                buttons: [ 'إلغاء ','نعم , حذف السجل ']
                //   buttons: [' ! نعم ,   حذف السجل ', 'إلغاء ']
            })
            .then((willDelete) => {
                if (willDelete) {
                form.submit();
                }
            });
        });

        $(document).ready(function() {
                $('.select_2').select2();
            });
    </script>


