<?php
function register(){
?>
<section id="register">
    <h1>Cadastro de usuário</h1>
    <div class="group-general-infos">
        <div class="group-input-rectangle">
                <input type="text" placeholder="Nome completo"/>
                <input type="text" placeholder="CPF"/>
                <input type="text" placeholder="Endereço"/>
                <input type="text" placeholder="CEP"/>
        </div>
        <div class="group-input-radio">
            <p>Como você se identifica?</p>
            <div class="control-desk">
               <div class="box-radio">
                   <p>Mulher cis</p>
                   <input type="radio" name="Mulher cis" id="mulhercis">
               </div>
               <div class="box-radio">
                   <p>Mulher trans</p>
                   <input type="radio" name="Mulher cis" id="mulhercis">
               </div>
               <div class="box-radio">
                   <p>Homem cis</p>
                   <input type="radio" name="Mulher cis" id="mulhercis">
               </div>
               <div class="box-radio">
                   <p>Homem trans</p>
                   <input type="radio" name="Mulher cis" id="mulhercis">
               </div>
               <div class="box-radio">
                   <p>Prefiro não responder</p>
                   <input type="radio" name="Mulher cis" id="mulhercis">
               </div>
               <div></div>
            </div>
        </div>
        <div class="group-input-radio">
            <p>Qual seu nível de formação?</p>
            <div class="control-desk">
                    <div class="box-radio">
                        <p>Ensino Fundamental completo</p>
                        <input type="radio" name="ensinofundamental" id="fundamental">
                    </div>
                    <div class="box-radio">
                        <p>Ensino Técnico completo</p>
                        <input type="radio" name="ensinotecnico" id="tecnico">
                    </div>
                    <div class="box-radio">
                        <p>Ensino Superior completo</p>
                        <input type="radio" name="ensinosuperior" id="superior">
                    </div>
                    <div class="box-radio">
                        <p>Ensino Médio completo</p>
                        <input type="radio" name="ensinomedio" id="medio">
                    </div>
                    <div class="box-radio">
                        <p>Ensino Superior cursando</p>
                        <input type="radio" name="superior cursando" id="superiosinc">
                    </div>
                    <div></div>
            </div>
        </div>
        <div class="group-input-income">
            <input type="text" name="income" id="income" placeholder="Qual sua renda média familiar?"/>
        </div>
    </div>
    <h2>clique na trilha que deseja seguir</h2>
    <div class="group-card-course">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide card-course">
                    <picture>
                        <source media="(min-width: 800px)" srcset="./assets/">
                        <img src="./assets/"/>
                    </picture>
                    <p>Desevolvedor Full Stack</p>
                    <p>Para conhecer a carreira desssa trilha, clique em</p>
                    <a href="#">Saber mais</a>
                </div>
                <div class="swiper-slide card-course">
                    <picture>
                        <source media="(min-width: 800px)" srcset="./assets/">
                        <img src="./assets/"/>
                    </picture>
                    <p>Marketing Digital</p>
                    <p>Para conhecer a carreira desssa trilha, clique em</p>
                    <a href="#">Saber mais</a>
                </div>
                <div class="swiper-slide card-course">
                    <picture>
                        <source media="(min-width: 800px)" srcset="./assets/">
                        <img src="./assets/"/>
                    </picture>
                    <p>Administração de Empresas</p>
                    <p>Para conhecer a carreira desssa trilha, clique em</p>
                    <a href="#">Saber mais</a>
                </div>
            </div>
        </div>
    </div>
    <a class="finish" href="#">Finalizar inscrição</a>
</section>
<?php
}

?>