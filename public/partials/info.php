<?php $form_action = "https://96157a2c.sibforms.com/serve/MUIFAOq6lVCbVdApSf8RkbkwhWtFF-krMK_26fVwihNu9cpOc8nGFmun-7qnM55sPS_-4oUwzb0KCsXYqHUtfEU5zP634U_jw5sMs-X43CH0iykAqOkswxA_fSTHGKk1j-RQVkTgjTA4mv0QHF_zHPugTPsjcNGDvWBQ9wD3CABH6u4vIrSwkjYVgcW41_DO_SNhoOXKhmKXEwPR"; ?>

<button class="infotrigger" type="button" aria-label="<?php echo $texts['info']['trigger']; ?>"></button>
<dialog class=" modal infomodal">
    <h2 class="modal__title"><?php echo $texts['info']['modal']['title']; ?></h2>
    <p class="modal__subtitle"><?php echo $texts['info']['modal']['subtitle']; ?></p>
    <form class="section__form" id="sib-openday-form" method="POST" action="<?= $form_action; ?>" data-type="subscription">
        <fieldset class="form__item">
            <input type="email" id="email_openday" name="EMAIL" autocomplete="off" required>
            <label for="email_openday"><?php echo $texts['registration']['form']['email']; ?></label>
        </fieldset>
        <fieldset class="form__item">
            <input type="tel" id="TELEFONO_openday" name="TELEFONO" required>
            <label for="telefono_openday"><?php echo $texts['registration']['form']['tel']; ?></label>
        </fieldset>
        <fieldset class="form__item">
            <label for="privacy_openday" class="form__checkbox">
                <input type="checkbox" id="privacy_openday" name="" required>
                <span><?php echo $texts['registration']['form']['privacy']; ?></span>
            </label>
        </fieldset>
        <fieldset class="form__item">
            <script>
            function handleCaptchaResponse() {
                var event = new Event('captchaChange');
                document.getElementById('sib-openday-captcha').dispatchEvent(event);
                window.grecaptcha = window.turnstile;
            }
            </script>
            <div class="cf-turnstile g-recaptcha" data-sitekey="0x4AAAAAAAbUhQgUEoT4w-YS" id="sib-openday-captcha" data-callback="handleCaptchaResponse" data-language="it"></div>
            <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
        </fieldset>
        <input type="hidden" name="locale" value="it">
        <button class="section__cta" type="submit" form="sib-openday-form"><?php echo $texts['info']['modal']['cta']; ?></button>
    </form>
    <button class="modal__close infoclose" aria-label="close modal"></button>
</dialog>


