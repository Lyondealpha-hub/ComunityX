const right_column = document.querySelector('.right_column');
const slide = document.querySelector('.slideregion');
const nextBtn = document.getElementById('next-btn');
const prevBtn = document.getElementById('prev-btn');
const interval = 1000;

let slideregion = document.querySelectorAll('.slide');
let index = 1;
let slideId;

const firstClone = slideregion[0].cloneNode(true);
const lastClone = slideregion[slideregion.length - 1].cloneNode(true);

firstClone.id = 'first-clone';
lastClone.id = 'last-clone';

slide.append(firstClone);
slide.prepend(lastClone);

const slideWidth = slideregion[index].clientWidth;

slide.style.transform = `translateX(${-slideWidth * index}px)`;

const startSlide = ()=>{
  slideId = setInterval(() => {
  moveToNextSlide();
  }, interval);
}

const getslides = () => document.querySelectorAll('.slide');

slide.addEventListener('transitionend', () => {
  slideregion = getslides();
  if(slideregion[index].id === firstClone.id){
    slide.style.transition = 'none';
    index = 1;
    slide.style.transform = `translateX(${-slideWidth * index}px)`;

  }
  if(slideregion[index].id === lastClone.id){
    slide.style.transition = 'none';
    index = slideregion.length - 2;
    slide.style.transform = `translateX(${-slideWidth * index}px)`;

  }
});

const moveToNextSlide = ()=>{
  slideregion = getslides();
  if(index >= slideregion.length - 1) return
  index++;
  slide.style.transform = `translateX(${-slideWidth * index}px)`;
  slide.style.transition = '.7s';
}
const moveToPreviousSlide = () =>{
  slideregion = getslides();
  if(index<=0 ) return;
  index--;
  slide.style.transform = `translateX(${-slideWidth * index}px)`;
  slide.style.transition = '.7s';
}

right_column.addEventListener('mouseenter', ()=>{
  clearInterval(slideId);
})

right_column.addEventListener('mouseleave', ()=>{
  startSlide();
})

nextBtn.addEventListener('click',moveToNextSlide);
prevBtn.addEventListener('click',moveToPreviousSlide);

startSlide();
