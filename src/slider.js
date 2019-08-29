$(function(){

// set the dom elemet variable
let left 	 = document.querySelector("#left"),
	right 	 = document.querySelector("#right"),
sliderImages = document.querySelectorAll('.item'), 
current = 0;

	
	// reset the slide
	function reset() 
	{
		for(let i=0; i<sliderImages.length; i++)
		{
			sliderImages[i].style.display = "none";
		}
	}

	

	// Init current slider
	function currentSlider()
	{
		reset();
		sliderImages[0].style.display = "block";
	}


	// show prev image
	function slideLeft()
	{
		reset();
		sliderImages[current - 1].style.display = "block";
		current--;
	}

	// show next image
	function slideRight()
	{
		reset();
		sliderImages[current + 1].style.display = "block";
		current++;
	}

	

left.onclick = function(e) 
{
	e.preventDefault();
	if( current === 0)
	{
		current = sliderImages.length; // max length of images
	}
	slideLeft();
};



right.onclick = function(e) 
{
	e.preventDefault();	
	if( current === sliderImages.length-1)
	{
		current = -1;
	}
	slideRight();	
};


currentSlider();

});