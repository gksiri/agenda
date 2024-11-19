<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>

{{-- Clientes --}}
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/user-management/users/list/table.js') }}"></script>
{{-- <script src="./assets/js/custom/apps/user-management/users/list/add.js"></script> --}}

<script src="{{ asset('assets/js/custom/apps/user-management/users/list/add.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>

{{-- // add row --}}
<script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>


<script>


$('#kt_docs_repeater_advanced').repeater({
    initEmpty: false,

    defaultValues: {
        'text-input': 'foo'
    },

    show: function () {
        $(this).slideDown();

        // Re-init flatpickr
        $(this).find('[data-kt-repeater="datepicker"]').flatpickr();

    },
    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    },

    ready: function(){
        // Init flatpickr
        $('[data-kt-repeater="datepicker"]').flatpickr({
                dateFormat: "d-m-Y",
                minDate: "today"
            });
    }
});





// Evento para borrar las filas repetidas cuando se cierra el modal
{{-- $('#kt_modal_add_user').on('hidden.bs.modal', function () {
    // Resetea el formulario completo (opcional)
    $('#kt_modal_add_user_form')[0].reset();

    // Eliminar todas las filas agregadas menos la primera (si quieres conservar una fila)
    var repeaterList = $('#kt_docs_repeater_basic').find('[data-repeater-list]');
    
    // Remover todos los items excepto el primero
    repeaterList.find('[data-repeater-item]').not(':first').remove();
}); --}}


//text area

$('#kt_docs_maxlength_textarea').maxlength({
    warningClass: "badge badge-primary",
    limitReachedClass: "badge badge-success"
});

// end borrar filas repetidas

  //cliente
    $("#kt_daterangepicker_3").daterangepicker({
        singleDatePicker: true,
        minYear: 1924,
        locale: {
            format: "DD-MM-YYYY",
        }
    });


// The DOM elements you wish to replace with Tagify
var input = document.querySelector("#kt_tagify_7");

// Especialista Initialize Tagify script on the above inputs
new Tagify(input, {
    whitelist: ["Manicure", "Pedicure", "Yoga", "Mecanica Cuantica", "Pediatria", "Otro"],
    maxTags: 10,
    dropdown: {
        maxItems: 20,           // <- mixumum allowed rendered suggestions
        enabled: 0,             // <- show suggestions on focus
        closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
    }
});

    document.getElementById('fullscreen-btn').addEventListener('click', function() {
        var elem = document.getElementById('kt_docs_fullcalendar_background_events');

        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.mozRequestFullScreen) { // Firefox
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) { // Chrome, Safari, and Opera
            elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) { // IE/Edge
            elem.msRequestFullscreen();
        }

        // Agrega una clase específica cuando se entra en pantalla completa
        elem.classList.add('fullscreen-mode');
    });

    // Opcional: Detectar cuándo se sale de la pantalla completa para eliminar la clase
    document.addEventListener('fullscreenchange', function() {
        if (!document.fullscreenElement) {
            var elem = document.getElementById('kt_docs_fullcalendar_background_events');
            elem.classList.remove('fullscreen-mode');
        }
    });




    $("#kt_datepicker_1").flatpickr();


    var KTGeneralFullCalendarEventsDemos = function() {
        // Private functions

        var exampleBackgroundEvents = function() {
            // Define colors
            var green = KTUtil.getCssVariableValue('--bs-active-success');
            var red = KTUtil.getCssVariableValue('--bs-active-danger');

            // Initialize Fullcalendar -- for more info please visit the official site: https://fullcalendar.io/demos
            var calendarEl = document.getElementById('kt_docs_fullcalendar_background_events');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                },
                initialDate: '2024-08-27',
                slotMinTime: '06:00:00',
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                editable: true,
                selectable: true,
                nowIndicator: true,
                {{-- themeSystem: 'bootstrap', --}}
                contentHeight: '100%',
                height: '100%', // Establece la altura del calendario al 100% de la ventana
                events: [{
                        title: 'Business Lunch',
                        start: '2024-09-03T13:00:00',
                        constraint: 'businessHours'
                    },
                    {
                        title: 'Meeting',
                        start: '2024-09-13T11:00:00',
                        constraint: 'availableForMeeting', // defined below
                        color: red
                    },
                    {
                        title: 'Conference',
                        start: '2024-08-27',
                        end: '2020-09-20'
                    },
                    {
                        title: 'Party',
                        start: '2024-08-29T20:00:00'
                    },

                    // areas where "Meeting" must be dropped
                    {
                        groupId: 'availableForMeeting',
                        start: '2024-09-11',
                        end: '2024-09-11',
                        display: 'background',
                    },
                    {
                        groupId: 'availableForMeeting',
                        start: '2024-09-13',
                        end: '2024-09-13',
                        display: 'background',
                    },

                    // red areas where no events can be dropped
                    {
                        start: '2024-09-24',
                        end: '2024-09-28',
                        overlap: true,
                        display: 'background',
                        color: red
                    },
                    {
                        start: '2024-09-06',
                        end: '2024-09-08',
                        overlap: false,
                        display: 'background',
                        color: red
                    }
                ]
            });

            calendar.render();
        }

        return {
            // Public Functions
            init: function() {
                exampleBackgroundEvents();
            }
        };
    }();

    // On document ready
    KTUtil.onDOMContentLoaded(function() {
        KTGeneralFullCalendarEventsDemos.init();
    });
</script>
