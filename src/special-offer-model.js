let special_offer_aside_model=(function(){

		let active = document.querySelector('.special-offer-aside')

			return{
				offerAside:function()
				{
					this.classList.toggle('offer-box-chage-color');
					this.previousElementSibling.classList.toggle('special-offer-hide');
					if(active.classList.contains('special-offer-hide') == true)
						active.classList.remove('bounceIn')
					else
						active.classList.add('bounceIn')
				}
			}
		})();
	let btn = document.querySelector('.offer-box');
	btn.addEventListener('click', special_offer_aside_model.offerAside);