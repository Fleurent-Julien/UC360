<?php get_header();
echo '<div class="img_header"><img src="' . esc_url('http://localhost/projetS3/wp-content/uploads/2023/11/E-Sport_Home-scaled.webp') . '" alt="Logo Shooting Star"></div>' ;?>
<h1>Votre nouvelle équipe favorite ici même à l'université de franche-comté</h1>

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



<section>
<?php echo '<div class="img_section"><img src="' . esc_url('http://localhost/projetS3/wp-content/uploads/2023/11/img_ufc-scaled.webp') . '" alt="Logo Shooting Star"></div>' ;?>
<h2>Unified champion une association universitaire</h2>
<a href="/a-propos" class="button-home">À propos</a>
</section>

<section>
<?php echo '<div class="img_section_2"><img src="' . esc_url('http://localhost/projetS3/wp-content/uploads/2023/11/stream_img-scaled.webp') . '" alt="Logo Shooting Star"></div>' ;?>
<h2>Stream</h2>
<p class="stream">Vous pouvez retrouver en direct l’association Unified Champions sur Twitch.</p>
<a href="https://www.twitch.tv/unifiedchampions" class="button-home">Rejoindre</a>
</section>

<?php get_footer() ;?>


<style>

.stream {
    text-decoration: underline;
    color:white;
    text-align: center;
    margin-top:-100px;
    margin-bottom: 100px;
}

.button-home {
    display: block;
    width: 200px;
    margin-left:auto;
    margin-right:auto;
    text-align: center;
    background: linear-gradient(97deg, #8F00FF 9.79%, #FFF 236.98%);
    padding: 10px; 
    margin-bottom: 200px;
    border-radius: 10px;
    font-family: Josefin Sans;
	font-size: 18px;
	font-style: normal;
	font-weight: 700;
	text-transform: uppercase;
}





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
    margin-top: 200px;
    margin-bottom: 400px;
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
    margin-bottom: 150px;
}

.img_section {
	min-width: 100%;
	position: absolute;
	margin-bottom: 500px;
    margin-top: -200px;
	z-index: -1;
	filter: brightness(50%);
	background: linear-gradient(#101010 0%, rgba(16, 16, 16, 0.80) 27.68%, rgba(16, 16, 16, 0.50) 54.98%, rgba(16, 16, 16, 0.10) 80.76%, rgba(16, 16, 16, 0.00) 100%);
	background: linear-gradient(180deg, #101010 0%, rgba(16, 16, 16, 0.80) 27.68%, rgba(16, 16, 16, 0.50) 54.98%, rgba(16, 16, 16, 0.10) 80.76%, rgba(16, 16, 16, 0.00) 100%);
}

.img_section_2 {
	min-width: 100%;
	position: absolute;
    margin-top: -100px;
	z-index: -1;
	filter: brightness(50%);
	background: linear-gradient(#101010 0%, rgba(16, 16, 16, 0.80) 27.68%, rgba(16, 16, 16, 0.50) 54.98%, rgba(16, 16, 16, 0.10) 80.76%, rgba(16, 16, 16, 0.00) 100%);
	background: linear-gradient(180deg, #101010 0%, rgba(16, 16, 16, 0.80) 27.68%, rgba(16, 16, 16, 0.50) 54.98%, rgba(16, 16, 16, 0.10) 80.76%, rgba(16, 16, 16, 0.00) 100%);
}
</style>