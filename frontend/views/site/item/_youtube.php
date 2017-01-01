<?php
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/youtube.js');
?>

<div class="youtube__wrapper testimonials__video">
    <iframe class="youtube__iframe" id="youtube-iframe" src="<?= $model->video;?>"
            frameborder="0" allowfullscreen></iframe>
</div>

