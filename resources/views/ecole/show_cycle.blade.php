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
                        <legend class="text-uppercase font-size-sm font-weight-bold">Cycles séléctionnés</legend>
                    </div>
                    <div class="card-body">
                       
                        <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold"></legend>
                                <!-- Basic checkbox group -->
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">{{Auth::user()->ecole}} organise: <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <div class="form-check">
                                            <table class="table table-responsive text-uppercase table-striped text-nowrap table-customers">
                                                <tbody>
                                                 @foreach($cycles as $cycle)
                                                <tr>
                                                   <td class="h5">{{$cycle->cycle}}</td>
                                                <td  class="h5"><a href="" data-id="{{$cycle->id}}" data-name="{{$cycle->cycle}}" class="cycle"><span class="badge badge-danger">Supprimer <i class="icon-bin ml-2"></i></span></a></td>
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
                            @if($cycles->count() == '4')
                            @else
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="{{route('cycle_ecole')}}" class="btn btn-light" id="reset"> Ajouter <i class="icon-plus3 ml-2"></i></a> 
                            </div>
                            @endif
                    </div>
                </div>
                <!-- /form validation -->
            </div>
            <!-- /content area -->         
@include('layouts.footer1')
@endsection
