let freeTipmodel=(function(){
		
	
	let target;

			return{

					weeklyTip:function(e)
					{
						target  = specvtabs.getTarget();
						
							if(e.target.matches('.close-i-tip')){
								this.classList.add('tip-hide')
							}else if(e.target.matches('.btn-n')){
								this.classList.add('tip-hide');
								this.nextElementSibling.classList.remove('goodBye-hide')
								this.nextElementSibling.lastElementChild.classList.add('slideDown')
							}else if(e.target.matches('.btn-y')){
								this.classList.add('tip-hide');
								this.nextElementSibling.nextElementSibling.classList.remove('goodBye-hide')
								this.nextElementSibling.nextElementSibling.classList.add('fadeIn')

							}

							freeTipmodel.hideGoodByeTipNo();
							freeTipmodel.hideGoodByeTipYes();
					},
					hideGoodByeTipNo:function(e)
					{
						let goodByesec = document.querySelector('.goodBye-sec');
						goodByesec.addEventListener('click',function(){
							this.classList.add('goodBye-hide')
						});
					},
					hideGoodByeTipYes:function(e)
					{
						let goodByesecyesico = document.querySelector('.close-i-goodBye-sec-yes');
						let goodByesecyes = document.querySelector('.goodBye-sec-yes');

						goodByesecyesico.addEventListener('click', function(){
							
							goodByesecyes.classList.add('goodBye-hide')
						})
					}
			}

	})();
		let tipsec = document.querySelector('.tip-sec');
		tipsec.addEventListener('click', freeTipmodel.weeklyTip);