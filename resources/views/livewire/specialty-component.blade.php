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
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Servicio</li>
                    </ul>
                    <div class="page-title d-flex align-items-center me-3">
                        <h1
                            class="page-heading d-flex text-gray-900 fw-bolder fs-2qx flex-column justify-content-center my-0">
                            Servicio</h1>
                    </div>
                </div>
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-5">
                    <!--begin::Secondary button-->
                    <div class="m-0">
                        <!--begin::Menu-->
                        <a href="#" class="btn btn-flex btn-sm h-40px btn-light fw-bold" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">History</a>
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
                                        <input class="form-check-input" type="checkbox" value="" name="notifications"
                                            checked="checked" />
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
                            <a href="{{ route('specialty.add') }}">
                                <button wire:click="add" type="button" class="btn btn-primary">
                                    <i class="ki-outline ki-plus fs-2"></i>Nuevo Servicio
                                </button>
                            </a>



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
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Exportar Servicios</h2>
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
                        {{-- <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-fullscreen p-9">
                                <div class="modal-content">
                                    <div class="modal-header" id="kt_modal_add_user_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Nuevo Servicio</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                            data-kt-users-modal-action="close">
                                            <i class="ki-outline ki-cross fs-1"></i>
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <div class="modal-body px-5 my-7">
                                        <!--begin::Form-->
                                        <form id="kt_modal_add_user_form" class="form" action="#">
                                            <!--begin::Scroll-->
                                            <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                                                data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                data-kt-scroll-offset="300px">

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-12">
                                                    <!--begin::Repeater-->
                                                    <div id="kt_docs_repeater_basic">
                                                        <!--begin::Form group-->
                                                        <div class="form-group">
                                                            <div data-repeater-list="kt_docs_repeater_basic">
                                                                <div data-repeater-item>
                                                                    <div class="form-group row align-items-center">
                                                                        <div class="col-md-1">
                                                                            <div class="form-check form-check-custom">
                                                                                <div>
                                                                                    <label
                                                                                        class="form-label">Activo:</label>
                                                                                    <input
                                                                                        class="form-check-input mb-2 mb-md-0"
                                                                                        type="checkbox" value="" checked
                                                                                        id="form_checkbox" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label class="form-label">Nombre:</label>
                                                                            <input type="text"
                                                                                class="form-control mb-2 mb-md-0"
                                                                                placeholder="Nombre del servicio" />
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label class="form-label">Duracion:</label>
                                                                            <div class="row">
                                                                                <div class="col-6 col-md-6 mb-2">
                                                                                    <select class="form-select">
                                                                                        <option value="0">0h</option>
                                                                                        <option value="1">1h</option>
                                                                                        <option value="2">2h</option>
                                                                                        <option value="3">3h</option>
                                                                                        <option value="4">4h</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-6 col-md-6 mb-2">
                                                                                    <select class="form-select">
                                                                                        <option value="0">0 min</option>
                                                                                        <option value="5">5 min</option>
                                                                                        <option value="10">10 min
                                                                                        </option>
                                                                                        <option value="15">15 min
                                                                                        </option>
                                                                                        <option value="20">20 min
                                                                                        </option>
                                                                                        <option value="25">25 min
                                                                                        </option>
                                                                                        <option value="30">30 min
                                                                                        </option>
                                                                                        <option value="45">45 min
                                                                                        </option>
                                                                                        <option value="50">50 min
                                                                                        </option>
                                                                                        <option value="55">55 min
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">




                                                                            <label
                                                                                class="required fw-semibold fs-6 mb-2">Duracion</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend"><span
                                                                                        class="input-group-text">$</span>
                                                                                </div>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Costo" />
                                                                            </div>



                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label
                                                                                class="required fw-semibold fs-6 mb-2">Descripción</label>
                                                                            <textarea class="form-control"
                                                                                maxlength="200"
                                                                                placeholder="Descripción del servicio"
                                                                                rows="1"></textarea>
                                                                            <span class="fs-6 text-muted">Máximo 200
                                                                                caracteres</span>
                                                                        </div>
                                                                        <div class="col-md-1 text-end">
                                                                            <a href="javascript:;" data-repeater-delete
                                                                                class="btn btn-sm btn-light-danger mt-3 mt-md-0">
                                                                                <i class="ki-duotone ki-trash fs-5"><span
                                                                                        class="path1"></span><span
                                                                                        class="path2"></span><span
                                                                                        class="path3"></span><span
                                                                                        class="path4"></span><span
                                                                                        class="path5"></span></i>

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Form group-->

                                                        <!--begin::Form group-->
                                                        <div class="form-group mt-5">
                                                            <a href="javascript:;" data-repeater-create
                                                                class="btn btn-light-primary">
                                                                <i class="ki-duotone ki-plus fs-3"></i>
                                                                Agregar
                                                            </a>
                                                        </div>
                                                        <!--end::Form group-->
                                                    </div>
                                                    <!--end::Repeater-->
                                                </div>

                                            </div>
                                            <!--end::Scroll-->
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
                                </div>
                            </div>
                        </div> --}}
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
                                <th class="min-w-125px">duracion</th>
                                <th class="min-w-125px">Descripción</th>
                                <th class="min-w-125px">Status</th>
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
                                    <div class="d-flex flex-column">
                                        <div class="text-gray-800 text-hover-primary mb-1">Manicure</div>
                                    </div>
                                </td>
                                <td class="align-items-center">1h 45 min</td>
                                <td class="text-truncate" style="max-width: 200px;">
                                    este es un ejemplo de la descripcion de este servicio con un maximo de 200
                                    caracteres
                                </td>
                                <td>
                                    <div class="badge badge-light-primary fw-bold">Enabled</div>
                                </td>
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
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex flex-column">
                                        <div class="text-gray-800 text-hover-primary mb-1">Yoga</div>
                                    </div>
                                </td>
                                <td class="align-items-center">35 min</td>
                                <td class="text-truncate" style="max-width: 200px;">
                                    este es un ejemplo de la descripcion de este servicio con un maximo de 200
                                    caracteres
                                </td>
                                <td>
                                    <div class="badge badge-light-danger fw-bold">Disabled</div>
                                </td>
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
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex flex-column">
                                        <div class="text-gray-800 text-hover-primary mb-1">Infomatica Cuantica</div>
                                    </div>
                                </td>
                                <td class="align-items-center">2h 15 min</td>
                                <td class="text-truncate" style="max-width: 200px;">
                                    este es un ejemplo de la descripcion de este servicio con un maximo de 200
                                    caracteres
                                </td>
                                <td>
                                    <div class="badge badge-light-primary fw-bold">Enabled</div>
                                </td>
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
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <td></td>

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