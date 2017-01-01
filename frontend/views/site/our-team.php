<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Url;

$this->title = 'SBA | '. \Yii::t('general', 'Our team');
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form_big">
                    <p class="tac"><?= \Yii::t('general', 'Our team') ?></p>
                </div>

                <article class="team__item">
                    <div class="team__blockquote-wrapper">
                        <span class="blockquote">“</span>
                        <div class="team__img-wrapper">
                            <img src="<?= Url::to('../img/team/vadim_s.jpg')?>" alt="">
                        </div>
                    </div>

                    <blockquote class="team__blockquote"><?= \Yii::t('general', 'By creating a company the SBA, I dreamed of a strong, close-knit, friendly team. At the same time I really wanted that all people really want a bright future for the company, and were doing this all their efforts. Well, thoughts are material, and I can say with confidence that this goal I have already brought to life. Every man is an integral part of the company contributes to the common cause, creates a mood. We have a great atmosphere, we are interested not only work together, but also to communicate! On the basis of the opinion I conducted a small survey of our team, and now invite you to get acquainted with their answers!')?></blockquote>
                    <cite class="team__cite"><?= \Yii::t('general', 'Director of SBA, Vadim Drozdovsky')?></cite>
                </article>


                <article class="team__item">
                    <div class="team__blockquote-wrapper">
                        <span class="blockquote">“</span>
                        <div class="team__img-wrapper">
                            <img src="<?= Url::to('../img/team/dasha_s.jpg')?>" alt="">
                        </div>
                    </div>

                    <blockquote class="team__blockquote">
                        <p><?= \Yii::t('general', 'With our company, I met in the interview, when sitting in a comfortable office and listened to the stories of our Director of SBA :) In fact, on the way to the interview, I did not think I would stay here to work, but after some 20 minutes revamped opinion, and a crush on our company and the people I work with!')?></p>
                        <p><?= \Yii::t('general', 'Oh ... I was engaged in a lot of posts, I do not know what to call it. I and Head of External Relations, and deputy head, and zakazyvatel dinners and prinositel goodies ..... :)')?></p>
                        <p><?= \Yii::t('general', 'But it\'s a secret! About him know the only members of our team (actually, in this poll someone and the answer to this question, but I will refrain because of their superstitious).')?></p>
                        <p><?= \Yii::t('general', 'Self-control, commitment, responsiveness.')?></p>
                        <p><?= \Yii::t('general', 'Fortunately, there is unfortunately, I do not communicate with any artists or personnel. Hour\'m in touch with our partners. It\'s really hard, but I am madly in love this thing!')?></p>
                        <p><?= \Yii::t('general', 'Rather, for me the most would approach the issue, with its partners from what I most like to work (like this always, to myself to think of something, and then complicate these my inventions life all around, but do not think that the guys from our team at me because of this offense). I consider myself incredibly lucky to work in the day I deal with so many people from different parts of our planet, it is unlikely that anyone could afford it imagine! Suppose, now I\'m talking to Veronica from Australia, in a minute I skype with Ricky from India, and in five minutes I generally run to the airport to meet Jay from China, on the run in Whatsapp communicating with Andrea from Spain :) So yeah, I damn lucky :)')?></p>
                        <p><?= \Yii::t('general', 'Hmm .... perhaps a kaleidoscope. I have such a vivid, full of emotions work! Sometimes I feel like a small child, which leads to a wild delight any little things like oriental sweets, brought me a present of a friendly partner, or small magnets, which gave me a grateful, after the contract, the actor. We never stand still, and I, like a picture in a kaleidoscope. And it\'s very, very cool.')?></p>
                        <p><?= \Yii::t('general', 'I spend here 90% of their time! :) Of course, like our team became the second family to me. I infinitely appreciate and respect the people with whom I work. It so happened that we are all so different, and all complement each other, and so little fortunate enough (just do not tell them, and then arrogant).')?></p>
                    </blockquote>
                    <cite class="team__cite"><?= \Yii::t('general', 'Daria Murzina')?></cite>
                </article>


                <article class="team__item">
                    <div class="team__blockquote-wrapper">
                        <span class="blockquote">“</span>
                        <div class="team__img-wrapper">
                            <img src="<?= Url::to('../img/team/vadik_s.jpg')?>" alt="">
                        </div>
                    </div>

                    <blockquote class="team__blockquote">
                        <p><?= \Yii::t('general', 'Seeing ads about the recruitment in bukingovuyu company passed the interview - no doubts. that "Success" should come with me for life.')?></p>
                        <p><?= \Yii::t('general', 'Standing at the origins of the company\'s development, I held the position of staff to work with artists manager. Looking at the steps of the career ladder, I have sought only to higher and higher, and now my job - General Manager.')?></p>
                        <p><?= \Yii::t('general', 'All hidden "Successful Booking Agency" in the name of the company, which is an integral part of our motto. We have sought and will seek only forward and only to success. This was and is our future.')?></p>
                        <p><?= \Yii::t('general', 'First of all we must have communication skills, because we are directly communicate with our artists, and with employers. Second, that it is imperative to develop in themselves - it is stress, which will help us to develop other qualities - to overcome difficulties, to suppress negative emotions, to find an approach to absolutely everyone. And the third quality - creativity. This quote fits here like no other, "The more you try something new, the more you have a chance to stumble upon something really worthwhile."')?></p>
                        <p><?= \Yii::t('general', 'Already having worked with artists of all genres, I can say that the individual approach to each not help you weed out those or other genres, and you can say with confidence - "I like to work with artists of any genre completely \'')?></p>
                        <p><?= \Yii::t('general', '"Way". Starting my career, you can mark the word START. Standing at the start, I\'ve seen the success that you want to walk, crawl, run ... it does not matter, the main thing is the goal! I intend to go on its way to this goal, as This is my "The way to success"')?></p>
                        <p><?= \Yii::t('general', 'Definitely yes! Each team member is a person, we are all different, but there is something that unites us - we\'re on the same wavelength!')?></p>
                    </blockquote>
                    <cite class="team__cite"><?= \Yii::t('general', 'Belomar Vadim')?></cite>
                </article>


                <article class="team__item">
                    <div class="team__blockquote-wrapper">
                        <span class="blockquote">“</span>
                        <div class="team__img-wrapper">
                            <img src="<?= Url::to('../img/team/gleb_s.jpg')?>" alt="">
                        </div>
                    </div>

                    <blockquote class="team__blockquote">
                        <p><?= \Yii::t('general', 'Familiarity with the company SBA passed spontaneously. Even working in a previous job, I was called by my former colleague, Vadim Belomar, and offered to work with him in Successful Booking Agency.')?></p>
                        <p><?= \Yii::t('general', 'I studied the information on the site, as well as social networks and I was very interested in the prospect, as well as the very essence of the work with the actors. And I, without hesitation, agreed. And his decision to leave the previous job or how much I do not regret! Work in SBA - that every day a new challenge, many ordinary tasks and great prospects that make look ahead, to cultivate and carry out their work efficiently and quickly.')?></p>
                        <p><?= \Yii::t('general', 'Currently I work as a manager. I am engaged in the search for artists and sending them abroad.')?></p>
                        <p><?= \Yii::t('general', 'Our company is young, dynamic, and in the near future we will be the best in this area!')?></p>
                        <p><?= \Yii::t('general', 'To be successful in the profession and the companies need to develop the originality, creativity and of course the professional level of communication with people.')?></p>
                        <p><?= \Yii::t('general', 'For me there is no difference between artists who want to go abroad. Every person - is different, and each needs an individual approach, whether trapeze artist, a guitarist. I even say the contrary, the more artists - more interesting work, because you learn a lot of new information.')?></p>
                        <p><?= \Yii::t('general', 'If you could describe all the work of our company in one word, it would be progress. We do not stand still for a minute, our whole team is developing in many directions, and every day we become better! We have already established themselves as a team that you can trust and with whom to work comfortably. Our goal - to become the best certainly, it will not be difficult with our high level of service.')?></p>
                        <p><?= \Yii::t('general', 'To say that I like to work in a company Successful Booking Agency - is to say nothing. The best period of my life began from the moment I learned of the SBA and the first time I came into the office as an employee.')?></p>
                        <p><?= \Yii::t('general', 'PS: working not so long ago in the company of Successful Booking Agency, but has become an integral part of our young team - I can confidently say: "Do you want to travel and earn SBA will certainly help you, and will exceed all your expectations!"')?></p>
                    </blockquote>
                    <cite class="team__cite"><?= \Yii::t('general', 'Tenyakov Gleb')?></cite>
                </article>


                <article class="team__item">
                    <div class="team__blockquote-wrapper">
                        <span class="blockquote">“</span>

                        <div class="team__img-wrapper">
                            <img src="<?= Url::to('../img/team/kostya_s.jpg')?>" alt="">
                        </div>
                    </div>

                    <blockquote class="team__blockquote">
                        <p><?= \Yii::t('general', 'Introducing now the SBA, it was not the same as in previous companies, I came to the interview. As our leader said Vadim Drozdovsky work in the SBA can realize your desires and dreams, in fact in my experience, and it happened.')?></p>
                        <p><?= \Yii::t('general', 'The company I perform the role of a marketer, my task is to bring the company as much as possible of actors, using a variety of promotional tools, the Internet and outdoor advertising. I am sure that our company is waiting for a successful future, because we are a young and ambitious team. We work in a very fast mode, and due to this we can test many hypotheses concerning the potential involvement of actors, employers search. We are faster than others find and select for yourself those algorithms actions that bring us the maximum result.')?></p>
                        <p><?= \Yii::t('general', 'Assign your life with marketing and advertising and to develop analytical and systemic thinking and creativity - it means to be settling marketer, because without these qualities simply can not do, especially in the online advertising, which constantly need to analyze a bunch of metrics to build algorithms promotion, writing dozens advertisements, and so on.')?></p>
                        <p><?= \Yii::t('general', 'His profession I can describe in a word "tested" test must constantly and ceaselessly, because the more advertising channels worked, banner designs, advertisements, the greater will be the understanding which channels bring the best possible return on investment.')?></p>
                        <p><?= \Yii::t('general', 'I like working in the SBA team, because we do not have the boring and sad people, all positive, set up for success and are ready at any time to turn off the mountains to achieve the desired results.')?></p>
                    </blockquote>
                    <cite class="team__cite"><?= \Yii::t('general', 'Konstantin Zhushman')?></cite>
                </article>


                <article class="team__item">
                    <div class="team__blockquote-wrapper">
                        <span class="blockquote">“</span>
                        <div class="team__img-wrapper">
                            <img src="<?= Url::to('../img/team/serega_s.jpg')?>" alt="">
                        </div>
                    </div>

                    <blockquote class="team__blockquote">
                        <p><?= \Yii::t('general', 'My acquaintance with the company SBA took place in the spring of 2016, when its director, and concurrently, a good friend of mine Vadim Drozdowski, founded this great company. Closer acquaintance took place in September, when I played the role of the applicant, and flew to the contract in Dubai. (Very cool deal !!!).')?></p>
                        <p><?= \Yii::t('general', 'Currently I work as a manager - is engaged in search of artists of all genres, and their subsequent departure to the contract.')?></p>
                        <p><?= \Yii::t('general', '№1 company in this field in Ukraine and the CIS, with a variety of missions around the world.')?></p>
                        <p><?= \Yii::t('general', 'The desire to grow, to reach new heights; communicability; optimism)')?></p>
                        <p><?= \Yii::t('general', 'Since I myself am a musician. the easiest to work with creative people. And since all people are creative (to varying degrees), work with each person in their own interest)')?></p>
                        <p><?= \Yii::t('general', 'Generalist. Job manager for SBA involves not only communication with diametrically different people (which already implies a knowledge of psychology bases, ability to analyze the human), and a basic knowledge of execution of various documents to work abroad, the constant analysis of the market.')?></p>
                        <p><?= \Yii::t('general', 'Of course I like! This work is very close to me in my primary profession musician, and I really like the excellent team led c Big Boss:)')?></p>
                    </blockquote>
                    <cite class="team__cite"><?= \Yii::t('general', 'Sergey Sharco')?></cite>
                </article>


                <article class="team__item">
                    <div class="team__blockquote-wrapper">
                        <span class="blockquote">“</span>
                        <div class="team__img-wrapper">
                            <img src="<?= Url::to('../img/team/lilya_s.jpg')?>" alt="">
                        </div>
                    </div>

                    <blockquote class="team__blockquote">
                        <p><?= \Yii::t('general', 'Once again, going to the job site, in search of normal operation manager or accountant (as I have a bachelor\'s degree in this specialty), I came across a special, creative proposal. Without hesitation, I called, and I was invited for an interview.')?></p>
                        <p><?= \Yii::t('general', 'The interview did not last long, with interesting issues, for example - what kind of music I like)). It impressed me very much! So I became a part of the SBA family.')?></p>
                        <p><?= \Yii::t('general', 'I began with the position of manager, but not the "manager" that you could imagine. It was not a chore, repeated day after day. Every day in front of me were new problems, problems which needed to find an individual approach. Over time, suggesting the concept of development, I headed remote management department.')?></p>
                        <p><?= \Yii::t('general', 'Our company is young, and is now at the stage of development. Ahead of us is only to conquer new peaks. Our team is driven by a single goal to which we are going to make sure step. Future developments of the company, of course, is in good hands of our head, who believes in his team and we believe in what we do. SBA - is not just a company, it\'s a lifestyle!')?></p>
                        <p><?= \Yii::t('general', "- Multi-tasking, you have to be ready for anything in the SBA, the most difficult and extraordinary tasks.<br>- Resistance to stress, you have to realize that everyone is different and everyone needs to find an individual approach.<br>- A sense of belonging to something intangible, that makes you and your company grow. Belief in yourself and in what you are doing.")?></p>
                        <p><?= \Yii::t('general', 'I just like to work with people. The result of a job well done - it\'s pretty actors, their gratitude and willingness to continue to cooperate. Give people the opportunity to do what they love - the whole point of our work')?></p>
                        <p><?= \Yii::t('general', 'A family. This word describes my department and our entire company. Each of the employees at any time may come to help or give advice. We help each other to grow in different directions, as our whole company consists of creative people. (I love you guys!)')?></p>
                        <p><?= \Yii::t('general', 'I think the paragraph above, I opened my attitude to the company. Again, the SBA - it\'s family, it\'s a lifestyle, not just an ordinary work you just work.')?></p>
                        <p><?= \Yii::t('general', 'Here you can develop as a person, as well as contribute to the development of their environment and the company as a whole!')?></p>
                    </blockquote>
                    <cite class="team__cite"><?= \Yii::t('general', 'Markunas Lily')?></cite>
                </article>


                <article class="team__item">
                    <div class="team__blockquote-wrapper">
                        <span class="blockquote">“</span>
                        <div class="team__img-wrapper">
                            <img src="<?= Url::to('../img/team/denis_s.jpg')?>" alt="">
                        </div>
                    </div>

                    <blockquote class="team__blockquote">
                        <p><?= \Yii::t('general', 'I was in search of work. Director Vadim Drozdovsky companies found my resume and asked me for an interview with other candidates. Internship passed, not all, and I\'m glad I was in the SBA team.')?></p>
                        <p><?= \Yii::t('general', 'The position was held by me - Manager recruitment in the service sector. Company SBA is committed to the growth and expansion of horizons, which is why we started as officially employ staff. I\'ve been searching, selection and recruitment of personnel for hotels around the world. I also supervise the distribution department, which promotes the popularization of the brand on different platforms.')?></p>
                        <p><?= \Yii::t('general', 'The future of our company outlines a sufficiently clear to me, both in the short and in the long term. For me personally, there is a specific problem which must be solved now, to influence the future of the company. This is primarily to promote the idea of ​​an official working in Europe, Asia and the United States for citizens of the CIS. People need to understand that it is possible traveling, make a lot of money easily and safely.')?></p>
                        <p><?= \Yii::t('general', 'For the success of the company need to have a sense of purpose, confidence and a constant desire for self-development. For my position, first of all important system mindset that allows you to select for only the best and most helpful staff, without wasting time on candidates who are not interested in or do not meet the criteria rabotodatelya.Tak also need a large share of creativity that allows you to constantly expand field operations and improve methods of selection.')?></p>
                        <p><?= \Yii::t('general', 'Not surprisingly, I like to work with the staff as my methods of recruiting, do well with the aim of recruiting, and are not suitable for finding artists. Interpreting the question for my scope, I like most of hotel staff to pick up the scope of the premium. Since there are only needed by professionals, which is always a pleasure to work with.')?></p>
                        <p><?= \Yii::t('general', 'Spotlight. My responsibilities include coverage (search) of candidates and conduct of the applicants to the desired goal - the dream!')?></p>
                        <p><?= \Yii::t('general', 'Of course, in this positive collective impossible to miss, it is impossible not committed to the success and goals. These people are simply doomed to success!')?></p>
                    </blockquote>
                    <cite class="team__cite"><?= \Yii::t('general', 'Troyanov Denis')?></cite>
                </article>


                <article class="team__item">
                    <div class="team__blockquote-wrapper">
                        <span class="blockquote">“</span>
                        <div class="team__img-wrapper">
                            <img src="<?= Url::to('../img/team/yana_s.jpg')?>" alt="">
                        </div>
                    </div>

                    <blockquote class="team__blockquote">
                        <p><?= \Yii::t('general', 'With the company I met online job search, open, interesting position described. Position Manager with top artists')?></p>
                        <p><?= \Yii::t('general', 'The successful agency, which ranks first in the ranking bukingovyh agencies, providing quality and reliable services, with a friendly attitude, and the agency that provides training, courses and even staging the show, the artists prepare for the show world and projects.')?></p>
                        <p><?= \Yii::t('general', '- The ability to manage their emotions (when you\'re perfect, the process takes place around you as quietly and smoothly)<br>- Short stated information<br>- Adaptation to innovation')?></p>
                        <p><?= \Yii::t('general', 'Dancers, staff')?></p>
                        <p><?= \Yii::t('general', 'Friend. The manager should be soft, flexible and reliable, always in touch with you, what would you could always count on him to discuss what is bothering you and consult.')?></p>
                        <p><?= \Yii::t('general', 'Yes, since all are very different, creative, unique, with its own vision of what is happening, but at the same time, all simple and sincere people that like to work comfortably and relax!')?></p>
                    </blockquote>
                    <cite class="team__cite"><?= \Yii::t('general', 'Kantemirova Yana')?></cite>
                </article>

            </div>
        </div>
    </div>
</section>


