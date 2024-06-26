<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bettlehyme Admin</title>

    <link rel="stylesheet" href="{{ URL::asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/logo/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/shared/iconly.css') }}">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.html">
                                <div style="font-family: Arial, Helvetica, sans-serif; font-size:19px;">bettlehyme</div>
                            </a>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item  ">
                            <a href="/admin" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item active">
                            <a href="/admin/wave" class='sidebar-link'>
                                <i class="bi bi-archive-fill"></i>
                                <span>Wave</span>
                            </a>

                        </li>

                        <li class="sidebar-item">
                            <a href="/admin/produk" class='sidebar-link'>
                                <i class="bi bi-archive-fill"></i>
                                <span>Product</span>
                            </a>

                        </li>

                        <li class="sidebar-item">
                            <a href="/admin/sertifikat" class='sidebar-link'>
                                <i class="bi bi-credit-card-2-front-fill"></i>
                                <span>Certificate</span>
                            </a>

                        </li>
                        <li class="sidebar-item">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" href="/logout" class='sidebar-link '>
                                    <i class="bi bi-box-arrow-left"></i>
                                    <span style="color: rgb(228, 74, 74)">Log Out</span>
                                </button>
                            </form>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Product</h3>

            </div>
            <div class="page-content">
                <section class="section">

                    <div class="card" style="background-color: transparent; padding:0px; margin-bottom:-20px">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <!-- Button trigger for login form modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#inlineForm">
                                        Add Wave
                                    </button>
                                    <!--login form Modal -->
                                    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel33" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel33">Input Stock </h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <form method="POST" action="/admin/wave/store"
                                                    enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="modal-body">
                                                        <label>Wave : </label>
                                                        <div class="form-group">
                                                            <input type="text" name="wave" placeholder="Wave"
                                                                class="form-control" required>
                                                        </div>
                                                        <label>Title : </label>
                                                        <div class="form-group">
                                                            <input type="text" name="judul" placeholder="Title"
                                                                class="form-control" required>
                                                        </div>
                                                        <label>Catalogue : </label>
                                                        <div class="form-group">
                                                            <input type="number" name="katalog" placeholder="Catalogue"
                                                                class="form-control" required>
                                                        </div>

                                                        <label>Gambar Header : </label>
                                                        <div class="form-group">

                                                            <!-- File uploader with image preview -->
                                                            <input type="file" name="file" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary ml-1">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Input</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">Wave</div>
                        <div class="card-body">
                            <div
                                class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                <div class="dataTable-top">

                                    <div class="dataTable-search"><input class="dataTable-input"
                                            placeholder="Search..." type="text"></div>
                                </div>
                                <div class="dataTable-container" style="height: 40vh">
                                    <table class="table table-striped dataTable-table" id="table1">
                                        <thead>
                                            <tr>
                                                <th data-sortable="" style="width: 3.0551%;"><a href="#"
                                                        class="dataTable-sorter">Id</a></th>
                                                <th data-sortable="" style="width: 20.217%;"><a href="#"
                                                        class="dataTable-sorter">Wave</a></th>
                                                <th data-sortable="" style="width: 18.9437%;"><a href="#"
                                                        class="dataTable-sorter">Title</a></th>
                                                <th data-sortable="" style="width: 16.4179%;"><a href="#"
                                                        class="dataTable-sorter">Catalogue</a></th>
                                                <th data-sortable="" style="width: 16.4179%;"><a href="#"
                                                        class="dataTable-sorter">Header</a></th>
                                                <th data-sortable="" style="width: 16.4179%;"><a href="#"
                                                        class="dataTable-sorter">Action</a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($wave as $p)
                                                <tr>
                                                    <td>{{ $p->id }}</td>
                                                    <td>{{ $p->wave }}</td>
                                                    <td>{{ $p->judul }}</td>
                                                    <td>{{ $p->katalog }}</td>
                                                    <td><img src="{{URL::asset('img/foto_header/'.$p->header)}}" width="100" alt=""></td>
                                                    <td>
                                                        @if($p->status == "fixed")
                                                        <div class="btn btn-success">Catalogue Has Made</div>
                                                        @else
                                                        <div class="btn-group mb-1">
                                                            <div class="dropdown">
                                                              <button class="btn btn-primary dropdown-toggle me-1 show" type="button" id="dropdownMenuButtonIcon" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                Action
                                                              </button>
                                                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonIcon" style="position: absolute; inset: 0px auto 20px 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);" data-popper-placement="bottom-start">
                                                                <a class="dropdown-item" href="/admin/wave/make/{{$p->id}}"><i class="bi bi-check-lg"></i>  Make Catalogue</a>
                                                                <a class="dropdown-item" href="#"><i class="bi bi-pencil-square"></i>  Edit </a>
                                                                <a class="dropdown-item" href="/admin/wave/{{$p->id}}"><i class="bi bi-trash3-fill"></i>  Hapus </a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        @endif
                                                        
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="dataTable-bottom">
                                    <div class="dataTable-info">Showing {{ $wave->perPage() }} of
                                        {{ $wave->total() }} entries</div>
                                    @if ($wave->lastPage() > 1)
                                        <nav class="dataTable-pagination">
                                            <ul class="dataTable-pagination-list pagination pagination-primary">
                                                <li
                                                    class="pager page-item {{ $wave->currentPage() == 1 ? ' disabled' : '' }}">
                                                    <a href="{{ $wave->url($wave->currentPage() - 1) }}"
                                                        data-page="1" class="page-link">‹</a>
                                                </li>
                                                @for ($i = 1; $i <= $wave->lastPage(); $i++)
                                                    <li
                                                        class="pager page-item {{ $wave->currentPage() == $i ? ' active' : '' }}">
                                                        <a href="{{ $wave->url($i) }}" data-page="1"
                                                            class="page-link">{{ $i }}</a>
                                                    </li>
                                                @endfor
                                                <li
                                                    class="pager page-item {{ $wave->currentPage() == $wave->lastPage() ? ' disabled' : '' }}">
                                                    <a href="{{ $wave->url($wave->currentPage() + 1) }}"
                                                        data-page="2" class="page-link">›</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>


        </div>
    </div>
    <script src="{{ URL::asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

    <!-- Need: Apexcharts -->
   

    <script src="{{ URL::asset('assets/extensions/filepond/filepond.js') }}"></script>
    <script src="{{ URL::asset('assets/extensions/toastify-js/src/toastify.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/filepond.js') }}"></script>

</body>

</html>
