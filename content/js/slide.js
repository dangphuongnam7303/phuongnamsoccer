var slideIndex = 0;
var currentSlideIndex = 0;
var slideArray = [];
var numberCount = document.querySelector('#number');
var index =0;

function Slide(title, subtitle, background, link) {
  this.title = title;
  this.subtitle = subtitle;
  this.background = background;
  this.link = link;
  this.id = "slide" + slideIndex;
  slideIndex++;
  slideArray.push(this);
}

var banner1 = new Slide(
  "Soccer shoes",
  "Copa Predator ",
  "http://file.hstatic.net/1000061481/file/1500x800-new-arrivals-carousel-banner-desktop_bc98e986089a4e30ac5469446d08a45d.jpg",
  "./site/hang-hoa/chi-tiet.php?ma_hh=6"
);

var banner2 = new Slide(
  "Selling product",
  "Combo product",
  "https://yousport.vn/Media/Articles/151119042626148/giay-da-bong-gia-re-tot-nhat-banner.jpg",
  "./site/hang-hoa/chi-tiet.php?ma_hh=11"
);

var banner3 = new Slide(
  "Copa shoes",
  'Shot assist',
  "https://www.sport9.vn/images/uploaded/tin-tuc-mizuno/nhan%20biet%20giay%20bong%20da%20mizuno%20chinh%20hang.jpg",
  "./site/hang-hoa/chi-tiet.php?ma_hh=9"
  
);



var banner4 = new Slide(
  "Your choose",
  "Suitable choice",
  "https://theme.hstatic.net/1000402257/1000876467/14/ms_banner_img2.jpg?v=92",
  "./site/hang-hoa/chi-tiet.php?ma_hh=10"

);
var banner5 = new Slide(
    "Rebelller",
    "Your choose",
    "https://yousport.vn/Media/Articles/151019041157970/top-thuong-hieu-giay-da-bong-banner.jpg",
  "./site/hang-hoa/chi-tiet.php?ma_hh=8"
);

function buildSlider() {
  var myHTML;

  for (var i = 0; i < slideArray.length; i++) {
    myHTML +=
      "<div id='" +
      slideArray[i].id +
      "' class='singleSlide' style='background-image:url(" +
      slideArray[i].background +
      ");'>" +
      "<div class='slideOverlay'>" +
      "<h1>" +
      slideArray[i].title +
      "</h1>" +
      "<h4>" +
      slideArray[i].subtitle +
      "</h4>" +
      "<a href='" +
      slideArray[i].link +
      "' target='_blank'>Buy now</a>" +
      "</div>" +
      "</div>";
  }

  document.getElementById("mySlider").innerHTML = myHTML;

  document.getElementById("slide" + currentSlideIndex).style.left = 0;
}

buildSlider();
function prevSlide() {
  var nextSlideIndex;
  if (currentSlideIndex === 0) {
    nextSlideIndex = slideArray.length - 1;
  } else {
    nextSlideIndex = currentSlideIndex - 1;
  }

  document.getElementById("slide" + nextSlideIndex).style.left = "-100%";
  document.getElementById("slide" + currentSlideIndex).style.left = 0;

  document
    .getElementById("slide" + nextSlideIndex)
    .setAttribute("class", "singleSlide slideInLeft");
  document
    .getElementById("slide" + currentSlideIndex)
    .setAttribute("class", "singleSlide slideOutRight");

  currentSlideIndex = nextSlideIndex;
  count('sliderPrev');
}

function nextSlide() {
  var nextSlideIndex;
  if (currentSlideIndex === slideArray.length - 1) {
    nextSlideIndex = 0;
  } else {
    nextSlideIndex = currentSlideIndex + 1;
  }

  document.getElementById("slide" + nextSlideIndex).style.left = "100%";
  document.getElementById("slide" + currentSlideIndex).style.left = 0;

  document
    .getElementById("slide" + nextSlideIndex)
    .setAttribute("class", "singleSlide slideInRight");
  document
    .getElementById("slide" + currentSlideIndex)
    .setAttribute("class", "singleSlide slideOutLeft");

  currentSlideIndex = nextSlideIndex;
  count('sliderNext');
  
}
function play() {
  setInterval(function(){
    nextSlide();
  },3000);
}
play();
