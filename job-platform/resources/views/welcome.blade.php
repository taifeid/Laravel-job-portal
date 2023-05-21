<!DOCTYPE html>
<html>
<head>
<title>Job portal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ URL::asset('welcome.css'); }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.bgimg-1 {
  background-image: url('https://www.rostie.com/wp-content/uploads/2018/12/job-seeker-banner-new-2.jpg');
  min-height: 80%;
}
</style>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small">Login</a>
    <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hide-small">Register</a>
    </a>
  </div>
</div>
<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">  </div>
</div>
    <h3 class="w3-center">Category</h3>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
      <div class="w3-quarter">
        <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
        <p class="w3-large">Online</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Support</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Easy to use</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-paper-plane w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Direct communication</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
      </div>
    </div>
  </div>
  

  <section class="cards">
    <article class="card card--1">
      <div class="card__info-hover">
        <svg class="card__like"  viewBox="0 0 24 24">
        <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
    </svg>
          <div class="card__clock-info">
            <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
          </div>
        
      </div>
      <div class="card__img"></div>
      <a href="{{ route('login') }}"  class="card_link">
         <div class="card__img--hover"></div>
       </a>
      <div class="card__info">
        <span class="card__category">IT</span>
        <h3 class="card__title">Software Engineer jobs</h3>
        <span class="card__by">by <a href="https://www.ibm.com/us-en/" class="card__author" title="author">IBM</a></span>
      </div>
    </article>
    
    <article class="card card--2">
      <div class="card__info-hover">
        <svg class="card__like"  viewBox="0 0 24 24">
        <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
    </svg>
          <div class="card__clock-info">
            <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
          </div>
      </div>
      <div class="card__img"></div>
      <a href="{{ route('login') }}"  class="card_link">
         <div class="card__img--hover"></div>
       </a>
      <div class="card__info">
        <span class="card__category">Media</span>
        <h3 class="card__title">Degital Marking Jobs</h3>
        <span class="card__by">by <a href="{{ route('login') }}"  class="card__author" title="author">Adobe</a></span>
      </div>
    </article>  
    <article class="card card--3">
        <div class="card__info-hover">
          <svg class="card__like"  viewBox="0 0 24 24">
          <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
      </svg>
            <div class="card__clock-info">
              <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
            </div>
          
        </div>
        <div class="card__img"></div>
        <a href="{{ route('login') }}"  class="card_link">
           <div class="card__img--hover"></div>
         </a>
        <div class="card__info">
          <span class="card__category">IT</span>
          <h3 class="card__title">Data Analysis jobs</h3>
          <span class="card__by">by <a href="https://www.ibm.com/us-en/"  class="card__author" title="author">IBM</a></span>
        </div>
      </article>
      <article class="card card--4">
        <div class="card__info-hover">
          <svg class="card__like"  viewBox="0 0 24 24">
          <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
      </svg>
            <div class="card__clock-info">
              <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
            </div>
          
        </div>
        <div class="card__img"></div>
        <a href="{{ route('login') }}"  class="card_link">
           <div class="card__img--hover"></div>
         </a>
        <div class="card__info">
          <span class="card__category">IT</span>
          <h3 class="card__title">Cybersecurity jobs</h3>
          <span class="card__by">by <a href="https://www.blackhat.com/"  class="card__author" title="author">Blackhat</a></span>
        </div>
      </article>
      
      </section>  

  <!-- Footer -->
<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
    <p>Powered by Taif Bin Eid 💻</p>
  </footer>
</body>
</html>