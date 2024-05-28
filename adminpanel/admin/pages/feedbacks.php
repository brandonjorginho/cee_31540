<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div><b>COMENTARIOS</b></div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Lista de comentarios
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                        <thead>
                            <tr>
                                <th class="text-left pl-4" width="20%">Estudiante</th>
                                <th class="text-left ">Comentario</th>
                                <th class="text-center" width="15%">Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $selExam = $conn->query("SELECT * FROM feedbacks_tbl ORDER BY fb_id DESC ");
                            if ($selExam->rowCount() > 0) {
                                while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        <td class="pl-4"><?php echo $selExamRow['fb_exmne_as']; ?></td>
                                        <td><?php echo $selExamRow['fb_feedbacks']; ?></td>
                                        <td><?php echo $selExamRow['fb_date']; ?></td>
                                    </tr>

                                <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="5">
                                        <h3 class="p-3">No se han encontrado comentarios</h3>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>