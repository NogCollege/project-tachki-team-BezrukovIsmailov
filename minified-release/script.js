const slider=document.querySelector(".slider"),prevButton=document.querySelector(".prev-button"),nextButton=document.querySelector(".next-button"),slides=Array.from(slider.querySelectorAll("img")),slideCount=slides.length;let slideIndex=0;function showPreviousSlide(){slideIndex=(slideIndex-1+slideCount)%slideCount,updateSlider()}function showNextSlide(){slideIndex=(slideIndex+1)%slideCount,updateSlider()}function updateSlider(){slides.forEach(((e,t)=>{e.style.display=t===slideIndex?"block":"none"}))}prevButton.addEventListener("click",showPreviousSlide),nextButton.addEventListener("click",showNextSlide),updateSlider();