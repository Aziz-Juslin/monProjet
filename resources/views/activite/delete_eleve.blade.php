<div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
            <form action="" method="get">
                @csrf
               
                <h2 class="text-center"><i style="font-size: 95px; color: wheat;" class="fas fa-exclamation-triangle"></i><br><br>Voulez vous vraiment effacer l'élève ? {{$pupil->id}}</h2>
                
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Annuler</button>
                <a href="{{route('destroy', $pupil->id)}}">
                <button type="submit" class="btn btn-lg btn-danger">Oui</button></a>
            </div>
            </form>
        </div>
    </div>
</div>
