
<div class="wrapper accueil-wraper">
    <div class="bloc-carte bloc-carte1 active">
        <div class="carte">
            
        </div>
        <div class="info-carte">
            <h2>Jeux vidéos</h2>
            <p>Les jeux vidéos conduisent à des comportements de replis sur soi.</p>
        </div>
    </div>

    <div class="bloc-carte bloc-carte2">
        <div class="carte">
            
        </div>
        <div class="info-carte">
            <h2>Addiction</h2>
            <p>«Cette surutilisation amènerait un sentiment de détresse et des difficultés au niveau psychologique, social ou professionnel»</p>
        </div>
    </div>

    <div class="bloc-carte bloc-carte3">
        <div class="carte">
            
        </div>
        <div class="info-carte">
            <h2>Écrans et santé</h2>
            <p>Une surconsommation d'écrans contribue à réduire le temps consacré aux activités physiques et peut favoriser la tendance au grignotage</p>
        </div>
    </div>

    <div class="bloc-carte bloc-carte4">
        <div class="carte">
        Les jeux vidéos conduisent à des comportements de replis sur soi?
        </div>
        <div class="info-carte">
            <h2>Écrans et santé</h2>
        </div>
    </div>

    <div class="bloc-carte bloc-carte5">
        <div class="carte">
            <div class="mask">
            <h2> VRAI </h2>
        <p>Un usage excessif de jeu en ligne a des effets néfastes sur le développement psychoaffectif et sur le renforcement de mécanisme de défense des utilisateurs. Lorsque les jeux en ligne deviennent envahissant ils peuvent donc affecter vos relations sociales, familiales et amener à un isolement social caractérisé par un repli sur soi.</p>
            </div>
        </div>
        <div class="info-carte">
            <h2>Écrans et santé</h2>
        </div>
    </div>

    <div class="bloc-carte bloc-carte6">
        <div class="carte">
        <div class="mask">
            <h2> FAUX </h2>
        <p>Un usage excessif de jeu en ligne a des effets néfastes sur le développement psychoaffectif et sur le renforcement de mécanisme de défense des utilisateurs. Lorsque les jeux en ligne deviennent envahissant ils peuvent donc affecter vos relations sociales, familiales et amener à un isolement social caractérisé par un repli sur soi.</p>
        </div>
        </div>
        <div class="info-carte">
            <h2>Écrans et santé</h2>
        </div>
    </div>

    <div class="interaction">
        <div class="dislike">
            <?php include ASSETS_DIR."svg/dislike.svg"?>
        </div>
        <div class="like">
            <?php include ASSETS_DIR."svg/like.svg"?>
        </div>
        
    </div>

</div>

<?php include SRC_DIR."components/footer.php";?>

<script>

const blocimg=document.querySelector(".bloc-carte");
const blocimg1=document.querySelector(".bloc-carte1");
const blocimg2=document.querySelector(".bloc-carte2");
const blocimg3=document.querySelector(".bloc-carte3");
const blocimg4=document.querySelector(".bloc-carte4");
const blocimg5=document.querySelector(".bloc-carte5");
const blocimg6=document.querySelector(".bloc-carte6");
const like=document.querySelector(".like");
const dislike=document.querySelector(".dislike");

blocimg1.addEventListener('click', () => {
        blocimg1.classList.remove('active')
        blocimg2.classList.add('active') 
});

blocimg2.addEventListener('click', () => {
        blocimg2.classList.remove('active')
        blocimg3.classList.add('active')
});

blocimg3.addEventListener('click', () => {
        blocimg3.classList.remove('active')
        blocimg4.classList.add('active')
    
});

blocimg4.addEventListener('click', () => {
        blocimg4.classList.remove('active')
        blocimg1.classList.add('active')
});

like.addEventListener('click', () => {
    if(blocimg4.classList.contains('active')){
        blocimg4.classList.remove('active')
        blocimg5.classList.add('active')
    }
});

dislike.addEventListener('click', () => {
    if(blocimg4.classList.contains('active')){
        blocimg4.classList.remove('active')
        blocimg6.classList.add('active')
    }
});

blocimg5.addEventListener('click', () => {
        blocimg5.classList.remove('active')
        blocimg1.classList.add('active')
});

blocimg6.addEventListener('click', () => {
        blocimg6.classList.remove('active')
        blocimg1.classList.add('active')
});


</script>