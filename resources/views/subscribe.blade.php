@extends('template')


@section('content')
    <div class="container">
        <div class="row">


        </div>
        <div class="container"><!-- eto ny header demande-->

          
            <div class="boxfirst">

                <div class="row">

                    <ol class="breadcrumb" style="background-color:white">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Inscription</a></li>
                        <li class="active">Demande immatriculation</li>
                    </ol>
                </div>

                <div class="row">


                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="green" id="wizard">
                            <form class="form-horizontal" id="frm_nif" method="POST" action="{{ route('subscribe') }}">
                               
                                    @csrf

                                <div class="wizard-header">
                                    <h3 class="wizard-title">Procédure de demande d'immatriculation </h3>
                                    <p class="category">Veuillez fournir les renseignements suivants : </p>
                                </div>

                                <div class="wizard-navigation">
                                    <div class="progress-with-circle">

                                        <div class="progress-bar" role="progressbar" style="width: 21%;"></div>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#details" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-list"></i>
                                                </div>
                                                Principaux renseignement
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#captain" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-briefcase"></i>
                                                </div>
                                                Activité
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#description" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-bar-chart-alt"></i>
                                                </div>
                                                Siège
                                            </a>
                                        </li>


                                        <li>
                                            <a href="#autre" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-share-alt"></i>
                                                </div>
                                                Autres
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- saisie demande head -->
                                <div class="tab-content">

                                    <div class="tab-pane" id="details">
                                        <!-- debut tab renseignement -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="info-text"><small>Etape 1:</small> Principaux renseignements sur
                                                    le contribuable</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <hr style="border-color:#1E9354" />

                                                <!-- debut template saisie_dem_rens  -->

                                                <fieldset>
                                                    <div class="form-group">
                                                        <label class="col-sm-3" for="textinput">Nom et prénoms ou Raison
                                                            sociale
                                                            *</label>

                                                        <div class="col-sm-7">
                                                            <input class="form-control input-sm" id="raison_sociale"
                                                                value="" name="raison_sociale" placeholder=""
                                                                type="text">

                                                        </div>
                                                    </div>

                                                    <!-- Multiple Radios (inline) -->
                                                    <div class="form-group">
                                                        <label class="col-sm-3" for="type_ese_yes">Type *</label>

                                                        <div class="col-sm-6">


                                                            <label class="checkbox-inline " for="radios-0">

                                                                <input type="checkbox" class="yes"
                                                                    style="margin-right:5px" name="type_ese"
                                                                    id="type_ese_yes" value="3">Personne physique

                                                            </label>
                                                            <label class="checkbox-inline " for="type_ese_no"
                                                                id="type_ese_no">
                                                                <input type="checkbox" class="no"
                                                                    style="margin-right:5px" name="type_ese"
                                                                    id="type_ese_non" value="1">Personne morale
                                                            </label>

                                                            <span id="erreur" class="checkbox-inline"></span>

                                                        </div>
                                                    </div>
                                                    <div class="depend_type_ese"
                                                        style="background-color:#F4F4F4;width: 740px;padding-top:10px;padding-bottom:10px;border-radius: 10px">
                                                        <!-- Select Basic -->
                                                        <div class="form-group">
                                                            <label class="col-sm-3" for="selectbasic">Situation matrimoniale
                                                                *</label>

                                                            <div class="col-sm-5">
                                                                <select id="situation_matrimoniale"
                                                                    name="situation_matrimoniale"
                                                                    class="form-control input-sm">

                                                                    <option value="" selected>--Choisissez dans la
                                                                        liste--
                                                                    </option>
                                                                    <option value="1">MARIE(E)</option>

                                                                    <option value="2">CELIBATAIRE</option>

                                                                    <option value="3">DIVORCE(E)</option>

                                                                    <option value="4">VEUF(VE)</option>

                                                                    <option value="0">INCONNU</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- Multiple Radios (inline) -->
                                                        <div class="form-group">
                                                            <label class="col-sm-3 " for="sexa_yes" id="sexa_label">Sexe
                                                                *</label>

                                                            <div class="col-sm-6">

                                                                <span class="required">
                                                                    <label class="ckeckox-inline" for="sex_yes"
                                                                        style="margin-right:5px">
                                                                        <input type="checkbox" class="yes"
                                                                            name="sex" id="sex_yes" value="1">
                                                                        &nbsp;Masculin
                                                                    </label>
                                                                    <label class="ckeckox-inline" for="sex">
                                                                        <input type="checkbox" class="no"
                                                                            name="sex" id="sex_no" value="0"
                                                                            style="margin-right:5px">
                                                                        &nbsp;Feminin
                                                                    </label>
                                                                </span>
                                                                <span id="erreur0"></span>
                                                            </div>

                                                        </div>

                                                        <!-- Multiple Radios (inline) -->
                                                        <div class="form-group">
                                                            <label class="col-md-3" for="etranger_label">Etranger
                                                                *</label>
                                                            <div class="col-md-4">
                                                                <label class="checkbox-inline" for="etranger_yes">
                                                                    <input type="checkbox" class="yes" name="etranger"
                                                                        id="etranger_yes" value="0">
                                                                    Oui
                                                                </label>
                                                                <label class="checkbox-inline" for="etranger_no">
                                                                    <input type="checkbox" class="no" name="etranger"
                                                                        id="etranger_no" value="1">
                                                                    Non
                                                                </label>
                                                                <span id="erreur7" class="checkbox-inline"></span>
                                                            </div>
                                                        </div>
                                                        <!-- Text input-->
                                                        <div class="depend_etrange_loc" style="display:none">
                                                            <div class="form-group">
                                                                <label class="col-sm-3" for="textinput">Numéro CIN
                                                                    *</label>

                                                                <div class="col-sm-5">
                                                                    <input id="cin_contribuable" name="cin_contribuable"
                                                                        class="form-control input-sm cin"
                                                                        data-toggle="tooltip" data-placement="right"
                                                                        title="Au choix soit le numéro CIN soit le Passeport ou la Carte de résident"
                                                                        type="text" value="">

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="depend_etrange_etr" style="display:none">
                                                            <div class="form-group">
                                                                <label class="col-sm-3" for="textinput">Numéro passeport
                                                                    ou carte de résident * </label>

                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control input-sm"
                                                                        id="passeport" maxlength="20" name="passeport"
                                                                        value="">

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-sm-3" for="textinput">Date de
                                                                délivrance</label>

                                                            <div class="col-md-5" style="margin-left:2px">
                                                                <div class="input-group">
                                                                    <input type="text"
                                                                        class="form-control input-sm date_input"
                                                                        id="delivre_date" name="delivre_date"
                                                                        value="">
                                                                    <span class="input-group-addon"><i
                                                                            class="fa fa fa-calendar "></i></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-sm-3" for="textinput">Lieu de délivrance
                                                                * </label>

                                                            <div class="col-md-5">
                                                                <input class="form-control input-sm" type="text"
                                                                    id="lieu_cin_contribuable"
                                                                    name="lieu_cin_contribuable" value=" ">

                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-sm-3" for="birth_date">Date de naissance
                                                                *</label>

                                                            <div class="col-md-5 " style="margin-left:2px">
                                                                <div class="input-group">

                                                                    <input type="text"
                                                                        class="form-control input-sm date_input"
                                                                        id="birth_date" name="birth_date" value=" ">
                                                                    <span class="input-group-addon"><i
                                                                            class="fa fa fa-calendar "></i></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-sm-3" for="textinput">Lieu de naissance
                                                                *</label>

                                                            <div class="col-md-5">
                                                                <input class="form-control input-sm" type="text"
                                                                    id="birth_place_contribuable"
                                                                    name="birth_place_contribuable" value=" ">

                                                            </div>
                                                        </div>

                                                        <!-- Multiple Radios (inline) -->
                                                    </div>
                                                    <!-- Select Basic -->
                                                    <div class="form-group">
                                                        <label class="col-sm-3" for="forme_juridique"
                                                            id="forme_juridique_label">Forme juridique *</label>

                                                        <div class="col-md-5">
                                                            <select class="form-control select_forme_juridique"
                                                                id="forme_juridique" data-id=""
                                                                name="forme_juridique">

                                                                <option class="select_first_option" value=""
                                                                    selected>
                                                                    Choisissez dans la liste --
                                                                </option>
                                                                <option value="51">STE ANONYME AVEC ADMINISTRATEUR
                                                                    GENERAL</option>

                                                                <option value="42">COMMUNE RURALE</option>

                                                                <option value="43">COMMUNE URBAINE</option>

                                                                <option value="44">REGION</option>

                                                                <option value="45">DISTRICT</option>

                                                                <option value="46">PROVINCE</option>

                                                                <option value="41">STE EN PARTICIPATION</option>

                                                                <option value="50">INCONNU</option>

                                                                <option value="1">ENTREPRISE INDIVIDUELLE</option>

                                                                <option value="2">STE EN NOM COLLECTIF</option>

                                                                <option value="3">STE EN COMMANDITE SIMPLE</option>

                                                                <option value="4">STE EN COMPTE PAR ACTION</option>

                                                                <option value="5">SA (SOCIETE ANONYME)</option>

                                                                <option value="6">SARL (STE A RESPTE LIMITEE)</option>

                                                                <option value="7">STE D'ECONOMIE MIXTE</option>

                                                                <option value="8">STE D'INTERET NATIONAL</option>

                                                                <option value="9">STE ANONYME D'ETAT</option>

                                                                <option value="10">ENTREPRISE SOCIALISTE</option>

                                                                <option value="11">EPIC (ETS PUBLIC A CAR IND & CO)
                                                                </option>

                                                                <option value="12">STE CIVILE IMMOBILIERE</option>

                                                                <option value="13">COOPERATIVE</option>

                                                                <option value="14">ASSOCIATION</option>

                                                                <option value="15">ONG (ORGANISME NON GOUVERNEMENTAL)
                                                                </option>

                                                                <option value="16">ETS PUBLIC SCIENT.TECHNI</option>

                                                                <option value="17">PROJET</option>

                                                                <option value="21">SARLU (STE A RESP LIMIT UNI)
                                                                </option>

                                                                <option value="18">OIG (ORGANISME INTER GOUVERNEMENTAL)
                                                                </option>

                                                                <option value="19">EPA (ETS PUBLIC A CARACTERE
                                                                    ADMINISTRATIF)</option>

                                                                <option value="22">STE ANONYME UNIPERSONNELE</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Select Basic -->
                                                    <div class="form-group">
                                                        <label class="col-sm-3" for="regime_fiscal"
                                                            id="regime_fiscal_label">Régime
                                                            fiscale *</label>

                                                        <div class="col-md-5">
                                                            <select class="form-control  select_regime_fiscal"
                                                                id="regime_fiscal" name="regime_fiscal">
                                                                <option class="select_first_option" value="">
                                                                    --Choisissez dans la liste--
                                                                </option>
                                                                <option value="1">DROIT COMMUN</option>

                                                                <option value="2">ZONE FRANCHE</option>

                                                                <option value="3">CODE DES INVESTISSEMENTS</option>

                                                                <option value="4">LGIM</option>

                                                                <option value="5">CONVENTION D'ETABLISSEMENT</option>

                                                                <option value="6">AUTRES</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="depend_fiscal_regime"
                                                        style="background-color:#F4F4F4;width: 740px;padding-top:10px;padding-bottom:10px;border-radius: 10px">
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-sm-3" for="textinput">Date agrément</label>

                                                            <div class="col-md-5">
                                                                <div class="input-group">

                                                                    <input class="form-control input-sm date_input"
                                                                        type="text" id="agree_datyy" name="agree_date"
                                                                        value="">
                                                                    <span class="input-group-addon"><i
                                                                            class="fa fa fa-calendar bgrey"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-sm-3" for="textinput">Ref agrément</label>

                                                            <div class="col-md-5">
                                                                <input class="form-control input-sm" type="text"
                                                                    id="ref_agr" name="ref_agr" value="">

                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-sm-3" for="textinput">Période de grace
                                                                *</label>

                                                            <div class="col-md-5">
                                                                <input class="form-control input-sm" type="text"
                                                                    id="grace" name="grace" value="0">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-sm-3" for="textinput">Date de création *</label>

                                                        <div class="col-md-5">
                                                            <div class="input-group">

                                                                <input id="create_date" name="create_date" placeholder=""
                                                                    class="form-control input-sm date_input"
                                                                    type="text" value="">
                                                                <span class="input-group-addon"><i
                                                                        class="fa fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-sm-3" for="textinput">Capital en Ar *</label>

                                                        <div class="col-md-5">
                                                            <input class="form-control input-sm" id="capital"
                                                                name="capital" data-toggle="tooltip"
                                                                data-placement="right" value=""
                                                                title="En chiffre sans espace ni point. Obligatoire pour les personnes morales."
                                                                type="text">

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3" for="dispoRIB_yes">RIB *</label>

                                                        <div class="col-sm-6">


                                                            <label class="checkbox-inline " for="radios-0">

                                                                <input type="checkbox" class="yes"
                                                                    style="margin-right:5px" name="dispoRIB"
                                                                    id="dispoRIB_yes" value="3">Disponible

                                                            </label>
                                                            <label class="checkbox-inline " for="dispoRIB_no"
                                                                id="dispoRIB_non">
                                                                <input type="checkbox" class="no"
                                                                    style="margin-right:5px" name="dispoRIB"
                                                                    id="dispoRIB_non" value="1">Pas encore Disponible
                                                            </label>

                                                            <span id="erreur" class="checkbox-inline"></span>

                                                        </div>
                                                    </div>
                                                    <!-- Text input-->
                                                    <div class="form-group" id="add-rib_id">
                                                        <label class="col-sm-3" for="dispoRIBA"> </label>
                                                        <div class="col-md-5">
                                                            <input placeholder="" id="bank_acct_no" name="bank_acct_no"
                                                                data-toggle="tooltip" data-placement="bottom"
                                                                value=""
                                                                title="Numéro de compte bancaire. Obligatoire pour les personnes morales ou les assujettis à la TVA."
                                                                class="form-control input-sm bank" type="text">
                                                            <input type="hidden" id="id_entr" value="">
                                                            <input type="hidden" id="id_taxpayer" value="">
                                                            <input type="hidden" id="id_url"
                                                                value="https://hetraonline.impots.mg/">
                                                        </div>
                                                        <button type="button" class="btn btn-xs  btn-default btn_add_rib"
                                                            data-toggle="tooltip" data-placement="bottom"
                                                            title="Cliquer ici pour ajouter une RIB !"
                                                            style="border-radius:3px"></button>
                                                    </div>
                                                </fieldset>
                                                <!-- fin  template saisie_dem_rens  -->

                                            </div>
                                        </div>
                                        <!-- fin  tab renseignement -->
                                    </div>
                                    <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
                                    <div class="tab-pane" id="captain"><!-- debut  tab activité -->
                                        <div class="row">
                                            <h5 class="info-text"><small>Etape 2:</small> Renseignements sur les activités
                                            </h5>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-8 col-md-offset-2">

                                                <!-- debut  template activité -->

                                                <legend style="border-color:#F3BB45"></legend>
                                                <!-- Textarea -->
                                                <div class="form-group">
                                                    <label class="col-sm-3 " for="activites">Activités *</label>

                                                    <div class="col-sm-8">
                                                        <textarea class="form-control input-sm" id="activites" name="activites" data-toggle="tooltip"
                                                            data-placement="right" title="Lister par ordre d'importance toutes vos activités"></textarea>

                                                    </div>
                                                </div>

                                                <!-- Textarea -->
                                                <div class="form-group">
                                                    <label class="col-sm-3 " for="detail_activites">Précision sur les
                                                        activités</label>

                                                    <div class="col-sm-6">
                                                        <textarea class="form-control input-sm" id="detail_activites" name="detail_activites" data-toggle="tooltip"
                                                            data-placement="bottom"
                                                            title="Si Transporteur, lister ici les numéros des moyens de transport. Si Importateur, Exportateur, Collecteur (ou autres), énumérer les principaux produits. Pour les titulaires de licence de boissons alcooliques, mentionner la catégorie, la référence et la date de décision.">                    </textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" for="dispoStat_yes">Numéro statistique
                                                        *</label>

                                                    <div class="col-sm-6">


                                                        <label class="checkbox-inline " for="radios-0">

                                                            <input type="checkbox" class="yes"
                                                                style="margin-right:5px" name="dispoStat"
                                                                id="dispoStat_yes" value="3">Disponible

                                                        </label>
                                                        <label class="checkbox-inline " for="dispoStat_no"
                                                            id="dispoStat_non">
                                                            <input type="checkbox" class="no"
                                                                style="margin-right:5px" name="dispoStat"
                                                                id="dispoStat_non" value="1">Pas encore Disponible
                                                        </label>

                                                        <span id="erreur" class="checkbox-inline"></span>

                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-sm-3 " for="textinput"></label>

                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm nstat"
                                                            id="num_stat" name="num_stat" VALUE=" "
                                                            data-toggle="tooltip" data-placement="bottom"
                                                            title="Si votre statistique est en attente, veuillez mettre 55555 55 55555 5 55555.">

                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-sm-3" for="textinput">Date de délivrance statistique
                                                        *</label>

                                                    <div class="col-md-4" style="margin-left:2px">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control input-sm date_input"
                                                                id="date_stat" name="date_stat" value="">
                                                            <span class="input-group-addon"><i
                                                                    class="fa fa fa-calendar bgblack"></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-sm-3" for="textinput">Registre de commerce</label>

                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm"
                                                            id="registre_com" value="" name="registre_com">

                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-sm-3" for="textinput">Date de registre de
                                                        commerce</label>

                                                    <div class="col-md-4 " style="margin-left:2px">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control input-sm date_input"
                                                                value="" id="registre_date" name="registre_date">
                                                            <span class="input-group-addon"><i
                                                                    class="fa fa fa-calendar bgblack"></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-sm-3" for="textinput">Début de l'exercice comptable
                                                        *</label>

                                                    <div class="col-sm-4">
                                                        <input type="text"
                                                            class="form-control input-sm date_input_without_year"
                                                            id="date_debut_exo" name="date_debut_exo" value="01/01"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="Changer cette valeur par défaut, si votre exercice ne débute pas le 1er Janvier.">

                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-sm-3" for="textinput">Clôture de l'exercice
                                                        comptable</label>

                                                    <div class="col-sm-4">
                                                        <input class="form-control input-sm date_input_without_year"
                                                            type="text" value="31/12" id="date_fin_exo"
                                                            name="date_fin_exo">

                                                    </div>
                                                </div>

                                                <!-- Multiple Radios (inline) -->
                                                <div class="form-group">
                                                    <label class="col-sm-3" for="radios">Importateur *</label>

                                                    <div class="col-sm-6">
                                                        <span class="required">

                                                            <label class="checkbox-inline" for="importatera_yes">
                                                                <input type="checkbox" class="yes" value="1"
                                                                    name="importatera" id="importatera_yes">
                                                                Oui
                                                            </label>
                                                            <label class="checkbox-inline" for="importatera_no">
                                                                <input type="checkbox" class="no" value="0"
                                                                    name="importatera" id="importatera_no">
                                                                Non
                                                            </label>
                                                        </span>

                                                        <span id="erreur1" class="checkbox-inline"></span>

                                                    </div>
                                                </div>

                                                <!-- Multiple Radios (inline) -->
                                                <div class="form-group">
                                                    <label class="col-sm-3" for="radios">Exportateur *</label>

                                                    <div class="col-sm-6">
                                                        <span class="required">
                                                            <label class="checkbox-inline" for="exportatera_yes">
                                                                <input type="checkbox" class="yes" value="1"
                                                                    name="exportatera" id="exportatera_yes">
                                                                Oui
                                                            </label>
                                                            <label class="checkbox-inline" for="exportatera_no">
                                                                <input type="checkbox" class="no" value="0"
                                                                    name="exportatera" id="exportatera_no">
                                                                Non
                                                            </label>
                                                        </span>
                                                        <span id="erreur2" class="checkbox-inline"></span>
                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-sm-3 " for="textinput">Nombre de salarié</label>

                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control input-sm"
                                                            maxlength="5" id="nbSal" name="nbSal" value=" "
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="Nombre total des salariés dans toute l'entreprise">

                                                    </div>
                                                </div>
                                                <!-- fin  template activité -->

                                            </div>
                                        </div>
                                    </div><!-- fin tab activité -->
                                    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                    <div class="tab-pane" id="description"> <!-- debut tab siege -->
                                        <div class="row">
                                            <h5 class="info-text"><small>Etape 3:</small> Renseignements sur le siège </h5>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <legend style="border-color:#1E9354"></legend>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-8 col-md-offset-2">

                                                <!-- debut template siège -->


                                                <div class="form-group">
                                                    <label class="col-md-3" for="textarea">Adresse actuelle (siège)
                                                        *</label>

                                                    <div class="col-md-6">
                                                        <textarea class="form-control" id="adr_siege_dem" name="adr_siege_dem"></textarea>
                                                    </div>
                                                </div>

                                                <!-- Select Basic -->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="selectbasic">Fokontany *</label>
                                                    <div class="col-md-5">
                                                        <input type="text" class="form-control fokontany"
                                                            id="num_fokontany" name="num_fokontany" value="" />
                                                        <input type="text" id="code_fokontany" name="code_fokontany"
                                                            value="" hidden />
                                                    </div>
                                                </div>
                                                <!-- Select Basic -->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="selectbasic">Commune *</label>

                                                    <div class="col-md-5">
                                                        <input type="text" id="lib_wereda" name="lib_wereda"
                                                            width="190%" disabled="disabled" value="" />
                                                        <input type="text" id="code_wereda" name="code_wereda"
                                                            value= "" hidden />
                                                    </div>
                                                </div>
                                                <!-- Select Basic -->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="district_dem">District *</label>

                                                    <div class="col-md-5">
                                                        <input type="text" id="lib_distr" name="lib_distr"
                                                            width="190%" disabled="disabled" value=" ">
                                                        <input type="text" id="code_distr" name="code_distr" hidden />
                                                    </div>
                                                    <span>
                                                </div>
                                                <!-- Select Basic -->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="region_dem">Région *</label>

                                                    <div class="col-md-5 ">
                                                        <input type="text" id="lib_region" name="lib_region"
                                                            width="190%" disabled="disabled" value=" ">
                                                        <input type="text" id="code_region" name="code_region"
                                                            hidden />
                                                    </div>
                                                    </span>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3" for="province_dem">Province *</label>

                                                    <div class="col-md-5">
                                                        <input type="text" id="lib_faritany" name="lib_faritany"
                                                            width="190%" disabled="disabled" value=" " />
                                                        <input type="text" id="code_faritany" name="code_faritany"
                                                            hidden />
                                                    </div>

                                                </div>
                                                <!-- fin template siège -->
                                            </div>
                                        </div>
                                    </div> <!-- fin tab siege -->
                                    <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                    <div class="tab-pane" id="associe">
                                        <div class="row">
                                            <h5 class="info-text"><small>Etape 4:</small> Renseignements sur les Associés /
                                                Actionnaires * </h5>


                                        </div>
                                        <fieldset>

                                            <div class="row depend_ass" style="display:none">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <legend style="border-color:#1E9354"></legend>
                                                    <div class="alert alert-danger" role="alert" style="display:none"
                                                        id="alt_form_none">
                                                        <span class="glyphicon glyphicon-warning-sign"> </span>
                                                        Cliquer sur "Sauver" ou "Annuler" en bas du formulaire
                                                    </div>

                                                    <!-- debut  template associe -->

                                                    <div class="form-group" style="background-color:#EDEDED">
                                                        <label class="col-md-3" for="type_ese_ass_yes_1">Type d'associés /
                                                            Actionnaires</label>
                                                        <div class="col-sm-9">
                                                            <span class="required">
                                                                <label class="checkbox-inline" for="type_ese_ass_yes">
                                                                    <input type="checkbox" class="yes"
                                                                        name="type_ese_ass" id="type_ese_ass_yes"
                                                                        value="3">
                                                                    Personne physique
                                                                </label>
                                                                <label class="checkbox-inline" for="type_ese_ass_no">
                                                                    <input type="checkbox" class="no"
                                                                        name="type_ese_ass" id="type_ese_ass_no"
                                                                        value="1">
                                                                    Personne morale
                                                                </label>
                                                                <label class="checkbox-inline" for="type_ese_ass_yesno">
                                                                    <input type="checkbox" class="yesno"
                                                                        name="type_ese_ass" id="type_ese_ass_yesno"
                                                                        value="2">
                                                                    Personne morale etrangère/Etat
                                                                </label>

                                                            </span>

                                                            <span id="erreur3" class="checkbox-inline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="depend_type_ese_ass_yes" style="display:none;">

                                                        <div class="form-group">
                                                            <label class="col-md-3" for="nom_ass">Nom * </label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control input-md"
                                                                    maxlength="48" id="nom_ass" name="nom_ass">

                                                            </div>
                                                        </div>

                                                        <!-- Select Basic -->
                                                        <div class="form-group">
                                                            <label class="col-md-3" for="fonction_ass">Fonction *</label>
                                                            <div class="col-md-6">
                                                                <select class="form-control" id="fonction_ass"
                                                                    name="fonction_ass">

                                                                    <option value="" selected>Choississez dans la
                                                                        liste</option>

                                                                    <option value="8|MAIRE">MAIRE</option>

                                                                    <option value="9|ADJOINT AU MAIRE">ADJOINT AU MAIRE
                                                                    </option>

                                                                    <option value="10|PDS">PDS</option>

                                                                    <option value="11|CHEF DE REGION">CHEF DE REGION
                                                                    </option>

                                                                    <option value="12|CHEF DE DISTRICT">CHEF DE DISTRICT
                                                                    </option>

                                                                    <option value="7|PROPRIETAIRE">PROPRIETAIRE</option>

                                                                    <option value="4|CHEF D'AGENCE">CHEF D'AGENCE</option>

                                                                    <option value="1|GERANT">GERANT</option>

                                                                    <option value="2|DG">DG</option>

                                                                    <option value="3|PDG">PDG</option>

                                                                    <option value="5|CO-GERANT">CO-GERANT</option>

                                                                    <option value="6|AUTRE">AUTRE</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- Multiple Radios (inline) -->
                                                        <div class="form-group">
                                                            <label class="col-md-3" for="resident_ass_yes">Resident
                                                                *</label>
                                                            <div class="col-md-4">
                                                                <label class="checkbox-inline" for="resident_ass_yes">
                                                                    <input type="checkbox" class="yes"
                                                                        name="resident_ass" id="resident_ass_yes"
                                                                        value="1">
                                                                    Oui
                                                                </label>
                                                                <label class="checkbox-inline" for="resident_ass_no">
                                                                    <input type="checkbox" class="no"
                                                                        name="resident_ass" id="resident_ass_no"
                                                                        value="0">
                                                                    Non
                                                                </label>
                                                                <span id="erreur4" class="checkbox-inline"></span>
                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="depend_entrange_ass_yes" style="display:none;">
                                                            <div class="form-group">
                                                                <label class="col-md-3" for="cin_ass">Numero CIN
                                                                    *</label>
                                                                <div class="col-md-5">
                                                                    <input type="text"
                                                                        class="form-control input-md cin" id="cin_ass"
                                                                        name="cin_ass">

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="depend_entrange_ass_no" style="display:none;">
                                                            <div class="form-group">
                                                                <label class="col-md-3" for="passeport_ass">Numéro
                                                                    Passeport ou Carte Résident *</label>
                                                                <div class="col-md-5">
                                                                    <input class="form-control input-md" type="text"
                                                                        maxlength="18" id="passeport_ass"
                                                                        name="passeport_ass">

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-3" for="adresse_ass">Adresse *</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control input-md" type="text"
                                                                    id="adresse_ass" name="adresse_ass">

                                                            </div>
                                                        </div>

                                                        <!-- Multiple Radios (inline) -->
                                                        <div class="form-group">
                                                            <label class="col-md-3" for="autre_activite_ass_yes">Autre
                                                                activité *</label>
                                                            <div class="col-md-6">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" class="yes"
                                                                        name="autre_activite_ass"
                                                                        id="autre_activite_ass_yes" value="1">
                                                                    Avec NIF
                                                                </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" class="yesno"
                                                                        name="autre_activite_ass"
                                                                        id="autre_activite_ass_yesno" value="2">
                                                                    Salarié
                                                                </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" class="no"
                                                                        name="autre_activite_ass"
                                                                        id="autre_activite_ass_no" value="0">
                                                                    Aucune
                                                                </label>
                                                                <span id="erreur5" class="checkbox-inline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="depend_en_activite_avec_nif_ass" style="display:none">
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="col-md-3" for="nif_ass_1">NIF *</label>
                                                                <div class="col-md-5">
                                                                    <input id="nif_ass_1" name="nif_ass_1" maxlength="10"
                                                                        class="form-control input-md" type="text">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-3" for="email_ass_1">E-mail</label>
                                                            <div class="col-md-5">
                                                                <input id="email_ass_1" name="email_ass_1"
                                                                    placeholder="andrew@gmail.com"
                                                                    class="form-control input-md" type="text">

                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-3" for="telMob_ass_1">Téléphone</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control input-md tel" type="text"
                                                                    id="telMob_ass_1" name="telMob_ass_1">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="depend_type_ese_ass_no" style="display:none;">

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-3" for="nif_ass_moral">NIF * </label>
                                                            <div class="col-md-4">
                                                                <input class="form-control input-md" type="text"
                                                                    maxlength="10" id="nif_ass_moral"
                                                                    name="nif_ass_moral">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="depend_type_ese_ass_yesno" style="display:none;">
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-3" for="nom_ass_etrangere">Nom *</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control input-md" type="text"
                                                                    maxlength="48" id="nom_ass_etrangere"
                                                                    name="nom_ass_etrangere">

                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-3" for="adresse_etrangere_ass">Adresse
                                                                *</label>
                                                            <div class="col-md-6">
                                                                <input class="form-control input-md" type="text"
                                                                    maxlength="78" id="adresse_etrangere_ass"
                                                                    name="adresse_etrangere_ass">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Multiple Radios (inline) -->
                                                    <div class="form-group">
                                                        <label class="col-md-3" for="actionnaire_total_ass_yes">Associé
                                                            unique</label>
                                                        <div class="col-md-4">
                                                            <label class="checkbox-inline" for="radios-0">
                                                                <input type="checkbox" class="yes"
                                                                    name="actionnaire_total_ass"
                                                                    id="actionnaire_total_ass_yes" value="1">
                                                                Oui
                                                            </label>
                                                            <label class="checkbox-inline" for="radios-1">
                                                                <input type="checkbox" class="no"
                                                                    name="actionnaire_total_ass"
                                                                    id="actionnaire_total_ass_no" value="2">
                                                                Non
                                                            </label>
                                                            <span id="erreur6" class="checkbox-inline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="depend_part_action_ass" style="display:none">
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-3" for="pcactionnaire_ass">% Action
                                                                ou</label>
                                                            <div class="col-md-4">
                                                                <input class="form-control input-md part_action"
                                                                    type="text" id="pcactionnaire_ass"
                                                                    name="pcactionnaire_ass">

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- fin form template associé -->

                                                    <div style="margin-bottom:150px;background-color:#F4F4F4;">

                                                        <!-- debut boutton form template associé -->

                                                        <div class="fom-group">
                                                            <div class="col-md-3">&nbsp;
                                                            </div>
                                                            <div class="col-md-5">
                                                                <button type="button" class="btn btn-default"
                                                                    role="button" style="border-radius:3px"
                                                                    id="btn_add_in_ass" data-toggle="tooltip"
                                                                    data-placement="bottom" data-id=""
                                                                    title="Cliquer ici pour enregistrer la saisie dans la liste">
                                                                    <span class="glyphicon glyphicon-floppy-disk "
                                                                        aria-hidden="true"> </span> Sauver</button>

                                                                <button type="button" class="btn btn-default"
                                                                    role="button" style="border-radius:3px"
                                                                    id="btn_cancel_ass" data-id=""
                                                                    data-toggle="tooltip" data-placement="bottom"
                                                                    title="Cliquer ici pour annuler cette action">
                                                                    <span class="glyphicon glyphicon-repeat"
                                                                        aria-hidden="true"> </span> Annuler </button>

                                                            </div>
                                                        </div>
                                                        <!-- fin boutton form template associé -->

                                                    </div>


                                                </div>
                                            </div>
                                            <div class="row  depend_ass_zone" style="display:none">
                                                <div class="col-md-8 col-md-offset-2">

                                                    <div class="pull-right"
                                                        style="margin-bottom:3px;margin-left:8px;margin-bottom:50px">

                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="row depend_list" style="font-size:12px;margin-bottom:50px">
                                            <div class="col-md-10 col-md-offset-1">
                                                <p class="category">Procéder comme suit: </p>
                                                <div class="alert alert-success" style="margin-top:10px">
                                                    <ol class="">
                                                        <li>Cliquer sur le bouton "Nouveau" en bas du tableau</li>
                                                        <li>Remplir le formulaire</li>
                                                        <li>Cliquer sur "Ajouter dans la liste"</li>
                                                    </ol>
                                                </div>
                                                <div class="alert alert-danger" role="alert" style="display:none"
                                                    id="alt_list_none">
                                                    <span class="glyphicon glyphicon-warning-sign"> </span>
                                                    Veuillez ajouter les associés en cliquant sur le bouton "+" en bas du
                                                    tableau
                                                </div>
                                                <!-- debut template liste  associé -->
                                                <p>
                                                <div id="content" style="font-size:12px">

                                                    <table id="jqGrid_ass" class="scroll"></table>
                                                    <div id="pager_ass" class="scroll"></div>
                                                </div>
                                                </p>
                                                <!-- fin template liste  associé -->

                                                <div class="text-center" style="background-color:#ffff">

                                                    <div id="indemtempl">
                                                        <!-- debut template boutton pour lise  associé -->
                                                        <button type="button" class="btn btn-default "
                                                            data-toggle="tooltip" data-placement="bottom"
                                                            title="Cliquer ici pour ajouter un associé" id="btn_add_ass"
                                                            style="border-radius:3px">

                                                            <span class="glyphicon glyphicon-plus"
                                                                aria-hidden="true"></span>&nbsp;</button>

                                                        <button type="button" class="btn btn-default"
                                                            data-toggle="tooltip" data-placement="bottom"
                                                            title="Sélectionner une ligne puis cliquer ici pour supprimer un associé"
                                                            id="btn_del_ass" style="border-radius:3px">

                                                            <span class="glyphicon glyphicon-minus"
                                                                aria-hidden="true"></span>&nbsp;</button>

                                                        <button type="button" class="btn btn-default"
                                                            data-toggle="tooltip" data-placement="bottom"
                                                            title="Cliquer ici pour réduire la colonne du tableau au minimun"
                                                            id="btn_reduce_all_tab_ass" style="border-radius:3px">

                                                            <span class="glyphicon glyphicon-resize-small"
                                                                aria-hidden="true"></span>&nbsp;</button>

                                                        <button type="button" class="btn btn-default"
                                                            data-toggle="tooltip" data-placement="bottom"
                                                            title="Cliquer ici pour afficher tous les éléments du tableau"
                                                            id="btn_affiche_all_tab" style="border-radius:3px">
                                                            <span class="glyphicon glyphicon-fullscreen"
                                                                aria-hidden="true"></span>&nbsp;</button>
                                                        <!-- fin template boutton pour lise  associé -->
                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                        <!-- fin  template associe -->
                                    </div><!-- fin associe-->
                                    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ --->
                                    <div class="tab-pane" id="etablissement">
                                        <div class="row">
                                            <h5 class="info-text"> <small>Etape 5:</small> Principaux renseignements sur
                                                l'établissement / Lieu d'exploitation</h5>
                                        </div>

                                        <div class="row depend_form_etab" style="display:none">
                                            <!-- Form Name -->
                                            <div class="col-md-8 col-md-offset-2">
                                                <div class="alert alert-danger" role="alert" style="display:none"
                                                    id="alt_form_none_etab">
                                                    <span class="glyphicon glyphicon-warning-sign"> </span>
                                                    Cliquer sur "Sauver" ou "Annuler" en bas du formulaire
                                                </div>

                                                <!-- debut template form etablissement-->


                                                <legend style="border-color:#1E9354"></legend>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="textinput">Nom commercial</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control input-md" type="text"
                                                            id="nom_commercial_2" name="nom_commercial_2">

                                                    </div>
                                                </div>

                                                <!-- Textarea -->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="textarea">Activité *</label>
                                                    <div class="col-md-6">
                                                        <textarea class="form-control" id="activite_ets_2" name="activite_ets_2"></textarea>
                                                    </div>
                                                </div>

                                                <!-- Select Basic -->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="selectbasic">Titre *</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control select_type_ets required"
                                                            id="type_ets_2" name="type_ets_2">
                                                            <option value="" selected>Choississez dans la liste
                                                            </option>
                                                            <option value="7|ANNEXE">ANNEXE</option>
                                                            <option value="5|USINE">USINE</option>
                                                            <option value="6|FILIALE">FILIALE</option>
                                                            <option value="1|MAGASIN">MAGASIN</option>
                                                            <option value="2|ENTREPOT">ENTREPOT</option>
                                                            <option value="3|AGENCE">AGENCE</option>
                                                            <option value="4|BUREAU">BUREAU</option>
                                                            <option value="0|SIEGE">SIEGE</option>
                                                            <option value="9|SUCCURSALE">SUCCURSALE</option>
                                                            <option value="10|COMBINE">COMBINE</option>
                                                            <option value="11|AUTRE">AUTRE</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3" for="date_ouvert_ets_2">Date
                                                        ouverture</label>
                                                    <div class="col-md-4" style="margin-left:2px">
                                                        <div class="input-group">

                                                            <input class="form-control input-md date_input"
                                                                type="text" id="date_ouvert_ets_2"
                                                                name="date_ouvert_ets_2">
                                                            <span class="input-group-addon"><i
                                                                    class="fa fa fa-calendar bgblack"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3" for="textinput">Adresse * / Lot</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control input-md" type="text"
                                                            id="adress_2" name="adress_2">

                                                    </div>
                                                </div>
                                                <!-- Select Basic -->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="selectbasic">Fokontany *</label>

                                                    <div class="col-md-5">
                                                        <input type="text" class="form-control"
                                                            id="num_fokontany_ets" name="num_fokontany_ets" />
                                                        <input type="text" hidden id="code_fokontany_ets"
                                                            name="code_fokontany_ets" />

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3" for="province_dem">Province *</label>

                                                    <div class="col-md-5">
                                                        <input type="text" id="lib_faritany_ets"
                                                            name="lib_faritany_ets" width="190%"
                                                            disabled="disabled" />
                                                        <input type="text" id="code_faritany_ets"
                                                            name="code_faritany_ets" hidden />
                                                    </div>

                                                </div>

                                                <!-- Select Basic -->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="region_dem">Région *</label>

                                                    <div class="col-md-5 ">
                                                        <input type="text" id="lib_region_ets"
                                                            name="lib_region_ets" width="190%"
                                                            disabled="disabled" />
                                                        <input type="text" id="code_region_ets"
                                                            name="code_region_ets" hidden />
                                                    </div>
                                                    <span />
                                                </div>

                                                <!-- Select Basic -->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="district_dem">District *</label>

                                                    <div class="col-md-5">
                                                        <input type="text" id="lib_distr_ets" name="lib_distr_ets"
                                                            width="190%" disabled="disabled" />
                                                        <input type="text" id="code_distr_ets"
                                                            name="code_distr_ets" hidden />
                                                    </div>
                                                    <span />
                                                </div>

                                                <!-- Select Basic -->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="selectbasic">Commune</label>

                                                    <div class="col-md-5">
                                                        <input type="text" id="lib_wereda_ets"
                                                            name="lib_wereda_ets" width="190%"
                                                            disabled="disabled" />
                                                        <input type="text" id="code_wereda_ets"
                                                            name="code_wereda_ets" hidden />
                                                    </div>
                                                </div>

                                                <!-- Text input-->

                                                <!-- Text input-->


                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="tel_2">Téléphone 1 *</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control input-md tel" type="text"
                                                            id="tel_2" name="tel_2">

                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="telMob_2">Autre Téléphone</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control input-md tel" type="text"
                                                            maxlength="50" id="telMob_2" name="telMob_2">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3" for="fax_2">Fax</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control input-md" type="text"
                                                            id="fax_2" name="fax_2">

                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="emaila_2">E-mail</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control input-md" type="text"
                                                            maxlength="80" id="emaila_2" name="emaila_2">

                                                    </div>
                                                </div>




                                                <!-- Multiple Radios (inline) -->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="exportateur_yes_2">Exportateur
                                                        *</label>
                                                    <div class="col-md-4">
                                                        <label class="checkbox-inline" for="exportateur_yes_2">
                                                            <input type="checkbox" class="yes" name="exportateur_2"
                                                                id="exportateur_yes_2" value="1">
                                                            Oui
                                                        </label>
                                                        <label class="checkbox-inline" for="exportateur_no_2">
                                                            <input type="checkbox" class="no" name="exportateur_2"
                                                                id="exportateur_no_2" value="0">
                                                            Non
                                                        </label>
                                                        <span id="erreur10" class="checkbox-inline"></span>
                                                    </div>
                                                </div>

                                                <!-- Multiple Radios (inline) -->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="radios">Importateur *</label>
                                                    <div class="col-md-4">
                                                        <label class="checkbox-inline" for="importateur_yes_2">
                                                            <input type="checkbox" class="yes" type="checkbox"
                                                                name="importateur_2" id="importateur_yes_2"
                                                                value="1">
                                                            Oui
                                                        </label>
                                                        <label class="checkbox-inline" for="importateur_no_2">
                                                            <input type="checkbox" class="no" type="checkbox"
                                                                name="importateur_2" id="importateur_no_2"
                                                                value="0">
                                                            Non
                                                        </label>
                                                        <span id="erreur11" class="checkbox-inline"></span>
                                                    </div>
                                                </div>

                                                <!-- Multiple Radios (inline) -->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="radios">Propriétaire du local</label>
                                                    <div class="col-md-4">
                                                        <label class="checkbox-inline" for="proprietaire_ets_no_2">
                                                            <input class="yes" type="checkbox"
                                                                name="proprietaire_ets_2" id="proprietaire_ets_yes_2"
                                                                value="1">
                                                            Oui
                                                        </label>
                                                        <label class="checkbox-inline" for="radios-1">
                                                            <input class="no" type="checkbox"
                                                                name="proprietaire_ets_2" id="proprietaire_ets_no_2"
                                                                value="0">
                                                            Non
                                                        </label>
                                                        <span id="erreur12" class="checkbox-inline"></span>
                                                    </div>
                                                </div>
                                                <div class="depend_proprietaire_ets" style="display:none">

                                                    <!-- Multiple Radios (inline) -->
                                                    <div class="form-group">
                                                        <label class="col-md-3" for="type_proprietaire_ets_yes_2"
                                                            id="type_proprietaire_ets_label_2">Type propriétaire *</label>
                                                        <div class="col-md-6">
                                                            <label class="checkbox-inline"
                                                                for="type_proprietaire_ets_yes_2">
                                                                <input type="checkbox" class="yes" type="checkbox"
                                                                    name="type_proprietaire_ets_2"
                                                                    id="type_proprietaire_ets_yes_2" value="1">
                                                                Société
                                                            </label>
                                                            <label class="checkbox-inline"
                                                                for="type_proprietaire_ets_no_2">
                                                                <input type="checkbox" class="no" type="checkbox"
                                                                    name="type_proprietaire_ets_2"
                                                                    id="type_proprietaire_ets_no_2" value="0">
                                                                Particulier
                                                            </label>
                                                            <span id="erreur13" class="checkbox-inline"></span>
                                                        </div>
                                                    </div>
                                                    <div class="depend_type_propriete_ets_indiv" style="display:none;">
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-3"
                                                                for="nom_proprietaire_ets_indiv_2">Nom
                                                                propriétaire</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control input-md" type="text"
                                                                    id="nom_proprietaire_ets_indiv_2"
                                                                    name="nom_proprietaire_ets_indiv_2">

                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-3"
                                                                for="cin_proprietaire_ets_indiv_2">CIN
                                                                propriétaire</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control input-md cin" type="text"
                                                                    id="cin_proprietaire_ets_indiv_2"
                                                                    name="cin_proprietaire_ets_indiv_2">

                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-3"
                                                                for="adresse_proprietaire_ets_2">Adresse propriétaire
                                                                *</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control input-md" type="text"
                                                                    id="adresse_proprietaire_ets_2"
                                                                    name="adresse_proprietaire_ets_2">

                                                            </div>
                                                        </div>

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-3" for="contact_proprietaire_ets_2">Tél
                                                                propriétaire</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control input-md tel" type="text"
                                                                    id="contact_proprietaire_ets_2"
                                                                    name="contact_proprietaire_ets_2">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="depend_type_propriete_ste_etab" style="display:none">
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="col-md-3" for="nif_proprietaire_ets_ese_2">NIF
                                                                propriétaire</label>
                                                            <div class="col-md-5">
                                                                <input class="form-control input-md" type="text"
                                                                    id="nif_proprietaire_ets_ese_2"
                                                                    name="nif_proprietaire_ets_ese_2">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- fin  template form etablissement-->

                                                <div
                                                    style="padding-left:190px;margin-bottom:150px;background-color:#F4F4F4;">

                                                    <!-- debut template boutton form etablissement-->
                                                    <button type="button" class="btn btn-default" role="button"
                                                        style="border-radius:3px" id="btn_add_in_etablis"
                                                        data-id="" data-toggle="tooltip" data-placement="bottom"
                                                        title="Cliquer ici pour enregistrer la saisie dans la liste">
                                                        <span class="glyphicon glyphicon-floppy-disk "
                                                            aria-hidden="true"> </span> Sauver
                                                    </button>

                                                    <button type="button" class="btn btn-default" role="button"
                                                        style="border-radius:3px" id="btn_cancel_etab" data-id=""
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="Cliquer ici pour annuler cette action">
                                                        <span class="glyphicon glyphicon-repeat"
                                                            aria-hidden="true"></span> Annuler </button>

                                                    <!-- fin template boutton form etablissement-->
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row depend_list_etab" style="font-size:12px;margin-bottom:50px">
                                            <div class="col-md-10 col-md-offset-1">
                                                <p class="category">Procéder comme suit: </p>
                                                <div class="alert alert-success" style="margin-top:10px">
                                                    <ol class="">
                                                        <li>Cliquer sur le bouton "Nouveau" en bas du tableau</li>
                                                        <li>Remplir le formulaire</li>
                                                        <li>Cliquer sur "Ajouter dans la liste"</li>
                                                    </ol>
                                                </div>
                                                <div class="alert alert-danger" role="alert" style="display:none"
                                                    id="alt_list_none_etab">
                                                    <span class="glyphicon glyphicon-warning-sign"> </span>
                                                    Veuillez ajouter un établissement en cliquant sur le bouton "+" en bas
                                                    du tableau
                                                </div>
                                                <!-- debut template grid form etablissement-->
                                                <p>
                                                <div id="content" style="font-size:12px">
                                                    <table id="jqGrid_etab" class="scroll"></table>
                                                    <div id="pager_etab"></div>
                                                </div>
                                                </p>
                                                <!-- fin template grid form etablissement-->

                                                <div class="text-center" style="background-color:#ffff">

                                                    <!-- debut template boutton grid etablissement-->

                                                    <button type="button" class="btn btn-default"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="Cliquer ici pour ajouter un établissement"
                                                        id="btn_add_etab" style="border-radius:3px">

                                                        <span class="glyphicon glyphicon-plus"
                                                            aria-hidden="true"></span>&nbsp;</button>

                                                    <button type="button" class="btn btn-default"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="Sélectionner une ligne puis cliquer ici pour supprimer un établissement"
                                                        id="btn_del_etab" style="border-radius:3px">

                                                        <span class="glyphicon glyphicon-minus"
                                                            aria-hidden="true"></span>&nbsp;</button>

                                                    <button type="button" class="btn btn-default"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="Cliquer ici pour réduire la colonne du tableau au minimun"
                                                        id="btn_reduce_all_tab_etab" style="border-radius:3px">

                                                        <span class="glyphicon glyphicon-resize-small"
                                                            aria-hidden="true"></span>&nbsp;</button>

                                                    <button type="button" class="btn btn-default"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="Cliquer ici pour afficher tous les éléments du tableau"
                                                        id="btn_expand_all_tab_etab" style="border-radius:3px">
                                                        <span class="glyphicon glyphicon-fullscreen"
                                                            aria-hidden="true"></span>&nbsp;</button>

                                                    <!-- fin template boutton grid etablissement-->

                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- fin etablissement-->
                                    <!-- -- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                    <div class="tab-pane" id="dirigeant">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5 class="info-text"><small>Etape 6:</small> Renseignements sur le ou les
                                                    dirigeants de la société</h5>
                                            </div>
                                        </div>
                                        <div class="row depend_form_dir" style="display:none">

                                            <div class="col-md-8 col-md-offset-2">

                                                <!-- debut template saisie form dirigent-->


                                                <legend style="border-color:#F3BB45"></legend>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-3 " for="nom_dir">Nom *</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control input-md" type="text"
                                                            id="nom_dir" name="nom_dir">

                                                    </div>
                                                </div>

                                                <!-- Select Basic -->
                                                <div class="form-group">
                                                    <label class="col-md-3" for="fonction_dir">Fonction *</label>
                                                    <div class="col-md-6">

                                                        <select class="form-control" id="fonction_dir"
                                                            name="fonction_dir">

                                                            <option value="" selected>Choississez dans la liste
                                                            </option>

                                                            <option value="8|MAIRE">MAIRE</option>

                                                            <option value="9|ADJOINT AU MAIRE">ADJOINT AU MAIRE</option>

                                                            <option value="10|PDS">PDS</option>

                                                            <option value="11|CHEF DE REGION">CHEF DE REGION</option>

                                                            <option value="12|CHEF DE DISTRICT">CHEF DE DISTRICT</option>

                                                            <option value="7|PROPRIETAIRE">PROPRIETAIRE</option>

                                                            <option value="4|CHEF D'AGENCE">CHEF D'AGENCE</option>

                                                            <option value="1|GERANT">GERANT</option>

                                                            <option value="2|DG">DG</option>

                                                            <option value="3|PDG">PDG</option>

                                                            <option value="5|CO-GERANT">CO-GERANT</option>

                                                            <option value="6|AUTRE">AUTRE</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <!-- Multiple Radios (inline) -->
                                                <div class="form-group">
                                                    <label class="col-md-3 " for="radios">Etranger</label>
                                                    <div class="col-md-6">
                                                        <label class="checkbox-inline" for="type_dirigent_yes">
                                                            <input type="checkbox" class="yes" name="type_dirigent"
                                                                id="type_dirigent_yes" value="0">
                                                            Oui
                                                        </label>
                                                        <label class="checkbox-inline" for="type_dirigent_no">
                                                            <input type="checkbox" class="no" name="type_dirigent"
                                                                id="type_dirigent_no" value="1">
                                                            Non
                                                        </label>
                                                        <span id="erreur14" class="checkbox-inline"></span>
                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="depend_etrange_dir_yes" style="display:none;">
                                                    <div class="form-group">
                                                        <label class="col-md-3 " for="cin_dir">Numéro CIN *</label>
                                                        <div class="col-md-5">
                                                            <input class="form-control input-md cin" type="text"
                                                                id="cin_dir" name="cin_dir" data-toggle="tooltip"
                                                                data-placement="right"
                                                                title="Au choix, vous pouvez renseigner soit le CIN soit le Passeport ou Carte R&#233;sident !">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="depend_etrange_dir_no" style="display:none;">
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-3 " for="passeport_dir">Numéro Passeport ou
                                                            Carte de résident</label>
                                                        <div class="col-md-5">
                                                            <input class="form-control input-md" type="text"
                                                                id="passeport_dir" maxlength="18"
                                                                name="passeport_dir">

                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-3 " for="textinput">Adresse *</label>
                                                    <div class="col-md-5">
                                                        <input class="form-control input-md" type="text"
                                                            id="adresse_dir" name="adresse_dir">

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3" for="radios">Autre activit&eacute;
                                                        *</label>
                                                    <div class="col-md-6">
                                                        <label class="checkbox-inline" for="autre_activite_yes">
                                                            <input class="yes" type="checkbox"
                                                                name="autre_activite" id="autre_activite_yes"
                                                                value="1">
                                                            Avec NIF
                                                        </label>
                                                        <label class="checkbox-inline" for="autre_activite_yesno">
                                                            <input class="yesno" type="checkbox"
                                                                name="autre_activite" id="autre_activite_yesno"
                                                                value="2">
                                                            Salarié
                                                        </label>
                                                        <label class="checkbox-inline" for="autre_activite_no">
                                                            <input class="no" type="checkbox"
                                                                name="autre_activite" id="autre_activite_no"
                                                                value="0">
                                                            Aucune
                                                        </label>
                                                        <span id="erreur16" class="checkbox-inline"> </span>
                                                    </div>
                                                </div>
                                                <div class="depend_en_activite_avec_nif" style="display:none">
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="col-md-3" for="nif_dir">NIF </label>
                                                        <div class="col-md-5">
                                                            <input class="form-control input-md" type="text"
                                                                maxlength="10" id="nif_dir" name="nif_dir">

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-3 " for="email_dir">E-mail</label>
                                                    <div class="col-md-5">
                                                        <input class="form-control input-md" type="text"
                                                            maxlength="80" id="email_dir" name="email_dir">

                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-3 " for="telMob_dir">Téléphone *</label>
                                                    <div class="col-md-5">
                                                        <input class="form-control input-md tel" type="text"
                                                            id="telMob_dir" name="telMob_dir">

                                                    </div>
                                                </div>

                                                <!-- fin template saisie form dirigent-->

                                                <div
                                                    style="padding-left:190px;margin-bottom:150px;background-color:#F4F4F4;">

                                                    <!-- debut template boutton saisie form dirigent-->

                                                    <button type="button" class="btn btn-success"
                                                        style="border-radius:3px" id="btn_add_in_dir"
                                                        data-toggle="tooltip" data-placement="bottom" data-id=""
                                                        title=" Cliquer ici pour enregistrer la saisie dans la liste">
                                                        <span class="glyphicon glyphicon-floppy-disk "
                                                            aria-hidden="true"> </span> Sauver
                                                    </button>

                                                    <button type="button" class="btn btn-success" role="button"
                                                        style="border-radius:3px" id="btn_cancel_dir" data-id=""
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title=" Cliquer ici pour annuler cette action">
                                                        <span class="glyphicon glyphicon-repeat" aria-hidden="true">
                                                        </span> Annuler</button>


                                                    <!-- fin template boutton saisie form dirigent-->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- fin dirigeant -->


                                        <div class="row depend_list_dir" style="font-size:12px;margin-bottom:50px">
                                            <div class="col-md-10 col-md-offset-1">
                                                <p class="category">Procéder comme suit: </p>
                                                <div class="alert alert-success" style="margin-top:10px">
                                                    <ol class="">
                                                        <li>Cliquer sur le bouton "+" en bas du tableau</li>
                                                        <li>Remplir le formulaire</li>
                                                        <li>Cliquer sur "Ajouter dans la liste"</li>
                                                    </ol>
                                                </div>
                                                <div class="alert alert-danger" role="alert" style="display:none"
                                                    id="alt_list_none_dir">
                                                    <span class="glyphicon glyphicon-warning-sign"> </span>
                                                    Veuillez ajouter les dirigeants en cliquant sur le bouton "+" en bas du
                                                    tableau
                                                </div>
                                                <!-- debut template grid dirigeant-->
                                                <p>
                                                <div id="content">
                                                    <table id="jqGrid_dir" class="scroll"></table>
                                                    <div id="pager_dir" class="scroll"></div>
                                                </div>
                                                </p> <!-- fin template grid dirigeant-->

                                                <div class="text-center" style="background-color:#ffff">


                                                    <!-- debut template boutton tableau dirigeant-->
                                                    <button type="button" class="btn btn-success "
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="Cliquer ici pour ajouter un dirigeant" id="btn_add_dir"
                                                        style="border-radius:3px">

                                                        <span class="glyphicon glyphicon-plus"
                                                            aria-hidden="true"></span>&nbsp;</button>

                                                    <button type="button" class="btn btn-default"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="Sélectionner une ligne puis cliquer ici pour supprimer un dirigeant"
                                                        id="btn_del_dir" style="border-radius:3px">

                                                        <span class="glyphicon glyphicon-minus"
                                                            aria-hidden="true"></span>&nbsp;</button>

                                                    <button type="button" class="btn btn-default"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="Cliquer ici pour réduire la colonne du tableau au minimun"
                                                        id="btn_reduce_all_tab_dir" style="border-radius:3px">

                                                        <span class="glyphicon glyphicon-resize-small"
                                                            aria-hidden="true"></span>&nbsp;</button>

                                                    <button type="button" class="btn btn-default"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        title="Cliquer ici pour afficher tous les éléments du tableau"
                                                        id="btn_affiche_all_dir" style="border-radius:3px">
                                                        <span class="glyphicon glyphicon-fullscreen"
                                                            aria-hidden="true"></span>&nbsp;</button>

                                                    <!-- debut template boutton tableau dirigeant-->

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--  ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                                    <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                    <div class="tab-pane" id="interlocuteur">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5 class="info-text"><small>Etape 8:</small> Interlocuteur de la DGI au
                                                    sein de l'entreprise </h5>
                                            </div>
                                            <div class="col-md-8 col-md-offset-2">

                                                <!-- debut template interlocuteur -->

                                                <legend style="border-color:#1E9354"></legend>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-2 " for="textinput">Nom *</label>
                                                    <div class="col-md-5">
                                                        <input class="form-control input-md" type="text"
                                                            maxlength="80" id="nom_interl" name="nom_interl"
                                                            value="">

                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-2" for="textinput">Titre </label>
                                                    <div class="col-md-5">
                                                        <input class="form-control input-md" type="text"
                                                            maxlength="80" id="titre_interl" name="titre_interl"
                                                            value="">

                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-2" for="textinput">Adresse *</label>
                                                    <div class="col-md-5">
                                                        <input class="form-control input-md" type="text"
                                                            maxlength="80" id="adresse_interl" name="adresse_interl"
                                                            value="">

                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-2" for="textinput">Téléphone *</label>
                                                    <div class="col-md-5">
                                                        <input class="form-control input-md tel" type="text"
                                                            id="tel_interl" name="tel_interl" value="">

                                                    </div>
                                                </div>

                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-2" for="textinput">E-mail</label>
                                                    <div class="col-md-5">
                                                        <input placeholder="votremail@dom.com"
                                                            class="form-control input-md" type="text"
                                                            id="email_interl" name="email_interl" value="">

                                                    </div>
                                                </div>


                                                <!-- fin template interlocuteur -->

                                            </div>
                                        </div>
                                    </div><!-- fin Interlocuteur -->
                                    <!--  ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                    <div class="tab-pane" id="autre">
                                        <div class="row">

                                          
                                            <div class="col-md-8 col-md-offset-2">


                                                <!-- debut template Autres -->

                                                <div class="tab-pane" id="autre">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h5 class="info-text"><small>Etape 8:</small> Confirmation des
                                                                étapes</h5>
                                                        </div>
                                                        <!-- Form Name -->
                                                        <

                                                            <div class="col-md-10 col-md-offset-2">
                                                                <legend></legend>
                                                                <!-- Multiple Radios (inline) -->


                                                                <!-- Multiple Radios (inline) -->
                                                                <div class="form-group">
                                                                    <label class="col-md-4" for="radios">M'envoyer par
                                                                        e-mail les informations saisies</label>

                                                                    <div class="form-group">
                                                                        <label class="col-md-3 "
                                                                            for="email_dir">E-mail</label>
                                                                        <div class="col-md-5">
                                                                            <input class="form-control input-md"
                                                                                type="text" maxlength="80"
                                                                                id="email_dir" name="email_dir">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-4" for="radios">Votre exerice
                                                                        dépasse t-il 12 mois ?</label>
                                                                    <div class="col-md-6">
                                                                        <label class="checkbox-inline" for="exo_fisc">
                                                                            <input class="yes" type="checkbox"
                                                                                name="exo_fisc" id="exo_fisc_18"
                                                                                value="18">
                                                                            Oui(18 mois)
                                                                        </label>
                                                                        <label class="checkbox-inline" for="exo_fisc">
                                                                            <input class="no" type="checkbox"
                                                                                name="exo_fisc" id="exo_fisc_12"
                                                                                value="12" checked>
                                                                            Non(12 mois)
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <!-- Multiple Checkboxes (inline) -->
                                                                <div class="form-group">
                                                                    <label class="col-md-4 " for="checkboxes">Je
                                                                        certifie que ces renseignements sont complets et
                                                                        exacts</label>
                                                                    <div class="col-md-5">
                                                                        <label class="checkbox-inline"
                                                                            for="certification">
                                                                            <input type="checkbox" name="certification"
                                                                                id="certification">

                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div><!-- fin Autres -->
                                                <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                                <!-- fin template Autres -->
                                            </div>
                                       
                                        </div>
                                    </div>


                                    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
                                </div><!-- fin tab content -->

                                <!--debut template foot win -->
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type="button" class="btn btn-next btn-fill btn-primary btn-wd"
                                            name="next" value="Suivant" data-toggle="tooltip"
                                            data-placement="bottom"
                                            title="Cliquer ici pour passer a l'étape suivante" />
                                        <input class='btn btn-finish btn-fill btn-primary btn-wd'
                                            name="finish" id="btn_terminer_dem" disabled="disabled" type="submit"
                                            value="Terminer" />
                                    </div>

                                    <div class="pull-left">
                                        <input type="button" class="btn btn-previous btn-default btn-wd"
                                            name='previous' value="Précédent" data-toggle="tooltip"
                                            data-placement="bottom"
                                            title="Cliquer ici pour revenir à l'étape précédénte" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                          
                                <!--debut template foot windzar -->
                            </form>
                        </div>
                    </div> <!-- wizard container -->

                </div><!-- big row -->

            </div>

        </div><!-- big container -->
    @endsection
