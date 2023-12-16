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


// AJOUTE ELEVE
$("#rest_btn").submit(function(e){
    e.preventDefault();
    const id = new formData(this);
    $("rest_btn").text("Adding...") 
    $.ajax({
        url: '{{route('store')}}',
        method: 'post',
        data: id,
        cache: false,
        processData: false,
        contentType: false,
        success: function(res){
           if(res.status == 200){
               swalInit(
                'Votre ajout est éffectuée!',
                'avec success',
                'success'
            );

           }
        }
    });
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
