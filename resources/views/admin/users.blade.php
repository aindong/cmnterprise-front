@extends('layouts.admin')

@section('content')
    <!-- START CONTENT -->
    <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Basic Tables</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li><a href="#">Tables</a></li>
                            <li class="active">Basic Tables</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
            <div class="section">

                <div class="divider"></div>

                <!--DataTables example-->
                <div id="table-datatables">
                    <h4 class="header">Registrants</h4>
                    <div class="row">
                        <div class="col s12 m12 l12" style="overflow-x: scroll">
                            <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Birthdate</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Nationality</th>
                                    <th>Affiliation</th>
                                    <th>Bike</th>
                                    <th>Tshirt Size</th>
                                    <th>Elite</th>
                                    <th>Category</th>
                                    <th>Age Category</th>
                                    <th>Payment Method</th>
                                    <th>Transaction #</th>
                                    <th>Payment Status</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ ucfirst($user->firstname) }} {{ strtoupper(substr($user->middlename, 0, 1)) }}. {{ ucfirst($user->lastname) }}</td>
                                            <td>{{ \Carbon\Carbon::createFromTimestamp(strtotime($user->birthdate))->age }}</td>
                                            <td>{{ \Carbon\Carbon::createFromTimestamp(strtotime($user->birthdate))->toFormattedDateString() }}</td>
                                            <td>{{ $user->gender }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->nationality }}</td>
                                            <td>{{ $user->affiliation }}</td>
                                            <td>{{ $user->userEvents()->first()->bike_type }}</td>
                                            <td>{{ $user->userEvents()->first()->tshirt_size }}</td>
                                            <td>{{ $user->userEvents()->first()->is_elite == 1 ? 'True' : 'False' }}</td>
                                            <td>{{ $user->userEvents()->first()->category }}</td>
                                            <td>TODO</td>
                                            <td>{{ $user->userTransactions()->first()->payment_method }}</td>
                                            <td>{{ $user->userTransactions()->first()->transaction_no }}</td>
                                            <td>{{ $user->userTransactions()->first()->status }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end container-->

    </section>
    <!-- END CONTENT -->
@stop

@section('scripts')
    <!-- data-tables -->
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>
@stop