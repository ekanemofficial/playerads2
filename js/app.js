// const sign_in_btn = document.querySelector('#sign-in-btn');
// const sign_up_btn = document.querySelector('#sign-up-btn');
// const container = document.querySelector('.container');

// sign_up_btn.addEventListener('click',  () => {
// 	container.classList.add('sign-up-mode');
// });

// sign_in_btn.addEventListener('click',  () => {
// 	container.classList.remove('sign-in-mode');
// });



	$(document).ready(function(){
		$('.menu-toggle').click(function(){
			$('nav').toggleClass('active');
		});
		$('ul li').click(function(){
			$(this).siblings().removeClass('active');
			$(this).toggleClass('active');
		})
	});






















