<?php
$assets = "./assets/";
$url = "./";
$title = "Quize";
$keywords = "Quize";
$description = "Описание";

include $assets . "db/db.php";
include $url . "php/head.php";
include $url . "php/header.php";
?>

<form action="#" method="post" class="form">
   <input type="hidden" name="subject" value="Опрос | The Self" />
   <!--section 1 main-->
   <section class="screen screen--main active screen--full step--0">
      <!--header-->
      <header class="header">
         <div class="header__bottom">
            <div class="wrapp">
               <div class="logo">
                  <a href="https://www.salon-theself.ru/" target="_blank">
                     <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>svg/logo.svg" class="lazy" alt="" />
                  </a>
               </div>
               <div class="header__links">
                  <a href="#">Проезд Березовой рощи, д.12 м.ЦСКА</a><br>
                  <a href="tel:89057983000" class="color hover">8 (905) 798-30-00</a>
               </div>
            </div>
         </div>
      </header>
      <!--header end-->
      <div class="background filter--3" data-color="" data-image="<?php echo $assets; ?>img/s1_bg.jpg"></div>
      <div class="wrapp">

         <div class="row wrap ta--c va--c">
            <div class="col col--100 anim anim--bottom">
               <div class="titleBox ta--c">
                  <h1 class="large semi upper">
                     Как <span class="title italic">стресс</span> <br>
                     влияет на кожу <br>
                     и <span class="title italic">что с этим <br>
                        делать</span>
                  </h1>
               </div>
               <div class="forBtn ta--c">
                  <a class="button circle" onclick="step('1');">
                     <p>Узнать</p>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!--section step 1-->
   <section class="screen screen--full step step--1">
      <div class="header">
         <div class="header__bottom">
            <div class="wrapp">
               <div class="logo">
                  <a href="https://www.salon-theself.ru/" target="_blank">
                     <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>svg/logo.svg" class="lazy" alt="" />
                  </a>
               </div>
               <div class="button back" onclick="step('0');">
                  <p class="italic">Back</p>
               </div>
            </div>
         </div>
      </div>
      <div class="wrapp">
         <div class="row wrap ta--c va--c">
            <div class="col col--100 anim anim--bottom">
               <div class="titleBox ta--c">
                  <h5 class="reg">В косметологии <span class="title">The SELF</span> <br class="show_in_tablet">пр-д Березовой рощи, 12</h5>
                  <p class="subtitle gray">
                     У Вас есть возможность не только получить качественные <br>
                     косметологические услуги, <span class="color">но и уникальные методики массажей:</span>
                  </p>
               </div>
               <!--presentsList-->
               <div class="presentsList">
                  <div class="boss">
                     <div class="boss__image">
                        <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>img/boss.png" class="lazy" alt="" />
                        <div>
                           <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>svg/scobe.svg" class="lazy" alt="" />
                           <p class="reg f12">
                              Приглашаю&nbsp;Вас <br>
                              <span class="color">пройти&nbsp;опрос!</span>
                           </p>
                        </div>
                     </div>
                     <p class="reg f12">
                        Создатель проекта THE SELF <br>
                        <span class="color">Локтионова Марина</span>
                     </p>
                  </div>
                  <div class="presentsList__item">
                     <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>img/present1.jpg" class="lazy" alt="" />
                     <p class="h18 reg">Скульптурирование</p>
                  </div>
                  <div class="presentsList__item">
                     <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>img/present2.jpg" class="lazy" alt="" />
                     <p class="h18 reg">Буккальный&nbsp;массаж</p>
                  </div>
                  <div class="presentsList__item">
                     <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>img/present3.jpg" class="lazy" alt="" />
                     <p class="h18 reg">Сплит&nbsp;&ndash;&nbsp;массаж</p>
                  </div>
               </div>
               <!--presentsList end-->
               <div class="titleBox ta--c">
                  <p class="reg f18">При этом за ответы на опрос - <br class="show_in_tablet"><span class="f22 title__bold color">Вас ждут подарки и выгодные условия обслуживания.</span></p>
                  <h4 class="title gray">Что скажете? </h4>
               </div>
               <div class="forBtn ta--c">
                  <a class="button" onclick="step('2');">
                     <p>Ура, мне интересно. Давайте начнём!</p>
                     <svg viewBox="0 0 28 8" fill="none" xmlns="http://www.w3.org/2000/svg" class="del_in_mobil">
                        <path d="M27.3536 4.35355C27.5488 4.15829 27.5488 3.84171 27.3536 3.64645L24.1716 0.464466C23.9763 0.269204 23.6597 0.269204 23.4645 0.464466C23.2692 0.659728 23.2692 0.976311 23.4645 1.17157L26.2929 4L23.4645 6.82843C23.2692 7.02369 23.2692 7.34027 23.4645 7.53553C23.6597 7.7308 23.9763 7.7308 24.1716 7.53553L27.3536 4.35355ZM0 4.5H27V3.5H0V4.5Z" fill="#086E80" />
                     </svg>
                  </a><br>
                  <a href="https://www.salon-theself.ru/" class="link title__bold hover cant_halp">Не смогу вам помочь</a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!--section step 2-->
   <section class="screen screen--full step step--2">
      <div class="header">
         <div class="header__bottom">
            <div class="wrapp">
               <div class="logo"></div>
               <div class="button back" onclick="step('1');">
                  <p class="italic">Back</p>
               </div>
            </div>
         </div>
      </div>
      <div class="wrapp">
         <div class="row wrap ta--l va--c anim anim--bottom">

            <div class="col col--25">
               <div class="image">
                  <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>img/teem.jpg" class="lazy" alt="">
               </div>
               <p class="reg f16 color">Марина Викторовна Локтионова</p>
            </div>

            <div class="col col--75">
               <div class="text">
                  <p class="reg f20 gray">Ответьте на несколько вопросов о своей коже?</p>
                  <p class="f18">
                     И получите в <span class="color bold">ПОДАРОК</span> бесплатную консультацию по массажу, который поможет <br class="del_in320">
                     <span class="color title">“увидеть себя на 10 лет моложе”</span> и специальные условия на 1-ю процедуру массажа
                  </p>
                  <p class="f16 green">
                     Массаж от основателя пространства красоты The SELF и косметолога с высшим <br class="del_in320">
                     медицинским образованием - Марины Викторовны Локтионовой.
                  </p>
               </div>

               <h6 class="reg">Что Вас беспокоит больше всего?</h6>
               <input type="hidden" name="question1_text" value="Что Вас беспокоит больше всего?" />
               <!--inputs-->
               <div class="inputs">
                  <div class="inputs__inner col--3">
                     <label class="label">
                        <input type="checkbox" name="question1a" value="Усталый вид">
                        <span>Усталый вид</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--3">
                     <label class="label">
                        <input type="checkbox" name="question1b" value="Тусклый цвет лица">
                        <span>Тусклый цвет лица</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--3">
                     <label class="label">
                        <input type="checkbox" name="question1c" value="Отечность">
                        <span>Отечность</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--3">
                     <label class="label">
                        <input type="checkbox" name="question1d" value="Темные круги">
                        <span>Темные круги</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--3">
                     <label class="label">
                        <input type="checkbox" name="question1e" value="Морщины">
                        <span>Морщины</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--3">
                     <label class="label">
                        <input type="checkbox" name="question1f" value="Слабый тонус мышц">
                        <span>Слабый тонус мышц</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--3">
                     <label class="label">
                        <input type="checkbox" name="question1g" value="Заломы">
                        <span>Заломы</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--3">
                     <label class="label">
                        <input type="checkbox" name="question1h" value="Возрастные изменения">
                        <span>Возрастные изменения</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--3">
                     <label class="label">
                        <input type="checkbox" name="question1i" value="Сутулость">
                        <span>Сутулость</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--3">
                     <label class="label">
                        <input type="checkbox" name="question1j" value="Другое">
                        <span>Другое</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--3">
                     <div class="button full" onclick="step('3');">
                        <p>Далее</p>
                        <svg viewBox="0 0 28 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M27.3536 4.35355C27.5488 4.15829 27.5488 3.84171 27.3536 3.64645L24.1716 0.464466C23.9763 0.269204 23.6597 0.269204 23.4645 0.464466C23.2692 0.659728 23.2692 0.976311 23.4645 1.17157L26.2929 4L23.4645 6.82843C23.2692 7.02369 23.2692 7.34027 23.4645 7.53553C23.6597 7.7308 23.9763 7.7308 24.1716 7.53553L27.3536 4.35355ZM0 4.5H27V3.5H0V4.5Z" fill="#086E80" />
                        </svg>
                     </div>
                     <div class="hiddenBox"></div>
                  </div>
               </div>

            </div>

         </div>
      </div>
   </section>

   <!--section step 3-->
   <section class="screen screen--full step step--3">
      <div class="header">
         <div class="header__bottom">
            <div class="wrapp">
               <div class="logo"></div>
               <div class="button back" onclick="step('2');">
                  <p class="italic">Back</p>
               </div>
            </div>
         </div>
      </div>
      <div class="wrapp">
         <div class="row wrap ta--l anim anim--bottom">
            <div class="col col--40">
               <div class="before-after">
                  <div class="before-after__inner">
                     <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>img/before1.jpg" class="lazy" alt="" />
                  </div>
                  <div class="before-after__inner">
                     <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>img/before2.jpg" class="lazy" alt="" />
                  </div>
                  <div class="before-after__inner">
                     <div class="text">
                        <p class="title color">До/После<br>массажав<br>THE SELF</p>
                     </div>
                  </div>
                  <div class="before-after__inner">
                     <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>img/before3.jpg" class="lazy" alt="" />
                  </div>
               </div>
            </div>
            <div class="col col--60">
               <h6 class="reg">Обозначьте особенности вашей кожи?</h6>
               <input type="hidden" name="question2_text" value="Обозначьте особенности вашей кожи?" />
               <!--inputs-->
               <div class="inputs mw--550">
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="checkbox" name="question2a" value="Чувствительность">
                        <span>Чувствительность</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="checkbox" name="question2b" value="Шелушение">
                        <span>Шелушение</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="checkbox" name="question2c" value="Пигментные пятна">
                        <span>Пигментные пятна</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="checkbox" name="question2d" value="Высыпания">
                        <span>Высыпания</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="checkbox" name="question2e" value="Рубчики">
                        <span>Рубчики</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="checkbox" name="question2f" value="Комедоны">
                        <span>Комедоны</span>
                     </label>
                  </div>
               </div>
               <div class="inputs mw--550">
                  <div class="inputs__inner col--2">
                     <div class="button full" onclick="step('4');">
                        <p>Далее</p>
                        <svg viewBox="0 0 28 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M27.3536 4.35355C27.5488 4.15829 27.5488 3.84171 27.3536 3.64645L24.1716 0.464466C23.9763 0.269204 23.6597 0.269204 23.4645 0.464466C23.2692 0.659728 23.2692 0.976311 23.4645 1.17157L26.2929 4L23.4645 6.82843C23.2692 7.02369 23.2692 7.34027 23.4645 7.53553C23.6597 7.7308 23.9763 7.7308 24.1716 7.53553L27.3536 4.35355ZM0 4.5H27V3.5H0V4.5Z" fill="#086E80" />
                        </svg>
                     </div>
                     <div class="hiddenBox"></div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </section>

   <!--section step 4-->
   <section class="screen screen--full step step--4">
      <div class="header">
         <div class="header__bottom">
            <div class="wrapp">
               <div class="logo"></div>
               <div class="button back" onclick="step('3');">
                  <p class="italic">Back</p>
               </div>
            </div>
         </div>
      </div>
      <div class="wrapp">
         <div class="row wrap ta--l anim anim--bottom">
            <div class="col col--40">
               <div class="poster">
                  <div class="background filter--10" data-color="" data-image="<?php echo $assets; ?>img/step_4.jpg"></div>
                  <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>svg/logo.svg" class="lazy" alt="" />
               </div>
            </div>
            <div class="col col--60">
               <h6 class="reg">Как Вы сейчас ухаживаете за лицом?</h6>
               <input type="hidden" name="question3_text" value="Как Вы сейчас ухаживаете за лицом?" />
               <!--inputs-->
               <div class="inputs mw--550">
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="checkbox" name="question3a" value=" Базовый уход утром">
                        <span>Базовый уход утром</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="checkbox" name="question3b" value="Базовый уход вечером">
                        <span>Базовый уход вечером</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="checkbox" name="question3c" value="Маски или массажи">
                        <span>Маски или массажи</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="checkbox" name="question3d" value="Бьюти - девайсы">
                        <span>Бьюти - девайсы</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="checkbox" name="question3e" value="Фейс - фитнес">
                        <span>Фейс - фитнес</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="checkbox" name="question3f" value="Другое">
                        <span>Другое</span>
                     </label>
                  </div>
               </div>
               <div class="inputs mw--550">
                  <div class="inputs__inner col--2">
                     <div class="button full" onclick="step('5');">
                        <p>Далее</p>
                        <svg viewBox="0 0 28 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M27.3536 4.35355C27.5488 4.15829 27.5488 3.84171 27.3536 3.64645L24.1716 0.464466C23.9763 0.269204 23.6597 0.269204 23.4645 0.464466C23.2692 0.659728 23.2692 0.976311 23.4645 1.17157L26.2929 4L23.4645 6.82843C23.2692 7.02369 23.2692 7.34027 23.4645 7.53553C23.6597 7.7308 23.9763 7.7308 24.1716 7.53553L27.3536 4.35355ZM0 4.5H27V3.5H0V4.5Z" fill="#086E80" />
                        </svg>
                     </div>
                     <div class="hiddenBox"></div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </section>

   <!--section step 5-->
   <section class="screen screen--full step step--5">
      <div class="header">
         <div class="header__bottom">
            <div class="wrapp">
               <div class="logo"></div>
               <div class="button back" onclick="step('4');">
                  <p class="italic">Back</p>
               </div>
            </div>
         </div>
      </div>
      <div class="wrapp">
         <div class="row wrap ta--l anim anim--bottom">
            <div class="col col--40">
               <div class="poster">
                  <div class="background filter--10" data-color="" data-image="<?php echo $assets; ?>img/step_5.jpg"></div>
                  <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>svg/logo.svg" class="lazy" alt="" />
               </div>
            </div>
            <div class="col col--60">
               <h6 class="reg">Сколько вам лет?</h6>
               <input type="hidden" name="question4_text" value="Сколько вам лет?" />
               <!--inputs-->
               <div class="inputs mw--310">
                  <div class="inputs__inner col--1">
                     <label class="label">
                        <input type="radio" name="question4" value="25-35">
                        <span>25-35</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--1">
                     <label class="label">
                        <input type="radio" name="question4" value="35-45">
                        <span>35-45</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--1">
                     <label class="label">
                        <input type="radio" name="question4" value="45-55">
                        <span>45-55</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--1">
                     <label class="label">
                        <input type="radio" name="question4" value="Старше 55 лет">
                        <span>Старше 55 лет</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--1">
                     <div class="button full" onclick="step('6');">
                        <p>Далее</p>
                        <svg viewBox="0 0 28 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M27.3536 4.35355C27.5488 4.15829 27.5488 3.84171 27.3536 3.64645L24.1716 0.464466C23.9763 0.269204 23.6597 0.269204 23.4645 0.464466C23.2692 0.659728 23.2692 0.976311 23.4645 1.17157L26.2929 4L23.4645 6.82843C23.2692 7.02369 23.2692 7.34027 23.4645 7.53553C23.6597 7.7308 23.9763 7.7308 24.1716 7.53553L27.3536 4.35355ZM0 4.5H27V3.5H0V4.5Z" fill="#086E80" />
                        </svg>
                     </div>
                     <div class="hiddenBox"></div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </section>

   <!--section step 6-->
   <section class="screen screen--full step step--6">
      <div class="header">
         <div class="header__bottom">
            <div class="wrapp">
               <div class="logo"></div>
               <div class="button back" onclick="step('5');">
                  <p class="italic">Back</p>
               </div>
            </div>
         </div>
      </div>
      <div class="wrapp">
         <div class="row wrap ta--l va--c anim anim--bottom">
            <div class="col col--40">
               <div class="poster">
                  <div class="background filter--10" data-color="" data-image="<?php echo $assets; ?>img/step_6.jpg"></div>
                  <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>svg/logo.svg" class="lazy" alt="" />
               </div>
            </div>
            <div class="col col--60">
               <h6 class="reg">Какого результата хотите достичь с помощью массажа?</h6>
               <input type="hidden" name="question5_text" value="Какого результата хотите достичь с помощью массажа?" />
               <!--inputs-->
               <div class="inputs mw--640">
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="radio" name="question5" value="Общее омоложение">
                        <span>Общее омоложение</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="radio" name="question5" value="Свежий цвет лица">
                        <span>Свежий цвет лица</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="radio" name="question5" value="Подтянутый овал лица">
                        <span>Подтянутый овал лица</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="radio" name="question5" value="Устранение отеков">
                        <span>Устранение отеков</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="radio" name="question5" value="Открытый взгляд">
                        <span>Открытый взгляд</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="radio" name="question5" value="Снятие мышечных зажимов">
                        <span>Снятие мышечных зажимов</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="radio" name="question5" value="Уменьшение морщин и заломов">
                        <span>Уменьшение морщин и заломов</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="radio" name="question5" value="Улучшение тонуса кожи">
                        <span>Улучшение тонуса кожи</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--2">
                     <label class="label">
                        <input type="radio" name="question5" value="Лифтинг эффект">
                        <span>Лифтинг эффект</span>
                     </label>
                  </div>
               </div>
               <div class="inputs mw--640">
                  <div class="inputs__inner col--3">
                     <div class="button full" onclick="step('7');">
                        <p>Далее</p>
                        <svg viewBox="0 0 28 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M27.3536 4.35355C27.5488 4.15829 27.5488 3.84171 27.3536 3.64645L24.1716 0.464466C23.9763 0.269204 23.6597 0.269204 23.4645 0.464466C23.2692 0.659728 23.2692 0.976311 23.4645 1.17157L26.2929 4L23.4645 6.82843C23.2692 7.02369 23.2692 7.34027 23.4645 7.53553C23.6597 7.7308 23.9763 7.7308 24.1716 7.53553L27.3536 4.35355ZM0 4.5H27V3.5H0V4.5Z" fill="#086E80" />
                        </svg>
                     </div>
                     <div class="hiddenBox"></div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </section>

   <!--section step 7-->
   <section class="screen screen--full step step--7">
      <div class="header">
         <div class="header__bottom">
            <div class="wrapp">
               <div class="logo"></div>
               <div class="button back" onclick="step('6');">
                  <p class="italic">Back</p>
               </div>
            </div>
         </div>
      </div>
      <div class="wrapp">
         <div class="row wrap ta--l anim anim--bottom">
            <div class="col col--40">
               <div class="poster">
                  <div class="background filter--10" data-color="" data-image="<?php echo $assets; ?>img/step_7.jpg"></div>
                  <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>svg/logo.svg" class="lazy" alt="" />
               </div>
            </div>
            <div class="col col--60">
               <h6 class="reg">Вы готовы терпеть боль во время процедуры?</h6>
               <input type="hidden" name="question6_text" value="Вы готовы терпеть боль во время процедуры?" />
               <!--inputs-->
               <div class="inputs mw--310">
                  <div class="inputs__inner col--1">
                     <label class="label">
                        <input type="radio" name="question6" value="Да, легко!">
                        <span>Да, легко!</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--1">
                     <label class="label">
                        <input type="radio" name="question6" value="Нет, категорически">
                        <span>Нет, категорически</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--1">
                     <label class="label">
                        <input type="radio" name="question6" value="Если надо, то буду">
                        <span>Если надо, то буду</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--1">
                     <label class="label">
                        <input type="radio" name="question6" value="Не знаю">
                        <span>Не знаю</span>
                     </label>
                  </div>

                  <div class="inputs__inner col--1">
                     <div class="button full" onclick="step('8');">
                        <p>Далее</p>
                        <svg viewBox="0 0 28 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M27.3536 4.35355C27.5488 4.15829 27.5488 3.84171 27.3536 3.64645L24.1716 0.464466C23.9763 0.269204 23.6597 0.269204 23.4645 0.464466C23.2692 0.659728 23.2692 0.976311 23.4645 1.17157L26.2929 4L23.4645 6.82843C23.2692 7.02369 23.2692 7.34027 23.4645 7.53553C23.6597 7.7308 23.9763 7.7308 24.1716 7.53553L27.3536 4.35355ZM0 4.5H27V3.5H0V4.5Z" fill="#086E80" />
                        </svg>
                     </div>
                     <div class="hiddenBox"></div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </section>

   <!--section step 8-->
   <section class="screen screen--full step step--8">
      <div class="header">
         <div class="header__bottom">
            <div class="wrapp">
               <div class="logo"></div>
               <div class="button back" onclick="step('7');">
                  <p class="italic">Back</p>
               </div>
            </div>
         </div>
      </div>
      <div class="wrapp">
         <div class="row wrap ta--l anim anim--bottom">
            <div class="col col--40">
               <div class="poster">
                  <div class="background filter--10" data-color="" data-image="<?php echo $assets; ?>img/step_8.jpg"></div>
                  <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>svg/logo.svg" class="lazy" alt="" />
               </div>
            </div>
            <div class="col col--60">
               <h6 class="reg">Как много вы спите?</h6>
               <input type="hidden" name="question7_text" value="Как много вы спите?" />
               <!--inputs-->
               <div class="inputs mw--450">
                  <div class="inputs__inner col--1">
                     <label class="label">
                        <input type="radio" name="question7" value="Когда как">
                        <span>Когда как</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--1">
                     <label class="label">
                        <input type="radio" name="question7" value="В среднем пять-шесть часов в сутки">
                        <span>В среднем пять-шесть часов в сутки</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--1">
                     <label class="label">
                        <input type="radio" name="question7" value="Стараюсь не меньше 8 часов">
                        <span>Стараюсь не меньше 8 часов</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--1">
                     <label class="label">
                        <input type="radio" name="question7" value="Больше восьми часов">
                        <span>Больше восьми часов</span>
                     </label>
                  </div>
                  <div class="inputs__inner col--1">
                     <div class="button" onclick="step('9');">
                        <p>Завершить опрос</p>
                        <svg viewBox="0 0 28 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M27.3536 4.35355C27.5488 4.15829 27.5488 3.84171 27.3536 3.64645L24.1716 0.464466C23.9763 0.269204 23.6597 0.269204 23.4645 0.464466C23.2692 0.659728 23.2692 0.976311 23.4645 1.17157L26.2929 4L23.4645 6.82843C23.2692 7.02369 23.2692 7.34027 23.4645 7.53553C23.6597 7.7308 23.9763 7.7308 24.1716 7.53553L27.3536 4.35355ZM0 4.5H27V3.5H0V4.5Z" fill="#086E80" />
                        </svg>
                     </div>
                     <div class="hiddenBox"></div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </section>

   <!--section step 9 PRESENTS-->
   <section class="screen screen--full step step--9">
      <div class="header">
         <div class="header__bottom">
            <div class="wrapp">
               <div class="logo"></div>
               <div class="button back" onclick="step('8');">
                  <p class="italic">Back</p>
               </div>
            </div>
         </div>
      </div>
      <div class="wrapp ta--c">
         <!--PRESENT 1-->
         <div class="presentWrapp presentWrapp--1">
            <h5 class="reg upper">Опрос завершен!</h5>
            <div class="finalPresent">
               <h5 class="reg color">Вам подойдет:</h5>
               <div class="image">
                  <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>img/present1.jpg" class="lazy" alt="" />
               </div>
               <h6 class="reg white">Скульптурирование</h6>
            </div>
            <div class="text">
               <p class="f18">За вами будет закреплена </p>
               <h3 class="color semi">30% СКИДКА</h3>
               <p class="f18">на первый сеанс к косметологу Локтионовой Марине Викторовне</p>
               <p class="f20 semi green green--big">Скульптурный массаж <br class="show_in_mobil">(45 мин) = 3500 руб.</p>
               <p class="f20 semi">вместо 5000 руб.</p>
               <h5 class="semi color">+ Бесплатная консультация косметолога </h5>
            </div>
         </div>
         <!--PRESENT 2-->
         <div class="presentWrapp presentWrapp--2">
            <h5 class="reg upper">Опрос завершен!</h5>
            <div class="finalPresent">
               <h5 class="reg color">Вам подойдет:</h5>
               <div class="image">
                  <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>img/present2.jpg" class="lazy" alt="" />
               </div>
               <h6 class="reg white">Буккальный массаж</h6>
            </div>
            <div class="text">
               <p class="f18">За вами будет закреплена </p>
               <h3 class="color semi">30% СКИДКА</h3>
               <p class="f18">на первый сеанс к косметологу Локтионовой Марине Викторовне</p>
               <p class="f20 semi green green--big">Скульптурно-Буккальный массаж <br class="show_in_mobil">(45 мин) = 4200 руб.</p>
               <p class="f20 semi">вместо 6000 руб.</p>
               <h5 class="semi color">+ Бесплатная консультация косметолога </h5>
            </div>
         </div>
         <!--PRESENT 3-->
         <div class="presentWrapp presentWrapp--3">
            <h5 class="reg upper">Опрос завершен!</h5>
            <div class="finalPresent">
               <h5 class="reg color">Вам подойдет:</h5>
               <div class="image">
                  <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>img/present3.jpg" class="lazy" alt="" />
               </div>
               <h6 class="reg white">Сплит-массаж</h6>
            </div>
            <div class="text">
               <p class="f18">За вами будет закреплена </p>
               <h3 class="color semi">30% СКИДКА</h3>
               <p class="f18">на первый сеанс к косметологу Локтионовой Марине Викторовне</p>
               <p class="f20 semi green green--big">Премиальный Сплит-массаж <br class="show_in_mobil">(60 мин) = 4200 руб.</p>
               <p class="f20 semi">вместо 6000 руб.</p>
               <h5 class="semi color">+ Бесплатная консультация косметолога </h5>
            </div>
         </div>
      </div>
      <div class="lastStep" onclick="step('10');">
         <p class="f20 title">
            Последний шаг
            <svg viewBox="0 0 148 8" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M147.354 4.35355C147.549 4.15829 147.549 3.84171 147.354 3.64645L144.172 0.464466C143.976 0.269204 143.66 0.269204 143.464 0.464466C143.269 0.659728 143.269 0.976311 143.464 1.17157L146.293 4L143.464 6.82843C143.269 7.02369 143.269 7.34027 143.464 7.53553C143.66 7.7308 143.976 7.7308 144.172 7.53553L147.354 4.35355ZM0 4.5H147V3.5H0V4.5Z" />
            </svg>
         </p>
      </div>
   </section>

   <!--section step 10-->
   <section class="screen screen--full step step--10">
      <div class="header">
         <div class="header__bottom">
            <div class="wrapp">
               <div class="logo"></div>
               <a href="https://www.salon-theself.ru/" class="button back">
                  <p class="italic">Home <br class="show_in_tablet">page</p>
               </a>
            </div>
         </div>
      </div>
      <div class="wrapp ta--c">
         <div class="text">
            <p class="f27 reg">
               Остался последний шаг<br>
               <span class="gray">Заполните поля ниже, чтобы получить</span>
            </p>
            <h2 class="title__bold color">СКИДКУ И ПОДАРОК!</h2>
            <div class="finalForm">
               <div class="inputs mw--550">
                  <div class="inputs__inner">
                     <input type="text" name="phone" class="popup__input required" placeholder="Телефон">
                  </div>
                  <input type="hidden" name="present" class="present_value" value="" />
                  <div class="inputs__inner">
                     <button class="button full">
                        <span>Отправить</span>
                     </button>
                     <div class="hiddenBox hidden"></div>
                  </div>
                  <div class="inputs__inner">
                     <label class="label spacial">
                        <input type="checkbox" name="agree" checked value="Соглашаюсь на обработку персональных данных">
                        <span>Соглашаюсь на обработку персональных данных</span>
                     </label>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--footer-->
      <footer class="footer">
         <div class="wrapp">
            <div class="row wrap ta--space va--c">
               <div class="col col--3">
                  <div class="contacts ta--l">
                     <span class="f18">Запись:</span>
                     <a href="https://wa.me/79057983000" target="_blank">
                        <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>svg/watsup.svg" alt="" class="lazy icon" />
                     </a>
                     <!--
                     <a href="https://t.me/mirasovdev" target="_blank">
                        <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>svg/telegram.svg" alt="" class="lazy icon" />
                     </a>
                     -->
                     <a href="tel:89057983000" class="color hover f19 semi">8 (905) 798-30-00</a>
                  </div>
               </div>
               <div class="col col--3">
                  <div class="contacts ta--c">
                     <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>svg/metro.svg" alt="" class="lazy" />
                     <span class="f19">м.ЦСКА, ЖК Корона</span>
                  </div>
               </div>
               <div class="col col--3">
                  <div class="contacts ta--r">
                     <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>svg/pin.svg" alt="" class="lazy" />
                     <span class="f19">Березовой рощи пр-д, 12</span>
                  </div>
               </div>
            </div>
            <div class="row wrap ta--space va--c">
               <div class="col col--50">
                  <div class="contacts ta--l">
                     <span class="f16 gray">Работаем каждый день с 10:00 до 21:00</span>
                  </div>
               </div>
               <div class="col col--50">
                  <div class="contacts ta--r">
                     <span class="f16">Дизайн и разработка: <a href="https://beauty-alliance.ru/" target="_blank" class="color hover">Beauty Alliance</a></span>
                  </div>
               </div>
            </div>
         </div>
      </footer>
   </section>
</form>

<?php
include $url . "php/footer.php";
include $url . "php/popups.php";
include $url . "php/foot.php";
?>