// Paper Bootstrap Wizard Functions
$(document).ready(function () {

    // Code for the Validator
    var $validator = $('.wizard-card form').validate({
        focusInvalid: false,
        rules: {
            raison_sociale: {
                required: true,
                minlength: 3
            },

            type_ese: {

                required: true
            }
            ,

            situation_matrimoniale: {

                required: "#type_ese_yes:checked"

            },

            sex: {

                required: function (element) {

                    if ($('#type_ese_yes').is(':checked')) {

                        return true;
                    }
                    else {

                        return false;

                    }
                }

            },
            etranger: {
                required: function (element) {

                    if ($('#type_ese_yes').is(':checked')) {

                        return true;
                    }
                    else {

                        return false;
                    }
                }
            }
            ,
            forme_juridique: {

                required: true
            },

            regime_fiscal: {

                required: true

            },

            birth_date: {

                required: " #type_ese_yes:checked"

            },

            cin_contribuable: {

                required: " #etranger_no:checked"

            },

            passeport: {

                required: " #etranger_yes:checked"

            },

            create_date: {

                required: true,
                minlength: 8
            },
            capital: {
                required: false,
                number: true
            }
            ,
            activites: {

                required: true

            },
            num_stat: {

                required: true,
                minlength: 17
            },
            date_stat: {

                required: true
            },

            importatera: {

                required: true
            },
            exportatera: {

                required: true
            },
            proprietaire_ese: {

                required: true
            },
            type_proprietaire: {

                required: function (element) {

                    if ($('#proprietaire_ese_no').is(':checked')) {

                        return true;
                    }
                    else {

                        return false;
                    }
                }
            },

            nif_proprietaire_ese: {
                required: function (element) {

                    if ($('#type_proprietaire_yes').is(':checked')) {

                        return true;
                    }
                    else {

                        return false;
                    }

                },

                number: true


            },
            nom_proprietaire_indiv: {
                required: function (element) {

                    if ($('#type_proprietaire_no').is(':checked')) {

                        return true;
                    }
                    else {

                        return false;
                    }
                }
            },
            adresse_proprietaire_indiv: {

                required: function (element) {

                    if ($('#type_proprietaire_no').is(':checked')) {

                        return true;
                    }
                    else {

                        return false;

                    }
                }
            },

            nb_salarie: {

                required: false,
                number: true
            }
            ,
            adr_siege_dem: {

                required: true
            },
            num_fokontany : {
                minlength: 4,
                required: true
            },
            type_ese_ass: {

                required: true

            },
            nom_ass: {

                required: "#type_ese_ass_yes:checked"

            },
            fonction_ass: {

                required: "#type_ese_ass_yes:checked"

            },
            resident_ass: {

                required: "#type_ese_ass_yes:checked"

            },

            adresse_ass: {

                required: "#type_ese_ass_yes:checked"

            },
            autre_activite_ass: {

                required: "#type_ese_ass_yes:checked"

            },
            nif_ass_1: {

                required: "#autre_activite_ass_yes:checked",
                number: true

            },
            email_ass_1: {

                required: false,
                email: true

            }
            ,
            nif_ass_moral: {

                required: "#type_ese_ass_no:checked"

            },

            nom_ass_etrangere: {

                required: "#type_ese_ass_yesno:checked"

            },

            adresse_etrangere_ass: {

                required: "#type_ese_ass_yesno:checked"

            },

            actionnaire_total_ass: {

                required: function (element) {

                    if ($('#type_ese_ass_yes').is(':checked') || $('#type_ese_ass_no').is(':checked') || $('#type_ese_ass_yesno').is(':checked')) {

                        return true;
                    }
                    else {

                        return false;

                    }
                }

            }
            ,
            pcactionnaire_ass: {

                required: function (element) {

                    if (($('#type_ese_ass_yes').is(':checked') || $('#type_ese_ass_no').is(':checked') || $('#type_ese_ass_yesno').is(':checked'))
                        && ($('#actionnaire_total_ass_no').is(':checked'))) {

                        return true;
                    }
                    else {

                        return false;

                    }
                }

            },
            activite_ets_2: {

                required: true

            },

            type_ets_2: {

                required: true

            },

            date_ouvert_ets_2: {

                required: true

            },
            adress_2: {

                required: true

            },
            kebele_ets_2: {

                required: true

            },
            num_fokontany_ets : {
                minlength: 4,
                required: true
            },
            tel_2: {

                required: true

            },
            emaila_2: {

                email: true

            }
            ,
            importateur_2: {

                required: true

            }
            ,
            exportateur_2: {

                required: true
            },
            proprietaire_ets_2: {

                required: true

            }
            ,
            type_proprietaire_ets_2: {

                required: true

            },
            nom_dir: {

                required: true

            },

            fonction_dir: {

                required: true

            },

            type_dirigent: {

                required: true

            },

            adresse_dir: {

                required: true

            }
            ,
            autre_activite: {

                required:true

            },
            nif_dir: {

                required: false,
                number: true

            },
            telMob_dir: {

                required:true
            }
            ,
            email_dir: {

                required: false,
                email: true

            }
            ,
            veh_matr: {

                required: true

            },

            veh_puis: {

                required: false,
                number: true

            },
            veh_place: {

                required: false,
                number: true


            },

            veh_charge: {

                required: false,
                number: true

            },

            veh_pois: {

                required: false,
                number: true

            },

            hikaramana: {
                required: true

            },
            veh_expl: {

                required: true
            }
            ,
            nom_interl: {

                required: true

            }
            ,
            adresse_interl: {

                required: true


            }
            ,
            email_interl: {

                email: true

            }
            ,
            tel_interl: {

                required: true

            }

        },  // FIN REGLE
        messages: {

            type_ese: {

                required: "A cocher"

            },
            raison_sociale: {

                required: "Nom prenom ou raison social obligatoire",
                minlength: jQuery.validator.format("plus de 5 caractère !")
            },

            situation_matrimoniale: {

                required: "Situation obligatoire"

            },

            sex: {

                required: "A cocher"

            },

            etranger: {

                required: "A cocher"
            }
            ,
            forme_juridique: {

                required: "Choisir dans la liste"
            },

            regime_fiscal: {

                required: "Choisir dans la liste"

            },

            birth_date: {

                required: "Date naissance obligatoire"

            },


            create_date: {

                required: " Date de création obligatoire",
                minlength: jQuery.validator.format("Date  8 caractère !")

            },

            capital: {

                number: jQuery.validator.format(" Capitale en  nombre !")

            }
            ,
            activites: {

                required: " Activité obligatoire "

            },

            cin_contribuable: {

                required: " CIN obligatoire"

            },

            passeport: {

                required: " Passeport ou carte de resident obligatoire"

            },

            num_stat: {

                required: " Statistique obligatoire",
                minlength: jQuery.validator.format("Statistique 17  caractère !")

            },

            date_stat: {

                required: " Date Statistique obligatoire"

            },

            importatera: {

                required: " A cocher"

            },
            exportatera: {

                required: " A cocher"

            },

            proprietaire_ese: {

                required: " A cocher"

            },

            type_proprietaire: {

                required: " A cocher"

            },

            nif_proprietaire_ese: {

                required: " NIF entreprise proprietaire obligatoire",
                number: jQuery.validator.format("NIF proprietaire en nombre!")

            },
            nom_proprietaire_indiv: {

                required: " Nom proprietaire obligatoire"

            },
            adresse_proprietaire_indiv: {

                required: " Adresse proprietaire obligatoire"

            },
            nb_salarie: {


                number: jQuery.validator.format("Nombre de salarié en nombre!")

            }
            ,
            adr_siege_dem: {

                required: "Siège obligatoire"
            },
            province_dem: {

                required: "A selectionner"

            },
            type_ese_ass: {

                required: "A cocher"

            },
            nom_ass: {

                required: "Nom associé obligatoire"

            },
            fonction_ass: {

                required: "Séléctionner une fonction"

            },
            resident_ass: {

                required: "A cocher"

            },
            adresse_ass: {

                required: "Adresse obligatoire"

            },
            num_fokontany: {
                minlength: jQuery.validator.format("plus de 4 caractères !"),
                required: " Champ obligatoire"
            },
            autre_activite_ass: {

                required: " A cocher"

            },

            nif_ass_moral: {

                required: " Nif personne morale obligatoire"

            },
            email_ass_1: {


                email: jQuery.validator.format(" Format mail incorrect !")

            },

            nom_ass_etrangere: {

                required: " Nom personne morale etrangère/Etat obligatoire "

            },

            adresse_etrangere_ass: {

                required: "Adresse personne morale etrangère/Etat obligatoire "

            },

            actionnaire_total_ass: {

                required: " A cocher"

            },
            pcactionnaire_ass: {

                required: "Pourcentage action obligatoire"

            },
            activite_ets_2: {

                required: "Activité obligatoire"

            },

            type_ets_2: {

                required: "Séléctionner type d'établissement"

            },

            date_ouvert_ets_2: {

                required: "Date ouverture obligatoire"

            },
            adress_2: {

                required: "Adresse obligatoire"

            },

            kebele_ets_2: {
                minlength: jQuery.validator.format("plus de 4 caractères !"),
                required: "Fokontany obligatoire"

            },
            num_fokontany_ets: {
                minlength: jQuery.validator.format("plus de 4 caractères !"),
                required: "Fokontany obligatoire"

            },

            tel_2: {

                required: "Contact etablissement obligatoire"

            },

            emaila_2: {

                email: jQuery.validator.format(" Adresse mail invalide !")

            }
            ,
            importateur_2: {

                required: "A cocher"

            }
            ,
            exportateur_2: {

                required: "A cocher"
            },
            proprietaire_ets_2: {

                required: "A cocher"

            }
            ,
            type_proprietaire_ets_2: {

                required: "A cocher"

            },

            nom_dir: {

                required: "Nom dirigeant obligatoire"

            },

            fonction_dir: {

                required: "Fonction dirigeant obligatoire"

            },

            type_dirigent: {

                required: "A cocher"

            },

            adresse_dir: {

                required: "Adresse obligatoire"

            },
            autre_activite: {

                required:"A cocher"

            },
            nif_dir: {

                number: "Un nombre est requis ici"

            }
            ,
            email_dir: {

                email: "Format mail invalid"

            }
            ,
            telMob_dir: {

                required: "Téléphone obligatoire"

            }
            ,

            veh_matr: {

                required: "Numéro véhicule obligatoire"

            },

            veh_puis: {

                number: " Un nombre est requis ici"

            },
            veh_place: {

                number: " Un nombre est requis ici"
            },

            veh_charge: {

                number: " Un nombre est requis ici"

            },
            veh_pois: {

                number: " Un nombre est requis ici"

            },
            hikaramana: {

                required: " A cocher"

            },
            veh_expl: {

                required: "Choisissez dans la liste"

            }
            ,
            nom_interl: {

                required: "Nom interlocuteur obligatoire"

            }
            ,
            adresse_interl: {

                required: "Adresse interlocuteur obligatoire"


            }
            ,
            email_interl: {

                email: "Format mail invalid"

            }
            ,
            tel_interl: {
                required: "Tel interlocuteur obligatoire"
            }


        }, //FN MESSAGE

        errorPlacement: function (error, element) {

            switch ((element.attr('name'))) {

                case 'type_ese' :

                    error.appendTo($('#erreur'));
                    break;

                case 'sex' :
                    error.appendTo($('#erreur0'));
                    break;

                case 'etranger' :
                    error.appendTo($('#erreur7'));
                    break;

                case 'importatera':
                    error.appendTo($('#erreur1'));
                    break;

                case 'exportatera' :
                    error.appendTo($('#erreur2'));
                    break;

                case 'proprietaire_ese' :
                    error.appendTo($('#erreur8'));
                    break;

                case 'type_proprietaire' :
                    error.appendTo($('#erreur9'));
                    break;

                case 'type_ese_ass' :
                    error.appendTo($('#erreur3'));
                    break;

                case 'resident_ass' :
                    error.appendTo($('#erreur4'));
                    break;

                case 'autre_activite_ass' :
                    error.appendTo($('#erreur5'));
                    break;

                case 'actionnaire_total_ass' :
                    error.appendTo($('#erreur6'));
                    break;

                case 'importateur_2' :
                    error.appendTo($('#erreur11'));
                    break;

                case 'exportateur_2' :
                    error.appendTo($('#erreur10'));
                    break;

                case 'proprietaire_ets_2' :
                    error.appendTo($('#erreur12'));
                    break;

                case 'type_proprietaire_ets_2' :
                    error.appendTo($('#erreur13'));
                    break;

                case 'type_dirigent' :
                    error.appendTo($('#erreur14'));
                    break;

                case 'hikaramana' :
                    error.appendTo($('#erreur17'));
                    break;

                case 'autre_activite' :
                    error.appendTo($('#erreur16'));
                    break;
                default:
                    error.insertAfter(element);
                    break;
            }


        }

    });
});
