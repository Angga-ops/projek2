<!---/admin/pembeli/hapus/{{ $p->id}}-->

<script>
     $('.delete').on('click',(function(e) {
         e.preventDefault();
         var self = $(this);
         var nama = $(this).attr("data-nama"); 
      var formid = $(this).attr('data-formid');
                    swal({
                    title: "Yakin?",
                    text: "Mau hapus pelanggan ini dengan nama " +nama+"?",
                    icon: "warning",
                    showCancelbuttons: true,
                    confirmButtonText: "Yeeeees!"
                    closeOnConfirm: true,
                    },
                    function(){
                        $("#"+formid).submit();
                    });
     });
                    
                </script>