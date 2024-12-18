<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Escpace contribuables</title>
    <link rel="stylesheet"  href="https://hetraonline.impots.mg/assets/css/menu_prop.css">
	<link rel="stylesheet" href="https://hetraonline.impots.mg/assets/css/fontawesome.css" >
    <link rel="stylesheet" href="https://hetraonline.impots.mg/assets/css/build.css" >
  
    <link rel="stylesheet"  href="https://hetraonline.impots.mg/assets/css/menu_propriete.css">
    <link rel="stylesheet"  href="https://hetraonline.impots.mg/assets/css/service.css">
    <link rel="stylesheet" href="https://hetraonline.impots.mg/assets/css/footer.css">

    <!-- CSS Files -->

    <link href="https://hetraonline.impots.mg/assets/css/themify-icons.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> ty no izy a -->
    <link rel="stylesheet"   type="text/css" href="https://hetraonline.impots.mg/assets/css/jquery-ui.css" />
    <link rel="stylesheet"   type="text/css" href="https://hetraonline.impots.mg/assets/css/jquery-ui.min.css" />
    <link rel="stylesheet"   type="text/css" href="https://hetraonline.impots.mg/assets/css/jquery-ui.theme.css" />
    <link rel="stylesheet"   type="text/css" href="https://hetraonline.impots.mg/assets/css/jquery-ui.theme.min.css" />
    <link rel="stylesheet"   type="text/css" href="https://hetraonline.impots.mg/assets/css/jquery-ui.structure.css" />
    <link rel="stylesheet"   type="text/css" href="https://hetraonline.impots.mg/assets/css/jquery-ui.structure.min.css" />
	<link rel="stylesheet"   type="text/css" href="https://hetraonline.impots.mg/assets/Guriddo_jqGrid_JS_5.1.1/src/css/ui.jqgrid-bootstrap.css"  />
    

    <link rel="stylesheet" href="https://hetraonline.impots.mg/assets/css/bootstrap.css" />
    <link rel="stylesheet" href="https://hetraonline.impots.mg/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://hetraonline.impots.mg/assets/css/paper-bootstrap-wizard.css"  />

    <link href="https://hetraonline.impots.mg/assets/css/daterangepicker.css"  rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assests/css/font-awesome.css ') }}">



<script src=" https://hetraonline.impots.mg/assets/js/jquery-3.2.1.js "></script>
    <script src=" https://hetraonline.impots.mg/assets/js/jquery-ui.js"></script>

    <script>
        $(function() {
            $( "#num_fokontany" ).autocomplete({
                source: "https://hetraonline.impots.mg/SelectFokontany/aotopaolety",
                minLength: 5,
                select: function( event, ui ) {
                    $chaine = ui.item.label;
                    $('#res_fokontany').val($chaine.substring(0,$chaine.lastIndexOf("-")));
                    //$('#num_fokontany').val(ui.item.id);
                    $('#code_fokontany').val(ui.item.id);
                    $('#lib_faritany').val(ui.item.lib_faritany);
                    $('#code_faritany').val(ui.item.code_faritany);
                    $('#lib_region').val(ui.item.lib_region);
                    $('#code_region').val(ui.item.code_region);
                    $('#lib_distr').val(ui.item.lib_distr);
                    $('#code_distr').val(ui.item.code_distr);
                    $('#lib_wereda').val(ui.item.lib_wereda);
                    $('#code_wereda').val(ui.item.code_wereda);
                }
            });
        });
        $(function() {
            $( "#num_fokontany_ets" ).autocomplete({
                source: "https://hetraonline.impots.mg/SelectFokontany/aotopaolety",
                minLength: 5,
                select: function( event, ui ) {
                    $chaine = ui.item.label;
                    //$('#res_fokontany').val($chaine.substring(0,$chaine.lastIndexOf("-")));
                    //$('#num_fokontany').val(ui.item.id);
                    $('#code_fokontany_ets').val(ui.item.id);
                    $('#lib_faritany_ets').val(ui.item.lib_faritany);
                    $('#code_faritany_ets').val(ui.item.code_faritany);
                    $('#lib_region_ets').val(ui.item.lib_region);
                    $('#code_region_ets').val(ui.item.code_region);
                    $('#lib_distr_ets').val(ui.item.lib_distr);
                    $('#code_distr_ets').val(ui.item.code_distr);
                    $('#lib_wereda_ets').val(ui.item.lib_wereda);
                    $('#code_wereda_ets').val(ui.item.code_wereda);
                }
            });
        });
    </script>

    </head>
    
    <body style="background-color:#e5e5e5;">
    


