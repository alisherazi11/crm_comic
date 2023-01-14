<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


<script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-core.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-pie.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

{{-- <script src="{{ asset('src/js/core/adminchart.js') }}"></script>

<script src="{{ asset('src/js/core/adminsidebarhandler.js') }}"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script src="{{ asset('src/js/core/Header.js') }}"></script>
<script
    type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
  ></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="{{ asset('src/js/core/adminsidebar.js') }}"></script>
<script src="{{ asset('assets/dateTable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('src/js/core/table.js') }}"></script>
<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>
<script>
    const activeprojetc = document.getElementById("Active")
    const active1 = () => {
        activeprojetc.innerHTML = "Active Project"

    }
    const active2 = () => {
        activeprojetc.innerHTML = "All Active Project"

    }
</script>

<script>
function delete_record(url, id,table, function_to_call, msg=""){
    deletion_data_id = id;
    return new swal({
        text: msg ? msg : "You won't be able to recover this record?",
        title: "Are you sure?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        showLoaderOnConfirm: true,
    }).then((result) => { 
        result = result.isConfirmed;    
        if(result == true || result == "true")
        {
            $.ajax({
                method: 'GET',
                url: url,
                success: function () {
                    tr = $(id).parent().parent().closest("tr");
                    console.log(table);
                    console.log(function_to_call);
                    console.log($("."+table+" tbody tr").length );
                    if($("."+table+" tbody tr").length === 1){
                        console.log("here_calling");
                        var fn = window[function_to_call];
                        if (typeof fn === "function") fn();
                    }
                    tr.remove();
                    return new swal("Deleted!", "Your record has been deleted.", "success");
                },
                error: function (jqXhr) {
                    return new swal("Oops", "Something went wrong.", "error");
                }
            });
        }
    })
}
</script>
<div class='p-5'><br></div>