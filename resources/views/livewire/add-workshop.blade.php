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
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Nueva Sesion</li>
                    </ul>
                    <div class="page-title d-flex align-items-center me-3">
                        <h1
                            class="page-heading d-flex text-gray-900 fw-bolder fs-2qx flex-column justify-content-center my-0">
                            Crear Workshop</h1>
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
                                    <label class="form-label fw-semibold">Estado:</label>
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
            <!--begin::Form-->
            <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"
                data-kt-redirect="apps/ecommerce/catalog/products.html">
                <!--begin::Aside column-->
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">

                    <!--begin::Status-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Estado</h2>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <div class="rounded-circle bg-primary w-15px h-15px"
                                    id="kt_ecommerce_add_product_status"></div>
                            </div>
                            <!--begin::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Select2-->
                            <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
                                <option></option>
                                <option value="published" selected="selected">Publicado</option>
                                <option value="inactive">Inactivo</option>
                            </select>
                            <!--end::Select2-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Publicar o suspender workshop en la web</div>
                            <!--end::Description-->

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Status-->
                    <!--begin::Category & tags-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Configuración</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <!--begin::Label-->
                            <label class="form-label">Categorias</label>
                            <!--end::Label-->
                            <!--begin::Select2-->
                            <select class="form-select mb-2" data-control="select2"
                                data-placeholder="seleccione una opción" data-allow-clear="true">
                                <option></option>
                                <option value="Computers">Pediatria</option>
                                <option value="Watches">Psicologia</option>
                                <option value="Headphones">Headphones</option>
                                <option value="Footwear">Footwear</option>
                                <option value="Cameras">Cameras</option>
                                <option value="Shirts">Shirts</option>
                                <option value="Household">Household</option>
                                <option value="Handbags">Handbags</option>
                                <option value="Wines">Wines</option>
                                <option value="Sandals">Sandals</option>
                            </select>
                            <!--end::Select2-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7 mb-7">Agregar categoria del workshop.</div>
                            <!--end::Description-->
                            <!--end::Input group-->
                            <!--begin::Button-->
                            <a href="apps/ecommerce/catalog/add-category.html"
                                class="btn btn-light-primary btn-sm mb-10">
                                <i class="ki-outline ki-plus fs-2"></i>Crear nueva categoria</a>
                            <!--end::Button-->
                            <!--begin::Input group-->
                            <!--begin::Label-->
                            <label class="form-label d-block">Etiquetas</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags"
                                class="form-control mb-2" value="" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Agregar Etiquetas al workshop.</div>
                            <!--end::Description-->
                            <!--end::Input group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Category & tags-->

                    <!--begin::Template settings-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Product Template</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Select store template-->
                            <label for="kt_ecommerce_add_product_store_template" class="form-label">Select a product
                                template</label>
                            <!--end::Select store template-->
                            <!--begin::Select2-->
                            <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                data-placeholder="Select an option" id="kt_ecommerce_add_product_store_template">
                                <option></option>
                                <option value="default" selected="selected">Default template</option>
                                <option value="electronics">Electronics</option>
                                <option value="office">Office stationary</option>
                                <option value="fashion">Fashion</option>
                            </select>
                            <!--end::Select2-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">por validar</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Template settings-->
                </div>
                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    {{-- <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_general">General</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_advanced">Advanced</a>
                        </li>
                        <!--end:::Tab item-->
                    </ul>
                    <!--end:::Tabs--> --}}
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
                            role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>General</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Nombre del workshop</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="name" class="form-control mb-2"
                                                placeholder="Nombre del workshop" value="" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Indique un nombre del workshop que aparecera
                                                en su pagina.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div>
                                            <!--begin::Label-->
                                            <label class="form-label">Description</label>
                                            <!--end::Label-->
                                            <textarea class="form-control" id="kt_docs_maxlength_textarea" maxlength="200" placeholder="" rows="6"></textarea>
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Agregue una breve descripcion del workshop que sera visible para sus clientes.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->
                                <!--begin::Pricing-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Parámetros del workshop</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Precio</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text">$</span></div>
                                                <input type="text" name="price" class="form-control mb-2"
                                                    placeholder="Precio del workshop" value="" />
                                            </div>
                                            <div class="text-muted fs-7">Set the product price.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-10">
                                            <div class="col-md-6">
                                                <!-- Duración -->
                                                <label class="required form-label">Duración por sesion (min)</label>
                                                <div class="input-group mb-2">
                                                    <input type="text" name="duration" class="form-control"
                                                        placeholder="Duración en minutos ej: 55" value="" />
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text">Minutos</span></div>
                                                </div>
                                                <div class="text-muted fs-7">La duración debe ser en minutos</div>
                                            </div>

                                            <div class="col-md-6">
                                                <!-- Cantidad -->
                                                <label class="required form-label">Capacidad</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text">#</span></div>
                                                    <input type="text" name="capsession" class="form-control"
                                                        placeholder="Capacidad del workshop" value="" />
                                                </div>
                                                <div class="text-muted fs-7">La capacidad del workshop</div>
                                            </div>
                                        </div>
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2">Tipo de Descuento
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Elija un tipo de descuento que se aplicará a estas sesiones">
                                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                                </span></label>
                                            <!--End::Label-->
                                            <!--begin::Row-->
                                            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                                data-kt-buttons="true"
                                                data-kt-buttons-target="[data-kt-button='true']">
                                                <!--begin::Col-->
                                                <div class="col">
                                                    <!--begin::Option-->
                                                    <label
                                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                        data-kt-button="true">
                                                        <!--begin::Radio-->
                                                        <span
                                                            class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="discount_option" value="1"
                                                                checked="checked" />
                                                        </span>
                                                        <!--end::Radio-->
                                                        <!--begin::Info-->
                                                        <span class="ms-5">
                                                            <span class="fs-4 fw-bold text-gray-800 d-block">Sin
                                                                Descuento</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col">
                                                    <!--begin::Option-->
                                                    <label
                                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                        data-kt-button="true">
                                                        <!--begin::Radio-->
                                                        <span
                                                            class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="discount_option" value="2" />
                                                        </span>
                                                        <!--end::Radio-->
                                                        <!--begin::Info-->
                                                        <span class="ms-5">
                                                            <span class="fs-4 fw-bold text-gray-800 d-block">%
                                                                Porcentaje</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col">
                                                    <!--begin::Option-->
                                                    <label
                                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                        data-kt-button="true">
                                                        <!--begin::Radio-->
                                                        <span
                                                            class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="discount_option" value="3" />
                                                        </span>
                                                        <!--end::Radio-->
                                                        <!--begin::Info-->
                                                        <span class="ms-5">
                                                            <span class="fs-4 fw-bold text-gray-800 d-block">Precio
                                                                Fijo</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-none mb-10 fv-row"
                                            id="kt_ecommerce_add_product_discount_percentage">
                                            <!--begin::Label-->
                                            <label class="form-label">Indique el % de descuento que desea
                                                configurar</label>
                                            <!--end::Label-->
                                            <!--begin::Slider-->
                                            <div class="d-flex flex-column text-center mb-5">
                                                <div class="d-flex align-items-start justify-content-center mb-7">
                                                    <span class="fw-bold fs-3x"
                                                        id="kt_ecommerce_add_product_discount_label">0</span>
                                                    <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                                </div>
                                                <div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm">
                                                </div>
                                            </div>
                                            <!--end::Slider-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Establezca un porcentaje de descuento que se
                                                aplicará a estas sesiones.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                            <!--begin::Label-->
                                            <label class="form-label">Precio Fijo Con descuento</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="dicsounted_price" class="form-control mb-2"
                                                placeholder="Discounted price" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Establezca el precio del producto con
                                                descuento. El producto se reducirá al precio fijo determinado</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Pricing-->
                                <!--begin::Variations-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Horario del Workshop</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                           
                                            <!--begin::Repeater-->
                                            <div id="kt_docs_repeater_advanced">
                                                <!--begin::Form group-->
                                                <div class="form-group">
                                                    <div data-repeater-list="kt_docs_repeater_advanced">
                                                        <div data-repeater-item>
                                                            <div class="form-group row mb-6">
                                                                <div class="col-md-3">
                                                                    <label class="form-label">Fecha:</label>
                                                                    <input class="form-control form-control-sm"
                                                                        data-kt-repeater="datepicker"
                                                                        placeholder="Seleccione fecha" />
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <label class="form-label">Hora de Inicio:</label>
                                                                    <div class="input-group mb-2">
                                                                        <select class="form-select form-select-sm mb-2" data-placeholder="Selecciona Hora" id="kt_hora">
                                                                            <option value="default"  selected="selected">09</option>
                                                                            <option value="electronics">10</option>
                                                                            <option value="office">11</option>
                                                                            <option value="fashion">12</option>
                                                                            <option value="fashion">13</option>
                                                                            <option value="fashion">14</option>
                                                                            <option value="fashion">15</option>
                                                                            <option value="fashion">16</option>
                                                                            <option value="fashion">17</option>
                                                                            <option value="fashion">18</option>
                                                                            <option value="fashion">19</option>
                                                                            <option value="fashion">21</option>
                                                                            <option value="fashion">22</option>
                                                                        </select>
                                                                         <div class="input-group-sm input-group-prepend"><span class="input-group-text">h</span></div>

                                                                    </div>

                                                                    <div class="text-muted fs-7">Seleccione la hora de inicio.</div>

                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label class="form-label">Minutos de Inicio:</label>
                                                                    <div class="input-group mb-2">
                                                                        <select class="form-select form-select-sm mb-2" data-placeholder="Selecciona Hora" id="kt_hora">
                                                                            <option value="default" selected="selected">00</option>
                                                                            <option value="electronics">05</option>
                                                                            <option value="office">10</option>
                                                                            <option value="fashion">15</option>
                                                                            <option value="fashion">20</option>
                                                                            <option value="fashion">25</option>
                                                                            <option value="fashion">30</option>
                                                                            <option value="fashion">35</option>
                                                                            <option value="fashion">40</option>
                                                                            <option value="fashion">45</option>
                                                                            <option value="fashion">50</option>
                                                                            <option value="fashion">55</option>
                                                                        </select>
                                                                        <div class="input-group-sm input-group-prepend"><span class="input-group-text">min</span></div>
                                                                    </div>
                                                                     <div class="text-muted fs-7">Seleccione min de  inicio.</div>
                                                                </div>

                                                                <div class="col-md-2">
                                                                    <button type="button" data-repeater-delete=""
                                                                        class="btn btn-sm  btn-flex btn-icon btn-light-danger mt-3 mt-md-9">
                                                                        <i class="ki-outline ki-cross fs-1"></i>
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Form group-->

                                                <!--begin::Form group-->
                                                <div class="form-group">
                                                    <a href="javascript:;" data-repeater-create
                                                        class="btn btn-flex btn-light-primary">
                                                        <i class="ki-duotone ki-plus fs-3"></i>
                                                        Agregar
                                                    </a>
                                                </div>
                                                <!--end::Form group-->
                                            </div>
                                            <!--end::Repeater-->
                                            <!--end::Repeater-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Variations-->
                                <!--begin::Media-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Imagenes</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-2">
                                            <!--begin::Dropzone-->
                                            <div class="dropzone" id="kt_ecommerce_add_product_media">
                                                <!--begin::Message-->
                                                <div class="dz-message needsclick">
                                                    <!--begin::Icon-->
                                                    <i class="ki-outline ki-file-up text-primary fs-3x"></i>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Suelte los archivos
                                                            aquí o haga clic para cargarlos..</h3>
                                                        <span class="fs-7 fw-semibold text-gray-500">Puedes cargar
                                                            hasta 3 imagenes</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                            </div>
                                            <!--end::Dropzone-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set the product media gallery.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Media-->

                            </div>
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->
                        {{-- <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::Inventory-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Inventory</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">SKU</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="sku" class="form-control mb-2"
                                                placeholder="SKU Number" value="" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Enter the product SKU.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Barcode</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="barcode" class="form-control mb-2"
                                                placeholder="Barcode Number" value="" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Enter the product barcode number.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Quantity</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div class="d-flex gap-3">
                                                <input type="number" name="shelf" class="form-control mb-2"
                                                    placeholder="On shelf" value="" />
                                                <input type="number" name="warehouse" class="form-control mb-2"
                                                    placeholder="In warehouse" />
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Enter the product quantity.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Allow Backorders</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div class="form-check form-check-custom form-check-solid mb-2">
                                                <input class="form-check-input" type="checkbox" value="" />
                                                <label class="form-check-label">Yes</label>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Allow customers to purchase products that are
                                                out of stock.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Inventory-->
                                <!--begin::Variations-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Variations</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                            <!--begin::Label-->
                                            <label class="form-label">Add Product Variations</label>
                                            <!--end::Label-->
                                            <!--begin::Repeater-->
                                            <div id="kt_ecommerce_add_product_options">
                                                <!--begin::Form group-->
                                                <div class="form-group">
                                                    <div data-repeater-list="kt_ecommerce_add_product_options"
                                                        class="d-flex flex-column gap-3">
                                                        <div data-repeater-item=""
                                                            class="form-group d-flex flex-wrap align-items-center gap-5">
                                                            <!--begin::Select2-->
                                                            <div class="w-100 w-md-200px">
                                                                <select class="form-select" name="product_option"
                                                                    data-placeholder="Select a variation"
                                                                    data-kt-ecommerce-catalog-add-product="product_option">
                                                                    <option></option>
                                                                    <option value="color">Color</option>
                                                                    <option value="size">Size</option>
                                                                    <option value="material">Material</option>
                                                                    <option value="style">Style</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Select2-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control mw-100 w-200px"
                                                                name="product_option_value" placeholder="Variation" />
                                                            <!--end::Input-->
                                                            <button type="button" data-repeater-delete=""
                                                                class="btn btn-sm btn-icon btn-light-danger">
                                                                <i class="ki-outline ki-cross fs-1"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Form group-->
                                                <!--begin::Form group-->
                                                <div class="form-group mt-5">
                                                    <button type="button" data-repeater-create=""
                                                        class="btn btn-sm btn-light-primary">
                                                        <i class="ki-outline ki-plus fs-2"></i>Add another
                                                        variation</button>
                                                </div>
                                                <!--end::Form group-->
                                            </div>
                                            <!--end::Repeater-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Variations-->
                                <!--begin::Shipping-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Shipping</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Input-->
                                            <div class="form-check form-check-custom form-check-solid mb-2">
                                                <input class="form-check-input" type="checkbox"
                                                    id="kt_ecommerce_add_product_shipping_checkbox" value="1" />
                                                <label class="form-check-label">This is a physical product</label>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set if the product is a physical or digital
                                                item. Physical products may require shipping.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Shipping form-->
                                        <div id="kt_ecommerce_add_product_shipping" class="d-none mt-10">
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="form-label">Weight</label>
                                                <!--end::Label-->
                                                <!--begin::Editor-->
                                                <input type="text" name="weight" class="form-control mb-2"
                                                    placeholder="Product weight" value="" />
                                                <!--end::Editor-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set a product weight in kilograms (kg).
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Label-->
                                                <label class="form-label">Dimension</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div class="d-flex flex-wrap flex-sm-nowrap gap-3">
                                                    <input type="number" name="width" class="form-control mb-2"
                                                        placeholder="Width (w)" value="" />
                                                    <input type="number" name="height" class="form-control mb-2"
                                                        placeholder="Height (h)" value="" />
                                                    <input type="number" name="length" class="form-control mb-2"
                                                        placeholder="Lengtn (l)" value="" />
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Enter the product dimensions in
                                                    centimeters (cm).</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Shipping form-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Shipping-->
                                <!--begin::Meta options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Meta Options</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label">Meta Tag Title</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control mb-2" name="meta_title"
                                                placeholder="Meta tag name" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple
                                                and precise keywords.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label">Meta Tag Description</label>
                                            <!--end::Label-->
                                            <!--begin::Editor-->
                                            <div id="kt_ecommerce_add_product_meta_description"
                                                name="kt_ecommerce_add_product_meta_description"
                                                class="min-h-100px mb-2"></div>
                                            <!--end::Editor-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set a meta tag description to the product for
                                                increased SEO ranking.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div>
                                            <!--begin::Label-->
                                            <label class="form-label">Meta Tag Keywords</label>
                                            <!--end::Label-->
                                            <!--begin::Editor-->
                                            <input id="kt_ecommerce_add_product_meta_keywords"
                                                name="kt_ecommerce_add_product_meta_keywords"
                                                class="form-control mb-2" />
                                            <!--end::Editor-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set a list of keywords that the product is
                                                related to. Separate the keywords by adding a comma
                                                <code>,</code>between each keyword.
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Meta options-->
                            </div>
                        </div> --}}
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
