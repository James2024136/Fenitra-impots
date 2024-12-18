@extends('template')

@section('content')
<div class="container" >
    <div class="boxfirst">
  
    
            <div class="col-md-12">

                <!-- E-services-->
                <div class="row">
                    <div class="well" style="background-color:white;">
                       
                            <div class="well"  style="background-color:white;border-color:#F4F4F4">
                                <p>Cet accès est reservé aux contribuables des CENTRES FISCAUX.</p>
                                <p><small>Le login est votre NIF, le mot de passe est celui que vous avez reçu lors de la validation du NIFONLINE.</small></p>
                            
                                </div>
                                <!-- Login centre fiscal -->
                                <div id="loginbox" style="margin-top:50px;" class="">
                                    <div class="panel panel-info" >
                                        <div class="panel-heading " style="height:60px;background-color:#CECECE" >
                                            <div class="panel-title text-center " style="color:#A1A1A1">CENTRE FISCAL</div>
                                        <!--    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Mot de passe oublié?</a></div> -->
                                        </div>
                                        <div style="padding-top:30px;border-color:white" class="panel-body" >
                                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        
                                            <form id="loginform" class="form-horizontal" role="form">
                                                <div style="margin-bottom: 25px" class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="NIF du contribuable" maxlength="20">
                                                </div>
                                                <div style="margin-bottom: 25px" class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                                    <input id="login-password" type="password" class="form-control" name="password" placeholder="Mot de passe Nifonline" maxlength="20">
                                                </div>
                                                <div class="input-group">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="login-remember" type="checkbox" name="remember" value="1"> Se souvenir de moi
                                                        </label>
                                                    </div>
                                                </div>
                        
                        
                                                <div style="margin-top:10px" class="form-group">
                                                    <!-- Button -->
                        
                                                    <div class="col-sm-12 controls">
                                                        <input type='button'   class="btn  btn-success btn-login" value="Se connecter">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <div class="col-sm-12">
                                                        <div id="MSG_BOX"></div>
                                                    </div>
                                                </div>
                        
                                                <div class="form-group">
                                                    <div class="col-md-12 control">
                                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                                            Si vous n'avez pas encore de compte, nous vous invitons à vous
                                                            <a href="https://hetraonline.impots.mg/accueil/papier_inscri" onClick="">
                                                                immatriculer sur NIFONLINE.
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                        
                                        </div>
                                    </div>
                                </div>
                    
                   
</div>
            </div>

            <!-- Accès explication -->
                    @endsection