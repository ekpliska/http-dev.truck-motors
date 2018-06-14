<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use app\widgets\MenuFooter;
/* 
 * Футер
 */
?>
<footer class="footer-distributed">
    <div class="footer-left text-center">
        <a href="<?= Url::to(['site/index']) ?>">
            <?= Html::img('@web/images/logo_company.png', ['class' => 'footer__logo', 'alt' => 'logo_company']) ?>
        </a>
        <?= MenuFooter::widget(); ?>
        <hr />
        <p class="footer__contact_policy">
            © 2018 Все права защищены
        </p>
    </div>
    
    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
                <p>
                    150029, Россия, г. Ярославль
                    <br/>
                    <strong>Промзона, ул. Декабристов, 5</strong>
                </p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p>
                <a href="tel: +74852594141">+7 (4852) 59-41-41</a>, 
                <a href="tel: +74852594142">59-41-42</a>
            </p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p>
                <a href="mailto: info@truck-motors.su">info@truck-motors.su</a>
            </p>
        </div>
    </div>
    
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About the company</span>
            Text content
        </p>
        
        <div class="footer-icons">
            <a href="#" target="_blank"><i class="fa fa-facebook-official"></i></a>
            <a href="https://vk.com/sto_truckmotors" target="_blank"><i class="fa fab fa-vk"></i></a>
            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</footer>