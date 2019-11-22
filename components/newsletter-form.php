<?php
/**
 * 
 * NEWSLETTER FORM
 * 
 */

?>

<div class="newsletter">
    <div class="container grid-xl">
        <div class="columns">
            <div class="column col-6 col-lg-12">
                <h2>Zůstaňte s námi v kontaktu</h2>
                <p>Chcete vědět stále jako první o našich akcích, slevách a soutěžích? <br>Přihlašte se k našemu odběru novinek.</p>
            </div>
            <div class="column col-6 col-lg-12">
                <form class="js-newsletter-form" action="<?php echo get_stylesheet_directory_uri(); ?>/inc/newsletter.php" method="post">
                    <div class="input-group">
                        <i class="icon-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Váš email" required>
                        <button class="btn btn-primary input-group-btn">Přihlásit se</button>
                    </div>
                </form>
                <div class="form-notify">
                    <p class="success toast toast-success is-hidden"><i class="icon-emotsmile"></i> Děkujeme Vám za přihlášení k odběru. <br><strong>Prosíme, potvrďte odběr ve vaší emailové schránce. </strong></p>
                    <p class="error toast toast-error is-hidden"><i class="icon-exclamation"></i> Něco se nezdařilo. Zkuste to prosím později.</p>
                </div>
            </div>
        </div>
    </div>
</div>
