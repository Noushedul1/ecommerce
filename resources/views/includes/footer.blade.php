<!-- CORE PLUGINS-->
<script src="{{ asset('admin') }}/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="{{ asset('admin') }}/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
<script src="{{ asset('admin') }}/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ asset('admin') }}/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
<script src="{{ asset('admin') }}/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS-->
<script src="{{ asset('admin') }}/assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
<script src="{{ asset('admin') }}/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
<script src="{{ asset('admin') }}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="{{ asset('admin') }}/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
<!-- CORE SCRIPTS-->
<script src="{{ asset('admin') }}/assets/js/app.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script src="{{ asset('admin') }}/assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
<script src="{{ asset('admin') }}/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script type="text/javascript">
// start for toastr
    @if (Session::has('message'))
    var type = "{{ Session::get('alert-type','success') }}";
    switch(type){
        case 'success':
            toastr.options = {
                'progressBar': true,
                'closeBar': true
            }
            toastr.success("{{ Session::get('message') }}",'Success',{timeOut: 2000});
            break;
        case 'info':
            toastr.options = {
                'progressBar':true,
                'closeBar':true
            }
            toastr.info("{{ Session::get('message') }}",'Info',{timeOut: 2000});
            break;
        case 'error':
            toastr.options = {
                'progressBar':true,
                'closeBar':true
            }
            toastr.error("{{ Session::get('message') }}",'Info',{timeOut: 2000});
            break;
    }
    @endif
// end for toastr
    $(function() {
        $('#example-table').DataTable({
            pageLength: 10,
            //"ajax": './assets/demo/data/table_data.json',
            /*"columns": [
                { "data": "name" },
                { "data": "office" },
                { "data": "extn" },
                { "data": "start_date" },
                { "data": "salary" }
            ]*/
        });
    })
</script>
@stack('admin_script')
