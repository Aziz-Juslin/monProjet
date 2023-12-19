@extends('layouts.master1', ['title'=> 'Modalité de frais scolaires'])
@section('section')
@include('Finance.tete_finance')
@include('Finance.FraisScolaires.head_frais')
<!-- Tabs widget -->
<div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
        @if(!$cycles->isEmpty())

                        <div class="mb-3">
                            <ul class="nav nav-tabs nav-tabs-highlight nav-justified mb-0">

                                <li class="nav-item"><a href="#mat" class="nav-link active" data-toggle="tab">Fixer les montants à payer</a></li>
                                <li class="nav-item bg-light"><a href="#moda" class="nav-link" data-toggle="tab">Tableau</a></li>
                            </ul>

                            <div class="tab-content border-top-0 rounded-top-0 mb-0">
                                <div class="tab-pane fade show active" id="mat">
                                    @include('Finance.FraisScolaires.modalite')
                                </div>
                                <div class="tab-pane fade" id="moda">
                                    @include('Finance.FraisScolaires.modalite')
                                </div>
                            </div>
                        </div>
                        <!-- /tabs widget -->
        @else
        <div class="">
<div class="text-center text-muted p-5">
<h4>Aucun cycle.</h4>
 <p class="nav-item "><a  class="nav-link">Nous vous signalons que votre compte n'est pas configuré.</a>
<p class="nav-item bg-light btn text-muted"><a href="{{route('cycle_ecole')}}"  class="nav-link">Cliquer ici</a></p>
</div>
</div>
@endif
  </div>
  </div>
  </div>
</div>
@include('layouts.footer1')
@stop
