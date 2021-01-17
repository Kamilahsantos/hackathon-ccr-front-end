<?php
function login(){
?>
<section id="login">
  <div class="navbar">
              <ul class="my-menu">
                  <a href="#"><li>Patrocine</li></a>
                  <a href="#"><li>Contato</li></a>
                  <a href="#"><li>Sobre nós</li></a>
                  <a href="#"><li class="color-item">Matricule-se</li></a>
              </ul>
    </div>
    <div class="content">
        <div class="form-login">
            <div id="login-page" class="row">
                <div class="col s10 z-depth-6 card-panel style-card">
                  <form class="login-form">
                    <div class="row">
                        <h3>Se você já é aluno</h3>
                        <p>faça aqui o seu login</p>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email" type="email">
                        <label for="email" data-error="wrong" data-success="right">Email</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="password" type="password">
                        <label for="password">Senha</label>
                      </div>
                    </div>
                    <div class="row">          
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <button type="submit" class="style-btn">Entrar</button>
                      </div>
                    </div>
                    <div class="row align-login-icons">
                      <div class="input-field">
                        <a href="#">
                            <img src="./assets/facebook-icon.png" class="icon-login first-icon" alt="Entrar com Facebook">
                        </a>
                      </div>
                      <div class="input-field">
                          <a href="#">
                              <img src="./assets/gmail-icon.png" class="icon-login" alt="Entrar com Gmail">
                          </a>
                      </div>          
                    </div>
                  </form>
                </div>
              </div>
        </div>
        <div class="image">
            <img src="./assets/image-login.png" alt="Imagem de um celular e um computador conectados a um servidor.">
            <ul class="course-list">
                <li class="first-item">Desenvolvimento Web</li>
                <li>Marketing Digital</li>
                <li>Administração de Empresas</li>
            </ul>
        </div>
    </div>
</section>
<?php
}

?>