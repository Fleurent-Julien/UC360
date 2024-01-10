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
<div class="section_txt">
<h2>Unified champion une association universitaire</h2>
<a href="/a-propos" class="button-home">À propos</a>
</div>
</section>

<section>
<?php echo '<div class="img_section_2"><img src="' . esc_url('http://localhost/projetS3/wp-content/uploads/2023/11/stream_img-scaled.webp') . '" alt="Logo Shooting Star"></div>' ;?>
<h2>Stream</h2>
<p class="stream">Vous pouvez retrouver en direct l’association Unified Champions sur Twitch.</p>
<a href="https://www.twitch.tv/unifiedchampions" class="button-home btn-title">Rejoindre</a>
</section>

<section>
    <div>
<h2>Les jeux présents dans l'arène</h2>

    <div class="cards">
<?php echo '<div><img src="' . esc_url('http://localhost/projetS3/wp-content/uploads/2023/11/Valorant_card.webp') . '" alt="Card League Of Legends"></div>' ;?>
<?php echo '<div><img src="' . esc_url('http://localhost/projetS3/wp-content/uploads/2023/11/LoL_Card.webp') . '" alt="Card Valorant"></div>' ;?>
    </div>
</div>
</section>



<?php get_footer() ;?>
