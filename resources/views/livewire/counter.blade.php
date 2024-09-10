<div>
    <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="d-flex flex-stack flex-row-fluid">
                <div class="d-flex flex-column flex-row-fluid">
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-3">
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                            <a href="index.html" class="text-white text-hover-primary">
                                <i class="ki-outline ki-home text-gray-700 fs-6"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-5 text-gray-700 mx-n1"></i>
                        </li>
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Pricing</li>
                    </ul>
                    <div class="page-title d-flex align-items-center me-3">
                        <h1
                            class="page-heading d-flex text-gray-900 fw-bolder fs-2qx flex-column justify-content-center my-0">
                            Agenda</h1>
                    </div>
                </div>
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-5">
                    <!--begin::Secondary button-->
                    <div class="m-0">
                        <!--begin::Menu-->
                        <a href="#" class="btn btn-flex btn-sm h-40px btn-light fw-bold"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">History</a>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                            id="kt_menu_66b9ab71b15ae">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple"
                                            data-kt-select2="true" data-close-on-select="false"
                                            data-placeholder="Select option"
                                            data-dropdown-parent="#kt_menu_66b9ab71b15ae" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2"
                                                checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                        data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary"
                                        data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="#" class="btn btn-flex btn-sm h-40px fw-bold btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_create_campaign">Nuevo
                    </a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
        </div>
    </div>

    <div id="kt_app_content" class="app-content">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row g-5">

                <!-- Primera Columna: ocupa 3 partes del ancho -->
                <div class="col-lg-3">
                    <div class="card mb-8">
                        <div class="card-body">

                            <form action="#">

                                <div class="position-relative mb-8">
                                    <ul class="nav nav-pills me-6 mb-2 mb-sm-0">
                                        <li class="nav-item m-0">
                                            <a id="fullscreen-btn"
                                                class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3">
                                                <i class="ki-outline ki-arrow-two-diagonals fs-2x"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item m-0">
                                            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active"
                                                data-bs-toggle="tab" href="#kt_project_users_card_pane">
                                                <i class="ki-outline ki-calendar fs-2"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item m-0">
                                            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_project_users_table_pane">
                                                <i class="ki-outline ki-row-horizontal fs-2"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="position-relative mb-8">
                                    <i
                                        class="ki-outline ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle ms-6"></i>
                                    <input type="text" class="form-control form-control-solid ps-10"
                                        name="search" value="" placeholder="Search" />
                                </div>

                                <div class="mb-5">
                                    <label class="fs-6 form-label fw-bold text-gray-900">Sede</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-placeholder="Select an option">
                                        <option></option>
                                        <option value="1">Frutillar</option>
                                        <option value="2" selected="selected">Santiago</option>
                                        <option value="2">Providencia</option>
                                        <option value="2">Las Condes</option>
                                    </select>
                                </div>

                                <div class="mb-5">
                                    <label class="fs-6 form-label fw-bold text-gray-900">Especialista</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-placeholder="Select an option">
                                        <option value="todos">Todos</option>
                                        <option value="1">Paula Sulayman</option>
                                        <option value="2" selected="selected">Georg Ksiri</option>
                                        <option value="3">Luis Solis</option>
                                    </select>
                                </div>
                                <div class="mb-5">
                                    <label class="fs-6 form-label fw-bold text-gray-900">Servicio</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-placeholder="Select an option">
                                        <option value=""></option>
                                        <option value="1">Mecanica</option>
                                        <option value="2" selected="selected">Manicure</option>
                                        <option value="3">Clase de Yoga</option>
                                    </select>
                                </div>
                                <div class="mb-5">
                                    <label class="fs-6 form-label fw-bold text-gray-900">Estado</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-placeholder="In Progress" data-hide-search="true">
                                        <option value=""></option>
                                        <option value="1">Confirmada</option>
                                        <option value="2" selected="selected">Cancelada</option>
                                    </select>
                                </div>

                                <div class="mb-10">
                                    <label for="" class="form-label">Fecha</label>
                                    <input class="form-control" placeholder="Fecha" id="kt_datepicker_1" />
                                </div>

                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="#"
                                        class="btn btn-active-light-primary btn-color-gray-500 me-3">Descartar</a>
                                    <a href="#" class="btn btn-primary">Buscar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Segunda Columna: ocupa el resto del ancho (9 partes) -->
                <div class="col-lg-9 tab-content" style="height: 100%;">
                    <div id="kt_project_users_card_pane" class="card mb-12 tab-pane fade show active"
                        style="height: 100%;">
                        <div class="card-body" style="height: 100%;">
                            <div id="kt_docs_fullcalendar_background_events" style="height: 100%;"></div>
                        </div>
                    </div>
                    <div id="kt_project_users_table_pane" class="card mb-12 tab-pane fade" style="height: 100%;">
                        <div class="card-body" style="height: 100%;">
                            <!--begin::Day-->
                            <div id="kt_schedule_day_9" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">16:30 - 17:30
                                            <span class="fs-7 text-muted text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Project Review &
                                            Testing</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">Lead by
                                            <a href="#">Kendell Trevor</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">11:00 - 11:45
                                            <span class="fs-7 text-muted text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Marketing
                                            Campaign Discussion</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">Lead by
                                            <a href="#">Mark Randall</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">10:00 - 11:00
                                            <span class="fs-7 text-muted text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Creative Content
                                            Initiative</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">Lead by
                                            <a href="#">Bob Harris</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">11:00 - 11:45
                                            <span class="fs-7 text-muted text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Team Backlog
                                            Grooming Session</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">Lead by
                                            <a href="#">Peter Marcus</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold ms-5">
                                        <!--begin::Time-->
                                        <div class="fs-7 mb-1">14:30 - 15:30
                                            <span class="fs-7 text-muted text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Creative Content
                                            Initiative</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="fs-7 text-muted">Lead by
                                            <a href="#">Karina Clarke</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
