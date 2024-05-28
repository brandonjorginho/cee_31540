<!-- Modal For Add Text -->
<div class="modal fade" id="modalForAddText" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="addTextFrm" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Añadir Texto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Título del texto</label>
            <input type="text" name="textTitle" id="textTitle" class="form-control" placeholder="Ingrese el título del texto" required autocomplete="off">
          </div>
          <div class="form-group">
            <label>Autor</label>
            <input type="text" name="authorName" id="authorName" class="form-control" placeholder="Ingrese el nombre del autor" required autocomplete="off">
          </div>
          <div class="form-group">
            <label>Descripción</label>
            <textarea name="textDescription" id="textDescription" class="form-control" rows="3" placeholder="Ingrese una pequeña descripción" required></textarea>
          </div>
          <div class="form-group">
            <label>Contenido</label>
            <textarea name="textContent" id="textContent" class="form-control" rows="5" placeholder="Ingrese el contenido del texto" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Añadir</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Modal For Add Activity -->
<div class="modal fade" id="modalForAddActivity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addActivityFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir actividad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Título de la actividad</label>
            <input type="text" name="activity_title" id="activity_title" class="form-control" placeholder="Ingrese el título de la actividad" required autocomplete="off">
          </div>
          <div class="form-group">
            <label>Tipo de actividad</label>
            <select class="form-control" name="activity_type" id="activity_type" required>
              <option value="">Seleccionar tipo</option>
              <option value="literal">Literal</option>
              <option value="inferencia">Inferencia</option>
              <option value="reflexion">Reflexión</option>
            </select>
          </div>
          <div class="form-group">
            <label>Descripción de la actividad</label>
            <textarea name="activity_description" id="activity_description" class="form-control" rows="4" placeholder="Ingrese la descripción de la actividad" required></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Añadir</button>
      </div>
    </div>
   </form>
  </div>
</div>




<!-- Modal For Add Course -->
<div class="modal fade" id="modalForAddCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addCourseFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Curso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Curso</label>
            <input type="" name="course_name" id="course_name" class="form-control" placeholder="Ingrese el nombre del curso" required="" autocomplete="off">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
    </div>
   </form>
  </div>
</div>


<!-- Modal For Update Course -->
<div class="modal fade myModal" id="updateCourse-<?php echo $selCourseRow['cou_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
     <form class="refreshFrm" id="addCourseFrm" method="post" >
       <div class="modal-content myModal-content" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar ( <?php echo $selCourseRow['cou_name']; ?> )</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-group">
              <label>Curso</label>
              <input type="" name="course_name" id="course_name" class="form-control" value="<?php echo $selCourseRow['cou_name']; ?>">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </div>
     </form>
    </div>
  </div>


<!-- Modal For Add Exam -->
<div class="modal fade" id="modalForExam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addExamFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir examen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Seleccionar curso</label>
            <select class="form-control" name="courseSelected">
              <option value="0">Seleccionar curso</option>
              <?php 
                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC");
                if($selCourse->rowCount() > 0)
                {
                  while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                     <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                  <?php }
                }
                else
                { ?>
                  <option value="0">No se ha encontrado ningún curso</option>
                <?php }
               ?>
            </select>
          </div>

          <div class="form-group">
            <label>Tiempo límite de examen</label>
            <select class="form-control" name="timeLimit" required="">
              <option value="0">Seleccionar tiempo</option>
              <option value="10">10 Minutos</option> 
              <option value="20">20 Minutos</option> 
              <option value="30">30 Minutos</option> 
              <option value="40">40 Minutos</option> 
              <option value="50">50 Minutos</option> 
              <option value="60">60 Minutos</option> 
            </select>
          </div>

          <div class="form-group">
            <label>Límite de preguntas a mostrar</label>
            <input type="number" name="examQuestDipLimit" id="" class="form-control" placeholder="Introduzca el límite de preguntas a mostrar">
          </div>

          <div class="form-group">
            <label>Título del examen</label>
            <input type="" name="examTitle" class="form-control" placeholder="Ingrese el título del examen" required="">
          </div>

          <div class="form-group">
            <label>Descripción</label>
            <textarea name="examDesc" class="form-control" rows="4" placeholder="Ingrese la descripción" required=""></textarea>
          </div>


        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Añadir</button>
      </div>
    </div>
   </form>
  </div>
</div>


<!-- Modal For Add Examinee -->
<div class="modal fade" id="modalForAddExaminee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addExamineeFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Nombre Completo</label>
            <input type="" name="fullname" id="fullname" class="form-control" placeholder="Ingrese su nombre completo" autocomplete="off" required="">
          </div>
          <div class="form-group">
            <label>Fecha de nacimiento</label>
            <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Ingrese la fecha de nacimiento del estudiante" autocomplete="off" >
          </div>
          <div class="form-group">
            <label>Género</label>
            <select class="form-control" name="gender" id="gender">
              <option value="0">Seleccionar</option>
              <option value="male">Masculino</option>
              <option value="female">Femenino</option>
            </select>
          </div>
          <!--<div class="form-group">
            <label>Curso</label>
            <select class="form-control" name="course" id="course">
              <option value="0">Seleccionar Curso</option>
              <?php 
                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                <?php }
               ?>
            </select>
          </div>!-->
          <div class="form-group">
            <label>Sección</label>
            <select class="form-control" name="year_level" id="year_level">
              <!--<option value="0">A que sección pertenece el estudiante</option>-->
              <option value="first year">A</option>
              <option value="second year">B</option>
              <option value="third year">C</option>
              <option value="fourth year">D</option>
              <option value="five year">E</option>
              <option value="six year">F</option>
              <option value="seven year">G</option>
              <option value="eighyt year">H</option>
            </select>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Ingresar email" autocomplete="off" required="">
          </div>
          <div class="form-group">
            <label>Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Ingresar contraseña" autocomplete="off" required="">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Añadir</button>
      </div>
    </div>
   </form>
  </div>
</div>



<!-- Modal For Add Question -->
<div class="modal fade" id="modalForAddQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addQuestionFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir pregunta del curso de:  <br><?php echo $selExamRow['ex_title']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="refreshFrm" method="post" id="addQuestionFrm">
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Pregunta</label>
            <input type="hidden" name="examId" value="<?php echo $exId; ?>">
            <input type="" name="question" id="course_name" class="form-control" placeholder="Ingrese la pregunta" autocomplete="off">
          </div>

          <fieldset>
            <legend>Ingrese las alternativas</legend>
            <div class="form-group">
                <label>Alternativa A</label>
                <input type="" name="choice_A" id="choice_A" class="form-control" placeholder="Ingrese la alternativa A" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Alternativa B</label>
                <input type="" name="choice_B" id="choice_B" class="form-control" placeholder="Ingrese la alternativa B" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Alternativa C</label>
                <input type="" name="choice_C" id="choice_C" class="form-control" placeholder="Ingrese la alternativa C" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Alternativa D</label>
                <input type="" name="choice_D" id="choice_D" class="form-control" placeholder="Ingrese la alternativa D" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Respuesta correcta</label>
                <input type="" name="correctAnswer" id="" class="form-control" placeholder="Ingrese la alternativa correcta" autocomplete="off">
            </div>
          </fieldset>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Añadir</button>
      </div>
      </form>
    </div>
   </form>
  </div>
</div>