$(document).on("ready",inicio);
function inicio(){
    $("frm_borrado").submit(function(ev){
            ev.preventDefault();
            $.ajax({
                 url: $("frm_borrado").attr("action"),
                 type:'POST',
                 data: $(this).serialize(),
                 success: function(data){
               
                      alert(data);
                 }
                 

               

            });
          
    });

}