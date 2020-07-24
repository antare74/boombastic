@extends('layouts.admin')

@section('title','Halaman Admin')
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>whatsapp</h1>
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    @if(session()->has('error'))
                        <div class="alert alert-danger" id="sessionFlash">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>Failed! </strong> {{ session()->get('error') }}
                        </div>
                    @elseif(session()->has('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>Success! </strong> {{ session()->get('success') }}
                        </div>
                    @endif
                        <div class="modal fade" id="storeModal" tabindex="-1" role="dialog" aria-labelledby="storeModalTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="/admin/whatsapp/store" method="POST">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="storeModalTitle">ADD NEW</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Phone</label>
                                                <input type="text" class="form-control" name="phone" id="formGroupExampleInput" placeholder="Example input" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Is Active</label>
                                                <br>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" name="status" checked class="custom-control-input" id="customSwitches">
                                                    <label class="custom-control-label" name="status" for="customSwitches">Toggle this switch element</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="formGroupExampleInput2">Message</label>
                                                <textarea class="form-control text-left input-disable" name="message" placeholder="Message here..." id="catering-email" aria-describedby="basic-addon3" rows="2" required></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#storeModal">
                                        <span class="fa fa-plus"></span>
                                        Tambah Data
                                    </button>
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
                                            <th>Status</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $i =1;
                                        @endphp
                                        @if($whatsapp)
                                            @foreach($whatsapp as $wa)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>
                                                        <input type="checkbox" name="status" {{ $wa->status?'checked':'' }} data-toggle="toggle" data-size="mini" data-width="100" disabled>
                                                    </td>
                                                    <td>{{ $wa->phone }}</td>
                                                    <td> {{ $wa->message }} </td>
                                                    <td>
                                                        <a href="whatsapp/{{ $wa->id }}" class="btn btn-sm btn-info"><span class="fa fa-search"></span> Detail</a>
                                                        <button  class="btn btn-sm  btn-secondary" data-toggle="modal" data-target="#storeModal{{ $wa->id }}"><span class="fa fa-pencil"></span>
                                                            Edit
                                                        </button>
                                                        <button  class="btn btn-sm  btn-danger" data-toggle="modal" data-target="#exampleModal{{ $wa->id }}"><span class="fa fa-trash"></span>
                                                            Delete
                                                        </button>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="storeModal{{ $wa->id }}" tabindex="-1" role="dialog" aria-labelledby="storeModalTitle" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form action="/admin/whatsapp/store/{{ $wa->id }}" method="POST">
                                                                @csrf
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="storeModalTitle">ADD NEW</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="formGroupExampleInput">Phone</label>
                                                                        <input type="text" class="form-control" name="phone" id="formGroupExampleInput" value="{{ $wa->phone }}" placeholder="Example input" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="formGroupExampleInput">Is Active</label>
                                                                        <br>
                                                                        <div class="custom-control custom-switch">
                                                                            <input type="checkbox" name="status" {{ $wa->status == 1?'checked':'' }} class="custom-control-input" id="customSwitches{{ $wa->id }}">
                                                                            <label class="custom-control-label" name="status" for="customSwitches{{ $wa->id }}">Toggle this switch element</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="formGroupExampleInput2">Message</label>
                                                                        <textarea class="form-control text-left input-disable" name="message" placeholder="Message here..." id="catering-email" aria-describedby="basic-addon3" rows="2" required>{{ $wa->message }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="exampleModal{{ $wa->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{ $wa->id }}" aria-hidden="true">
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
                                                                <a href="whatsapp/delete/{{ $wa->id }}" class="btn btn-primary"> Confirm </a>
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
@endsection
