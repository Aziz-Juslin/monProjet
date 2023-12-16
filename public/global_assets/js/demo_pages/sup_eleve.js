
!function($) {
    "use strict";

    var SweetAlert = function() {};

    //examples 
    SweetAlert.prototype.init = function() {
        
    //Basic
    $('#sa-basic').click(function(){
        swal("Here's a message!");
    });

    //A title with a text under
    $('#sa-title').click(function(){
        swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.")
    });

///////////////delete eleve////////////////////////////
$(document).on('click', '.eleve', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var nom = $(this).data('name');
        swal({        
            title: ` Voulez-vous supprimer ${nom} ?`,
            text: "l'élève sera supprimé avec toutes ses données !",
            showCancelButton: true,
            confirmButtonText: 'OUI',
            cancelButtonText: 'ANNULER',
            confirmButtonClass: 'btn bg-warning-400',
            cancelButtonClass: 'btn btn-light',
            buttonsStyling: false
        }).then((isConfirm) => {
        if (isConfirm.value === true) {
            window.location = `/${id}eleve_sup` 
        }
        
       });
    });
/////////////////fin delete eleve//////////////////////


///////////////delete eleve////////////////////////////
$(document).on('click', '.autrefrais', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
        swal({        
            title: ` Voulez-vous supprimer ?`,
            text: "le frais sera supprimé !",
            showCancelButton: true,
            confirmButtonText: 'OUI',
            cancelButtonText: 'ANNULER',
            confirmButtonClass: 'btn bg-warning-400',
            cancelButtonClass: 'btn btn-light',
            buttonsStyling: false
        }).then((isConfirm) => {
        if (isConfirm.value === true) {
            window.location = `/${id}deleteautre` 
        }
        
       });
    });
/////////////////fin delete eleve//////////////////////


///////////////delete cycle////////////////////////////
$(document).on('click', '.cycle', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var nom = $(this).data('name');
        swal({        
            title: ` Voulez-vous supprimer  ${nom} ?`,
            text: 'Le cycle sera supprimé avec toutes ses données !',
            showCancelButton: true,
            confirmButtonText: 'OUI',
            cancelButtonText: 'ANNULER',
            confirmButtonClass: 'btn bg-warning-400',
            cancelButtonClass: 'btn btn-light',
            buttonsStyling: false
        }).then((isConfirm) => {
        if (isConfirm.value === true) {
            window.location = `/${id}cycle` 
        }
        
       });
    });
/////////////////fin//////////////////////

///////////////delete option////////////////////////////
$(document).on('click', '.option', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var nom = $(this).data('name');
        swal({        
            title: ` Voulez-vous supprimer  ${nom} ?`,
            text: "L'option sera supprimé avec toutes ses données !",
            showCancelButton: true,
            confirmButtonText: 'OUI',
            cancelButtonText: 'ANNULER',
            confirmButtonClass: 'btn bg-warning-400',
            cancelButtonClass: 'btn btn-light',
            buttonsStyling: false
        }).then((isConfirm) => {
        if (isConfirm.value === true) {
            window.location = `/${id}option` 
        }
        
       });
    });
/////////////////fin delete eleve//////////////////////

$(document).on('click', '.edit_franc', function(e) {
          var id = $(this).data('id');
            e.preventDefault();
            $('#edit-franc').modal('show');
           
    
});

$(document).on('click', '.update_recu_franc', function(e) {
          var id = $(this).data('id');
          var montant = $('.montant').val();
            e.preventDefault();
            
            $.ajax({
                type: "post",
                url: '/recu-update/' + id + montant,
                datatype: 'json',
                success: function(response) {
                    $('#edit-franc').modal('hide');
                }
        });
});

//-------------------- get les données --------------------------------------------------
   function getdata() {
            $.ajax({
                type: "get",
                url: "all-recus",
                datatype: "json",
                success: function(response) {
                    $('tbody').html('');
                    $.each(response.recus, function(key, item) {
                        $('tbody').append(' <tr>\
                            <td>' + item.id + '</td>\
                            <td>' + item.franc + '</td>\
                            <td><button type="button" value="' + item                                                                            
                            .id + '" class="btn btn-primary btn-sm edit">edit</button></td>\
                            <td><button type="button" value="' + item
                            .id + '" class="btn btn-danger btn-sm delete">Delete</button></td>\
                                                                                </tr>');

                    });
                }
            });
        }
//-----------------------fin------------------------------------------------------------------

$(document).on('click', '.edit_dollar', function(e) {
          var id = $(this).data('id');
          var montant = $(this).data('name');
            e.preventDefault();
            $('#edit-dollar').modal('show');
    
});

///////////////delete perso////////////////////////////
$(document).on('click', '.button_perso', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var nom = $(this).data('name');
    var image = $(this).data('image');
        swal({   
            imageUrl: `/uploads/base_personnel/${image}`,     
            imageWidth: 60,   
            imageHeight: 60,  
            title: "Voulez-vous supprimer ?", 
            confirmButtonText: "OUI",
            cancelButtonText: "ANNULER", 
            showCancelButton: true,
        }).then((isConfirm) => {
        if (isConfirm.value === true) {
            window.location = `/sup_per/${id}`
          swal({
            text: `${nom} est supprimé`,
            type: "success",
          });  
        }
        
       });
    });
