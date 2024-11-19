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
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Clientes</li>
                    </ul>
                    <div class="page-title d-flex align-items-center me-3">
                        <h1
                            class="page-heading d-flex text-gray-900 fw-bolder fs-2qx flex-column justify-content-center my-0">
                            Clientes</h1>
                    </div>
                </div>
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
                                data-bs-target="#clientModal">
                                <i class="ki-outline ki-plus fs-2"></i>Nuevo Cliente</button>
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
                                data-kt-user-table-select="delete_selected">Eliminar Seleccionado</button>
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
                                        <h2 class="fw-bold">Exportar Clientes</h2>
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
                        <div wire:ignore.self class="modal fade" id="clientModal" tabindex="-1"
                        aria-labelledby="clientModalLabel" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header" id="kt_modal_add_user_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Nuevo Cliente</h2>
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
                                        <form wire:submit.prevent="Store">
                                            <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                id="kt_modal_add_user_scroll" >
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-semibold fs-6 mb-2">Nombres</label>
                                                    <input type="text" wire:model.defer="name"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Lyanna" value="" />
                                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-semibold fs-6 mb-2">Rut</label>
                                                    <input type="text" wire:model.defer="rut"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="11111111-1" value="" />
                                                        @error('rut') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-semibold fs-6 mb-2">Fecha de Nac.</label>
                                                    <input class="form-control form-control-solid" wire:model.defer="birth_date"
                                                        placeholder="31-01-2024" id="kt_daterangepicker_3" />
                                                        @error('birth_date') <span class="text-danger">{{ $message }}</span> @enderror

                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-semibold fs-6 mb-2">Email</label>
                                                    <input type="email" wire:model.defer="email"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="example@domain.com" value="" />
                                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror

                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-semibold fs-6 mb-2">Télefono</label>
                                                    <input type="numeric"    wire:model.defer="phone"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="+56912341234" value="" />
                                                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-semibold fs-6 mb-2">Dirección</label>
                                                    <textarea address="" class="form-control" wire:model.defer="address"
                                                        id="kt_docs_maxlength_textarea" maxlength="100" placeholder=""
                                                        rows="2"></textarea>

                                                </div>

                                            </div>
                                            <!--end::Scroll-->
                                            <!--begin::Actions-->
                                            <div class="text-center pt-10">
                                                <button type="reset" class="btn btn-light me-3"
                                                    data-kt-users-modal-action="cancel">Discard</button>

                                                    <button type="submit" class="btn btn-primary">Guardar Cliente</button>
                                                    

                                                    {{-- <button type="submit" class="btn btn-primary"
                                                        data-kt-users-modal-action="submit">
                                                        <span class="indicator-label">Submit</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button> --}}
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                   






                                    
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
                                <th class="min-w-125px">Rut</th>
                                <th class="min-w-125px">Cumpleaños</th>
                                <th class="min-w-125px">Télefono</th>
                                <th class="min-w-125px">Dirección</th>
                                <th class="text-end min-w-100px">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            @forelse($clients as $client)
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">

                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <a href="apps/user-management/users/view.html"
                                            class="text-gray-800 text-hover-primary mb-1">{{ $client->name }}</a>
                                        <span>{{ $client->email }}</span>
                                    </div>
                                    <!--begin::User details-->
                                </td>

                                <td>
                                    <div class="badge badge-light fw-bold">{{ $client->rut }}</div>
                                </td>
                                <td>{{ $client->birth_date }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ $client->address }}</td>
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
                            @empty
                            <tr>
                                <td colspan="4">No hay clientes registrados.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    @if (session()->has('message'))
                    <div>{{ session('message') }}</div>
                    @endif
                    @if (session()->has('error'))
                    <div style="color: red;">{{ session('error') }}</div>
                    @endif
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