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
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Especialista</li>
                    </ul>
                    <div class="page-title d-flex align-items-center me-3">
                        <h1
                            class="page-heading d-flex text-gray-900 fw-bolder fs-2qx flex-column justify-content-center my-0">
                            Especialista</h1>
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

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                            <input type="text" data-kt-user-table-filter="search"
                                class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">

                            <!--begin::Export-->
                            <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_export_users">
                                <i class="ki-outline ki-exit-up fs-2"></i>Export</button>
                            <!--end::Export-->
                            <!--begin::Add user-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_add_user">
                                <i class="ki-outline ki-plus fs-2"></i>Nuevo Especialista</button>
                            <!--end::Add user-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none"
                            data-kt-user-table-toolbar="selected">
                            <div class="fw-bold me-5">
                                <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                            </div>
                            <button type="button" class="btn btn-danger"
                                data-kt-user-table-select="delete_selected">Delete Selected</button>
                        </div>
                        <!--end::Group actions-->
                        <!--begin::Modal - Adjust Balance-->
                        <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Exportar Especialistas</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                            data-kt-users-modal-action="close">
                                            <i class="ki-outline ki-cross fs-1"></i>
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                        <!--begin::Form-->
                                        <form id="kt_modal_export_users_form" class="form" action="#">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold form-label mb-2">Seleccionar
                                                    Formato:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="format" data-control="select2"
                                                    data-placeholder="Seleccionar formato" data-hide-search="true"
                                                    class="form-select form-select-solid fw-bold">
                                                    <option></option>
                                                    <option value="excel">Excel</option>
                                                    <option value="pdf">PDF</option>
                                                    <option value="cvs">CVS</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="text-center">
                                                <button type="reset" class="btn btn-light me-3"
                                                    data-kt-users-modal-action="cancel">Discard</button>
                                                <button type="submit" class="btn btn-primary"
                                                    data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">Submit</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - New Card-->
                        <!--begin::Modal - Add task-->
                        <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header" id="kt_modal_add_user_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Nuevo Especialista</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                            data-kt-users-modal-action="close">
                                            <i class="ki-outline ki-cross fs-1"></i>
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body px-5 my-7">
                                        <!--begin::Form-->
                                        <form id="kt_modal_add_especialista_form" class="form" action="#">
                                            <!--begin::Scroll-->
                                            <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                                                data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                data-kt-scroll-offset="300px">
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="d-block fw-semibold fs-6 mb-5">Avatar</label>
                                                    <!--end::Label-->
                                                    <!--begin::Image placeholder-->
                                                    <style>
                                                        .image-input-placeholder {
                                                            background-image: url('assets/media/svg/files/blank-image.svg');
                                                        }

                                                        [data-bs-theme="dark"] .image-input-placeholder {
                                                            background-image: url('assets/media/svg/files/blank-image-dark.svg');
                                                        }
                                                    </style>
                                                    <!--end::Image placeholder-->
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline image-input-placeholder"
                                                        data-kt-image-input="true">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-125px h-125px"
                                                            style="background-image: url(assets/media/avatars/300-6.jpg);">
                                                        </div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="change"
                                                            data-bs-toggle="tooltip" title="Change avatar">
                                                            <i class="ki-outline ki-pencil fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="avatar"
                                                                accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="avatar_remove" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="cancel"
                                                            data-bs-toggle="tooltip" title="Cancel avatar">
                                                            <i class="ki-outline ki-cross fs-2"></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="remove"
                                                            data-bs-toggle="tooltip" title="Remove avatar">
                                                            <i class="ki-outline ki-cross fs-2"></i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Hint-->
                                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--begin::Input group-->
                                                <div class="row">
                                                    <!-- Nombres y Apellido en una fila -->
                                                    <div class="col-md-6">
                                                        <div class="fv-row mb-7">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">Nombres</label>
                                                            <input type="text" name="user_name"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="Lyanna" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="fv-row mb-7">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">Apellido</label>
                                                            <input type="text" name="user_name"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="Ksiri" value="" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <!-- Email y Especialidad en una fila -->
                                                    <div class="col-md-6">
                                                        <div class="fv-row mb-7">
                                                            <label class="required fw-semibold fs-6 mb-2">Email</label>
                                                            <input type="email" name="user_email"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="example@domain.com" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="fv-row mb-7">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">Especialidad</label>
                                                            <input class="form-control form-control-solid"
                                                                value="" id="kt_tagify_7" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <!-- Rut y Teléfono en una fila -->
                                                    <div class="col-md-6">
                                                        <div class="fv-row mb-7">
                                                            <label class="required fw-semibold fs-6 mb-2">Rut</label>
                                                            <input type="text" name="rut"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="11111111-1" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="fv-row mb-7">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">Télefono</label>
                                                            <input type="numeric" name="phone"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="+56912341234" value="" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <!-- Fecha de Nacimiento en una fila completa -->
                                                    <div class="col-md-6">
                                                        <div class="fv-row mb-7">
                                                            <label class="required fw-semibold fs-6 mb-2">Fecha de Nac.</label>
                                                            <input class="form-control form-control-solid"
                                                                placeholder="31-01-2024" id="kt_daterangepicker_3" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="fv-row mb-7">
                                                            <label class="required fw-semibold fs-6 mb-2">Sucursal</label>
                                                            <select class="form-select form-select-solid"
                                                                data-placeholder="Selecciona Hora" id="kt_hora">
                                                                <option value="default" selected="selected">Sucursal 1</option>
                                                                <option value="electronics">Sucursal 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--end::Scroll-->
                                                <!--begin::Tables Widget 9-->
                                                <div class="card mb-5 mb-xl-7">
                                                    <!--begin::Header-->
                                                    <div class="card-header border-0 pt-5">
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold fs-3 mb-1">Horario de
                                                                Especialista</span>
                                                            <span class="text-muted mt-1 fw-semibold fs-7">texto de
                                                                ayuda</span>
                                                        </h3>
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Body-->
                                                    <div class="card-body py-3">
                                                        <!--begin::Table container-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table
                                                                class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr class="fw-bold text-muted">
                                                                        <th class="min-w-75px">Dia</th>
                                                                        <th class="min-w-50px">Inicio</th>
                                                                        <th class="min-w-50px">Fin</th>
                                                                        <th class="min-w-150px text-center">Descanso</th>
                                                                        <th class="min-w-100px text-end">Estado</th>
                                                                    </tr>
                                                                </thead>
                                                                <!--end::Table head-->
                                                                <!--begin::Table body-->
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <span
                                                                                        class="text-gray-900 fw-bold text-hover-primary fs-6">Lunes</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row d-flex g-1">
                                                                                <!-- Selector de hora -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Hora"
                                                                                        id="kt_hora">
                                                                                        <option value="default"
                                                                                            selected="selected">09
                                                                                        </option>
                                                                                        <option value="electronics">10
                                                                                        </option>
                                                                                        <option value="office">11
                                                                                        </option>
                                                                                        <option value="fashion">12
                                                                                        </option>
                                                                                        <option value="fashion">13
                                                                                        </option>
                                                                                        <option value="fashion">14
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">16
                                                                                        </option>
                                                                                        <option value="fashion">17
                                                                                        </option>
                                                                                        <option value="fashion">18
                                                                                        </option>
                                                                                        <option value="fashion">19
                                                                                        </option>
                                                                                        <option value="fashion">21
                                                                                        </option>
                                                                                        <option value="fashion">22
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Selector de minutos -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Minutos"
                                                                                        id="kt_minutos">
                                                                                        <option value="default"
                                                                                            selected="selected">00
                                                                                        </option>
                                                                                        <option value="electronics">05
                                                                                        </option>
                                                                                        <option value="office">10
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">20
                                                                                        </option>
                                                                                        <option value="fashion">25
                                                                                        </option>
                                                                                        <option value="fashion">30
                                                                                        </option>
                                                                                        <option value="fashion">35
                                                                                        </option>
                                                                                        <option value="fashion">40
                                                                                        </option>
                                                                                        <option value="fashion">45
                                                                                        </option>
                                                                                        <option value="fashion">50
                                                                                        </option>
                                                                                        <option value="fashion">55
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row d-flex g-1">
                                                                                <!-- Selector de hora -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Hora"
                                                                                        id="kt_hora">
                                                                                        <option value="default"
                                                                                            selected="selected">09
                                                                                        </option>
                                                                                        <option value="electronics">10
                                                                                        </option>
                                                                                        <option value="office">11
                                                                                        </option>
                                                                                        <option value="fashion">12
                                                                                        </option>
                                                                                        <option value="fashion">13
                                                                                        </option>
                                                                                        <option value="fashion">14
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">16
                                                                                        </option>
                                                                                        <option value="fashion">17
                                                                                        </option>
                                                                                        <option value="fashion">18
                                                                                        </option>
                                                                                        <option value="fashion">19
                                                                                        </option>
                                                                                        <option value="fashion">21
                                                                                        </option>
                                                                                        <option value="fashion">22
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Selector de minutos -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Minutos"
                                                                                        id="kt_minutos">
                                                                                        <option value="default"
                                                                                            selected="selected">00
                                                                                        </option>
                                                                                        <option value="electronics">05
                                                                                        </option>
                                                                                        <option value="office">10
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">20
                                                                                        </option>
                                                                                        <option value="fashion">25
                                                                                        </option>
                                                                                        <option value="fashion">30
                                                                                        </option>
                                                                                        <option value="fashion">35
                                                                                        </option>
                                                                                        <option value="fashion">40
                                                                                        </option>
                                                                                        <option value="fashion">45
                                                                                        </option>
                                                                                        <option value="fashion">50
                                                                                        </option>
                                                                                        <option value="fashion">55
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td class="text-end">
                                                                            <label
                                                                                class="form-switch form-check-solid">
                                                                                <!-- Input -->
                                                                                <input class="form-check-input"
                                                                                    name="billing" type="checkbox"
                                                                                    value="1"
                                                                                    id="kt_modal_add_customer_billing"
                                                                                    checked="checked">
                                                                                <!-- Label -->
                                                                                <span
                                                                                    class="form-check-label fw-semibold text-muted"
                                                                                    for="kt_modal_add_customer_billing"></span>
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <span
                                                                                        class="text-gray-900 fw-bold text-hover-primary fs-6">Martes</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row d-flex g-1">
                                                                                <!-- Selector de hora -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Hora"
                                                                                        id="kt_hora">
                                                                                        <option value="default"
                                                                                            selected="selected">09
                                                                                        </option>
                                                                                        <option value="electronics">10
                                                                                        </option>
                                                                                        <option value="office">11
                                                                                        </option>
                                                                                        <option value="fashion">12
                                                                                        </option>
                                                                                        <option value="fashion">13
                                                                                        </option>
                                                                                        <option value="fashion">14
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">16
                                                                                        </option>
                                                                                        <option value="fashion">17
                                                                                        </option>
                                                                                        <option value="fashion">18
                                                                                        </option>
                                                                                        <option value="fashion">19
                                                                                        </option>
                                                                                        <option value="fashion">21
                                                                                        </option>
                                                                                        <option value="fashion">22
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Selector de minutos -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Minutos"
                                                                                        id="kt_minutos">
                                                                                        <option value="default"
                                                                                            selected="selected">00
                                                                                        </option>
                                                                                        <option value="electronics">05
                                                                                        </option>
                                                                                        <option value="office">10
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">20
                                                                                        </option>
                                                                                        <option value="fashion">25
                                                                                        </option>
                                                                                        <option value="fashion">30
                                                                                        </option>
                                                                                        <option value="fashion">35
                                                                                        </option>
                                                                                        <option value="fashion">40
                                                                                        </option>
                                                                                        <option value="fashion">45
                                                                                        </option>
                                                                                        <option value="fashion">50
                                                                                        </option>
                                                                                        <option value="fashion">55
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row d-flex g-1">
                                                                                <!-- Selector de hora -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Hora"
                                                                                        id="kt_hora">
                                                                                        <option value="default"
                                                                                            selected="selected">09
                                                                                        </option>
                                                                                        <option value="electronics">10
                                                                                        </option>
                                                                                        <option value="office">11
                                                                                        </option>
                                                                                        <option value="fashion">12
                                                                                        </option>
                                                                                        <option value="fashion">13
                                                                                        </option>
                                                                                        <option value="fashion">14
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">16
                                                                                        </option>
                                                                                        <option value="fashion">17
                                                                                        </option>
                                                                                        <option value="fashion">18
                                                                                        </option>
                                                                                        <option value="fashion">19
                                                                                        </option>
                                                                                        <option value="fashion">21
                                                                                        </option>
                                                                                        <option value="fashion">22
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Selector de minutos -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Minutos"
                                                                                        id="kt_minutos">
                                                                                        <option value="default"
                                                                                            selected="selected">00
                                                                                        </option>
                                                                                        <option value="electronics">05
                                                                                        </option>
                                                                                        <option value="office">10
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">20
                                                                                        </option>
                                                                                        <option value="fashion">25
                                                                                        </option>
                                                                                        <option value="fashion">30
                                                                                        </option>
                                                                                        <option value="fashion">35
                                                                                        </option>
                                                                                        <option value="fashion">40
                                                                                        </option>
                                                                                        <option value="fashion">45
                                                                                        </option>
                                                                                        <option value="fashion">50
                                                                                        </option>
                                                                                        <option value="fashion">55
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td class="text-end">
                                                                            <label
                                                                                class="form-switch form-check-solid">
                                                                                <!-- Input -->
                                                                                <input class="form-check-input"
                                                                                    name="billing" type="checkbox"
                                                                                    value="1"
                                                                                    id="kt_modal_add_customer_billing"
                                                                                    checked="checked">
                                                                                <!-- Label -->
                                                                                <span
                                                                                    class="form-check-label fw-semibold text-muted"
                                                                                    for="kt_modal_add_customer_billing"></span>
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <span
                                                                                        class="text-gray-900 fw-bold text-hover-primary fs-6">Miercoles</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row d-flex g-1">
                                                                                <!-- Selector de hora -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Hora"
                                                                                        id="kt_hora">
                                                                                        <option value="default"
                                                                                            selected="selected">09
                                                                                        </option>
                                                                                        <option value="electronics">10
                                                                                        </option>
                                                                                        <option value="office">11
                                                                                        </option>
                                                                                        <option value="fashion">12
                                                                                        </option>
                                                                                        <option value="fashion">13
                                                                                        </option>
                                                                                        <option value="fashion">14
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">16
                                                                                        </option>
                                                                                        <option value="fashion">17
                                                                                        </option>
                                                                                        <option value="fashion">18
                                                                                        </option>
                                                                                        <option value="fashion">19
                                                                                        </option>
                                                                                        <option value="fashion">21
                                                                                        </option>
                                                                                        <option value="fashion">22
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Selector de minutos -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Minutos"
                                                                                        id="kt_minutos">
                                                                                        <option value="default"
                                                                                            selected="selected">00
                                                                                        </option>
                                                                                        <option value="electronics">05
                                                                                        </option>
                                                                                        <option value="office">10
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">20
                                                                                        </option>
                                                                                        <option value="fashion">25
                                                                                        </option>
                                                                                        <option value="fashion">30
                                                                                        </option>
                                                                                        <option value="fashion">35
                                                                                        </option>
                                                                                        <option value="fashion">40
                                                                                        </option>
                                                                                        <option value="fashion">45
                                                                                        </option>
                                                                                        <option value="fashion">50
                                                                                        </option>
                                                                                        <option value="fashion">55
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row d-flex g-1">
                                                                                <!-- Selector de hora -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Hora"
                                                                                        id="kt_hora">
                                                                                        <option value="default"
                                                                                            selected="selected">09
                                                                                        </option>
                                                                                        <option value="electronics">10
                                                                                        </option>
                                                                                        <option value="office">11
                                                                                        </option>
                                                                                        <option value="fashion">12
                                                                                        </option>
                                                                                        <option value="fashion">13
                                                                                        </option>
                                                                                        <option value="fashion">14
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">16
                                                                                        </option>
                                                                                        <option value="fashion">17
                                                                                        </option>
                                                                                        <option value="fashion">18
                                                                                        </option>
                                                                                        <option value="fashion">19
                                                                                        </option>
                                                                                        <option value="fashion">21
                                                                                        </option>
                                                                                        <option value="fashion">22
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Selector de minutos -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Minutos"
                                                                                        id="kt_minutos">
                                                                                        <option value="default"
                                                                                            selected="selected">00
                                                                                        </option>
                                                                                        <option value="electronics">05
                                                                                        </option>
                                                                                        <option value="office">10
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">20
                                                                                        </option>
                                                                                        <option value="fashion">25
                                                                                        </option>
                                                                                        <option value="fashion">30
                                                                                        </option>
                                                                                        <option value="fashion">35
                                                                                        </option>
                                                                                        <option value="fashion">40
                                                                                        </option>
                                                                                        <option value="fashion">45
                                                                                        </option>
                                                                                        <option value="fashion">50
                                                                                        </option>
                                                                                        <option value="fashion">55
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td class="text-end">
                                                                            <label
                                                                                class="form-switch form-check-solid">
                                                                                <!-- Input -->
                                                                                <input class="form-check-input"
                                                                                    name="billing" type="checkbox"
                                                                                    value="1"
                                                                                    id="kt_modal_add_customer_billing"
                                                                                    checked="checked">
                                                                                <!-- Label -->
                                                                                <span
                                                                                    class="form-check-label fw-semibold text-muted"
                                                                                    for="kt_modal_add_customer_billing"></span>
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <span
                                                                                        class="text-gray-900 fw-bold text-hover-primary fs-6">Jueves</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row d-flex g-1">
                                                                                <!-- Selector de hora -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Hora"
                                                                                        id="kt_hora">
                                                                                        <option value="default"
                                                                                            selected="selected">09
                                                                                        </option>
                                                                                        <option value="electronics">10
                                                                                        </option>
                                                                                        <option value="office">11
                                                                                        </option>
                                                                                        <option value="fashion">12
                                                                                        </option>
                                                                                        <option value="fashion">13
                                                                                        </option>
                                                                                        <option value="fashion">14
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">16
                                                                                        </option>
                                                                                        <option value="fashion">17
                                                                                        </option>
                                                                                        <option value="fashion">18
                                                                                        </option>
                                                                                        <option value="fashion">19
                                                                                        </option>
                                                                                        <option value="fashion">21
                                                                                        </option>
                                                                                        <option value="fashion">22
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Selector de minutos -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Minutos"
                                                                                        id="kt_minutos">
                                                                                        <option value="default"
                                                                                            selected="selected">00
                                                                                        </option>
                                                                                        <option value="electronics">05
                                                                                        </option>
                                                                                        <option value="office">10
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">20
                                                                                        </option>
                                                                                        <option value="fashion">25
                                                                                        </option>
                                                                                        <option value="fashion">30
                                                                                        </option>
                                                                                        <option value="fashion">35
                                                                                        </option>
                                                                                        <option value="fashion">40
                                                                                        </option>
                                                                                        <option value="fashion">45
                                                                                        </option>
                                                                                        <option value="fashion">50
                                                                                        </option>
                                                                                        <option value="fashion">55
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row d-flex g-1">
                                                                                <!-- Selector de hora -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Hora"
                                                                                        id="kt_hora">
                                                                                        <option value="default"
                                                                                            selected="selected">09
                                                                                        </option>
                                                                                        <option value="electronics">10
                                                                                        </option>
                                                                                        <option value="office">11
                                                                                        </option>
                                                                                        <option value="fashion">12
                                                                                        </option>
                                                                                        <option value="fashion">13
                                                                                        </option>
                                                                                        <option value="fashion">14
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">16
                                                                                        </option>
                                                                                        <option value="fashion">17
                                                                                        </option>
                                                                                        <option value="fashion">18
                                                                                        </option>
                                                                                        <option value="fashion">19
                                                                                        </option>
                                                                                        <option value="fashion">21
                                                                                        </option>
                                                                                        <option value="fashion">22
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Selector de minutos -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Minutos"
                                                                                        id="kt_minutos">
                                                                                        <option value="default"
                                                                                            selected="selected">00
                                                                                        </option>
                                                                                        <option value="electronics">05
                                                                                        </option>
                                                                                        <option value="office">10
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">20
                                                                                        </option>
                                                                                        <option value="fashion">25
                                                                                        </option>
                                                                                        <option value="fashion">30
                                                                                        </option>
                                                                                        <option value="fashion">35
                                                                                        </option>
                                                                                        <option value="fashion">40
                                                                                        </option>
                                                                                        <option value="fashion">45
                                                                                        </option>
                                                                                        <option value="fashion">50
                                                                                        </option>
                                                                                        <option value="fashion">55
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td class="text-end">
                                                                            <label
                                                                                class="form-switch form-check-solid">
                                                                                <!-- Input -->
                                                                                <input class="form-check-input"
                                                                                    name="billing" type="checkbox"
                                                                                    value="1"
                                                                                    id="kt_modal_add_customer_billing"
                                                                                    checked="checked">
                                                                                <!-- Label -->
                                                                                <span
                                                                                    class="form-check-label fw-semibold text-muted"
                                                                                    for="kt_modal_add_customer_billing"></span>
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <span
                                                                                        class="text-gray-900 fw-bold text-hover-primary fs-6">Viernes</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row d-flex g-1">
                                                                                <!-- Selector de hora -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Hora"
                                                                                        id="kt_hora">
                                                                                        <option value="default"
                                                                                            selected="selected">09
                                                                                        </option>
                                                                                        <option value="electronics">10
                                                                                        </option>
                                                                                        <option value="office">11
                                                                                        </option>
                                                                                        <option value="fashion">12
                                                                                        </option>
                                                                                        <option value="fashion">13
                                                                                        </option>
                                                                                        <option value="fashion">14
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">16
                                                                                        </option>
                                                                                        <option value="fashion">17
                                                                                        </option>
                                                                                        <option value="fashion">18
                                                                                        </option>
                                                                                        <option value="fashion">19
                                                                                        </option>
                                                                                        <option value="fashion">21
                                                                                        </option>
                                                                                        <option value="fashion">22
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Selector de minutos -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Minutos"
                                                                                        id="kt_minutos">
                                                                                        <option value="default"
                                                                                            selected="selected">00
                                                                                        </option>
                                                                                        <option value="electronics">05
                                                                                        </option>
                                                                                        <option value="office">10
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">20
                                                                                        </option>
                                                                                        <option value="fashion">25
                                                                                        </option>
                                                                                        <option value="fashion">30
                                                                                        </option>
                                                                                        <option value="fashion">35
                                                                                        </option>
                                                                                        <option value="fashion">40
                                                                                        </option>
                                                                                        <option value="fashion">45
                                                                                        </option>
                                                                                        <option value="fashion">50
                                                                                        </option>
                                                                                        <option value="fashion">55
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row d-flex g-1">
                                                                                <!-- Selector de hora -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Hora"
                                                                                        id="kt_hora">
                                                                                        <option value="default"
                                                                                            selected="selected">09
                                                                                        </option>
                                                                                        <option value="electronics">10
                                                                                        </option>
                                                                                        <option value="office">11
                                                                                        </option>
                                                                                        <option value="fashion">12
                                                                                        </option>
                                                                                        <option value="fashion">13
                                                                                        </option>
                                                                                        <option value="fashion">14
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">16
                                                                                        </option>
                                                                                        <option value="fashion">17
                                                                                        </option>
                                                                                        <option value="fashion">18
                                                                                        </option>
                                                                                        <option value="fashion">19
                                                                                        </option>
                                                                                        <option value="fashion">21
                                                                                        </option>
                                                                                        <option value="fashion">22
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Selector de minutos -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Minutos"
                                                                                        id="kt_minutos">
                                                                                        <option value="default"
                                                                                            selected="selected">00
                                                                                        </option>
                                                                                        <option value="electronics">05
                                                                                        </option>
                                                                                        <option value="office">10
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">20
                                                                                        </option>
                                                                                        <option value="fashion">25
                                                                                        </option>
                                                                                        <option value="fashion">30
                                                                                        </option>
                                                                                        <option value="fashion">35
                                                                                        </option>
                                                                                        <option value="fashion">40
                                                                                        </option>
                                                                                        <option value="fashion">45
                                                                                        </option>
                                                                                        <option value="fashion">50
                                                                                        </option>
                                                                                        <option value="fashion">55
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td class="text-end">
                                                                            <label
                                                                                class="form-switch form-check-solid">
                                                                                <!-- Input -->
                                                                                <input class="form-check-input"
                                                                                    name="billing" type="checkbox"
                                                                                    value="1"
                                                                                    id="kt_modal_add_customer_billing"
                                                                                    checked="checked">
                                                                                <!-- Label -->
                                                                                <span
                                                                                    class="form-check-label fw-semibold text-muted"
                                                                                    for="kt_modal_add_customer_billing"></span>
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <span
                                                                                        class="text-gray-900 fw-bold text-hover-primary fs-6">Sabado</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row d-flex g-1">
                                                                                <!-- Selector de hora -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Hora"
                                                                                        id="kt_hora">
                                                                                        <option value="default"
                                                                                            selected="selected">09
                                                                                        </option>
                                                                                        <option value="electronics">10
                                                                                        </option>
                                                                                        <option value="office">11
                                                                                        </option>
                                                                                        <option value="fashion">12
                                                                                        </option>
                                                                                        <option value="fashion">13
                                                                                        </option>
                                                                                        <option value="fashion">14
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">16
                                                                                        </option>
                                                                                        <option value="fashion">17
                                                                                        </option>
                                                                                        <option value="fashion">18
                                                                                        </option>
                                                                                        <option value="fashion">19
                                                                                        </option>
                                                                                        <option value="fashion">21
                                                                                        </option>
                                                                                        <option value="fashion">22
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Selector de minutos -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Minutos"
                                                                                        id="kt_minutos">
                                                                                        <option value="default"
                                                                                            selected="selected">00
                                                                                        </option>
                                                                                        <option value="electronics">05
                                                                                        </option>
                                                                                        <option value="office">10
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">20
                                                                                        </option>
                                                                                        <option value="fashion">25
                                                                                        </option>
                                                                                        <option value="fashion">30
                                                                                        </option>
                                                                                        <option value="fashion">35
                                                                                        </option>
                                                                                        <option value="fashion">40
                                                                                        </option>
                                                                                        <option value="fashion">45
                                                                                        </option>
                                                                                        <option value="fashion">50
                                                                                        </option>
                                                                                        <option value="fashion">55
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row d-flex g-1">
                                                                                <!-- Selector de hora -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Hora"
                                                                                        id="kt_hora">
                                                                                        <option value="default"
                                                                                            selected="selected">09
                                                                                        </option>
                                                                                        <option value="electronics">10
                                                                                        </option>
                                                                                        <option value="office">11
                                                                                        </option>
                                                                                        <option value="fashion">12
                                                                                        </option>
                                                                                        <option value="fashion">13
                                                                                        </option>
                                                                                        <option value="fashion">14
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">16
                                                                                        </option>
                                                                                        <option value="fashion">17
                                                                                        </option>
                                                                                        <option value="fashion">18
                                                                                        </option>
                                                                                        <option value="fashion">19
                                                                                        </option>
                                                                                        <option value="fashion">21
                                                                                        </option>
                                                                                        <option value="fashion">22
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Selector de minutos -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Minutos"
                                                                                        id="kt_minutos">
                                                                                        <option value="default"
                                                                                            selected="selected">00
                                                                                        </option>
                                                                                        <option value="electronics">05
                                                                                        </option>
                                                                                        <option value="office">10
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">20
                                                                                        </option>
                                                                                        <option value="fashion">25
                                                                                        </option>
                                                                                        <option value="fashion">30
                                                                                        </option>
                                                                                        <option value="fashion">35
                                                                                        </option>
                                                                                        <option value="fashion">40
                                                                                        </option>
                                                                                        <option value="fashion">45
                                                                                        </option>
                                                                                        <option value="fashion">50
                                                                                        </option>
                                                                                        <option value="fashion">55
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td class="text-end">
                                                                            <label
                                                                                class="form-switch form-check-solid">
                                                                                <!-- Input -->
                                                                                <input class="form-check-input"
                                                                                    name="billing" type="checkbox"
                                                                                    value="1"
                                                                                    id="kt_modal_add_customer_billing"
                                                                                    checked="checked">
                                                                                <!-- Label -->
                                                                                <span
                                                                                    class="form-check-label fw-semibold text-muted"
                                                                                    for="kt_modal_add_customer_billing"></span>
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <span
                                                                                        class="text-gray-900 fw-bold text-hover-primary fs-6">Domingo</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row d-flex g-1">
                                                                                <!-- Selector de hora -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Hora"
                                                                                        id="kt_hora">
                                                                                        <option value="default"
                                                                                            selected="selected">09
                                                                                        </option>
                                                                                        <option value="electronics">10
                                                                                        </option>
                                                                                        <option value="office">11
                                                                                        </option>
                                                                                        <option value="fashion">12
                                                                                        </option>
                                                                                        <option value="fashion">13
                                                                                        </option>
                                                                                        <option value="fashion">14
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">16
                                                                                        </option>
                                                                                        <option value="fashion">17
                                                                                        </option>
                                                                                        <option value="fashion">18
                                                                                        </option>
                                                                                        <option value="fashion">19
                                                                                        </option>
                                                                                        <option value="fashion">21
                                                                                        </option>
                                                                                        <option value="fashion">22
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Selector de minutos -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Minutos"
                                                                                        id="kt_minutos">
                                                                                        <option value="default"
                                                                                            selected="selected">00
                                                                                        </option>
                                                                                        <option value="electronics">05
                                                                                        </option>
                                                                                        <option value="office">10
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">20
                                                                                        </option>
                                                                                        <option value="fashion">25
                                                                                        </option>
                                                                                        <option value="fashion">30
                                                                                        </option>
                                                                                        <option value="fashion">35
                                                                                        </option>
                                                                                        <option value="fashion">40
                                                                                        </option>
                                                                                        <option value="fashion">45
                                                                                        </option>
                                                                                        <option value="fashion">50
                                                                                        </option>
                                                                                        <option value="fashion">55
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="row d-flex g-1">
                                                                                <!-- Selector de hora -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Hora"
                                                                                        id="kt_hora">
                                                                                        <option value="default"
                                                                                            selected="selected">09
                                                                                        </option>
                                                                                        <option value="electronics">10
                                                                                        </option>
                                                                                        <option value="office">11
                                                                                        </option>
                                                                                        <option value="fashion">12
                                                                                        </option>
                                                                                        <option value="fashion">13
                                                                                        </option>
                                                                                        <option value="fashion">14
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">16
                                                                                        </option>
                                                                                        <option value="fashion">17
                                                                                        </option>
                                                                                        <option value="fashion">18
                                                                                        </option>
                                                                                        <option value="fashion">19
                                                                                        </option>
                                                                                        <option value="fashion">21
                                                                                        </option>
                                                                                        <option value="fashion">22
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- Selector de minutos -->
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="form-select form-select-sm"
                                                                                        data-placeholder="Selecciona Minutos"
                                                                                        id="kt_minutos">
                                                                                        <option value="default"
                                                                                            selected="selected">00
                                                                                        </option>
                                                                                        <option value="electronics">05
                                                                                        </option>
                                                                                        <option value="office">10
                                                                                        </option>
                                                                                        <option value="fashion">15
                                                                                        </option>
                                                                                        <option value="fashion">20
                                                                                        </option>
                                                                                        <option value="fashion">25
                                                                                        </option>
                                                                                        <option value="fashion">30
                                                                                        </option>
                                                                                        <option value="fashion">35
                                                                                        </option>
                                                                                        <option value="fashion">40
                                                                                        </option>
                                                                                        <option value="fashion">45
                                                                                        </option>
                                                                                        <option value="fashion">50
                                                                                        </option>
                                                                                        <option value="fashion">55
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td class="text-end">
                                                                            <label
                                                                                class="form-switch form-check-solid">
                                                                                <!-- Input -->
                                                                                <input class="form-check-input"
                                                                                    name="billing" type="checkbox"
                                                                                    value="1"
                                                                                    id="kt_modal_add_customer_billing"
                                                                                    checked="checked">
                                                                                <!-- Label -->
                                                                                <span
                                                                                    class="form-check-label fw-semibold text-muted"
                                                                                    for="kt_modal_add_customer_billing"></span>
                                                                            </label>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table container-->
                                                    </div>
                                                    <!--begin::Body-->
                                                </div>
                                            </div>
                                            <!--end::Tables Widget 9-->
                                            <!--begin::Actions-->
                                            <div class="text-center pt-10">
                                                <button type="reset" class="btn btn-light me-3"
                                                    data-kt-users-modal-action="cancel">Cancelar</button>
                                                <button type="submit" class="btn btn-primary"
                                                    data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">Guardar</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Modal body-->

                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - Add task-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                            data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px">Nombre</th>
                                <th class="min-w-125px">Apellido</th>
                                <th class="min-w-125px">Rut</th>
                                <th class="min-w-125px">Télefono</th>
                                <th class="min-w-125px">Cumpleaños</th>
                                <th class="text-end min-w-100px">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-6.jpg" alt="Emma Smith"
                                                    class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <a href="apps/user-management/users/view.html"
                                            class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                                        <span>smith@kpmg.com</span>
                                    </div>
                                    <!--begin::User details-->
                                </td>
                                <td>Administrator</td>
                                <td>
                                    <div class="badge badge-light fw-bold">Yesterday</div>
                                </td>
                                <td></td>
                                <td>25 Oct 2024, 10:30 am</td>
                                <td class="text-end">
                                    <a href="#"
                                        class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="apps/user-management/users/view.html"
                                                class="menu-link px-3">Edit</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-users-table-filter="delete_row">Delete</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-users-table-filter="historial_row">Historial</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>
                            <td class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="assets/media/avatars/300-12.jpg" alt="Ana Crown"
                                                class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::User details-->
                                <div class="d-flex flex-column">
                                    <a href="apps/user-management/users/view.html"
                                        class="text-gray-800 text-hover-primary mb-1">Ana Crown</a>
                                    <span>ana.cf@limtel.com</span>
                                </div>
                                <!--begin::User details-->
                            </td>
                            <td>Developer</td>
                            <td>
                                <div class="badge badge-light fw-bold">2 days ago</div>
                            </td>
                            <td>
                                <div class="badge badge-light-success fw-bold">Enabled</div>
                            </td>
                            <td>20 Jun 2024, 8:43 pm</td>
                            <td class="text-end">
                                <a href="#"
                                    class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="apps/user-management/users/view.html">
                                            <div class="symbol-label fs-3 bg-light-info text-info">R</div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <a href="apps/user-management/users/view.html"
                                            class="text-gray-800 text-hover-primary mb-1">Robert Doe</a>
                                        <span>robert@benko.com</span>
                                    </div>
                                    <!--begin::User details-->
                                </td>
                                <td>Administrator</td>
                                <td>
                                    <div class="badge badge-light fw-bold">5 days ago</div>
                                </td>
                                <td></td>
                                <td>25 Jul 2024, 9:23 pm</td>
                                <td class="text-end">
                                    <a href="#"
                                        class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="apps/user-management/users/view.html"
                                                class="menu-link px-3">Edit</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-users-table-filter="delete_row">Delete</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-users-table-filter="historial_row">Historial</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
