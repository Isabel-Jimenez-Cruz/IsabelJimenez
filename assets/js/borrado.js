(function ($){
    $("#frm_borrado").submit(function(ev){
         
            $.ajax({
                 url: '/index.php/borrado/eliminar',
                 type:'POST',
                 data: $(this).serialize(),
                 success: function(data){
               
                  var json= JSON.parse(data);
                   console.log(json)

                 },
                 error: function(xhr){
                     
                     if(xhr.status==400){
                         var json= JSON.parse(xhr.responseText);
                         if(json.codigo_usuario.length !=0){
                             $("#codigo_usuario > div").html(json.codigo_usuario);
                             $("#codigo_usuario > input").addClass('is-invalid');
                         }
                     }

                 },

            });
            ev.preventDefault();
    });

})(jQuery)