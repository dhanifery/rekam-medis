
     
          </div>
          <script  src="<?= base_url()?>assets/js/index.js"></script>
          <script  src="<?= base_url()?>assets/js/modal.js"></script>
          <script src="<?= base_url('assets/js/alert.js') ?>"></script>
          <script src="<?= base_url('assets/js/navbar.js') ?>"></script>
          <script  src="<?= base_url()?>assets/js/kalender.js"></script>
          <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
          <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
          <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
          <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
          <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
          <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
          <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
          <script>
               $(document).ready(function() {
               var table = $('#example').DataTable( {
                    lengthChange: false,
                    dom: 'Bfrtip',
                    buttons: [
                         'print', 'excel', 'pdf'
                    ]
               } );
               
               table.buttons().container()
                    .appendTo( '#example_wrapper .col-md-6:eq(0)' );
               } );
          </script>
          <script>
                $(document).ready( function () {
                    $('#datatable').DataTable({
                         "lengthChange": false,
                    });
               } );
          </script>
          <script>
               window.setTimeout(function() {
                    $(".alert").fadeTo(500,0).slideUp(500, function(){
                    $(this).remove();
               });
               },3000)
          </script>
     </body>
</html>