<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'SBA | '. \Yii::t('general', 'Looking for a job');
$this->params['breadcrumbs'][] = $this->title;
?>
<svg style="display: none;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <symbol id="icon-smile" viewBox="0 0 32 32">
            <title>smile</title>
            <path d="M16.5 29v0c-6.904 0-12.5-5.596-12.5-12.5s5.596-12.5 12.5-12.5c6.904 0 12.5 5.596 12.5 12.5s-5.596 12.5-12.5 12.5zM16.5 28c6.351 0 11.5-5.149 11.5-11.5s-5.149-11.5-11.5-11.5c-6.351 0-11.5 5.149-11.5 11.5s5.149 11.5 11.5 11.5v0zM12 14c0.552 0 1-0.448 1-1s-0.448-1-1-1c-0.552 0-1 0.448-1 1s0.448 1 1 1v0zM21 14c0.552 0 1-0.448 1-1s-0.448-1-1-1c-0.552 0-1 0.448-1 1s0.448 1 1 1v0zM16.497 21c-2.997 0-4.497-1-4.497-1s1 3 4.5 3c3.5 0 4.5-3 4.5-3s-1.506 1-4.503 1v0z"></path>
        </symbol>
        <symbol id="icon-earth" viewBox="0 0 32 32">
            <title>earth</title>
            <path d="M16 4c-6.627 0-12 5.373-12 12s5.373 12 12 12c0.811 0 1.603-0.081 2.369-0.234-0.309-0.148-0.342-1.255-0.037-1.887 0.34-0.703 1.406-2.484 0.352-3.082s-0.762-0.867-1.406-1.559-0.381-0.795-0.422-0.973c-0.141-0.609 0.621-1.523 0.656-1.617s0.035-0.445 0.023-0.551-0.48-0.387-0.598-0.398-0.176 0.188-0.34 0.199-0.879-0.434-1.031-0.551-0.223-0.398-0.434-0.609-0.234-0.047-0.563-0.176-1.383-0.516-2.191-0.844-0.879-0.788-0.891-1.113-0.492-0.797-0.718-1.137c-0.225-0.34-0.267-0.809-0.349-0.703s0.422 1.336 0.34 1.371-0.258-0.34-0.492-0.645 0.246-0.141-0.504-1.617 0.234-2.229 0.281-3 0.633 0.281 0.328-0.211 0.023-1.523-0.211-1.898-1.57 0.422-1.57 0.422c0.035-0.363 1.172-0.984 1.992-1.559s1.321-0.129 1.98 0.082 0.703 0.141 0.48-0.070 0.094-0.316 0.609-0.234 0.656 0.703 1.441 0.645 0.082 0.152 0.188 0.352-0.117 0.176-0.633 0.527 0.012 0.352 0.926 1.020 0.633-0.445 0.539-0.938 0.668-0.105 0.668-0.105c0.563 0.375 0.459 0.021 0.869 0.15s1.522 1.069 1.522 1.069c-1.395 0.762-0.516 0.844-0.281 1.020s-0.48 0.516-0.48 0.516c-0.293-0.293-0.34 0.012-0.527 0.117s-0.012 0.375-0.012 0.375c-0.97 0.152-0.75 1.172-0.738 1.418s-0.621 0.621-0.785 0.973 0.422 1.113 0.117 1.16-0.609-1.148-2.25-0.703c-0.495 0.134-1.594 0.703-1.008 1.863s1.559-0.328 1.887-0.164-0.094 0.902-0.023 0.914 0.926 0.032 0.973 1.031 1.301 0.914 1.57 0.938 1.172-0.738 1.301-0.773 0.645-0.469 1.77 0.176 1.699 0.551 2.086 0.82 0.117 0.809 0.48 0.984 1.816-0.059 2.18 0.539-1.5 3.598-2.086 3.926-0.855 1.078-1.441 1.559-1.406 1.075-2.18 1.535c-0.685 0.407-0.808 1.136-1.113 1.367 5.37-1.193 9.386-5.985 9.386-11.714 0-6.627-5.373-12-12-12zM18.813 15.262c-0.164 0.047-0.504 0.352-1.336-0.141s-1.406-0.398-1.477-0.48c0 0-0.070-0.199 0.293-0.234 0.746-0.072 1.688 0.691 1.898 0.703s0.316-0.211 0.691-0.090c0.375 0.121 0.094 0.196-0.070 0.242zM14.887 5.195c-0.082-0.059 0.068-0.128 0.157-0.246 0.051-0.068 0.013-0.182 0.078-0.246 0.176-0.176 1.043-0.422 0.873 0.059s-0.979 0.527-1.108 0.434zM16.984 6.719c-0.293-0.012-0.983-0.085-0.855-0.211 0.495-0.492-0.188-0.633-0.609-0.668s-0.598-0.27-0.387-0.293 1.055 0.012 1.195 0.129 0.902 0.422 0.949 0.645 0 0.41-0.293 0.398zM19.527 6.637c-0.234 0.188-1.414-0.673-1.641-0.867-0.984-0.844-1.512-0.563-1.718-0.703s-0.133-0.328 0.183-0.609 1.207 0.094 1.723 0.152 1.113 0.457 1.125 0.931c0.012 0.474 0.563 0.909 0.328 1.097z"></path>
        </symbol>
        <symbol id="icon-dollar" viewBox="0 0 20 20">
            <title>dollar</title>
            <path d="M11 16.755v2.245h-2v-2.143c-1.712-0.1-3.066-0.589-4.241-1.797l1.718-1.74c0.859 0.87 2.023 1.16 3.282 1.16 1.565 0 2.405-0.599 2.405-1.702 0-0.483-0.133-0.889-0.42-1.16-0.267-0.251-0.572-0.387-1.202-0.483l-1.642-0.232c-1.164-0.174-2.022-0.541-2.634-1.141-0.648-0.657-0.973-1.546-0.973-2.707 0-2.155 1.382-3.743 3.707-4.1v-1.955h2v1.932c1.382 0.145 2.465 0.62 3.415 1.551l-1.679 1.682c-0.859-0.832-1.889-0.947-2.787-0.947-1.412 0-2.099 0.792-2.099 1.74 0 0.348 0.115 0.716 0.401 0.986 0.267 0.252 0.706 0.464 1.26 0.541l1.602 0.232c1.241 0.174 2.023 0.522 2.596 1.063 0.726 0.696 1.050 1.702 1.050 2.92 0 2.25-1.567 3.662-3.759 4.055z"></path>
        </symbol>
        <symbol id="icon-up" viewBox="0 0 18 32">
            <title>up</title>
            <path class="path1" d="M18.179 10.768q-0.321 0.661-1.036 0.661h-3.429v15.429q0 0.25-0.161 0.411t-0.411 0.161h-12.571q-0.375 0-0.518-0.321-0.143-0.357 0.071-0.625l2.857-3.429q0.161-0.196 0.446-0.196h5.714v-11.429h-3.429q-0.714 0-1.036-0.661-0.304-0.661 0.161-1.214l5.714-6.857q0.321-0.393 0.875-0.393t0.875 0.393l5.714 6.857q0.482 0.571 0.161 1.214z"></path>
        </symbol>

        <symbol id="icon-youtube" viewBox="0 0 27 32">
            <title>youtube</title>
            <path d="M17.339 22.214v3.768q0 1.196-0.696 1.196-0.411 0-0.804-0.393v-5.375q0.393-0.393 0.804-0.393 0.696 0 0.696 1.196zM23.375 22.232v0.821h-1.607v-0.821q0-1.214 0.804-1.214t0.804 1.214zM6.125 18.339h1.911v-1.679h-5.571v1.679h1.875v10.161h1.786v-10.161zM11.268 28.5h1.589v-8.821h-1.589v6.75q-0.536 0.75-1.018 0.75-0.321 0-0.375-0.375-0.018-0.054-0.018-0.625v-6.5h-1.589v6.982q0 0.875 0.143 1.304 0.214 0.661 1.036 0.661 0.857 0 1.821-1.089v0.964zM18.929 25.857v-3.518q0-1.304-0.161-1.768-0.304-1-1.268-1-0.893 0-1.661 0.964v-3.875h-1.589v11.839h1.589v-0.857q0.804 0.982 1.661 0.982 0.964 0 1.268-0.982 0.161-0.482 0.161-1.786zM24.964 25.679v-0.232h-1.625q0 0.911-0.036 1.089-0.125 0.643-0.714 0.643-0.821 0-0.821-1.232v-1.554h3.196v-1.839q0-1.411-0.482-2.071-0.696-0.911-1.893-0.911-1.214 0-1.911 0.911-0.5 0.661-0.5 2.071v3.089q0 1.411 0.518 2.071 0.696 0.911 1.929 0.911 1.286 0 1.929-0.946 0.321-0.482 0.375-0.964 0.036-0.161 0.036-1.036zM14.107 9.375v-3.75q0-1.232-0.768-1.232t-0.768 1.232v3.75q0 1.25 0.768 1.25t0.768-1.25zM26.946 22.786q0 4.179-0.464 6.25-0.25 1.054-1.036 1.768t-1.821 0.821q-3.286 0.375-9.911 0.375t-9.911-0.375q-1.036-0.107-1.83-0.821t-1.027-1.768q-0.464-2-0.464-6.25 0-4.179 0.464-6.25 0.25-1.054 1.036-1.768t1.839-0.839q3.268-0.357 9.893-0.357t9.911 0.357q1.036 0.125 1.83 0.839t1.027 1.768q0.464 2 0.464 6.25zM9.125 0h1.821l-2.161 7.125v4.839h-1.786v-4.839q-0.25-1.321-1.089-3.786-0.661-1.839-1.161-3.339h1.893l1.268 4.696zM15.732 5.946v3.125q0 1.446-0.5 2.107-0.661 0.911-1.893 0.911-1.196 0-1.875-0.911-0.5-0.679-0.5-2.107v-3.125q0-1.429 0.5-2.089 0.679-0.911 1.875-0.911 1.232 0 1.893 0.911 0.5 0.661 0.5 2.089zM21.714 3.054v8.911h-1.625v-0.982q-0.946 1.107-1.839 1.107-0.821 0-1.054-0.661-0.143-0.429-0.143-1.339v-7.036h1.625v6.554q0 0.589 0.018 0.625 0.054 0.393 0.375 0.393 0.482 0 1.018-0.768v-6.804h1.625z"></path>
        </symbol>
        <symbol id="icon-vk" viewBox="0 0 35 32">
            <title>vk</title>
            <path d="M34.232 9.286q0.411 1.143-2.679 5.25-0.429 0.571-1.161 1.518-1.393 1.786-1.607 2.339-0.304 0.732 0.25 1.446 0.304 0.375 1.446 1.464h0.018l0.071 0.071q2.518 2.339 3.411 3.946 0.054 0.089 0.116 0.223t0.125 0.473-0.009 0.607-0.446 0.491-1.054 0.223l-4.571 0.071q-0.429 0.089-1-0.089t-0.929-0.393l-0.357-0.214q-0.536-0.375-1.25-1.143t-1.223-1.384-1.089-1.036-1.009-0.277q-0.054 0.018-0.143 0.063t-0.304 0.259-0.384 0.527-0.304 0.929-0.116 1.384q0 0.268-0.063 0.491t-0.134 0.33l-0.071 0.089q-0.321 0.339-0.946 0.393h-2.054q-1.268 0.071-2.607-0.295t-2.348-0.946-1.839-1.179-1.259-1.027l-0.446-0.429q-0.179-0.179-0.491-0.536t-1.277-1.625-1.893-2.696-2.188-3.768-2.33-4.857q-0.107-0.286-0.107-0.482t0.054-0.286l0.071-0.107q0.268-0.339 1.018-0.339l4.893-0.036q0.214 0.036 0.411 0.116t0.286 0.152l0.089 0.054q0.286 0.196 0.429 0.571 0.357 0.893 0.821 1.848t0.732 1.455l0.286 0.518q0.518 1.071 1 1.857t0.866 1.223 0.741 0.688 0.607 0.25 0.482-0.089q0.036-0.018 0.089-0.089t0.214-0.393 0.241-0.839 0.17-1.446 0-2.232q-0.036-0.714-0.161-1.304t-0.25-0.821l-0.107-0.214q-0.446-0.607-1.518-0.768-0.232-0.036 0.089-0.429 0.304-0.339 0.679-0.536 0.946-0.464 4.268-0.429 1.464 0.018 2.411 0.232 0.357 0.089 0.598 0.241t0.366 0.429 0.188 0.571 0.063 0.813-0.018 0.982-0.045 1.259-0.027 1.473q0 0.196-0.018 0.75t-0.009 0.857 0.063 0.723 0.205 0.696 0.402 0.438q0.143 0.036 0.304 0.071t0.464-0.196 0.679-0.616 0.929-1.196 1.214-1.92q1.071-1.857 1.911-4.018 0.071-0.179 0.179-0.313t0.196-0.188l0.071-0.054 0.089-0.045t0.232-0.054 0.357-0.009l5.143-0.036q0.696-0.089 1.143 0.045t0.554 0.295z"></path>
        </symbol>
        <symbol id="icon-facebook" viewBox="0 0 32 32">
            <title>facebook</title>
            <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
        </symbol>
        <symbol id="icon-instagram" viewBox="0 0 32 32">
            <title>instagram</title>
            <path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
            <path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
            <path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
        </symbol>
    </defs>
