<?php get_header();
echo '<div class="img_header"><img src="' . esc_url('http://localhost/projetS3/wp-content/uploads/2023/11/E-Sport_Home-scaled.webp') . '" alt="Logo Shooting Star"></div>' ;?>


<h1>
VOTRE NOUVELLE </br> ÉQUIPE FAVORITE ICI </br> MÊME À L’UNIVERSITÉ</br> DE FRANCHE-COMTÉ
</h1>

<hr class="line-left" />
<hr class="line-right" />
<div class="keyboard_text">
    <div>
<p style="text-align: right; margin-bottom:-50px; margin-right: 100px;">Montrer votre talent</p>
<?php echo '<div class="keyboard"><img src="' . esc_url('http://localhost/projetS3/wp-content/uploads/2023/11/Keyboard.webp') . '" alt="Clavier violet"></div>' ;?>

   <p>Partciciper Tenter Gagner</p> 
   <p>Rejoignez l’un des nombreux tournois organisés par notre association et prouver votre force</p>
   <a href="#">L'arène</a>
    </div>
</div>


<hr class="line-left" />
<hr class="line-right" />



<?php get_footer() ;?>


<style>
.keyboard_text p {
	font-family: Josefin Sans;
	color: white;
	margin: 80px 0 150px 0;
    font-size: 50px ;
    z-index: 50;
}


.keyboard {
    margin: auto;
    max-width: 20%;
    filter: drop-shadow(0 0 300px  #7209B7);
    z-index: -1;
}

.line-left, .line-right {
    border: 5px solid white;
    color: white;
	overflow: visible;
}

.line-left{
    box-shadow: 0px 0px 2px 0px #4CC9F0 inset;
	filter: drop-shadow(0px 0px 10px #4CC9F0);
    align-items: left;
    margin-right: 50%;
    border-radius: 0 50px 50px 0;
}

.line-right{
    box-shadow: 0px 0px 2px 0px #7209B7 inset;
	filter: drop-shadow(0px 0px 10px #7209B7);
    margin-left: 50%;
    border-radius: 50px 0 0 50px;
    margin-bottom: 150px
}

</style>