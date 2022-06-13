
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
        blocimg1.classList.add('active')
    
});


</script>