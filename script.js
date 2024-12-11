
var timeout=500;
var closetimer	= 0;

function showdiv()
{
	cancelclose();
		var ddm = document.getElementById('dropdown');
			ddm.style.display="block";
	
}
function hidediv()
{
	
	var ddm = document.getElementById('dropdown');
			
			ddm.style.display="";
	
}
function mclosetime()
{
	closetimer = window.setTimeout(hidediv,timeout);
}

function cancelclose()
{

		window.clearTimeout(closetimer);
		closetimer = null;
}

	if(document.images)
	{
		
		var offImg = new Image(10,10);
		var onImg = new Image(10,10);

		offImg.src = "images/mini-add.gif";
		onImg.src = "images/mini-minus.gif";
	}
	

// BOOLEAN VALUE
var boolean=true;

function hNsdiv(thistag, imgName)
{	

    var allHTMLTags=document.getElementsByTagName('*');
	
	
    for (i=0; i<allHTMLTags.length; i++) {

	if(allHTMLTags[i].className==thistag){

		if(boolean==true)
		{
			allHTMLTags[i].style.display='none';
			document.images[imgName].src = offImg.src;
			boolean=false;
		}
		else if(boolean==false)
		{
			allHTMLTags[i].style.display='';
			document.images[imgName].src = onImg.src;
			boolean=true;
		}
	}	
    }
    
	
}