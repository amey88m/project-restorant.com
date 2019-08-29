$(function(){
$('.final-order-btn').click(finalordertaken);


let jsval = document.cookie.split(';')
let tok = jsval[0].split("=")[1];


	function finalordertaken(e)
	{	
		e.preventDefault();

		let res = document.querySelector('.final-order-form-res');

		let xhr = new XMLHttpRequest;
		let response;
		
		let order_name = document.querySelector('.order-name'),
			order_offer=document.querySelector('.order-offer'),
			order_dis = document.querySelector('.order-dis'),
			order_cost= document.querySelector('.order-cost'),
			order_qty = document.querySelector('.order-qty'),
			item = Array.prototype.slice.apply(document.querySelectorAll('.item'));

		let orderList = {
			name:order_name.value,
			offer:order_offer.value,
			dis:order_dis.value,
			cost:order_cost.value,
			qty:order_qty.value
		};
		
		if(orderList.name == 0){
			order_name.focus()
			return false
		}else if(orderList.offer ==0){
			order_offer.focus()
			return false
		}else if(orderList.dis ==0){
			order_dis.focus()
			return false
		}else if(orderList.cost ==0){
			order_cost.focus()
			return false
		}else if(orderList.qty ==0){
			order_qty.focus()
			return false
		}else{
		
			if(xhr)

				xhr.open("POST","final-order",true);
				xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				xhr.setRequestHeader('E-tag',document.cookie);

				xhr.onload=function()
				{
						response = xhr.responseText;
						res.innerHTML=response;
						
				}
				xhr.send('name='+orderList.name+'&offer='+orderList.offer+'&dis='+orderList.dis+'&cost='+orderList.cost+'&qty='+orderList.qty+'&tok='+tok);
		}	

	}

});