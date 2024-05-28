// Admin Log in
$(document).on("submit","#examineeLoginFrm", function(){
   $.post("query/loginExe.php", $(this).serialize(), function(data){
      if(data.res == "invalid")
      {
        Swal.fire(
          'Error',
          'Ingrese sus datos correctamente',
          'error'
        )
      }
      else if(data.res == "success")
      {
        $('body').fadeOut();
        window.location.href='home.php';
      }
   },'json');

   return false;
});




// Submit Answer
$(document).on('submit', '#submitAnswerFrm', function(){
  var examAction = $('#examAction').val();

  if(examAction != "")
  {
    Swal.fire({
    title: 'Tiempo',
    text: "su tiempo ha terminado, por favor pulse ok",
    icon: 'warning',
    showCancelButton: false,
    allowOutsideClick: false,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'OK!'
}).then((result) => {
if (result.value) {

   $.post("query/submitAnswerExe.php", $(this).serialize(), function(data){

    if(data.res == "alreadyTaken")
    {
       Swal.fire(
         'Realizado',
         "ya ha realizado este examen",
         'error'
       ) 
    }
    else if(data.res == "success")
    {
        Swal.fire({
            title: 'Terminado',
            text: "su respuesta se ha enviado correctamente",
            icon: 'success',
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK!'
        }).then((result) => {
        if (result.value) {
          $('#submitAnswerFrm')[0].reset();
           var exam_id = $('#exam_id').val();
           window.location.href='home.php?page=result&id=' + exam_id;
        }

        });


    }
    else if(data.res == "failed")
    {
     Swal.fire(
         'Error',
         "Algo salió mal",
         'error'
       ) 
    }

   },'json');

}
});
  }
  else
  {
      Swal.fire({
    title: 'Recordatorio',
    text: "¿quiere enviar su respuesta ahora?",
    icon: 'warning',
    showCancelButton: true,
    allowOutsideClick: false,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sí, enviar ahora.'
}).then((result) => {
if (result.value) {

   $.post("query/submitAnswerExe.php", $(this).serialize(), function(data){

    if(data.res == "alreadyTaken")
    {
       Swal.fire(
         'Ya realizado',
         "ya ha realizado este examen",
         'error'
       ) 
    }
    else if(data.res == "success")
    {
        Swal.fire({
            title: 'Correxto',
            text: "sus respuestas se ha enviado correctamente",
            icon: 'success',
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK!'
        }).then((result) => {
        if (result.value) {
          $('#submitAnswerFrm')[0].reset();
           var exam_id = $('#exam_id').val();
           window.location.href='home.php?page=result&id=' + exam_id;
        }

        });


    }
    else if(data.res == "failed")
    {
     Swal.fire(
         'Error',
         "Algo salio mal",
         'error'
       ) 
    }

   },'json');

}
});
  }








return false;
});


// Submit Feedbacks
$(document).on("submit","#addFeebacks", function(){
   $.post("query/submitFeedbacksExe.php", $(this).serialize(), function(data){
      if(data.res == "limit")
      {
        Swal.fire(
          'Error',
          'Has alcanzado el límite máximo de 3 comentarios',
          'error'
        )
      }
      else if(data.res == "success")
      {
        Swal.fire(
          'Enviado',
          'sus comentarios han sido enviados correctamente',
          'success'
        )
          $('#addFeebacks')[0].reset();
        
      }
   },'json');

   return false;
});

