function DropTarget(element) {
    var dropCount = 0;
	console.log(dropCount);
	element.dropTarget = this
	
	this.canAccept = function(dragObject) {
		return true
	}
	
	this.accept = function(dragObject) {
		this.onLeave()
		
		//dragObject.hide()
		dragObject.addClass()

		$('.start-btn').show();
		/*alert("Акцептор '"+this+"': принял объект '"+dragObject+"'")*/
        if(dragObject.showClass() != 'team-img dropped'){
            new Audio('sound/grass.mp3').play();
        } else {
            new Audio('sound/zvuk-knopki.mp3').play();
        }
        
        
        
        dropCount = 0;
        $('.team-img').each(function(){
            if($(this).hasClass('dropped')){
                dropCount++;
            }
            
        });
        if(dropCount == 7){
            new Audio('sound/move.mp3').play();
            $('.field-2 img').attr('src', 'images/field-2-1.png'); 
            $('.step-7-count').show();
            setTimeout(function(){
                $('.step').removeClass('active');
                $('#step-8').addClass('active');
                new Audio('sound/svistok.mp3').play();
            }, 4000);
        }
        
        calcPosition();
        
	}
	
	this.onLeave = function() {
		element.className =  ''
	}
	
	this.onEnter = function() {
		element.className = 'uponMe'
	}
	
	this.toString = function() {
		return element.id
	}
}