<header>
    <div class="container">
        <div class="boxtwo">
            <div class="row">
            <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Escpace contribuables</title>
    <link rel="stylesheet"  href="https://hetraonline.impots.mg/assets/css/menu_prop.css">
	<link rel="stylesheet" href="https://hetraonline.impots.mg/assets/css/fontawesome.css" >
    <link rel="stylesheet" href="https://hetraonline.impots.mg/assets/css/build.css" >
  
    <link rel="stylesheet"  href="https://hetraonline.impots.mg/assets/css/menu_propriete.css">
    <link rel="stylesheet"  href="https://hetraonline.impots.mg/assets/css/service.css">
    <link rel="stylesheet" href="https://hetraonline.impots.mg/assets/css/footer.css">

    <!-- CSS Files -->

    <link href="https://hetraonline.impots.mg/assets/css/themify-icons.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> ty no izy a -->
    <link rel="stylesheet"   type="text/css" href="https://hetraonline.impots.mg/assets/css/jquery-ui.css" />
    <link rel="stylesheet"   type="text/css" href="https://hetraonline.impots.mg/assets/css/jquery-ui.min.css" />
    <link rel="stylesheet"   type="text/css" href="https://hetraonline.impots.mg/assets/css/jquery-ui.theme.css" />
    <link rel="stylesheet"   type="text/css" href="https://hetraonline.impots.mg/assets/css/jquery-ui.theme.min.css" />
    <link rel="stylesheet"   type="text/css" href="https://hetraonline.impots.mg/assets/css/jquery-ui.structure.css" />
    <link rel="stylesheet"   type="text/css" href="https://hetraonline.impots.mg/assets/css/jquery-ui.structure.min.css" />
	<link rel="stylesheet"   type="text/css" href="https://hetraonline.impots.mg/assets/Guriddo_jqGrid_JS_5.1.1/src/css/ui.jqgrid-bootstrap.css"  />
    

    <link rel="stylesheet" href="https://hetraonline.impots.mg/assets/css/bootstrap.css" />
    <link rel="stylesheet" href="https://hetraonline.impots.mg/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://hetraonline.impots.mg/assets/css/paper-bootstrap-wizard.css"  />

    <link href="https://hetraonline.impots.mg/assets/css/daterangepicker.css"  rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assests/css/font-awesome.css ') }}">



