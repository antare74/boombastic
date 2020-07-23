@extends('layouts.admin')

@section('title','Halaman Admin')
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>contact</h1>
                        </div>
                        <div class="col-sm-6">
                            {{--                            <ol class="breadcrumb float-sm-right">--}}
                            {{--                                <li class="breadcrumb-item"><a href="#">contact</a></li>--}}
                            {{--                            </ol>--}}
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>Failed! </strong> {{ session()->get('error') }}
                        </div>
                    @elseif(session()->has('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>Success! </strong> {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Received</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $i =1;
                                        @endphp
                                        @if($contacts)
                                            @foreach($contacts as $contact)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $contact->full_name }}</td>
                                                    <td>{{ $contact->email }}</td>
                                                    <td> {{ $contact->phone }} </td>
                                                    <td> {{ $contact->created_at }} </td>
                                                    <td>
                                                        <a href="contact/{{ $contact->id }}" class="btn btn-sm btn-info"><span class="fa fa-search"></span> Detail
                                                        </a>
                                                        <button  class="btn btn-sm  btn-danger" data-toggle="modal" data-target="#exampleModal{{ $contact->id }}"><span class="fa fa-trash"></span>
                                                            Delete
                                                        </button>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="exampleModal{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{ $contact->id }}" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure want to delete this?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn" data-dismiss="modal">Close</button>
                                                                <a href="contact/delete/{{ $contact->id }}" class="btn btn-primary"> Confirm </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    @include('includes.admin.script')
@endsection
