// const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');
// const allSideMenu2 = document.querySelectorAll('#submenu-1-open li a');

// allSideMenu.forEach(item=> {
// 	const li = item.parentElement;

// 	item.addEventListener('click', function () {
// 		allSideMenu.forEach(i=> {
// 			i.parentElement.classList.remove('active');
// 		})
// 		li.classList.add('active');
// 	})
// });
// allSideMenu2.forEach(item=> {
// 	const li = item.parentElement;

// 	item.addEventListener('click', function () {
// 		allSideMenu2.forEach(i=> {
// 			i.parentElement.classList.remove('active');
// 		})
// 		li.classList.add('active');
// 	})
// });




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#menu-toggle');
const menuBar2 = document.querySelector('#menu-toggle-2');
const sidebar = document.getElementById('sidebar');
const logo = document.getElementById('logo');
const span1 = document.getElementById('span-1');
const span2 = document.getElementById('span-2');
// submenu open close
const submnenu1=document.getElementById("submenu-1")
const submnenu1Li=document.querySelectorAll("#submenu-1-open li")
const submenuLi=document.querySelectorAll("#submenu li")
const submenu1Open=document.getElementById("submenu-1-open")
// submenu open close
const submnenu2=document.getElementById("submenu-2")
const submnenu2Li=document.querySelectorAll("#submenu-2-open li")
const submenu2Open=document.getElementById("submenu-2-open")

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
	sidebar.classList.toggle('active');

	logo.classList.toggle('d-none');
	submenu1Open.classList.remove("close")
	submnenu1.classList.toggle("d-none")
	submenu2Open.classList.remove("close")
	submnenu2.classList.toggle("d-none")
	span1.classList.toggle("d-none")
	span2.classList.toggle("d-none")
	submnenu1Li.forEach(element => {
		element.classList.toggle("menubox")
		element.classList.toggle("position-relative")
	});
	submnenu2Li.forEach(element => {
		element.classList.toggle("menubox")
		element.classList.toggle("position-relative")
	});
	
	submenuLi.forEach(element => {
		element.classList.toggle("menubox")
		element.classList.toggle("position-relative")
	});
	




})
menuBar2.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
	// menuBar2.classList.toggle("d-none")
	sidebar.classList.toggle("active")
	logo.classList.toggle('d-none');
	submenu1Open.classList.remove("close")
	submnenu1.classList.toggle("d-none")
	submenu2Open.classList.remove("close")
	submnenu2.classList.toggle("d-none")
	span1.classList.toggle("d-none")
	span2.classList.toggle("d-none")
	submnenu1Li.forEach(element => {
		element.classList.toggle("menubox")
		element.classList.toggle("position-relative")
	});
	submnenu2Li.forEach(element => {
		element.classList.toggle("menubox")
		element.classList.toggle("position-relative")
	});
	
	submenuLi.forEach(element => {
		element.classList.toggle("menubox")
		element.classList.toggle("position-relative")
	});
	




})



submnenu1.addEventListener("click",()=>{
	console.log("click");
	submenu1Open.classList.toggle("close")
})
submnenu2.addEventListener("click",()=>{
	console.log("click");
	submenu2Open.classList.toggle("close")
})






const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



// const switchMode = document.getElementById('switch-mode');

// switchMode.addEventListener('change', function () {
// 	if(this.checked) {
// 		document.body.classList.add('dark');
// 	} else {
// 		document.body.classList.remove('dark');
// 	}
// })

const notificationClose =document.getElementById("notification-close")
const notificationOpen =document.getElementById("notification-open")
const notificationContainer =document.getElementById("notification-container")
notificationOpen.addEventListener("click", ()=>{
	console.log("click");
	notificationContainer.classList.add("active")
})
notificationClose.addEventListener("click", ()=>{
	notificationContainer.classList.remove("active")
})

const checkbox1= document.getElementById("checkbox1")
const toptable= document.getElementById("top-table")

checkbox1.addEventListener("change", (e)=>{
	
		toptable.classList.toggle("d-none")
	
})


