@extends('layouts/index')
@section('body')
    {{-- <!-- Page Header --> --}}
    @php
        $idTable = "X".bin2hex(random_bytes(8));
    @endphp
    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
        <div>
            <h1 class="page-title fw-medium fs-18 mb-2">Table</h1>
            <div class="">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Data</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Export - Import</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="btn-list">
            {{-- <button class="btn btn-primary-light btn-wave me-2">
                <i class="bx bx-crown align-middle"></i> Plan Upgrade
            </button> --}}
            <button class="btn btn-secondary-light btn-wave me-0" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable2">
                <i class="ri-add-line align-middle"></i> Tambah Data
            </button>
        </div>
    </div>
    {{-- <!-- Page Header Close --> --}}
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">Data Export Import</div>
                </div>
                <div class="card-body">
                    <div id="loading-overlay" style="display:none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255,255,255,0.7); z-index: 10; text-align: center; line-height: 100px;">
                      </div>
                    <div class="table-responsive">
                        <table id="{{$idTable}}" class="table table-bordered text-nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Product</th>
                                    <th>Shipping Method</th>
                                    <th>Port</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:add-data />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script>
        // file export datatable
        const table = $('#{{$idTable}}').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                // processing: "Fetching Data" 
            },
            scrollX: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('data.paginate') }}",
                type: "GET",
                dataType: 'json',
                dataSrc: function (json) {
                    return json.data;
                },
                // success: function(response) {
                //     console.log("Data berhasil diambil:", response);
                // },
                // error: function(xhr, status, error) {
                //     console.error("Terjadi kesalahan:", error);
                // },
                // complete: function(xhr, status) {
                //     console.log("Permintaan selesai dengan status:", status);
                // }
            },
            columns: [{
                    data: 'Country',
                    render: function(data, type, row) {
                        return row.Country
                    }
                },
                {
                    data: 'Product',
                    name: 'Product'
                },
                {
                    data: 'ShippingMethod',
                    name: 'ShippingMethod'
                },
                {
                    data: 'Port',
                    name: 'Port'
                },
                {
                    data: 'Category',
                    name: 'Category'
                },
                {
                    data: 'Quantity',
                    name: 'Quantity'
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        return `
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#">Detail</a>
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    `;
                    },
                    orderable: false,
                    searchable: false
                }
            ],
        });
        table.on('preXhr.dt', function () {
            TopLoaderService.start();
            $('#loading-overlay').show();
        });
        table.on('xhr.dt', function () {
            TopLoaderService.end();
            $('#loading-overlay').hide();
        });
        table.on('draw.dt', function () {});
    </script>
@endsection
