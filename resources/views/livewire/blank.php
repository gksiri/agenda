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
                        <h1 class="page-heading d-flex text-gray-900 fw-bolder fs-2qx flex-column justify-content-center my-0">Titulo</h1>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div id="kt_app_content" class="app-content">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="card">
                <div>
                    <h1>{{ $count }}</h1>
                
                    <button wire:click="increment">+</button>
                
                    <button wire:click="decrement">-</button>
                </div>
            </div>

        </div>
    </div>
</div>
