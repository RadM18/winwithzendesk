<? include('connect.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>zendesk</title>
    <link rel="stylesheet" href="css/style.css?v=3">
    <link rel="stylesheet" href="css/responsive.css?v=3">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="js/scripts.js?v=3"></script>
    
<script src="js/DragObject.js"></script>
<script src="js/DropTarget.js"></script>
<script src="js/dragMaster.js"></script>
<script src="js/helpers.js"></script>

<script src="js/wow.js"></script>
</head>
<body>
    <div class="vertical-blocked">
        <div class="blocked-logo">
            <img src="images/blocked-logo.svg" alt="">
        </div>
        <div class="blocked-dialog">
            Поверните, пожалуйста, <br>
ваше устройство в горизонтальное положение
        </div>
        <div class="blocked-man">
            <img src="images/blocked-man.png" alt="">
        </div>
        <div class="blocked-line-2"></div>
        <div class="blocked-line-1"></div>
    </div>
    <div class="header">
        <div class="logo">
            <img src="images/logo.svg" alt="">
        </div>
    </div>
    <div class="step active" id="step-1">
        
        <div class="main clear">
            <div class="impression wow fadeInLeft">
                <div class="impression-text">
                    Благодаря Zendesk <br>
                    клиент получает <br>
                    самые лучшие <br>
                    впечатления
                </div>
                <div class="impression-btn hvr-back-pulse " onclick="new Audio('sound/ball.mp3').play();">
                    Получить впечатления
                </div>
            </div>
            <div class="first-man wow fadeInRight">
                <div class="first-man-img">
                    <img src="images/first-man.png" alt="">
                </div>
            </div>

        </div>
        <div class="main-bg  wow fadeInUp"></div>
        <div class="ball wow fadeIn">
            <img src="images/ball.png" alt="">
        </div>
        <div class="pop-up">
            <form method="post">
                <input type="text" placeholder="Фамилия" name="surname" id="surname" required>
                <input type="submit" value="START" onclick="new Audio('sound/start.mp3').play();">
            </form>
        </div>
    </div>
    <div class="step " id="step-2">
        <div class="main clear">
            <div class="step-2-title">
                Привет! На связи Zendesk!
            </div>
        </div>
        <div class="main-bg clear">
            <div class="game">
                <div class="game-title">
                    Мы приготовили для вас интересную игру, <br>
в конце которой вас ждёт подарок!
                </div>
                <div class="personages clear" id="dragObjects">
                    <div class="personage personage-1">
                        <div class="personage-bg"></div>
                        <div class="personage-item "><img src="images/personage-1.png" alt="" class="personage-1-img draggable"></div>
                    </div>
                    <div class="personage personage-2">
                        <div class="personage-bg"></div>
                        <div class="personage-item "><img src="images/personage-2.png" alt="" class="personage-2-img draggable"></div>
                    </div>
                    <div class="personage personage-3">
                        <div class="personage-bg"></div>
                        <div class="personage-item"><img src="images/personage-3.png" alt="" class="personage-3-img draggable"></div>
                    </div>
                </div>
                <div class="game-text">
                    Выберите персонажа и <br>поместите его на поле
                </div>

            </div>
            <div class="field">
                <div class="count">
                    <div class="count-num">
                        <span>0</span>
                        <span class="sep">:</span>
                        <span>0</span>
                    </div>
                    <div class="start-btn" onclick="new Audio('sound/start.mp3').play();">
                        START
                    </div>
                </div>
                <div class="clear"></div>
                <div class="field-img droppable" >
                    <img src="images/field.png" alt="" id="trash">
                </div>
            </div>
        </div>
        <script>
         onload = function() {
             var dragObjects = document.getElementById('dragObjects').getElementsByTagName('img')
             for(var i=0; i<dragObjects.length; i++) {
                 new DragObject(dragObjects[i])
             }
             
             new DropTarget(document.getElementById('trash'))
             
         }
      </script>
    </div>
    <div class="step " id="step-3">
       
        <div class="captain">
            <img src="images/captain-1.svg" alt="">
        </div>
        <div class="cap-vs-chaos">
            
        </div>
        <div class="chaos">
            <img src="images/chaos.svg" alt="">
        </div>
        <div class="next-step to-step-4"></div>
    </div>
    
    <div class="step " id="step-4">
        <div class="captain">
            <img src="images/captain-1.svg" alt="">
        </div>
        <div class="cap-vs-chaos">
            Привет, я капитан команды Zendesk.<br>
Перед нами важная задача — вывести ваш бизнес на новый уровень. Мы разработали отличное решение, которое внесет чуточку дзенского спокойствия в хаотичный мир поддержки клиентов. Но перед этим нам нужно победить капитана команды Хаоса.
        </div>
        <div class="chaos">
            <img src="images/chaos.svg" alt="">
        </div>
        <div class="next-step to-step-5"></div>
    </div>
    
    <div class="step" id="step-5">
       <div class="captain">
            <img src="images/captain-1.svg" alt="">
        </div>
        <div class="cap-vs-chaos">
            Не тут – то было, жалкие неудачники! <br>
Всю свою жизнь я положил на то, чтобы сеять хаос, <br>
и поддержка клиентов – это то, что я хочу разрушить <br>
и погубить ваш бизнес!
        </div>
        <div class="chaos">
            <img src="images/chaos.svg" alt="">
        </div>
        <div class="next-step to-step-6"></div>
    </div>
    
    <div class="step " id="step-6">
       <div class="captain">
            <img src="images/captain-1.svg" alt="">
        </div>
        
        <div class="chaos">
            <img src="images/chaos.svg" alt="">
        </div>
        <div class="next-step to-step-7"></div>
    </div>
    
    <div class="step " id="step-7">
        <div class="step-7-count">
            ZENDESK 0:0 CHAOS
        </div>
        <div class="main clear">
            <div class="step-7-title">
                Игра 1
            </div>
            <div class="step-7-text">
                Футбол – это командная игра, а команда – залог успеха. <br>
Zendesk – это ваш успех, который раскрывается в продуктах компании.
            </div>
            <div class="step-7-text">
                <span>
                    Задача этой игры выставить игроков на поле <br>
                    в соответствии с тактикой 7х7!
                </span>
            </div>
        </div>
        <div class="main-bg">
            <div class="game-2">
                <div class="team" id="team">
                    <div class="team-item team-item-1">
                        <div class="team-img">
                        <div class="hover-info"><div class="close-hover"><i class="fa fa-times" aria-hidden="true"></i></div>
                           Zendesk Support — простая и надежная система отслеживания, приоритизации и выполнения тикетов, поступающих в службу поддержки клиентов. В Support все операции поддержки сосредоточены в едином центре, благодаря чему общение с клиентами становится беспрепятственным, персонально направленным и эффективным: агенты начинают работать производительнее, а клиенты остаются довольны.
                            </div>
                        
                        <img src="images/game-1.svg" alt="" class="draggable"></div>
                    </div>
                    <div class="team-item team-item-2">
                        <div class="team-img">
                            <div class="hover-info"><div class="close-hover"><i class="fa fa-times" aria-hidden="true"></i></div>
                                Chat позволяет клиентам быстро получить информацию, поговорив с теми, кто им поможет. С помощью Zendesk Chat и Message также можно активно привлекать клиентов в реальном времени и с учетом ситуации, уделяя им внимание, которого они заслуживают.
                            </div>
                        <img src="images/game-2.svg" alt="" class="draggable"></div>
                    </div>
                    <div class="team-item team-item-3">
                        <div class="team-img">
                            <div class="hover-info"><div class="close-hover"><i class="fa fa-times" aria-hidden="true"></i></div>Explore: самые лучшие впечатления клиент получает тогда, когда они подкреплены данными. В Zendesk Explore вы получаете мгновенный доступ к важным аналитическим данным клиентов, что позволяет глубже понять их самих и их бизнес.</div>
                        
                        <img src="images/game-3.svg" alt="" class="draggable"></div>
                    </div>
                    <div class="team-item team-item-4">
                        <div class="team-img">
                        <div class="hover-info"><div class="close-hover"><i class="fa fa-times" aria-hidden="true"></i></div>
                            Zendesk Talk позволяет агентам легко и эффективно помогать клиентам по телефону в рамках общей омниканальной системы поддержки.
                        </div>
                        <img src="images/game-4.svg" alt="" class="draggable"></div>
                    </div>
                    <div class="team-item team-item-5">
                        <div class="team-img">
                            <div class="hover-info"><div class="close-hover"><i class="fa fa-times" aria-hidden="true"></i></div>
                                Zendesk Connect: в вашей службе поддержки лучше всего знают, что нужно клиентам, чего они хотят и ожидают. Zendesk Connect использует эту информацию и создает оптимальную обстановку для каждого клиента, что позволяет оптимизировать общение по всем каналам, давая клиентам меньше поводов просить о помощи, а вам — больше возможностей предложить ее.


                            </div>
                        <img src="images/game-5.svg" alt="" class="draggable"></div>
                    </div>
                    <div class="team-item team-item-6">
                        <div class="team-img">
                        <div class="hover-info"><div class="close-hover"><i class="fa fa-times" aria-hidden="true"></i></div>
                            Guide позволяет накопить базу знаний, чтобы клиенты могли самостоятельно решать вопросы — многие из них предпочитают именно такой способ. Это полезно и для самой компании — Zendesk Guide использует технологии умного самообслуживания, позволяющие компаниям уменьшать количество тикетов, сокращать расходы на поддержку клиентов, одновременно повышая ее качество. Среди таких инструментов особо хотим отметить Answer Bot с искусственным интеллектом.
                        </div>
                        <img src="images/game-6.svg" alt="" class="draggable"></div>
                    </div>
                    <div class="team-item team-item-7">
                        <div class="team-img">
                        <div class="hover-info"><div class="close-hover"><i class="fa fa-times" aria-hidden="true"></i></div>
                            Zendesk Suite предлагает все необходимое, чтобы разговоры с клиентами беспрепятственно перетекали из канала в канал, благодаря чему создается оптимальная обстановка для бизнеса и клиентов.


                        </div>
                        <img src="images/game-7.svg" alt="" class="draggable"></div>
                    </div>
                </div>
                <div class="field-2">
                    <div id="field">
                        <img src="images/field-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <script>
        /*
        onload = function() {
             //var dragObjects = document.getElementById('team').getElementsByTagName('img')
             var dragObjects = document.getElementById('team').getElementsByClassName('team-img')
             for(var i=0; i<dragObjects.length; i++) {
                 new DragObject(dragObjects[i])
             }
             
             new DropTarget(document.getElementById('field'))
             
         } */ 
      </script>
        
        
    <div class="step " id="step-8">
        <div class="step-8-count">
            ZENDESK 1:0 CHAOS
        </div>
        <div class="main clear">
            <div class="step-8-title">
                Игра 2
            </div>
            <div class="step-8-text">
                Забей мяч в ворота!
            </div>
            
        </div>
        <div class="main-bg">
            <div class="game-3 to-step-9">
                <img src="images/field3.png" alt="">
                <img src="images/ball.png" alt="" class="game-3-ball">
            </div>
        </div>
    </div>
    <div class="step" id="step-9">
        <div class="step-8-count">
            ZENDESK 1:0 CHAOS
        </div>
        <div class="main clear">
            <div class="step-9-title">
                Игра 2
            </div>
            <div class="step-9-text">
                Забей мяч в ворота!
            </div>
            <div class="game-3-man">
                <img src="images/game-3-man.png" alt="">
            </div>
            <div class="game-3-text">
                <div class="game-3-text-inner">
                    Мы понимаем — вы вложили время и деньги в свои любимые инструменты. Zendesk отлично интегрируется с ними. Кроме того, мы предлагаем API и SDK для удобного создания приложений на нашей гибкой платформе. Умение взаимодействовать — основа вашей победы над хаосом. Приведите своих игроков к воротам противника, кликая по точкам на экране. Точками могут быть логотипы компаний, с которыми отлично интегрируется Zendesk.
                </div>
                
                
                <div class="animation-container">
                <div class="apps-animation">
                <div class="banner-fast">
                <div class="banner-row banner-top"></div>
                </div>
                <div class="banner-slow">
                <div class="banner-row banner-middle"></div>
                </div>
                <div class="banner-fast">
                <div class="banner-row banner-bottom"></div>
                </div>
                </div>
                </div>
                
                
                
            </div>
        </div>
        <div class="to-step-10"></div>
    </div>
    <div class="step " id="step-10">
        <div class="step-8-count">
            ZENDESK 1:0 CHAOS
        </div>
        <div class="main clear">
            <div class="step-8-title">
                Игра 2
            </div>
            <div class="step-8-text">
                Забей мяч в ворота!
            </div>
            
        </div>
        <div class="main-bg">
            <div class="game-last">
                <img src="images/field3.png" alt="">
                <img src="images/multiple.png" class="man-abs">
                <div class="pos pos-1 current" id="pos-1"></div>
                <img src="images/line-1.svg" alt="">
                <div class="pos pos-2 active" id="pos-2"></div>
                <img src="images/line-2.svg" alt="">
                <div class="pos pos-3" id="pos-3"></div>
                <img src="images/line-3.svg" alt="">
                <div class="pos pos-4" id="pos-4"></div>
                <img src="images/line-4.svg" alt="">
                <div class="pos pos-5" id="pos-5"></div>
                
                
                <img src="images/ball.png" alt="" class="game-last-ball">
            </div>
        </div>
    </div>
    <div class="step" id="step-11">
       
        <div class="captain">
            <img src="images/captain-1.svg" alt="">
        </div>
        <div class="cap-vs-chaos">
            
        </div>
        <div class="chaos">
            <img src="images/chaos.svg" alt="">
        </div>
       
        <div class="next-step to-step-12"></div>
    </div>
    <div class="step" id="step-12">
        <div class="captain">
            <img src="images/captain-1.svg" alt="">
        </div>
        <div class="cap-vs-chaos">
            Ну всё, держись!<br>
            Твоему бизнесу<br>
            КОНЕЦ!!!
        </div>
        <div class="chaos">
            <img src="images/chaos.svg" alt="">
        </div>
        <div class="next-step to-step-13"></div>
    </div>
    <div class="step" id="step-13">
       <div class="captain">
            <img src="images/captain-1.svg" alt="">
        </div>
        <div class="cap-vs-chaos">
            Ха-ха-ха!<br>
            Ничего не выйдет!!!
        </div>
        <div class="chaos">
            <img src="images/chaos.svg" alt="">
        </div>
        <div class="next-step to-step-14"></div>
    </div>
    
    <div class="step" id="step-14">
        <div class="step-8-count">
            ZENDESK 1:0 CHAOS
        </div>
        <div class="main clear"></div>
        <div class="main-bg">
            <div class="game-last-2">
                <img src="images/field3.png" alt="">
                <div class="game-last-man-1"><img src="images/game-last-man-1.png" alt=""></div>
                <div class="game-last-man-2"><img src="images/game-last-man-2.png" alt=""></div>
                <img src="images/ball.png" alt="" class="game-last-ball1">
            </div>
        </div>
    </div>
    <div class="step " id="step-15">
        <div class="step-8-count"> 
            ZENDESK 1:0 CHAOS
        </div>
        <div class="captain">
            <img src="images/captain-1.svg" alt="">
        </div>
        <div class="watch-video">
            <div class="watch-video-text">
                На связи капитан команды Zendesk! <br>
Злобный Хаос приготовил нам ловушку, и мы пока не можем забить гол.<br>
Чтобы отправить мяч прямо в ворота, посмотрите видео.

            </div>
            <div class="watch-video-btn">СМОТРЕТЬ ВИДЕО</div>
        </div>
    </div>
    <div class="step" id="step-16">
        <div class="big-logo">
            <img src="images/zendesk-big.png" alt="">
        </div>
        <div class="final-ball">
            <img src="images/final-ball.png" alt="">
        </div>
        
        <div class="pop-video">
            <div class="pop-overlay"></div>
            <div class="close-btn">пропустить</div>
            <div class="pop-video-content">
                <iframe width="920" height="437" src="https://www.youtube.com/embed/NaCKAbUbqBE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
        
    </div>
    <div class="step" id="step-17">
        <div class="step-8-count"> 
            ZENDESK 1:0 CHAOS
        </div>
        <div class="goal-text goal-text-1">ГОЛ!!!</div>
        <div class="goal-text goal-text-2">ГОЛ!!!</div>
        <div class="goal-text goal-text-3">ГОЛ!!!</div>
        <div class="machine">
            <img src="images/machine.png" alt="">
        </div>
        <div class="lastest-man">
            <img src="images/lastest-man.png" alt="">
        </div>
        <div class="step-17-line-1"></div>
        <div class="step-17-line-2"></div>
        <div class="trial">
            <div class="trial-text">
                Получить trial-версию продукта
            </div>
            <div class="trial-btn">
                <a href="https://www.zendesk.com.ru/demo/?utm_source=vein_lp&utm_campaign=FTC" target="_blank">ДА!</a>
            </div>
        </div>
    </div>
    
    
<script>
    $(document).ready(function(){
        new WOW().init();
    });
</script>
  <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49772527 = new Ya.Metrika2({
                    id:49772527,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
  
<noscript><div><img src="https://mc.yandex.ru/watch/49772527" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
  
</body>
</html>