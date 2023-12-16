@extends('layouts.master', ['title' => Auth::user()->name])
@section('section')
<!-- Main content -->
<div class="content-wrapper">

<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Bienvenue</span> - {{Auth::user()->ecole}}</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Accueil</a>
                <a href="general_faq.html" class="breadcrumb-item">Gestionnaire</a>
                <span class="breadcrumb-item active">Université</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">
 <!-- Questions title -->
    <div class="text-center mb-3 py-2">
        <h4 class="font-weight-semibold mb-1">Completer les informations pour votre Université.</h4>
        <span class="text-muted d-block">Cliquer sur Ajouter</span>
    </div>
    <!-- /questions title -->
    <!-- Info blocks -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Knowledge Base</h5>
                   
                    <a href="#" class="btn bg-success-400">Ajouter</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                   
                    <h5 class="card-title">Support center</h5>
                    <a href="#" class="btn bg-warning-400">Open a ticket</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                 
                    <h5 class="card-title">Articles and news</h5>
                    <a href="#" class="btn bg-blue">Ajouter</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /info blocks -->


   

</div>
<!-- /content area -->
@include('layouts.footer')
@endsection
