<!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{url('vuexy/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/libs/node-waves/node-waves.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/js/menu.js')}}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{url('vuexy/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>

    <!-- Main JS -->
    <script src="{{url('vuexy/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{url('vuexy/assets/js/app-ecommerce-dashboard.js')}}"></script>

    <script src="{{url('vuexy/assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
    <!-- Form Validation -->
    <script src="{{url('vuexy/assets/vendor/libs/@form-validation/popular.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/libs/@form-validation/bootstrap5.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/libs/@form-validation/auto-focus.js')}}"></script>
    <script src="{{url('vuexy/assets/js/tables-datatables-basic.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/libs/quill/katex.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/libs/quill/quill.js')}}"></script>
    <script src="{{url('vuexy/assets/js/forms-editors.js')}}"></script>

    <script src="{{url('vuexy/assets/vendor/libs/select2/select2.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/libs/tagify/tagify.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
    <script src="{{url('vuexy/assets/vendor/libs/bloodhound/bloodhound.js')}}"></script>
    <script src="{{url('vuexy/assets/js/forms-selects.js')}}"></script>
    <script src="{{url('vuexy/assets/js/forms-tagify.js')}}"></script>

    <script>
        $('.datatable').DataTable({
            dom: '<"d-flex justify-content-between align-items-center"lfB>rt<"bottom d-flex justify-content-between align-items-center"ip>',
            buttons: 
            [   
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i> Export to PDF',
                    className: 'btn custom-btn-size btn-primary',
                    exportOptions: {
                        columns: ':not(:last-child)'
                    }
                },
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i> Export to Excel',
                    className: 'btn custom-btn-size btn-success ms-2',
                    exportOptions: {
                        columns: ':not(:last-child)'
                    }
                }
            ],
            language: {
                search: "",
                searchPlaceholder: "Search records...",
            },
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            pageLength: 10,
            columnDefs: [{
                orderable: false,
                targets: -1
            }]
        });
    </script>

    @yield('script')