<div class="contact">
    <form class="contact__form" action="<?php echo esc_url( admin_url('admin-ajax.php')); ?>" method="post">
        <input type="hidden" name="action" value="order_data">
        <input type="hidden" name="client-service" class="service_type">
        <div class="contact__close">
            <span class="close__span"></span>
            <span class="close__span"></span>
        </div>
        <h3 class="contact__title">Оставьте заявку</h3>
        <h4 class="contact__subtitle">и мы свяжемся с вами в ближайшее время ;)</h4>
        <div class="contact__inner">
            <div class="contact__wrapper">
                <input name="client-name" class="contact__input contact__input_name" placeholder="*Имя" type="text" tabindex="1" required autofocus>
                <input name="client-email" class="contact__input contact__input_email" placeholder="*электронная почта" type="email" tabindex="2" required>
            </div>
            <input name="client-phone" class="contact__input contact__input_phone" placeholder="*номер телефона" type="tel" tabindex="3" required>
            <textarea name="client-comment" class="contact__input contact__input_comment" placeholder="*комментарий" tabindex="5" required></textarea>
            <button name="submit" type="submit" class="btn contact__btn" data-submit="...Sending">отправить</button>
        </div>
    </form>
</div>