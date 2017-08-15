

!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/main.css" rel="stylesheet">

<!--
  <div class="row">
    <div class="col-sm-5 ">
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog" >
            <div class="loginmodal-container">
              <h1><span style="color:#337ab7; text-align=center";><i>Connectez-vous<i></h1><br>
                  <form method="post" action="">
                      <div class="form-group">
                          <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="PSEUDO" style="font-style:italic;" />
                      </div>
                      <div class="form-group">
                          <input type="text" name="mdp" id="mdp" class="form-control" placeholder="MOT DE PASSE" style="font-style:italic;"/> 
                      </div>
                      <div class="form-group">
                          <button type="submit" name="login" class="btn btn-primary" ><i> CONNEXION<i></span>
                      </div>
                          <button type="submit" name="join" class="btn btn-default" ><i> INSCRIPTION<i></span>
                      </div>
                  </form>
                  <div class="login-help">
                    <a href="#">Mot de passe oublié ?</a>
                </div>
              </div>
          </div>
      </div>
      -->




  <div class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body…</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>







<!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/main.css" rel="stylesheet">

<!--
  <div class="row">
    <div class="col-sm-5 ">
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog" >
            <div class="loginmodal-container">
              <h1><span style="color:#337ab7; text-align=center;"><i>Connectez - vous !<i></h1><br>
                  <form method="post" action="">
                      <div class="form-group">
                          <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="PSEUDO" style="font-style:italic;" />
                      </div>
                      <div class="form-group">
                          <input type="text" name="mdp" id="mdp" class="form-control" placeholder="MOT DE PASSE" style="font-style:italic;"/> 
                      </div>
                      <div class="btn-group">
                          <button type="submit" name="login" class="btn btn-primary"><i> CONNEXION<i></span>
                      </div>
                          <button type="submit" name="join" class="btn btn-default"><i> INSCRIPTION<i></span>
                      </div>
                  </form>
                  <div class="login-help">
                </div>
              </div>
          </div>
      </div>
-->


<div class="container">
    <div class="starter-template">
     <?= $message; ?>
    </div>
        <div class="row">
            <div class="col-sm-5">
                <h1 style="text-align:center; color:#337ab7; "><i> INSCRIPTION<i></h1><br />
                <form method="post" action="">
                    <div class="form-group">
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="NOM" style="font-style:italic"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="PRENOM" style="font-style:italic"/>
                    </div>
                    <div class="form-group">
                        <select id="gender" name="gender" class="form-control">
                                <option value="m">Homme</option>
                                <option value="f" <?php if($civilite == 'f') { echo 'selected'; } ?> >Femme</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="EMAIL" style="font-style:italic"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="PSEUDO" style="font-style:italic"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="MOT DE PASSE" style="font-style:italic"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password-check" id="password-check" class="form-control" placeholder="Saissir une seconde fois" style="font-style:italic"/>
                    </div>
                        <button class="form-control btn btn-default">
                                <i>Finaliser<i>
                        </button>
                </form>
            </div>
        </div>
    </div>
</div>  



<div class="out-wrap">
      <h3 class="text-center" style="margin-bottom: 50px;">Click to Toggle Password Visibility</h3>
        <div id="payment" >
            <div class="card">
                <div>
                    <div class="clayout">
                        <div class="c-front">
                            <div class="input">
                                <input type="password">
                            </div>
                        </div>
                        <div class="c-back">
                            
                        </div>
                    </div>
                    <div class="toggle-show">
                    <span class="toggle-show-btn">...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>







<style>
/********** MODAL - LOG **********/

.loginmodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 

.login-help{
  font-size: 12px;
}
/********** MODAL - INSCRIPTION **********/

input:-webkit-autofill, textarea:-webkit-autofill, select:-webkit-autofill {
  box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5), inset 0 0 0 50px #151515 !important;
  -webkit-text-fill-color: #fff !important;
}

}
@media only screen and (min-width: 768px) {
  #body {
    padding: 50px;
  }
}
@media only screen and (max-width: 767px) {
  #body {
    padding: 1px;
  }
}
#body, #body * {
  transition: all .5s;
}
#body .out-wrap {
  position: relative;
  width: 90%;
  margin: auto;
  color: #777;
}
@media only screen and (min-width: 768px) {
  #body .out-wrap {
    padding: 0 50px 50px;
  }
}
#body .out-wrap #payment {
  display: flex;
  align-items: center;
  justify-content: center;
}
@media only screen and (max-width: 767px) {
  #body .out-wrap #payment {
    flex-wrap: wrap;
  }
  #body .out-wrap #payment > div {
    margin: 15px auto !important;
    width: 100%;
  }
  #body .out-wrap #payment > div:first-child {
    order: 2;
  }
}
#body .out-wrap #payment .card > div {
  perspective: 300px;
  display: flex;
}
@media only screen and (max-width: 767px) {
  #body .out-wrap #payment .card > div {
    margin: auto;
  }
}
#body .out-wrap #payment .card.flip > div > .clayout {
  transform: rotateY(360deg);
}
#body .out-wrap #payment .card .clayout {
  position: relative;
  transform-style: preserve-3d;
  width: 200px;
  height: 40px;
}
#body .out-wrap #payment .card .clayout .c-front, #body .out-wrap #payment .card .clayout .c-back {
  width: 100%;
  position: absolute;
  z-index: 2;
  top: 0;
  right: 0;
  transform-style: preserve-3D;
  transform-origin: center center;
  border-radius: 10px;
  color: #fff;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
}
#body .out-wrap #payment .card .clayout .c-front .input, #body .out-wrap #payment .card .clayout .c-back .input {
  width: 100%;
  transition: all .25s .25s;
}
#body .out-wrap #payment .card .clayout .c-front .input input, #body .out-wrap #payment .card .clayout .c-back .input input {
  border: 0;
  background: #151515;
  height: 40px;
  width: 100%;
  text-transform: uppercase;
  padding: 0 10px;
}
#body .out-wrap #payment .card .clayout .c-front .input input:focus, #body .out-wrap #payment .card .clayout .c-back .input input:focus {
  outline: none;
  box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5);
}
#body .out-wrap #payment .card .clayout .c-back {
  padding: 0;
  align-items: initial;
  z-index: 1;
  transform: rotateY(180deg);
}

.toggle-show .toggle-show-btn {
  height: 100%;
  width: 40px;
  line-height: 25px;
  text-align: center;
  display: block;
  background: #ffc400;
  color: #212121;
  font-weight: bolder;
  cursor: pointer;
  font-size: 0;
  position: relative;
}
.toggle-show .toggle-show-btn:before, .toggle-show .toggle-show-btn:after {
  position: absolute;
  left: 2px;
  top: 0;
  font-size: 20px;
  line-height: 40px;
  width: 100%;
  text-align: center;
  height: 100%;
  transition: all .25s;
}
.toggle-show .toggle-show-btn:before {
  content: '\f06e';
  font-family: fontawesome;
}
.toggle-show .toggle-show-btn:after {
  content: '...';
  line-height: 27px;
  transform: scale(0);
  font-size: 25px;
  letter-spacing: 5px;
}
.toggle-show .toggle-show-btn.changeit:before {
  transform: scale(0);
  opacity: 0;
}
.toggle-show .toggle-show-btn.changeit:after {
  transform: scale(1);
  opacity: 1;
}

.four-num,
.cnum {
  font-family: 'roboto' !important;
}
</style>