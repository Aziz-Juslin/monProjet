@extends('layouts.master1', ['title'=> 'Journal de caisse'])
@section('section')
@include('Finance.tete_finance')
@include('Finance.JournalCaisse.head_journal')   
<div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
                        <div class="mb-3">
                            <ul class="nav nav-tabs nav-tabs-highlight nav-justified mb-0">
                                <li class="nav-item"><a href="#mat" class="nav-link active" data-toggle="tab">Frais scolaires</a></li>
                                <li class="nav-item"><a href="#primaire" onclick="return 'active'"; class="nav-link" data-toggle="tab">Autres frais</a></li>
                            </ul>

                            <div class="tab-content card-body border-top-0 rounded-top-0 mb-0">
                            <div class="tab-pane fade show active" id="mat">
                                    @include('Finance.JournalCaisse.frais_scolaires_journal')
                            </div>

                            <div class="tab-pane fade" id="primaire">
                                    @include('Finance.JournalCaisse.autres_frais_journal')
                            </div>

                              
                            </div>
                        </div>
                        <!-- /tabs widget -->
  </div>
  </div>
  </div>
@include('layouts.footer1')
@stop                   
       