<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Url;

$this->title = 'SBA | '. \Yii::t('general', 'Agents');
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <article>
                    <h2 class="article__title tac"><?= \Yii::t('agents', 'WANTED !!! Work in the SBA.')?></h2>

                    <div class="articles__box articles__box_agents">
                        <img src="http://sba.world/static/web/article/images/10584ac79753d62.jpg" alt="WANTED!!! Работа в SBA.">
                    </div>

                    <div class="article__text">
                        <p><?= \Yii::t('agents', 'It\'s no secret that the corporate culture of our company goes far beyond the familiar faces. We can be really unpredictable, but it never affects the quality of our work.')?></p>

                        <p><?= \Yii::t('agents', 'The company SBA - is a young team that is constantly growing and improving. It consists of employees age group 18-25 years. Due to the small difference in age, it turns out that we all speak the same language :). Of course, this is just one of the reasons that we are all easy to communicate and understand each other: we are pursuing the same goals, we have similar qualities - dedication, vividness, clarity of thought.')?></p>

                        <p><?= \Yii::t('agents', 'In view of the above stated, we are always in need of fresh blood and iron brains :). If you have never identifies himself with the above epithets - do not worry: shy, pragmatic leaders need us, too! :). The main thing that you need to learn - is the lack of our work any frameworks and conventions accepted stereotypes.')?></p>

                        <p><?= \Yii::t('agents', 'It is also important to note that we select staff on the basis of - <strong><em>«First who, then what»</em></strong>. Which means, if you - a bright, extraordinary personality, which can bring into our company originality and creativity, we will first take you to work, and then come up with a post for you, or even open a department :). For us there are no obstacles on the way to the goal!')?></p>

                        <p><?= \Yii::t('agents', 'The company SBA is working according to European standards, which we implement and in the internal policies of the company. For example, we got a job, you also get full freedom of action in the implementation of their tasks. For example, even in the second month of the company, when only three people worked in it, one of them, Vadim Belomar, (now the general manager), myself, at its discretion storudnikov picked up the rest. That is, the company shows you trust, and provides complete freedom of action in the implementation of tasks.')?></p>

                        <p><?= \Yii::t('agents', 'We are not forbidden to make personal calls (in moderation, of course) or tea, is allocated for this time. But at the same time, each employee is mindful of its tasks, and is committed to its implementation, trying to maximize the end result and speed up time. And the last is not compulsory in our employees is laid on an intuitive level.')?></p>

                        <p><?= \Yii::t('agents', 'It should be noted that in view of the right to such freedom, our staff must possess an inner self-control and responsibility for all their actions, the desire to earn money and put it to all of your best efforts. During the immediate work no one is standing behind you or control you, but we regularly hold meetings and planning meetings at which each produces creative progress report, and shares his successes and failures. Can you come up with or create new approaches work, find new sources of useful information, to make a vivid idea of ​​the project - will receive an excellent bonus guaranteed.')?></p>

                        <p><?= \Yii::t('agents', 'If you really want to work in the SBA, but live in another city - it does not matter, because we - the International Agency Bukingovoe, and can work with you remotely. Besides, maybe tomorrow we will open a branch office is in your town!')?></p>

                        <p><?= \Yii::t('agents', 'In conclusion, I want to say that the pace of development of the company is growing every day, so every team member must also improve themselves and their skills on a daily basis. Immediately catches the eye, if someone behind or stopped - this employee can not work in the SBA. Each of us must strive for excellence in everything.')?></p>

                        <p><?= \Yii::t('agents', 'The main selection criterion for us - to see it in your eyes desire to grow and earn. If you already have ideas for improving the company\'s work, useful information, or anything else interesting - always call or come to meet friends! Do not wait for a suitable job - Engage us, and we come up with the position of your dreams for you:)')?></p>

                        <p><?= \Yii::t('agents', 'On this occasion, you can talk with the director of the SBA - Vadim Drozdovsky:')?></p>
                    </div>

                </article>

            </div>
        </div>

        <div class="row agents__contact">
            <div class="col-md-6 col-xs-12 contacts__link-column">
                <nav class="cl-effect-4">
                    <a href="tel:+380973818744" target="_blank" class="contacts__link">
                        WhatsApp / Viber / WeChat / Telegram<br>
                        +38 097 381 8744
                    </a>
                </nav>
            </div>
            <div class="col-md-6 col-xs-12 contacts__link-column">
                <nav class="cl-effect-4">
                    <a class="contacts__link" href="mailto:vadosax@sba.world" target="_blank">
                        Email:<br>
                        vadosax@sba.world
                    </a>
                </nav>
            </div>
        </div>
    </div>
</section>


