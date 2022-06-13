<div class="wrapper profil-wrapper">

<div class="pdp"></div>

<div class="nav-profil">

    <button class="btn-nav stat actif" href="#statistique"><?php include ASSETS_DIR."svg/graph.svg"?><span>Statistique</span></button>

    <button class="btn-nav reg" href="#reglage"><?php include ASSETS_DIR."svg/setting-4.svg"?><span>Réglages</span></button>

    <button class="btn-nav savoir" href="#about"><?php include ASSETS_DIR."svg/info-circle.svg"?><span>À propos</span></button>

</div>

<div class="bloc-detail statistique active">

    <div class="time-resume">
        <div class="yellow"> 
            <div class="red">
                <div class="green">
                    <div class="cyan">
                        <div class="orange">
                            <div class="contenu">
                            <p>Temps d'écran aujourd'hui</p>
                            <span class="time-watch">5h47</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="group-detail">

        <div class="info-blue items">
            <div class="title">
                <?php include ASSETS_DIR."svg/chart.svg"?>
                <h3>Réseaux sociaux</h3>
            </div>
            <span>2h47</span>
        </div>

        <div class="info-yellow items">
            <div class="title">
                <?php include ASSETS_DIR."svg/chart.svg"?>
                <h3>Créativité</h3>
            </div>
            <span>1h30</span>
        </div>

        <div class="info-red items">
            <div class="title">
                <?php include ASSETS_DIR."svg/chart.svg"?>
                <h3>Divertisssement</h3>
            </div>
            <span>0h20</span>
        </div>

        <div class="info-green items">
            <div class="title">
                <?php include ASSETS_DIR."svg/chart.svg"?>
                <h3>Productivité</h3>
            </div>
            <span>0h10</span>
        </div>

        <div class="info-cyan items">
            <div class="title">
                <?php include ASSETS_DIR."svg/chart.svg"?>
                <h3>Voyages</h3>
            </div>
            <span>0h23</span>
        </div>

        <div class="info-orange items">
            <div class="title">
                <?php include ASSETS_DIR."svg/chart.svg"?>
                <h3>Autres</h3>
            </div>
            <span>1h37</span>
        </div>


    </div>



    </div>
    <div class="bloc-detail reglage">

    <div class="element">
        <h3>Dark mode</h3>
        <div class="activate">
            <span class="on">On</span>
            <span class="separate">|</span>
            <span class="off">Off</span>
        </div>
    </div>

    <div class="element">
        <h3>Langue d'affichage</h3>
        <?php include ASSETS_DIR."svg/arrow-right.svg"?>
    </div>

    <div class="element">
        <h3>Notifications</h3>
        <?php include ASSETS_DIR."svg/arrow-right.svg"?>
    </div>

    <div class="element">
        <h3>Aide et assistance</h3>
        <?php include ASSETS_DIR."svg/arrow-right.svg"?>
    </div>

    <a href="#" class="delete">Réinitialiser mes résultats</a>

    </div>

    <div class="bloc-detail about">
        <div class="perso">
            <?php include ASSETS_DIR."svg/profile.svg"?>
            <div class="info">
                <h3>Enzo LOURO</h3>
                <span>Co-créateur</span>
                <span>2WEB ICAN</span>
            </div>
        </div>
        <div class="perso">
            <div class="info info2">
                <h3>Marine DELABRE</h3>
                <span>Co-créatrice</span>
                <span>2WEB ICAN</span>
            </div>
            <?php include ASSETS_DIR."svg/profile.svg"?>
        </div>
        <div class="message">
            <p>Un bug ? Une suggestion ?</p>
            <a>Envoyez-nous un message !</a>
        </div>

</div>

<script>

const stat=document.querySelector(".nav-profil .stat");
const reg=document.querySelector(".btn-nav.reg");
const about=document.querySelector(".btn-nav.savoir");
oldnav=document.querySelector(".btn-nav.actif");

const blocstat=document.querySelector(".statistique");
const blocreg=document.querySelector(".reglage");
const blocabout=document.querySelector(".about");
oldbloc=document.querySelector(".bloc-detail.active");


stat.addEventListener('click', () => {
    oldnav.classList.remove('actif');
    stat.classList.add('actif');
    oldnav=document.querySelector(".btn-nav.actif");
    blocstat.classList.add('active');
    oldbloc.classList.remove('active');
    oldbloc=document.querySelector(".bloc-detail.active");
    
});

reg.addEventListener('click', () => {
    oldnav.classList.remove('actif');
    reg.classList.add('actif');
    oldnav=document.querySelector(".btn-nav.actif");
    blocreg.classList.add('active');
    oldbloc.classList.remove('active');
    oldbloc=document.querySelector(".bloc-detail.active");
});

about.addEventListener('click', () => {
    oldnav.classList.remove('actif');
    about.classList.add('actif');
    oldnav=document.querySelector(".btn-nav.actif");
    blocabout.classList.add('active');
    oldbloc.classList.remove('active');
    oldbloc=document.querySelector(".bloc-detail.active");
});



</script>