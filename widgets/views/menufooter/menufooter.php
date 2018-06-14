<?php
    use yii\helpers\Url;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<p class="footer-links">
    <?php foreach ($menu as $key => $item) : ?>
        <?php if ($item['menu_alias'] != 'index') : ?>
            <a href="<?= Url::to(['site/' . $item['menu_alias']])?>">
                <?= $item['menu_name'] ?>
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
</p>

<?php /*
<nav>
<ul class="topmenu">
    <?php foreach ($menu as $key => $item) : ?>
            <li>
                <a href="<?= Url::to(['site/' . $item['menu_alias']])?>">
                    <?= $item['menu_name'] ?>
                    
                    <?php if (isset($item['childs'])) : ?>
                        <ul class="submenu">
                            <?php foreach ($item['childs'] as $child) : ?>
                               <li>
                                    <a href="<?= Url::to(['site/' . $child['menu_alias']])?>">
                                        <?= $child['menu_name'] ?>
                                    </a>
                                </li>                                
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    
                </a>
            </li>

    <?php endforeach; ?>
</ul>
</nav>
*/ ?>