<script src=" https://hetraonline.impots.mg/assets/js/jquery-3.2.1.js "></script>
    <script src=" https://hetraonline.impots.mg/assets/js/jquery-ui.js"></script>

    <script>
        $(function() {
            $( "#num_fokontany" ).autocomplete({
                source: "https://hetraonline.impots.mg/SelectFokontany/aotopaolety",
                minLength: 5,
                select: function( event, ui ) {
                    $chaine = ui.item.label;
                    $('#res_fokontany').val($chaine.substring(0,$chaine.lastIndexOf("-")));
                    //$('#num_fokontany').val(ui.item.id);
                    $('#code_fokontany').val(ui.item.id);
                    $('#lib_faritany').val(ui.item.lib_faritany);
                    $('#code_faritany').val(ui.item.code_faritany);
                    $('#lib_region').val(ui.item.lib_region);
                    $('#code_region').val(ui.item.code_region);
                    $('#lib_distr').val(ui.item.lib_distr);
                    $('#code_distr').val(ui.item.code_distr);
                    $('#lib_wereda').val(ui.item.lib_wereda);
                    $('#code_wereda').val(ui.item.code_wereda);
                }
            });
        });
        $(function() {
            $( "#num_fokontany_ets" ).autocomplete({
                source: "https://hetraonline.impots.mg/SelectFokontany/aotopaolety",
                minLength: 5,
                select: function( event, ui ) {
                    $chaine = ui.item.label;
                    //$('#res_fokontany').val($chaine.substring(0,$chaine.lastIndexOf("-")));
                    //$('#num_fokontany').val(ui.item.id);
                    $('#code_fokontany_ets').val(ui.item.id);
                    $('#lib_faritany_ets').val(ui.item.lib_faritany);
                    $('#code_faritany_ets').val(ui.item.code_faritany);
                    $('#lib_region_ets').val(ui.item.lib_region);
                    $('#code_region_ets').val(ui.item.code_region);
                    $('#lib_distr_ets').val(ui.item.lib_distr);
                    $('#code_distr_ets').val(ui.item.code_distr);
                    $('#lib_wereda_ets').val(ui.item.lib_wereda);
                    $('#code_wereda_ets').val(ui.item.code_wereda);
                }
            });
        });
    </script>

    </head>
    
    <body style="background-color:#e5e5e5;">
    
            <div class="row">
                <div class="container">

             
                <div class="col-md-3 col-sm-4">

                    <div class="navi pull-left">
                        <img src="https://hetraonline.impots.mg/assets/images/logo-mfb.png"    style="width: 99px;height: 87px;">
                        <img src="https://hetraonline.impots.mg/assets/images/logo-dgi-2017.png"  style="width: 99px;height:87px;">
                    </div>


                </div>
                <div class="col-md-9 col-sm-8">

                    <div class="navi pull-right">
                        <div id="ddtopmenubar" class="mattblackmenu">
                            <!-- Main navigation -->
                            <!-- Use the background color class in anchor tag for colorful menu -->
                            <ul>

                                <li><a href="/" rel="ddsubmenu2" class="bgrey"> <i
                                            class="fa fa-home"></i>Accueil</a>

                                </li>

                                <!-- Main navigation -->
                                <li><a href="Accueil/papier_inscri" rel="ddsubmenu2" class="bglogo">
                                        <i class="fa fa-desktop"></i>Immatriculation</a>
                                    <!-- Sub Navigation -->

                                </li>

                                <!-- Main navigation -->
                                <li><a href="/login_standard" rel="ddsubmenu2"
                                       class="bblack"> <i class="fa fa-tablet"></i>Se connecter</a>
                                    <!-- Sub Navigation -->

                                </li>

                                <li><a href="http://www.impots.mg" rel="ddsubmenu2"
                                       class="bread"> <i class="fa fa-comments"></i>Site DGI</a>
                                    <!-- Sub navigation -->

                                </li>


                                <li><a href="" class="bblue"> <i
                                            class="fa fa-envelope-o"></i>Contact</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</header>
<div style="background-color: white">
    @yield('content')     
    </div>
   
    <footer class="footer1" style="">
    <div class="container" >
        <div class="row">
            <div class="col-md-3 col-md-offset-1">

                <h3 class="title-widget">DGI</h3>
                <address>
                    <h5 class="title-median">Direction Générale des Impots</h5><br>
                    Immeuble MFB, Antaninarenina<br>
                    Antananarivo, 101, Madagascar<br>
                    <abbr title="Phone">Tél:</abbr> (020) xx-xxx-xx<br>
                    <abbr title="Mail">E-mail:</abbr><a href="mailto:dgimpots@moov.mg"> dgimpots@moov.mg</a>
                </address>

            </div>
            <div class="col-md-4 col-md-offset-1">
                <h3 class="title-widget">SSIF</h3>
                <address>
                    <h5 class="title-median">Service du Système d'Information Fiscale</h5><br>
                    Mandrosoa, Ambohijatovo<br>
                    Antananarivo, 101, Madagascar<br>
                    <abbr title="Téléphonne">Tél:</abbr> ( 8h à 16h ) 034 49 431 52, 032 12 011 74 <br>
                    <abbr title="E-mail">E-mail:</abbr><a href="mailto:impot.ssif.hotline@gmail.com"> impot.ssif.hotline@gmail.com </a><br>
                </address>
            </div>
            <div class="col-md-3 ">
                <h3 class="title-widget">Notre site</h3>

                <h5 class="title-median">Site web</h5><br>
                <p><a href="http://www.impots.mg" target="_blank">www.impots.mg</a><br></p>
                <strong>Nifonline</strong><br>
                <p> <a href="http://nifonline.impots.mg" target="_blank"> nifonline.impots.mg</a></p>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <h5>Social</h5>
                <div class="row">
                    <a href="https://www.facebook.com/profile.php?id=100010857341632" target="_blank"><i class="fa fa-facebook-square fa-3x white" id="social"></i></a>
                    <a href="https://twitter.com/impotsmada?lang=fr" target="_blank"><i class="fa fa-twitter-square fa-3x social-tw white" id="social"></i></a>
                    <a href="http://www.impots.mg" target="_blank"><i class="fa fa-google-plus-square fa-3x social-gp white" id="social"></i></a>
                    <a href="mailto:impot.ssif.hotline@gmail.com" target="_blank"><i class="fa fa-envelope-square fa-3x white" id="social"></i></a>
                </div>
            </div>
        </div>
     
    </div>

