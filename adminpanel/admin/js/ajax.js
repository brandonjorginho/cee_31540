// Admin Log in
$(document).on("submit","#adminLoginFrm", function(){
   $.post("query/loginExe.php", $(this).serialize(), function(data){
      if(data.res == "invalid")
      {
        Swal.fire(
          'Error',
          'Por favor, introduzca sus datos correctamente',
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



// Add Course 
$(document).on("submit","#addCourseFrm" , function(){
  $.post("query/addCourseExe.php", $(this).serialize() , function(data){
  	if(data.res == "exist")
  	{
  		Swal.fire(
  			'Ya existe el curso',
  			data.course_name.toUpperCase() + ' ya existe',
  			'error'
  		)
  	}
  	else if(data.res == "success")
  	{
  		Swal.fire(
  			'Agregado',
  			data.course_name.toUpperCase() + ' ha sido agregado correctamente',
  			'success'
  		)
          // $('#course_name').val("");
          refreshDiv();
            setTimeout(function(){ 
                $('#body').load(document.URL);
             }, 2000);
  	}
  },'json')
  return false;
});

// Update Course
$(document).on("submit","#updateCourseFrm" , function(){
  $.post("query/updateCourseExe.php", $(this).serialize() , function(data){
     if(data.res == "success")
     {
        Swal.fire(
            'Actualizado',
            'El curso seleccionado se ha actualizado correctamente',
            'success'
          )
          refreshDiv();
     }
  },'json')
  return false;
});


// Delete Course
$(document).on("click", "#deleteCourse", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteCourseExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Eliminado',
            'El curso seleccionado se ha eliminado',
            'success'
          )
          refreshDiv();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
    
   

    return false;
  });


// Delete Exam
$(document).on("click", "#deleteExam", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteExamExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Eliminado',
            'El examen seleccionado se ha elminado correctamente',
            'success'
          )
          refreshDiv();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
    
   

    return false;
  });



// Add Exam 
$(document).on("submit","#addExamFrm" , function(){
  $.post("query/addExamExe.php", $(this).serialize() , function(data){
    if(data.res == "noSelectedCourse")
   {
      Swal.fire(
          'No ha seleccionado un curso',
          'Por favor seleccione un curso',
          'error'
       )
    }
    if(data.res == "noSelectedTime")
   {
      Swal.fire(
          'No ha establecido el tiempo límite',
          'Por favor establezca un tiempo límite para el examen',
          'error'
       )
    }
    if(data.res == "noDisplayLimit")
   {
      Swal.fire(
          'No ha establecido el número de preguntas',
          'Por favor establezca el número de preguntas que tendrá el examen',
          'error'
       )
    }

     else if(data.res == "exist")
    {
      Swal.fire(
        'Already Exist',
        data.examTitle.toUpperCase() + '<br>Already Exist',
        'error'
      )
    }
    else if(data.res == "success")
    {
      Swal.fire(
        'Correcto',
        data.examTitle.toUpperCase() + '<br>Se ha agregado el examen correctamente',
        'success'
      )
          $('#addExamFrm')[0].reset();
          $('#course_name').val("");
          refreshDiv();
    }
  },'json')
  return false;
});



// Update Exam 
$(document).on("submit","#updateExamFrm" , function(){
  $.post("query/updateExamExe.php", $(this).serialize() , function(data){
    if(data.res == "success")
    {
      Swal.fire(
          'Actualizado',
          data.msg + ' <br>se ha actualizado el examen de manera correcta',
          'success'
       )
          refreshDiv();
    }
    else if(data.res == "failed")
    {
      Swal.fire(
        "Ha ocurrido un error",
         'Algo salio mal',
        'error'
      )
    }
   
  },'json')
  return false;
});

// Update Question
$(document).on("submit","#updateQuestionFrm" , function(){
  $.post("query/updateQuestionExe.php", $(this).serialize() , function(data){
     if(data.res == "success")
     {
        Swal.fire(
            'Actualizado',
            'La pregunta seleccionada se ha actualizado correctamente',
            'success'
          )
          refreshDiv();
     }
  },'json')
  return false;
});


// Delete Question
$(document).on("click", "#deleteQuestion", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteQuestionExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Eliminado',
            'La pregunta seleccionada se ha eliminado correctamente',
            'success'
          )
          refreshDiv();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
    
   

    return false;
  });


// Add Question 
$(document).on("submit","#addQuestionFrm" , function(){
  $.post("query/addQuestionExe.php", $(this).serialize() , function(data){
    if(data.res == "exist")
    {
      Swal.fire(
          'Ya existe',
          data.msg + ' --> esta pregunta <br>ya existe en el examen',
          'error'
       )
    }
    else if(data.res == "success")
    {
      Swal.fire(
        'Pregunta añadida',
         data.msg + ' se ha añadido  <br>al examen correctamente',
        'success'
      )
        $('#addQuestionFrm')[0].reset();
        refreshDiv();
    }
   
  },'json')
  return false;
});


// Add Examinee
$(document).on("submit","#addExamineeFrm" , function(){
  $.post("query/addExamineeExe.php", $(this).serialize() , function(data){
    if(data.res == "noGender")
    {
      Swal.fire(
          'Error',
          'Por favor, seleccione el género',
          'error'
       )
    }
    else if(data.res == "noCourse")
    {
      Swal.fire(
          'Error',
          'Por favor, seleccione un curso',
          'error'
       )
    }
    else if(data.res == "noLevel")
    {
      Swal.fire(
          'Error',
          'Por favor, seleccione el grado',
          'error'
       )
    }
    else if(data.res == "fullnameExist")
    {
      Swal.fire(
          'El nombre ya existe',
          data.msg + ' ya existe',
          'error'
       )
    }
    else if(data.res == "emailExist")
    {
      Swal.fire(
          'El correo ya existe',
          data.msg + ' ya existe',
          'error'
       )
    }
    else if(data.res == "success")
    {
      Swal.fire(
          'Agregado',
          data.msg + ' se ha agregado correctamente',
          'success'
       )
        refreshDiv();
        $('#addExamineeFrm')[0].reset();
    }
    else if(data.res == "failed")
    {
      Swal.fire(
          "Ha ocuriido algo",
          '',
          'error'
       )
    }


    
  },'json')
  return false;
});



// Update Examinee
$(document).on("submit","#updateExamineeFrm" , function(){
  $.post("query/updateExamineeExe.php", $(this).serialize() , function(data){
     if(data.res == "success")
     {
        Swal.fire(
            'Actualizado',
            data.exFullname + ' <br>se han actulizado los datos correctamente',
            'success'
          )
          refreshDiv();
     }
  },'json')
  return false;
});


function refreshDiv()
{
  $('#tableList').load(document.URL +  ' #tableList');
  $('#refreshData').load(document.URL +  ' #refreshData');

}


