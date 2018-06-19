<?php
    use yii\helpers\Url;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<p class="footer-links">
    <?php foreach ($pages as $item) : ?>
        <?php if ($item['menu_alias'] != 'index') : ?>
            <?php if ($item['menu_footer']) : ?>
                <a href="<?= Url::to(['site/' . $item['menu_alias']])?>">
                    <?= $item['menu_name'] ?>
                </a>
            <?php endif; ?>                
        <?php endif; ?>
    <?php endforeach; ?>
</p>