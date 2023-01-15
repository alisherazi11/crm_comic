<script>

    
    @if(@$user->user_type)
        user_type_change('{{@$user->user_type}}')
    @endif

    $(function(){
        @if(@$user->time_zone)
            $("#time_zone").val('{{@$user->time_zone}}').change();
        @else
            {{dd(@$user->time_zone)}}
            $("#time_zone").val(6).trigger('change');
        @endif
    })
    

    function user_type_change(id){
        for (let i = 1; i <= 3; i++) {
            if(id == i){
                $("#with_auto_dialing_"+i).removeAttr("disabled")
                $("#with_call_recording_"+i).removeAttr("disabled")
            }
            else{
                $("#with_call_recording_"+i).removeAttr("checked").change();
                $("#with_auto_dialing_"+i).removeAttr("checked").change();
                $("#with_auto_dialing_"+i).attr("disabled", true)
                $("#with_call_recording_"+i).attr("disabled", true)
            }
        }
    }
    


</script>