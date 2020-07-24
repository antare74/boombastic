@extends('layouts.admin')

@section('title','Halaman Admin')

<style>
    ul li{
        list-style: none;
        margin: 10px 0px 10px 10px;
        /*border-bottom: 1px solid black;*/
    }
    #submit-submit{
        display: none;
    }
</style>
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12 col-md-12">
                            <h1>Whatsapp Detail</h1>
                        </div>
                        <div class="col-sm-12 col-md-12">
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
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
                            <div class="col-12 col-md-12">
                                <div  class="card card-body">
                                    <div class="card-title">
                                        Form detail
                                    </div>
                                    @if($whatsapp)
                                        <form action="/admin/whatsapp/store/{{$whatsapp->id}}" method="POST">
                                            @csrf
                                            <div class="input-group my-3">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">
                                                <span class="fa fa-check-square-o"></span>
                                                    &nbsp;
                                                    Status
                                                </span>
                                                </div>
                                                <input type="text" class="form-control input-disable" name="full_name" value="{{ $whatsapp->status == 1?'enable':'disable' }}" id="whatsapp-name" aria-describedby="basic-addon3" required disabled>
                                            </div>
                                            <div class="input-group my-3">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">
                                                <span class="fa fa-phone"></span>
                                                    &nbsp;
                                                    PHONE
                                                </span>
                                                </div>
                                                <input type="text" class="form-control input-disable" name="phone" value="{{ $whatsapp->phone }}" id="whatsapp-phone" aria-describedby="basic-addon3" required disabled>
                                            </div>
                                            <div class="input-group mt-3 mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">
                                                        <span class="fa fa-comment"></span>
                                                            &nbsp;
                                                            MESSAGE
                                                    </span>
                                                </div>
                                                <textarea class="form-control text-left input-disable" name="message" id="catering-email" aria-describedby="basic-addon3" rows="2" required disabled>{{ $whatsapp->message }}</textarea>
                                            </div>
                                        </form>
                                    @endif
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

    <script>
        $('#edit-button').click(function(){
            $('.input-disable').prop('disabled',false);
            $('#submit-submit').css('display', 'block');
        });
    </script>
@endsection
