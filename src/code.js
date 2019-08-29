(function(){


	
let divId, 
	json_data;


	getjsonData("about_data","restodesc");
	function getjsonData(datasource, divId)
	{
		let xhr;
		xhr = new XMLHttpRequest();
		if(xhr)
			xhr.open("GET", "data/"+datasource+".json", true);
			divId = document.getElementById(divId);

			xhr.onload=function()
			{
				
				if(xhr.readyState == 4 && xhr.status == 200)
					json_data = JSON.parse(xhr.responseText);
					divId.innerHTML = json_data[0].aboutus;
			}

		xhr.send(null);

	}


	getjsonImg('img_data');	
	function getjsonImg(datasource)
	{
		
		let xhr, json_images,imgtag;
		xhr = new XMLHttpRequest();

		if(xhr)	
			xhr.open("GET","data/"+datasource+".json", true);
			
			xhr.onload=function(){
			
				if(xhr.readyState == 4 && xhr.status == 200 )
					json_images = JSON.parse(xhr.responseText);
					let imgp = Array.prototype.slice.apply(document.querySelectorAll('.image-wraper'));
			
					imgp.map((img,i)=>{
						imagetag = document.createElement('IMG');
						img.append(imagetag);
						imagetag.setAttribute("src",json_images[0].img[i]);
						imagetag.setAttribute("alt","locally source fresh ingrediant");
						imagetag.setAttribute("title","locally source fresh ingrediant");
					});	
			}
			xhr.send(null);
	
	}



	



	
	



})();