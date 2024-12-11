
  if (document.images) { 
    digit1 = new Image; 
    digit1.src = "images/digit1.gif"; 
	digit2 = new Image; 
    digit2.src = "images/digit2.gif";
	digit3 = new Image; 
    digit3.src = "images/digit3.gif";
	digit4 = new Image; 
    digit4.src = "images/digit4.gif";
	digit5 = new Image; 
    digit5.src = "images/digit5.gif";
	digit6 = new Image; 
    digit6.src = "images/digit6.gif";
	digit7 = new Image; 
    digit7.src = "images/digit7.gif";
	digit8 = new Image; 
    digit8.src = "images/digit8.gif";
	digit9 = new Image; 
    digit9.src = "images/digit9.gif";
	digit0 = new Image; 
    digit0.src = "images/digit0.gif";
	digitam = new Image; 
    digitam.src = "images/digitam.gif";
	digitpm = new Image; 
    digitpm.src = "images/digitpm.gif";
	digitcolon = new Image;
	digitcolon.src = "images/digitcolon.gif";
	digitblank = new Image;
	digitblank.src = "images/digitblank.gif";
	}
	
function UpdateClock(){
    var time= new Date();
    hours = time.getHours();
    mins = time.getMinutes();
    if (!document.images) return;

	digit = mins % 10;
	digit = (mins - (mins % 10))/10;


	document.images.minstens.src=eval("digit"+digit+".src");
	if (hours > 12)
	  document.images.ampm.src=digitpm.src;
	else
	  document.images.ampm.src=digitam.src;
	if (hours > 12) hours = hours - 12;
	digit = hours % 10;
	document.images.hoursones.src=eval("digit"+digit+".src");
	digit = (hours - (hours % 10))/10;
	document.images.hourstens.src=eval("digit"+digit+".src");
	document.images.colon.src=digitcolon.src;
	setTimeout("UpdateClock()",30000);

  }

   UpdateClock();
