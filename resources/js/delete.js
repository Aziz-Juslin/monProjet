/* ------------------------------------------------------------------------------
 *
 *  # Sweet Alert component
 *
 *  Demo JS code for extra_sweetalert.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------
var SweetAlert = function () {
    //
    // Setup module components
    //

    // Sweet Alerts
    var _componentSweetAlert = function() {
        if (typeof swal == 'undefined') {
            console.warn('Warning - sweet_alert.min.js is not loaded.');
            return;
        }

        // Defaults
        var swalInit = swal.mixin({
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-primary',
                cancelButtonClass: 'btn btn-light'
            });
        //
        // Basic options
        //

// DELETE ELEVE
       $(document).on('click', '.eleve', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var nom = $(this).data('name');
            swalInit({
                title: ` Voulez vous supprimer ${nom} ?`,
                text: "l'élève sera supprimé avec toutes ses données !",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Confirmer',
                cancelButtonText: 'Annuler',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function(result) {
                if(result.value){ 
                    $.ajax({
                    url:"/eleve_sup"+id,
                    success: function(response){
                        swalInit(
                         'La soupression est éffectuée!',
                         'avec success',
                         'success'
                        );
                    }
                })
               }
            });
        });


// DELETE le reçu de paiement de frais scolaires
       $(document).on('click', '.recu', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            swalInit({
                title: ` Voulez vous supprimer ?`,
                text: "ce reçu de frais scolaires sera supprimé avec son montant !",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Confirmer',
                cancelButtonText: 'Annuler',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(isConfirm) => {
                if(isConfirm.value === true){ 
                    window.location = `/${id}recu_sup`
                    swalInit({
                         text:'La soupression est éffectuée!',
                         type:'success',
                        });
                    }
                        
                    }
                });












}



    //
    // Return objects assigned to module
    //
    return {
        initComponents: function() {
            _componentSweetAlert();
            _componentSelect2();
            _componentMultiselect();
            _componentControlsCustom();
            _componentControlSwitchery();
        }
    }
}();
// Initialize module
// ------------------------------
document.addEventListener('DOMContentLoaded', function() {
    SweetAlert.initComponents();
});
