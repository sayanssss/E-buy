const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})
var sidenav= document.getElementById('sidenav');
var menubar=document.getElementById('menubar')
sidenav.style.width="0px";
menubar.onclick=function(){
  if(sidenav.style.width=="0px"){
    sidenav.style.width="250px";
  }
  else{
    sidenav.style.width="0px";
  }
}