</svg>

<section class="section_after-light-menu section tac">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="we-are__title"><?= \Yii::t('general', 'YOUR WAY TO SUCCESS IS STARTING RIGHT NOW')?></h2>
                <h4><?= \Yii::t('general', 'Earn money by performing at the best courts, traveling around the world with us.')?></h4>
            </div>
        </div>
    </div>
</section>

<section class="section good parallax-window tac" data-parallax="scroll"
         data-image-src="<?= Url::to('../img/background/celebrities.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="good__title">
                    <?= \Yii::t('general', 'YOUR NEXT PERFORMANCE MIGHT BE ON THE SAME STAGE WITH CELEBRITIES.') ?>
                </h2>
                <p><?= \Yii::t('general', 'We cooperate with the best artists from the CIS countries, who perform in the most luxurious places of the world.') ?></p>
                <p><?= \Yii::t('general', 'You might be the next one.') ?></p>
            </div>
        </div>
    </div>
</section>

<section class="light-g advantages section tac">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="advantages">
                    <div class="icon-wrapper">
                        <svg class="icon-gray">
                            <use xlink:href="#icon-smile"></use>
                        </svg>
                        <h3 class="icon-title"><?= \Yii::t('general', 'Do what you like')?></h3>
                    </div>
                    <p><?= \Yii::t('general', 'These going to be the best concerts and performances in your life!')?></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="advantages">
                    <div class="icon-wrapper">
                        <svg class="icon-gray">
                            <use xlink:href="#icon-earth"></use>
                        </svg>
                        <h3 class="icon-title"><?= \Yii::t('general', 'Travel around the world')?></h3>
                    </div>
                    <p><?= \Yii::t('general', 'You will be able to see all the wonders of the world, to learn the culture and religion of the new countries and make new useful contacts.')?></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="advantages">
                    <div class="icon-wrapper">
                        <svg class="icon-gray">
                            <use xlink:href="#icon-dollar"></use>
                        </svg>
                        <h3 class="icon-title"><?= \Yii::t('general', 'Save all your money')?></h3>
                    </div>
                    <p><?= \Yii::t('general', 'You don’t need to spend your money to food, residence, flight, insurance and documents, because we pay for these.')?></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="advantages">
                    <div class="icon-wrapper">
                        <svg class="icon-gray">
                            <use xlink:href="#icon-up"></use>
                        </svg>
                        <h3 class="icon-title"><?= \Yii::t('general', 'Earn more')?></h3>
                    </div>
                    <p><?= \Yii::t('general', 'With our agency your payment will be much higher than your colleagues and other professional artists.')?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section good parallax-window tac" data-parallax="scroll"
         data-image-src="<?= Url::to('../img/background/celebrities.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="good__title">
                    <?= \Yii::t('general', 'WHO DOES WANT TO PERFORM IN THE MOST LUXURIOUS PLACES OF THE WORLD?') ?>
                </h2>
                <p><?= \Yii::t('general', 'Do you want to travel?') ?></p>
                <p><?= \Yii::t('general', 'So it is the best paid vacation that you can imagine.') ?></p>
            </div>
        </div>
    </div>
