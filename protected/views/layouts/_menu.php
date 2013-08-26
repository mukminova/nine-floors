<!--<div id="menu">
    <div id="all-site-button" onclick="stopPrepagenation(event)" >
        <span>Весь сайт</span>
    </div>
    <?php
    $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array(
                'label' => 'О компании',
                'url' => Yii::app()->urlManager->createUrl('site/about'),
                'active' => (Yii::app()->controller->getId() == 'site' &&
                Yii::app()->controller->getAction()->getId() == 'about')
            )
        ),));
    ?>
</div>-->
