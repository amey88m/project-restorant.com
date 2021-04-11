let specvtabs = (function(){
	
	let li 		 =  Array.prototype.slice.apply(document.querySelectorAll('.verities-li')),
					spmenus  = document.querySelectorAll('.sp-menus');



		return{
			
			getTarget:function(e)
			{
				e = e || window.event;
				return e.target || e.SrcElement;
			},
			getTabIndex:function(t)
			{	
				let target = specvtabs.getTarget(t);
				
				for(var i=0; i<spmenus.length ; i++){
					spmenus[i].classList.remove('spm-menu-active');
					spmenus[i].classList.remove('bounceIn')
				}

				li.map((tab,i)=>{
						
						if(t.target == tab){
							tab.classList.add('specialItems-days-tab-active');
								if(t.target.classList.contains('specialItems-days-tab-active') == true)
									spmenus[i].classList.add('spm-menu-active')
									spmenus[i].classList.add('bounceIn')
						}else{
							tab.classList.remove('specialItems-days-tab-active');
						}
					});
			},
		}

})();

let veritiesul = document.querySelector('.verities-ul');
veritiesul.onclick = specvtabs.getTabIndex;




(function(){

	"use strict";
	
	let loadMoreBtn = document.querySelector('.btn-load-day-menu'),
		tb_jdata 	= document.querySelector('.tb_jdata');


	loadMoreBtn.addEventListener('click', showData);

	let parse_data,
		pg_start = 0,
		pg_limit = 1;
	
	ajaxCall();
	function ajaxCall()
	{
		let xhr = new XMLHttpRequest;

		if(xhr)
			xhr.open("GET", "data/special_varieties_data.json", true);
			
			xhr.onload=function()
			{
				if(xhr.readyState == 4 && xhr.status == 200 )
					parse_data = JSON.parse(xhr.responseText);
			}
			xhr.send(null)
	}


	let day;
	function showData()
	{
		
		// filter tabs's(li) to decide which 'day' should target
		let li = Array.prototype.slice.apply(document.querySelectorAll('.verities-li'));
		let li_checkactive;
		li.filter((li)=>{
			li_checkactive = (li.classList.contains('specialItems-days-tab-active'));
			if(li_checkactive == true)
				day = li.getAttribute('data-day');
				return day;
		});


		eventData(parse_data,pg_start,pg_limit)

	}




	function eventData(data,start,limit)
	{
		
		let res_data = [], output, rows, td, col_sr, col_name, col_offer, col_dis, col_cost, col_pic, img;
		
		for(let i=start; i<start+limit; i++)
		{
			
			// check day's & fetch data according to day
			if(day == "sunday")
				res_data.push(data[0].sunday[i])
			else if(day == "saturday")
				res_data.push(data[0].saturday[i])
			else if(day == "friday")
				res_data.push(data[0].friday[i])
			else if(day == "allday")
				res_data.push(data[0].dailyspecial[i])
			
		}

			// loop through result-div table and get targeted resule-div to display result in
			let respdata = Array.prototype.slice.apply(document.querySelectorAll('.tb_jdata'));
			let arr = [];
			respdata.map((t)=>{
			
				if(day == t.getAttribute('data-response'))
					arr.push(t)
			})


				res_data.map((res,i)=>{
					
					let table = arr[i]
					rows = table.insertRow(i);
					
					col_pic = rows.insertCell('<td></td>');
					col_pic.innerHTML = "<img src="+res.pic+" height='40px'>";
					col_cost = rows.insertCell('<td></td>');
					col_cost.textContent = res.cost;
					col_dis = rows.insertCell('<td></td>');
					col_dis.innerHTML = res.discount;
					col_offer = rows.insertCell('<td></td>');
					col_offer.innerHTML = res.offer;
					col_name = rows.insertCell('<td></td>');
					col_name.innerHTML = res.menuName;
					col_sr = rows.insertCell('<td></td>');
					col_sr.innerHTML = res.sr;
					pg_start++;

				});
		


	}

	
})();