</section>

<section class="section_testimonials section tac">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="good__title"><?= \Yii::t('general', 'WHAT DO YOU THINK ABOUT COOPERATION WITH US?')?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="testimonials">
                    <p class="testimonials__author"><?= \Yii::t('general', 'Max and Svetlana Z., dancers')?></p>
                    <div class="testimonials__img">
                        <img src="<?= Url::to('../img/testimonials/max-svetlana.jpg')?>" alt="<?= \Yii::t('general', 'Max and Svetlana Z., dancers')?>">
                    </div>
                    <blockquote class="testimonials__blockquote"><?= \Yii::t('general', 'Working with SBA was great! We got memories that we will never forget. If you want to work abroad, believe me, with the SBA you will be in capable hands.')?></blockquote>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="testimonials">
                    <p class="testimonials__author"><?= \Yii::t('general', 'John O., guitarist')?></p>
                    <div class="testimonials__img">
                        <img src="<?= Url::to('../img/testimonials/jhon-o.jpg')?>" alt="<?= \Yii::t('general', 'John O., guitarist')?>">
                    </div>
                    <blockquote class="testimonials__blockquote"><?= \Yii::t('general', 'SBA and work experience abroad really changed my life forever. I am sincerely happy for those people who had a luck to work with the SBA. This is the joy that can not be described by words.')?></blockquote>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="testimonials">
                    <p class="testimonials__author"><?= \Yii::t('general', 'Olga M., model')?></p>
                    <div class="testimonials__img">
                        <img src="<?= Url::to('../img/testimonials/olga-m.jpg')?>" alt="<?= \Yii::t('general', 'Olga M., model')?>">
                    </div>
                    <blockquote class="testimonials__blockquote"><?= \Yii::t('general', 'The last contract was even better than the first. All the artists with whom I worked were true professionals. I have learned a lot with them. I met a lot of new friends and got bright impressions.')?></blockquote>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="testimonials">
                    <p class="testimonials__author"><?= \Yii::t('general', 'Margarita P., dancer')?></p>
                    <div class="testimonials__img">
                        <img src="<?= Url::to('../img/testimonials/margarita-p.png')?>" alt="<?= \Yii::t('general', 'Margarita P., dancer')?>">
                    </div>
                    <blockquote class="testimonials__blockquote"><?= \Yii::t('general', 'I’ve started my day in the beach, sunbathed and swam during 3-4 hours and then I went to dance- do what I like. In spite of not high payment it was my best contract with the SBA. Everything that was located in the area of the hotel were for free use. As a result - I had perfect rest and earned.')?></blockquote>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="testimonials">
                    <p class="testimonials__author"><?= \Yii::t('general', 'Andrew P., model')?></p>
                    <div class="testimonials__img">
                        <img src="<?= Url::to('../img/testimonials/andrew-p.jpg')?>" alt="<?= \Yii::t('general', 'Andrew P., model')?>">
                    </div>
                    <blockquote class="testimonials__blockquote"><?= \Yii::t('general', 'I worked abroad for two years and has already seen half of the world. I had a lot of free time to see the many sights and wonders of the world. I\'m glad I found a company that understood my objectives.')?></blockquote>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="testimonials">
                    <p class="testimonials__author"><?= \Yii::t('general', 'Angela V., choreographer')?></p>
                    <div class="testimonials__img">
                        <img src="<?= Url::to('../img/testimonials/angela-v.jpg')?>" alt="<?= \Yii::t('general', 'Angela V., choreographer')?>">
                    </div>
                    <blockquote class="testimonials__blockquote"><?= \Yii::t('general', 'I worked on various contracts from different agents. I had a lot of difficulties with cooperation and with documents. Having consulting with guys from the SBA I really understood what the true service is. I signed contract through the week later, after I had left the application for the SBA. Six months passed quickly. Now I am going to the next contract.')?></blockquote>
                </div>
            </div>
        </div>
    </div>
</section>