/////////////////fin delete eleve//////////////////////

///////////////effectuer le rapport////////////////////////////
$(document).on('click', '.rapport_frais', function (e) {
    e.preventDefault();
        swal({     
            title: ` Voulez-vous éffectuer le rapport ?`,
            text: "Le rapport de frais scolaires d'hier sera afficher  !",
            showCancelButton: true,
            confirmButtonText: 'Confirmer',
            cancelButtonText: 'Annuler',
            confirmButtonClass: 'btn bg-warning-400',
            cancelButtonClass: 'btn btn-light',
            buttonsStyling: false
        }).then((isConfirm) => {
        if (isConfirm.value === true) {
            window.location = `/rapportFraisScoliares`  
        }
        
       });
    });

$(document).on('click', '.rapport_autre', function (e) {
    e.preventDefault();
        swal({     
            title: ` Voulez-vous éffectuer le rapport ?`,
            text: "Le rapport de frais scolaires d'hier sera afficher  !",
            showCancelButton: true,
            confirmButtonText: 'Confirmer',
            cancelButtonText: 'Annuler',
            confirmButtonClass: 'btn bg-warning-400',
            cancelButtonClass: 'btn btn-light',
            buttonsStyling: false
        }).then((isConfirm) => {
        if (isConfirm.value === true) {
            window.location = `/rapportAutreFrais`  
        }
        
       });
    });
/////////////////fin delete eleve//////////////////////

///////////////delete recu////////////////////////////
$(document).on('click', '.recu', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
        swal({   
            title: ` Voulez vous supprimer ?`,
            text: "Le reçu de frais scolaires sera supprimé avec son montant !",
            showCancelButton: true,
            confirmButtonText: 'OUI',
            cancelButtonText: 'ANNULER',
            confirmButtonClass: 'btn bg-warning-400',
            cancelButtonClass: 'btn btn-light',
            buttonsStyling: false
        }).then((isConfirm) => {
        if (isConfirm.value === true) {
             $.ajax({
                type: "get",
                url: '/recu_sup/' + id,
                success: function(response) {
             
                }
            });
          
        }
       
        
       });
    });
/////////////////fin delete eleve//////////////////////

///////////////message de la modification du rec////////////////////////////
$(document).on('click', '.recu_up', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
            var data = {
                'franc': $('.franc').val(),
                'dollar': $('.dollar').val(),
                'trimestre': $('.trimestre').val(),
                'annee_frais': $('.annee').val(),
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                } 
            });
             $.ajax({
                type: "post",
                url: '/updat_recu/' + id,
                data: data,
                datatype: 'json',
                success: function(response) {
                new Noty({
                theme: ' alert alert-success alert-styled-left p-0 bg-white',
                text: 'Le montant est modifié',
                type: 'success',
                progressBar: false,
                closeWith: ['button']
            }).show();
                }
            });
          
    }            );
/////////////////fin//////////////////////

///////////////delete frais////////////////////////////
$(document).on('click', '.delete_frais', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
        swal({    
            title: "Voulez-vous supprimer ?", 
            confirmButtonText: "Oui",
            cancelButtonText: "Annuler", 
            showCancelButton: true,
        }).then((isConfirm) => {
        if (isConfirm.value === true) {
            window.location = `/sup-frais/${id}`
          swal({
            text: "La reçu est supprimé !",
            type: "success",
          });  
        }
        
       });
    });
/////////////////fin delete frais//////////////////////

///////////////delete frais modalite////////////////////////////
$(document).on('click', '#modalite', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
        swal({    
            title: "Voulez-vous supprimer ?", 
            type: "warning",
            confirmButtonText: "Oui",
            cancelButtonText: "Annuler", 
            showCancelButton: true,
        }).then((isConfirm) => {
        if (isConfirm.value === true) {
            window.location = `/${id}moda`
          swal({
            text: "Le montant fixé est supprimé !",
            type: "success",
          });  
        }
        
       });
    });
/////////////////fin delete frais//////////////////////


/////////////////fin delete frais//////////////////////

    //Success Message
    $('#sa-success').click(function(){
        swal("Good job!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.", "success")
    });

    //Warning Message
    $('#sa-warning').click(function(){
        swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this imaginary file!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            closeOnConfirm: false 
        }, function(){   
            swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
        });
    });

    //Parameter
    $('#sa-param').click(function(){
        swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this imaginary file!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            cancelButtonText: "No, cancel plx!",   
            closeOnConfirm: false,   
            closeOnCancel: false 
        }, function(isConfirm){   
            if (isConfirm) {     
                swal("Deleted!", "Your imaginary file has been deleted.", "success");   
            } else {     
                swal("Cancelled", "Your imaginary file is safe :)", "error");   
            } 
        });
    });

    //Custom Image
    $('#sa-image').click(function(){
        swal({   
            title: "Govinda!",   
            text: "Recently joined twitter",   
            imageUrl: "../assets/images/users/agent2.jpg" 
        });
    });

    //Auto Close Timer
    $('#sa-close').click(function(){
         swal({   
            title: "Auto close alert!",   
            text: "I will close in 2 seconds.",   
            timer: 2000,   
            showConfirmButton: false 
        });
    });


    },
    //init
    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.SweetAlert.init()
}(window.jQuery);