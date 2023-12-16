@extends('layouts.master', ['title' => Auth::user()->name])
@section('section')
<!-- Main content -->
@include('layouts.aside2')     
<!-- Content area -->
            <!-- Content area -->
            <div class="content">
                @include('ecole.message_ecole')
                <!-- Form validation -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                         <legend class="text-uppercase font-size-sm font-weight-bold">Options Organisées</legend>
                    </div>
                    <div class="card-body">
                        
                        <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold"></legend>
                                <!-- Basic checkbox group -->
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Nombre d'option organisée <strong>({{$options->count()}})</strong> <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-check">
                                            <table class="table table-responsive table-striped text-nowrap table-customers">
                                                <tbody>
                                                 @foreach($options as $option)
                                                <tr>
                                                   <td class="h5">{{$option->option}}</td>
                                                <td class="h5"><a data-id="{{$option->id}}" data-name="{{$option->option}}" href="" class="option"><span class="badge badge-danger">Supprimer <i class="icon-bin ml-2"></i></span></a></td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <!-- /basic checkbox group -->
                            </fieldset>
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="{{route('option_ecole')}}" class="btn btn-light" id="reset"> Ajouter <i class="icon-plus3 ml-2"></i></a> 
                            </div>
        
                        
                    </div>
                </div>
                <!-- /form validation -->

            </div>
            <!-- /content area -->         


@include('layouts.footer1')
@endsection
