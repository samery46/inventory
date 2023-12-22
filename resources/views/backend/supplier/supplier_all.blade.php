@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Plant</h4>



                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <a href="{{ route('supplier.add') }}" class="btn btn-dark btn-rounded waves-effect waves-light"
                                style="float:right;"><i class="fas fa-plus-circle"> Add Plant </i></a> <br> <br>

                            <h4 class="card-title">All Plant Data </h4>


                            <table id="datatable" class="table table-bordered dt-responsive wrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        {{-- <th>No</th> --}}
                                        <th>Plant</th>
                                        <th>Address</th>
                                        <th>User</th>
                                        <th>WA</th>
                                        <th>Action</th>

                                </thead>


                                <tbody>

                                    @foreach ($suppliers as $key => $item)
                                        <tr>
                                            {{-- <td> {{ $key + 1 }} </td> --}}
                                            <td> {{ $item->code }} - {{ $item->name }}</td>
                                            <td> {{ $item->address }} </td>
                                            <td><a href="mailto:{{ $item->email }}">{{ $item->user_id }}</a> </td>
                                            <td><a href="https://wa.me/{{ $item->mobile_no }}" target="_blank"
                                                    class="btn btn-primary sm" title="Whatsapp"><i
                                                        class="fa fa-whatsapp"></i></a>
                                            </td>

                                            <td>
                                                <a href="{{ route('supplier.edit', $item->id) }}" class="btn btn-info sm"
                                                    title="Edit Data"> <i class="fas fa-edit"></i> </a>

                                                <a href="{{ route('supplier.delete', $item->id) }}"
                                                    class="btn btn-danger sm" title="Delete Data" id="delete"> <i
                                                        class="fas fa-trash-alt"></i>
                                                </a>

                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->



        </div> <!-- container-fluid -->
    </div>
@endsection
