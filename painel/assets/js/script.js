var navbar = document.querySelector(".nav-fixed");
window.onscroll = () => {
	var navbar = document.querySelector(".nav-fixed");
	if (window.scrollY > 100) {
		navbar.classList.add('nav-active');
	} else {
		navbar.classList.remove('nav-active');
	}
	var scrollHeight, totalHeight;
	scrollHeight = document.body.scrollHeight;
	totalHeight = window.scrollY + window.innerHeight;

	var btn = document.querySelector('a.btn-fixed');

	if (totalHeight >= scrollHeight){
		btn.style.transform = 'translatey(-100px)';

	}else{
		btn.style.transform = 'translatey(0px)';
	}
};


