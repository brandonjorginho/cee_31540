<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading"><a href="home.php">Panel</a></li>

                <!-- Gestión de Textos -->
                <li class="app-sidebar__heading">Gestión de Textos</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-bookmarks"></i>
                        Textos
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#modalForAddText">
                                <i class="metismenu-icon"></i>
                                Añadir texto
                            </a>
                        </li>
                        <li>
                            <a href="home.php?page=manage-text">
                                <i class="metismenu-icon"></i>
                                Gestionar texto
                            </a>
                        </li>
                        <li>
                            <a href="home.php?page=view-text">
                                <i class="metismenu-icon"></i>
                                Ver texto(s)
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Gestión de Exámenes -->
                <li class="app-sidebar__heading">Gestión de Exámenes</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-note2"></i>
                        Exámenes
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#modalForExam">
                                <i class="metismenu-icon"></i>
                                Añadir examen
                            </a>
                        </li>
                        <li>
                            <a href="home.php?page=manage-exam">
                                <i class="metismenu-icon"></i>
                                Gestionar exámenes
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Gestión de Actividades -->
                <li class="app-sidebar__heading">Gestión de Actividades</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Actividades
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#modalForAddActivity">
                                <i class="metismenu-icon"></i>
                                Añadir actividad
                            </a>
                        </li>
                        <li>
                            <a href="home.php?page=manage-activity">
                                <i class="metismenu-icon"></i>
                                Gestionar actividades
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Otros menús (Gestión de Estudiantes, Ranking, Reportes, Comentarios) -->
                <li class="app-sidebar__heading">Gestión de Estudiantes</li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalForAddExaminee">
                        <i class="metismenu-icon pe-7s-add-user"></i>
                        Agregar estudiante
                    </a>
                </li>
                <li>
                    <a href="home.php?page=manage-examinee">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Gestionar estudiantes
                    </a>
                </li>

                <li class="app-sidebar__heading">Ranking</li>
                <li>
                    <a href="home.php?page=ranking-exam">
                        <i class="metismenu-icon pe-7s-cup"></i>
                        Clasificación por examen
                    </a>
                </li>

                <li class="app-sidebar__heading">Reportes</li>
                <li>
                    <a href="home.php?page=examinee-result">
                        <i class="metismenu-icon pe-7s-notebook"></i>
                        Resultados
                    </a>
                </li>

                <li class="app-sidebar__heading">Comentarios</li>
                <li>
                    <a href="home.php?page=feedbacks">
                        <i class="metismenu-icon pe-7s-chat"></i>
                        Todos los comentarios
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
