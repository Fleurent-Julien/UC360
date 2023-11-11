<?php get_header();
echo '<div class="img_header"><img src="' . esc_url('http://localhost/projetS3/wp-content/uploads/2023/11/E-Sport_Home-scaled.webp') . '" alt="Logo Shooting Star"></div>' ;?>


<h1>Votre nouvelle équipe favorite</br> ici même à </br>l'université de franche-comté</h1>


<hr class="line-left" />
<hr class="line-right" />

<section>
<div class="keyboard_text">

    <?php echo '<img src="' . esc_url('http://localhost/projetS3/wp-content/uploads/2023/11/Keyboard.webp') . '" alt="Clavier violet" class="keyboard_img">' ;?>

    <div class="keyboard_text_title">
        <p class="keyboard_text_title_left">Partciciper Tenter Gagner</p>
        <p>Rejoignez l’un des nombreux tournois organisés par notre association et prouver votre force</p>
        <a href="#">L'arène</a>
    </div>

     <p class="keyboard_text_title_right">Montrer votre talent</p>

</div>
</section>

<hr class="line-left" />
<hr class="line-right" />

<!--<section>
<?php echo '<div class="img_header"><img src="' . esc_url('http://localhost/projetS3/wp-content/uploads/2023/11/E-Sport_Home-scaled.webp') . '" alt="Logo Shooting Star"></div>' ;?>

<h2>Unified champion une association universitaire</h2>

</section> -->

<?php get_footer() ;?>


<style>

.keyboard_text_title_left, .keyboard_text_title_right {
	font-family: Josefin Sans;
	color: white;
	font-size: 60px;
    margin-right: 70%;
    text-transform: uppercase;
    line-height: 100%;
    font-weight: bold;

}

.keyboard_text {
    position: relative;
    color: white;
}

.keyboard_text_title {
    position: absolute;
    top: 55%;
    left: 14%;
    filter: drop-shadow(0 0 50px  #4361EE);
}

.keyboard_text_title p {
    margin-right: 69%;
}

.keyboard_text_title_right {
    position: absolute;
    top:-10%;
    left: 60%;
    filter: drop-shadow(0 0 50px #7209B7);
}

.keyboard {
    margin: auto;
    max-width: 20%;
    filter: drop-shadow(0 0 300px  #7209B7);
    z-index: -1;
}

.keyboard_img {
    max-width:420px;
    height: 100%;
    margin-inline: auto;
    display: flex;
    margin-bottom: 200px;
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