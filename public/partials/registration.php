<?php
$form_action = "https://96157a2c.sibforms.com/serve/MUIFAFASw7-9-wReg-prPhFK9aQwnjLDQnVQxIbB6ThzrziZZymtdHflt0ZLfTErh8GHqMCbW20zUUNzgarXcYjg8V1GjGMQY_MuiUuYmvD01bSq9_NXuwtkuAcCIH12zD_SILWUpeUqGzoIpyBDrtS6eCh-cuBrCrg1KhoPXZSh0f9cNLjCVjZ7sjaF_cEkB9QbOS-QePWamncK";
?>
<section id="registration" class="section section__registration">
<div class="section__inner">
    <?php if(isset($_GET['r']) && $_GET['r'] == '1') {
        $section_title = $texts['registration']['answer']['title'];
        $section_subtitle = $texts['registration']['answer']['subtitle'];
    } else {
        $section_title = $texts['registration']['title'];
        $section_subtitle = $texts['registration']['subtitle'];
    }
    ?>
    <h2 class="section__title"><?php echo $section_title; ?></h2>
    <p class="section__subtitle"><?php echo $section_subtitle; ?></p>
    <?php if(!isset($_GET['r'])) { ?>
        <form class="section__form" id="sib-form" method="POST" action="<?= $form_action; ?>" data-type="subscription">
            <fieldset class="form__item">
                <input type="text" id="name" name="NOME" required>
                <label for="name"><?php echo $texts['registration']['form']['name']; ?></label>
            </fieldset>
            <fieldset class="form__item">
                <input type="text" id="surname" name="COGNOME" required>
                <label for="surname"><?php echo $texts['registration']['form']['surname']; ?></label>
            </fieldset>
            <fieldset class="form__item">
                <input type="email" id="EMAIL" name="EMAIL" required>
                <label for="email"><?php echo $texts['registration']['form']['email']; ?></label>
            </fieldset>
            <fieldset class="form__item">
                <input type="tel" id="TELEFONO" name="TELEFONO" required>
                <label for="telefono"><?php echo $texts['registration']['form']['tel']; ?></label>
            </fieldset>
            <fieldset class="form__item">
                <label for="privacy" class="form__checkbox">
                    <input type="checkbox" id="privacy" name="" required>
                    <span class="privacy__text"><?php echo $texts['registration']['form']['privacy']; ?></span>
                </label>
            </fieldset>
            <fieldset class="form__item">
                <script>
                function handleCaptchaResponse() {
                    var event = new Event('captchaChange');
                    document.getElementById('sib-captcha').dispatchEvent(event);
                    window.grecaptcha = window.turnstile;
                }
                </script>
                <div class="cf-turnstile g-recaptcha" data-sitekey="0x4AAAAAAAbUhQgUEoT4w-YS" id="sib-captcha" data-callback="handleCaptchaResponse" data-language="it"></div>
                <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
            </fieldset>
            <input type="hidden" name="locale" value="it">
            <button class="section__cta" type="submit" form="sib-form"><?php echo $texts['registration']['form']['submit']; ?></button>
        </form>
    <?php } ?>
</div>
</section>
