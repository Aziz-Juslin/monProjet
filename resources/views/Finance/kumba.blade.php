@extends('layouts.master1', ['title'=> 'Finance kumba'])
@section('section')
    <div class="page-content">
        <!-- Main content -->

        <div class="content-wrapper">
            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">
            <div class="flex-fill">
            @include('ecole.message_ecole')
                <!-- Container -->
            @if(!$kumbas->isEmpty())
             @include('Finance.kumba_connexion')
            @else
            @include('Finance.kumba_creer')
            @endif
            </div>
        </div>
        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
@include('layouts.footer1')
@stop                   
       