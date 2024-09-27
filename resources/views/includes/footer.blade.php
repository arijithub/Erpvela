 
 
 <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
     <script src="{{asset('js/summernote.js')}}"></script>
 <script type="text/javascript">
$(document).ready(function() {
    $('#summernote').summernote({
        height: "500px"
    });
});

</script>
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script>
   <script type="text/javascript">
            $(function () {
               
                $('#datetimepicker4').datetimepicker({
                    format: 'dd/mm/yyyy',
                    minView: 2,
                    todayBtn: false
                   
                    
                    }).on('changeDate', function(e){
    $(this).datetimepicker('hide');
});
               
            });
        </script>
   

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('js/raphael.min.js') }}"></script>
    <script src="{{ asset('js/morris.min.js') }}"></script>
    <script src="{{ asset('js/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example1').DataTable({
            responsive: true,
            bFilter: false,
            bPaginate: false
        });
    });
    </script>
 <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.responsive.js') }}"></script>
</body>

</html>