</footer>


<!-- autocomplete -->

<script src="https://hetraonline.impots.mg/assets/js/jquery-3.2.1.js"></script>
<script src="https://hetraonline.impots.mg/assets/js/jquery.js"></script>
<script src="https://hetraonline.impots.mg/assets/js/jquery-ui.js"></script>
<script src="https://hetraonline.impots.mg/assets/js/jquery.autocomplete.pack.js"></script>

<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<script type="text/javascript" src="https://hetraonline.impots.mg/assets/Guriddo_jqGrid_JS_5.1.1/js/jquery-1.11.0.min.js"></script>
<script src="https://hetraonline.impots.mg/assets/dist/jquery.min.js"></script>
<script src="https://hetraonline.impots.mg/assets/dist/jquery.ui.custom.js"></script>
<style>
    .ui-jqgrid-htable,
    .ui-jqgrid-btable,
    .ui-jqgrid-pager,
    .ui-jqgrid-view,
    .ui-jqgrid-bdiv,
    .ui-jqgrid-hdiv,
    .ui-jqgrid-hbox,
    .ui-jqgrid { max-width: 100% !important; width:100% !important; }
</style>
<script type="text/javascript" src="https://hetraonline.impots.mg/assets/Guriddo_jqGrid_JS_5.1.1/js/i18n/grid.locale-fr.js"></script>
<script type="text/javascript" src="https://hetraonline.impots.mg/assets/Guriddo_jqGrid_JS_5.1.1/js/jquery.jqGrid.min.js"></script>

<script>
    $.jgrid.defaults.width = 930;
    /*	$.jgrid.defaults.responsive = true; */
    $.jgrid.defaults.styleUI = 'Bootstrap';
</script>




<script src="https://hetraonline.impots.mg/assets/dist/bootstrap.min.js"></script>
<script src="https://hetraonline.impots.mg/assets/dist/masked.js"></script>
<script src="https://hetraonline.impots.mg/assets/js/jquery.bootstrap.wizard_twit.js" type="text/javascript"></script>
<script src="https://hetraonline.impots.mg/assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>
<script src="https://hetraonline.impots.mg/assets/js/immatriculation.js" type="text/javascript"></script>
<script src="https://hetraonline.impots.mg/assets/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="https://hetraonline.impots.mg/assets/js/moment.js" type="text/javascript"></script>
<script src="https://hetraonline.impots.mg/assets/js/moment.min.js" type="text/javascript"></script>
<script src="https://hetraonline.impots.mg/assets/js/daterangepicker.js" type="text/javascript"></script>
<script src="https://hetraonline.impots.mg/assets/js/inline_register.js" type="text/javascript"></script>
<script src="https://hetraonline.impots.mg/assets/js/Ajax_login.js" type="text/javascript"></script>
<script src="https://hetraonline.impots.mg/assets/js/login_cache.js" type="text/javascript"></script>

  </body>
</html>