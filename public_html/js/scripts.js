function touchHandler(event) {
    var touch = event.changedTouches[0];

    var simulatedEvent = document.createEvent("MouseEvent");
        simulatedEvent.initMouseEvent({
        touchstart: "mousedown",
        touchmove: "mousemove",
        touchend: "mouseup"
    }[event.type], true, true, window, 1,
        touch.screenX, touch.screenY,
        touch.clientX, touch.clientY, false,
        false, false, false, 0, null);

    touch.target.dispatchEvent(simulatedEvent);
    //event.preventDefault();
}
function init() {
    document.addEventListener("touchstart", touchHandler, true);
    document.addEventListener("touchmove", touchHandler, true);
    document.addEventListener("touchend", touchHandler, true);
    document.addEventListener("touchcancel", touchHandler, true);
}




function calcPosition(){
    var fieldPosLeft = $('.field-2 img').offset().left;    
    var fieldPosTop = $('.field-2 img').offset().top;
    var fieldWidth = $('.field-2 img').width();
    var fieldHeight = $('.field-2 img').height();

    var pos1Left = fieldPosLeft + fieldWidth * 0.0935;
    var pos1Top = fieldPosTop + fieldHeight * 0.33 - 20;

    var pos2Left = fieldPosLeft + fieldWidth * 0.215;
    var pos2Top = fieldPosTop + fieldHeight * 0.351 - 20;

    var pos3Left = fieldPosLeft + fieldWidth * 0.272;
    var pos3Top = fieldPosTop + fieldHeight * 0.06 - 20;

    var pos4Left = fieldPosLeft + fieldWidth * 0.396;
    var pos4Top = fieldPosTop + fieldHeight * 0.18 - 20;

    var pos5Left = fieldPosLeft + fieldWidth * 0.245;
    var pos5Top = fieldPosTop + fieldHeight * 0.70 - 20;

    var pos6Left = fieldPosLeft + fieldWidth * 0.38;
    var pos6Top = fieldPosTop + fieldHeight * 0.51 - 20;

    var pos7Left = fieldPosLeft + fieldWidth * 0.529;
    var pos7Top = fieldPosTop + fieldHeight * 0.347 - 20;
    
    if($(window).width() <= 991){
        var pos1Top = fieldPosTop + fieldHeight * 0.33 + 20;

        var pos2Top = fieldPosTop + fieldHeight * 0.351 + 20;

        var pos3Top = fieldPosTop + fieldHeight * 0.06 + 20;

        var pos4Top = fieldPosTop + fieldHeight * 0.18 + 20;

        var pos5Top = fieldPosTop + fieldHeight * 0.70 + 20;

        var pos6Top = fieldPosTop + fieldHeight * 0.51 + 20;

        var pos7Top = fieldPosTop + fieldHeight * 0.347 + 20;
    }

    $('.team-item-1 .dropped').css({'left' : pos1Left + 'px', 'top' : pos1Top + 'px'});
    $('.team-item-2 .dropped').css({'left' : pos2Left + 'px', 'top' : pos2Top + 'px'});
    $('.team-item-3 .dropped').css({'left' : pos3Left + 'px', 'top' : pos3Top + 'px'});
    $('.team-item-4 .dropped').css({'left' : pos4Left + 'px', 'top' : pos4Top + 'px'});
    $('.team-item-5 .dropped').css({'left' : pos5Left + 'px', 'top' : pos5Top + 'px'});
    $('.team-item-6 .dropped').css({'left' : pos6Left + 'px', 'top' : pos6Top + 'px'});
    $('.team-item-7 .dropped').css({'left' : pos7Left + 'px', 'top' : pos7Top + 'px'});
    
    console.log('drop');
}

