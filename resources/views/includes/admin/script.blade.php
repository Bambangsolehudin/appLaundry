
  <!-- Bootstrap core JavaScript-->
  <script src="{{ url ('backend/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url ('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ url ('backend/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ url ( 'backend/vendor/chart.js/Chart.min.js' ) }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ url ('backend/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ url ('backend/js/demo/chart-pie-demo.js') }}"></script>
 <!-- Page level plugins -->
 <script src="{{ url('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ url('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script> 
  $(document).ready( function () {
    $('#pelanggan').DataTable();
  } );
</script>

<script type="text/javascript">
  function check (){
    var id = $("#city").val();
    $.ajax({
      type: "GET",
      url : "{{ url('citybyid/') }}/"+id,
      dataType : "JSON",
      success:function(data){
        $("#provinsi").val(data.rajaongkir.results.province)
        $("#portal_code").val(data.rajaongkir.results.postal_code)
      }
    });
  }
</script>

{{-- <script>
  $(document).ready(function() {
    var paket_id = $("#paket_id").val();
    var jumlah_kiloan = $("#jumlah_kiloan").val();
    if(!jumlah_kiloan) {
      jumlah_kiloan = 0;
    }

    var totalnya = jumlah_kiloan * paket_id
    $("#total").val(totalnya);
  });
</script> --}}