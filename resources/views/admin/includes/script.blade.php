<!-- bundle -->
<script src="{{asset('/')}}admin/assets/js/vendor.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/app.min.js"></script>

<!-- third party js -->
<script src="{{asset('/')}}admin/assets/js/vendor/apexcharts.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
<!-- third party js ends -->

<!-- Datatables js -->
<script src="{{asset('/')}}admin/assets/js/vendor/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendor/dataTables.bootstrap5.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendor/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendor/responsive.bootstrap5.min.js"></script>

<!-- Datatable Init js -->
<script src="{{asset('/')}}admin/assets/js/pages/demo.datatable-init.js"></script>

<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'productDescription',
        {
            uiColor: '#404954',
            width: 'auto',
            height: '100',
            enterMode: CKEDITOR.ENTER_BR,
            shiftEnterMode: CKEDITOR.ENTER_P,
        });
    CKEDITOR.addCss(".cke_editable{background-color: #e7e9eb}");

</script>

<!-- demo app -->
<script src="{{asset('/')}}admin/assets/js/pages/demo.dashboard.js"></script>
<!-- end demo js-->


<script src="{{asset('/')}}admin/assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('/')}}admin/assets/demo/chart-area-demo.js"></script>
<script src="{{asset('/')}}admin/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('/')}}admin/assets/js/datatables-simple-demo.js"></script>