$(document).ready(function(){
    init();
    $('form').submit(function(e) {
    var $form = $(this);
    $.ajax({
      type: $form.attr('method'),
      url: $form.attr('action'),
      data: $form.serialize()
    }).done(function() {
      console.log('success');

    }).fail(function() {
      console.log('fail');
    });
    
    e.preventDefault(); 
  });
    
    
    
    new Audio('sound/first.mp3').play();
    
    $('.impression-btn').click(function(){
        $('.pop-up').addClass('active');
        $('.ball').removeClass('wow fadeIn').addClass('ball-anim');
    });
    
    $('.pop-up').submit(function(e){
        e.preventDefault();
        $('.step').removeClass('active');
        $('#step-2').addClass('active');
    });
    
    $('.start-btn').click(function(){
        $('.step').removeClass('active');
        $('#step-3').addClass('active');
        new Audio('sound/meet.mp3').play();
    });

    $('.to-step-4').click(function(){
        $('.step').removeClass('active');
        $('#step-4').addClass('active');
        new Audio('sound/keyboard.mp3').play();
    });
    
    $('.to-step-5').click(function(){
        $('.step').removeClass('active');
        $('#step-5').addClass('active');
        new Audio('sound/keyboard.mp3').play();
    });
    
    $('.to-step-6').click(function(){
        $('.step').removeClass('active');
        $('#step-6').addClass('active');
        new Audio('sound/svistok.mp3').play();
    });
    
    
    
    
    $('.to-step-7').click(function(){
        $('.step').removeClass('active');
        $('#step-7').addClass('active');
        new Audio('sound/move.mp3').play();
        
             //var dragObjects = document.getElementById('team').getElementsByTagName('img')
             var dragObjects = document.getElementById('team').getElementsByClassName('team-img')
             for(var i=0; i<dragObjects.length; i++) {
                 new DragObject(dragObjects[i])
             }
             
             new DropTarget(document.getElementById('field'))
             
         
    });
    
    $('.to-step-9').click(function(){
        $('.step').removeClass('active');
        $('#step-9').addClass('active');
        new Audio('sound/keyboard.mp3').play();
    });
    
    $('.to-step-10').click(function(){
        $('.step').removeClass('active');
        $('#step-10').addClass('active');
    });
    
    $('.pos-2.active').click(function(){
        $('.game-last-ball').removeClass('pos-1').addClass('pos-2');
        $(this).addClass('current').removeClass('active');
        $('.pos-1').addClass('inactive');
        $('.pos-3').addClass('active');
        new Audio('sound/ball-beat.mp3').play();
        
        $('.pos-3.active').click(function(){
            $('.game-last-ball').removeClass('pos-1 pos-2').addClass('pos-3');
            $(this).addClass('current').removeClass('active');
            $('.pos-2').addClass('inactive').removeClass('current');
            $('.pos-4').addClass('active');
            new Audio('sound/ball-beat.mp3').play();
            
            $('.pos-4.active').click(function(){
                $('.game-last-ball').removeClass('pos-1 pos-2 pos-3').addClass('pos-4');
                $(this).addClass('current').removeClass('active');
                $('.pos-3').addClass('inactive').removeClass('current');
                $('.pos-5').addClass('active');
                new Audio('sound/ball-beat.mp3').play();
                
                $('.pos-5.active').click(function(){
                    $('.step').removeClass('active');
                    $('#step-11').addClass('active');
                    new Audio('sound/svistok.mp3').play();
                });
            });
        });
        
    });
    
    
    $('.to-step-12').click(function(){
        $('.step').removeClass('active');
        $('#step-12').addClass('active');
        new Audio('sound/keyboard.mp3').play();
    });
    
    $('.to-step-13').click(function(){
        $('.step').removeClass('active');
        $('#step-13').addClass('active');
        new Audio('sound/keyboard.mp3').play();
    });
    
    $('.to-step-14').click(function(){
        $('.step').removeClass('active');
        $('#step-14').addClass('active');
    });
    
    $('#step-14 .game-last-ball1').click(function(){
        $(this).addClass('goal');
        new Audio('sound/ball-beat.mp3').play();
        setTimeout(function(){
            $('.step').removeClass('active');
            $('#step-15').addClass('active');
            new Audio('sound/keyboard.mp3').play();
        }, 2000);
    });
    
    $('.watch-video-btn').click(function(){
        $('.step').removeClass('active');
        $('#step-16').addClass('active');
        new Audio('sound/start.mp3').play();
        
        
          $(".pop-video-content iframe").attr('src', $('.pop-video-content iframe').attr('src') + '?autoplay=1'); 
        
        
        setTimeout(function(){
            $('.close-btn').show(400);
        }, 5000);
    });
    
    $('.final-ball').click(function(){
        $(this).addClass('goal');
        new Audio('sound/ball-beat.mp3').play();
        setTimeout(function(){
            $('.step').removeClass('active');
            $('#step-17').addClass('active');
            new Audio('sound/scream.mp3').play();
            
            setTimeout(function(){
                $('.trial').show();
                $('.goal-text').hide();
            }, 3000)
            
            
        }, 2000);
    });
    
    $('.close-btn').click(function(){
        $('.pop-video').hide();
        $('.pop-video').remove();
        
    });
    
    $('.trial-btn').click(function(){
        new Audio('sound/start.mp3').play();
    });
    
    
    $('.hover-info .close-hover').click(function(){
        jQuery(this).parent().addClass('hidden');
    });
    
    
    
    
    
});