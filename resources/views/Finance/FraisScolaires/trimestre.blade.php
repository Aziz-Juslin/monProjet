@extends('layouts.master1', ['title'=> 'trimestre'])
@section('section')
@include('Finance.tete_finance')
@include('Finance.FraisScolaires.head_frais')
<div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
                        <div class="mb-3">
                            <ul class="nav nav-tabs nav-tabs-highlight nav-justified mb-0">
                                <li class="nav-item"><a href="#premierTrimestre" class="nav-link active" data-toggle="tab" oncli>1<sup>èr</sup> Trimestre</a></li>
                                <li class="nav-item"><a href="#deuxièmeTrimestre" class="nav-link" data-toggle="tab">2<sup>ème</sup> Trimestre</a></li>
                                <li class="nav-item"><a href="#troisièmeTrimestre" class="nav-link" data-toggle="tab">3<sup>ème</sup> Trimestre</a></li>
                            </ul>
                            <div class="tab-content card card-body border-top-0 rounded-top-0 mb-0">
                                <div class="tab-pane fade show active" id="premierTrimestre">
                                    @include('Finance.FraisScolaires.frais_premier_trimestre')
                                </div>
                                <div class="tab-pane fade" id="deuxièmeTrimestre">
                                    @include('Finance.FraisScolaires.frais_deuxieme_trimestre')
                                </div>
                                <div class="tab-pane fade" id="troisièmeTrimestre">
                                    @include('Finance.FraisScolaires.frais_troisieme_trimestre')
                                </div>
                            </div>
                        </div>
                <!-- /tabs widget -->
                </div>
            </div>
        </div>
</div>
@include('layouts.footer1')
@stop                   
       