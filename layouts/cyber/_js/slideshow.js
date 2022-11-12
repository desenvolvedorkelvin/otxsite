var Items;
var ActiveItem = -1;
var active;
var next;

function InitializeSlides()
{
	Items = 4;
	SwitchSlide();
}

function SwitchSlide()
{
	ActiveItem++;
	
	if(ActiveItem > 0)
	{
		var ActiveImage = document.getElementById('slide'+ActiveItem);
		if(ActiveItem == Items)
		{
			ActiveItem = 0;
		}
		var NextImage = document.getElementById('slide'+(ActiveItem+1));
		
		$(ActiveImage).fadeOut(1000);
		$(NextImage).fadeIn(1000);
	}
	
	setTimeout("SwitchSlide()", 4000);
}