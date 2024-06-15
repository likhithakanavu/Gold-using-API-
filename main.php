<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>*,
*::after,
*::before {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

:root {
  --color-bg: linear-gradient(to top, #010329, #000005);
  --color-glass: linear-gradient(to left, #142544, #1a9092);
  --color-water: linear-gradient(to left, #142544, #1b6d6e);
}

body {
  background-image: var(--color-bg);
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: flex-end;
  overflow: hidden;
}

.flower {
  position: relative;
}

.flower__glass {
  width: 20vmin;
  height: 30vmin;
  background-image: var(--color-glass);
  clip-path: polygon(0 0, 100% 0, 85% 100%, 15% 100%);
  opacity: 0.8;
  position: relative;
}

.flower__glass::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  background-color: #182843;
  width: 100%;
  height: 2vmin;
}

.flower__glass::before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  background-image: var(--color-water);
  width: 100%;
  height: 15vmin;
}

.f-wrapper {
  position: absolute;
  left: 45%;
  bottom: 2vmin;
}

.f-wrapper--2 {
  left: 50%;
  bottom: 5%;
  transform-origin: 10% left;
  transform: rotate(20deg);
}

.f-wrapper--3 {
  left: 30%;
  bottom: 5%;
  transform-origin: 10% left;
  transform: rotate(-10deg);
}

.f-wrapper--3 .flower__line {
  height: 45vmin;
  position: relative;
}

.f-wrapper--3 .flower__line::after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 6vmin;
  height: 6vmin;
  transform: translate(-69%, -30%) rotate(-5deg);
  border-radius: 10vmin 10vmin 0 0;
  border: 2vmin solid #104d4e;
  border-bottom: transparent;
  border-left: transparent;
}

.f-wrapper--3 .flower__line::before {
  content: "";
  position: absolute;
  left: -40%;
  top: -1%;
  width: 6vmin;
  height: 2vmin;
  transform-origin: right;
  transform: translate(-100%, -80%) rotate(-20deg);
  background-color: #104d4e;
  border-radius: 2vmin;
}

.f-wrapper--3 .flower__line {
  background-image: linear-gradient(to top, #142544, #104d4e);
}

.f-wrapper--2 .flower__line {
  height: 45vmin;
}

.f-wrapper--2 .f {
  transform: translateX(-50%) rotate(20deg);
}

.f-wrapper--3 .f {
  transform: translate(-350%, -50%) rotate(-120deg);
}

.f-wrapper--2 .flower__leaf:not(:first-child) {
  width: 3.8vmin;
  height: 10vmin;
  background-image: linear-gradient(to bottom, #ff43b6, #c22887, #1a233a 99%);
}

.f-wrapper--3 .flower__leaf:not(:first-child) {
  width: 3.8vmin;
  height: 10vmin;
  background-image: linear-gradient(to bottom, #ad2be0, #712291, #1a233a 99%);
}

.f-wrapper--3 .flower__leaf--1 {
  width: 8vmin;
  height: 10vmin;
  bottom: 2vmin;
  background-color: #ad2be0;
}

.f-wrapper--2 .flower__leaf--1 {
  width: 8vmin;
  height: 10vmin;
  bottom: 2vmin;
  background-color: #de118b;
}

.f-wrapper--2 .f .flower__leaf--8 {
  width: 10vmin;
  height: 9vmin;
  bottom: 3vmin;
  left: -30%;
  transform: rotate(-50deg);
  background-image: linear-gradient(to left bottom, #ff43b6, #4d1337);
}

.f-wrapper--3 .f .flower__leaf--8 {
  width: 10vmin;
  height: 9vmin;
  left: -10% !important;
  background-image: linear-gradient(to left bottom, #ad2be0, #712291);
}

.flower__line {
  width: 2vmin;
  height: 56vmin;
  background-image: linear-gradient(to left top, #82fdff 20%, #142544, #104d4e);
  border-radius: 4vmin;
}

.f {
  position: absolute;
  top: 1vmin;
  left: 50%;
  transform: translateX(-50%) rotate(-10deg);
  width: 2vmin;
  height: 2vmin;
}

.flower__leaf {
  position: absolute;
  left: 50%;
  bottom: 2vmin;
  transform: translateX(-50%);
  width: 5vmin;
  height: 14vmin;
  background-image: linear-gradient(to bottom, #ffa085, #fa7373, #1a233a 99%);

  clip-path: ellipse(50% 50% at 50% 50%);
  transform-origin: center bottom;
  animation: open-flower 2s 1s backwards;
}

.flower__leaf--1 {
  width: 10vmin;
  height: 12vmin;
  bottom: 3vmin;
  border-radius: 50% 50% 50% 50% / 80% 80% 20% 20%;
  background-color: #e24f5f;
  background-image: none;
  animation: open-flowe--middle 1.4s 1s backwards;
}

.flower__leaf--2 {
  transform: translateX(-50%) rotate(-30deg);
}
.flower__leaf--3 {
  transform: translateX(-50%) rotate(-50deg);
}
.flower__leaf--4 {
  transform: translateX(-50%) rotate(-70deg);
}

.flower__leaf--5 {
  transform: translateX(-50%) rotate(30deg);
}

.flower__leaf--6 {
  transform: translateX(-50%) rotate(50deg);
}

.flower__leaf--7 {
  transform: translateX(-50%) rotate(70deg);
}

.flower__leaf--8 {
  width: 13vmin;
  height: 11vmin;
  bottom: 6vmin;
  left: -30%;
  border-radius: none;
  clip-path: none;
  border-radius: 10vmin 2vmin 10vmin 2vmin;
  transform: rotate(-55deg);
  background-image: linear-gradient(
    to left bottom,
    #ffa085,
    #eb8b8b,
    #492f2f 98%
  );
}

.flower__fall-down--yellow {
  animation: flower-fall-down-yellow 8s 1.2s linear forwards;
}

.flower__fall-down--pink {
  animation: flower-fall-down-pink 5s 1.2s linear forwards;
}

.flower__fall-down--purple {
  bottom: 4vmin;
  animation: flower-fall-down-purple 6s 1.2s linear forwards,
    flower-falling 6s 7.2s linear infinite;
}

@keyframes open-flower {
  0% {
    transform: translateX(-50%) rotate(0);
  }
}

@keyframes open-flowe--middle {
  0% {
    opacity: 0;
    transform: translateX(-50%) scale(0);
  }
}

@keyframes flower-fall-down-pink {
  0% {
    transform: rotate(-55deg);
  }

  50% {
    transform: rotateX(-100deg);
  }

  100% {
    transform: translate(2vmin, 28vmin);
  }
}

@keyframes flower-fall-down-yellow {
  0% {
    transform: rotate(-55deg);
  }

  50% {
    bottom: 3vmin;
    transform: rotateX(-100deg);
  }

  100% {
    transform: translate(2vmin, 70vmin) rotate(150deg);
  }
}

@keyframes flower-fall-down-purple {
  0% {
    transform: rotate(-50deg);
  }

  25% {
    bottom: 1vmin;
    transform: rotateX(-100deg);
    perspective: 0px;
  }

  50% {
    perspective: 0px;
    transform: translate(-30vmin, 2vmin) rotate(90deg);
  }

  75% {
    perspective: 0px;
    transform: translate(-34vmin, -2vmin);
  }

  100% {
    transform-origin: center;
    transform: translate(-34vmin, -2vmin) rotateY(-80deg) rotateX(35deg);
  }
}

@keyframes flower-falling {
  0%,
  100% {
    transform-origin: center;
    transform: translate(-34vmin, -2vmin) rotateY(-80deg) rotateX(35deg);
  }

  25% {
    transform-origin: center;
    transform: translate(-34.4vmin, -2vmin) rotateY(-84deg) rotateX(35deg);
  }

  50% {
    transform-origin: center;
    transform: translate(-32vmin, -4.2vmin) rotateY(-80deg) rotateX(35deg);
  }

  75% {
    transform-origin: center;
    transform: translate(-36vmin, 1.1vmin) rotateY(-80deg) rotateX(35deg);
  }
}
</style>
<style>
    * {
  outline:none;
  text-decoration:none;
  border:none;
}

body {
  background-color: #ecf0f1;
  font-size: 2rem;
  font-family: arial;
}

.content {
  display: flex;
  flex-direction: column;
}

div { 
  margin: 50px auto;
}

.btn {
  padding: 15px;
  font-weight: 700;
  font-size: 2rem;
  text-decoration: none;
  text-align: center;
  transition: all .5s ease; 
}

.btn--doar {
  color: #fff;
  padding-right: 0;
  background-color: #c0392b;
  -webkit-clip-path: polygon(0% 0%, 100% 0, 100% 70%, 90% 100%, 0% 100%);
  clip-path: polygon(0 0, 100% 0, 100% 50%, 75% 100%, 0 100%);

}

.btn--doar:hover { 
  -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
  clip-path: polygon(0 0, 100% 0, 100% 100%, 100% 100%, 0 100%);  
}

.btn--doar:after {
  content: "\f004";
  color: #e74c3c;
  font-family: FontAwesome;
  display: inline-block;
  position: relative;
  right: -55px;
  transition: all 0.2s ease;
}

.btn--doar:hover:after {
  margin: -5px 15px;
  right: 0px;
}

.btn--promo {
  color: #dff9fb;
  background-color: #130f40;
  border-radius: 50px;
}

.btn--promo:after {
  content: '40% OFF';
  display: inline-block;
  font-size: 1rem;
  color: #130f40;
  background-color: #f0932b;
  border-radius: 25px;
  padding: 5px;
  position: absolute;
  margin-top: -30px; 
  margin-left: -55px; 
}

.btn--action{
  display: block;
  width: 100%;
  padding: 1rem;
  border-radius: 1.5rem;
  background-color: #f6e58d;
  color: #000;
  transition: all .5s ease 0s; 
  box-shadow: 0 10px #f9ca24;
}

/* .btn--action:hover{
box-shadow: inset 0 0 0 .25rem #ffbe76;
} */

.btn--action span{
  display: inline-block;
  position: relative;
  transition: all .5s ease;
}

.btn--action span:before{
  content: '\f04c'; 
  color: #000;
  font-size: 1rem;
  font-family: FontAwesome;
  display: inline-block;
  position: absolute;
  top: 10px;
  left: 1.5rem;
  opacity: 0;
  transition: all .1s ease 0s;
}

.btn--action:hover span{
  padding-left: 1.5rem; 
}

.btn--action:hover span:before{
  left: 0;
  opacity: 1;
}

.btn--action:active {
  box-shadow: 0 5px #f0932b;
  transform: translateY(5px);
}

/* Redes Sociais */
.circle-button{
  font-family: 'Roboto', sans-serif;
  color: #ccc;
  display: inline-block;
  font-size: 2rem;
  border-radius: 50%;
  transition: all 0.2s ease;
}

.circle-button:hover{
  animation: circle-anim 0.3s ease forwards;
  transition: all 0.4s ease;
}

.grow-container{
  display: inline-block;
  margin: 1em;
}

.to-red:hover{
  background: #E5393F;
}

.to-twitter:hover{
  background: #1DA1F3;
}

.to-facebook:hover{
  background: #3B5998;
}

.to-linkedin:hover{
  background: #0077B5;
}

.to-reddit:hover{
  background: #FF4500;
}

@keyframes circle-anim{
  0% {
    
  }
  
  90%{
    padding: 0.35em;
    margin: -0.35em; 
  }
  
  100%{
    padding: 0.25em;
    margin: -0.25em; 
  }
}

/* WOOOW */
button {
  width: 160px;
  height: 60px;
  background: #E6203B;
  cursor:pointer;
  border-radius: 25px;
}

button a {
  color: #fff;
  text-transform:uppercase;
  letter-spacing:1px;
}

/* let's shape */
button span.shape {
  height: 60px;
  width: 160px;
  position: absolute;
  top: 0;
  left: 0;
}

button span span {
  content:"";
  position: absolute;
  margin: auto;
  height: 8px;
  width: 2px;
  background: #E6203B;
  opacity: 0;
}

button span span:nth-of-type(1) {
  top: -20px;
  left: 0;
  right: 0;
}

button span span:nth-of-type(2) {
  bottom: -20px;
  left: 0;
  right: 0;
}

button span span:nth-of-type(3) {
  top:0;
  bottom: 0;
  left: -10px;
}

button span span:nth-of-type(4) {
  top:0;
  bottom: 0;
  right: -10px;
}

button span span:nth-of-type(5) {
  top: -20px;
  left: -70%;
  right: 0;
  transform:rotate(-30deg);
}

button span span:nth-of-type(6) {
  top: -20px;
  left: 0;
  right: -70%;
  transform:rotate(30deg);
}

button span span:nth-of-type(7) {
  bottom: -20px;
  right: 0;
  left: -70%;
  transform:rotate(30deg);
}

button span span:nth-of-type(8) {
  bottom: -20px;
  left: 0;
  right: -70%;
  transform:rotate(-30deg);
}

/* let's animate this */
@keyframes bounce {
  0%{transform: scale(1);}
  50%{transform: scale(1.1);}
  100%{transform: scale(1);}
}

button.active {
  animation: bounce 0.3s ease-out 1;
}

button.active span span:nth-of-type(1) {
  animation: anim1 0.4s ease-out 1;
}
button.active span span:nth-of-type(2) {
  animation: anim2 0.4s ease-out 1;
}
button.active span span:nth-of-type(3) {
  animation: anim3 0.4s ease-out 1;
}
button.active span span:nth-of-type(4) {
  animation: anim4 0.4s ease-out 1;
}
button.active span span:nth-of-type(5) {
  animation: anim5 0.4s ease-out 1;
}
button.active span span:nth-of-type(6) {
  animation: anim6 0.4s ease-out 1;
}
button.active span span:nth-of-type(7) {
  animation: anim7 0.4s ease-out 1;
}
button.active span span:nth-of-type(8) {
  animation: anim8 0.4s ease-out 1;
}

@keyframes anim1 {
  0%{transform: scaleY(0.5);opacity: 0;}
  50%{transform: translateY(-10px) scaleY(1.4); opacity: 1;}
  100%{transform: translateY(-20px) scaleY(0.5);opacity: 0;}
}
@keyframes anim2 {
  0%{transform: scaleY(1);opacity: 0;}
  50%{transform: translateY(10px) scaleY(1.4); opacity: 1;}
  100%{transform: translateY(20px) scaleY(0.5);opacity: 0;}
}
@keyframes anim3 {
  0%{transform: rotate(90deg) scaleX(0.5);opacity: 0;}
  50%{transform: rotate(90deg) translateY(10px) scaleX(1.4); opacity: 1;}
  100%{transform: rotate(90deg) translateY(20px) scaleX(0.5);opacity: 0;}
}
@keyframes anim4 {
  0%{transform: rotate(90deg) scaleX(0.5);opacity: 0;}
  50%{transform: rotate(90deg) translateY(-10px) scaleX(1.4); opacity: 1;}
  100%{transform: rotate(90deg) translateY(-20px) scaleX(0.5);opacity: 0;}
}
@keyframes anim5 {
  0%{transform: rotate(-30deg) scaleY(0.5);opacity: 0;}
  50%{transform: rotate(-30deg) translateY(-8px) scaleY(1.4); opacity: 1;}
  100%{transform: rotate(-30deg) translateY(-16px) scaleY(0.5);opacity: 0;}
}
@keyframes anim6 {
  0%{transform: rotate(30deg) scaleY(0.5);opacity: 0;}
  50%{transform: rotate(30deg) translateY(-8px) scaleY(1.4); opacity: 1;}
  100%{transform: rotate(30deg) translateY(-16px) scaleY(0.5);opacity: 0;}
}
@keyframes anim7 {
  0%{transform: rotate(30deg) scaleY(0.5);opacity: 0;}
  50%{transform: rotate(30deg) translateY(8px) scaleY(1.4); opacity: 1;}
  100%{transform: rotate(30deg) translateY(16px) scaleY(0.5);opacity: 0;}
}
@keyframes anim8 {
  0%{transform: rotate(-30deg) scaleY(0.5);opacity: 0;}
  50%{transform: rotate(-30deg) translateY(8px) scaleY(1.4); opacity: 1;}
  100%{transform: rotate(-30deg) translateY(16px) scaleY(0.5);opacity: 0;}
}
</style>
</head>
<body>
<section class="content">
  <div >
    <!-- <a href="" class="btn btn--doar">Doar</a> -->
  </div>
  
  <!-- <div> -->
    <!-- <a href="" class="btn btn--promo">Promoção</a> -->
  <!-- </div> -->
  <div>
    <a href="admin/index.php" class="btn btn--action"><span>Admin</span></a>
  </div>
  <div>
    <a href="index.php" class="btn btn--action"><span>User</span></a>
  </div>
<!-- Redes Sociais -->
  <div class='flat-under'>
    <div class='grow-container'>
      <a href="#" class='to-twitter circle-button'>
        <i class="fa fa-twitter fa-fw" aria-hidden="true"></i>
      </a>
    </div>
    <div class='grow-container'>
      <a href="#" class='to-red circle-button'>
        <i class="fa fa-google-plus fa-fw" aria-hidden="true"></i>
      </a>
    </div>
    <div class='grow-container'>
      <a href="#" class='to-facebook circle-button'>
        <i class="fa fa-facebook fa-fw" aria-hidden="true"></i>
      </a>
    </div>
    <div class='grow-container'>
      <a href="#" class='to-linkedin circle-button'>
        <i class="fa fa-linkedin fa-fw" aria-hidden="true"></i>
      </a>
    </div>
    <div class='grow-container'>
      <a href="#" class='to-reddit circle-button'>
        <i class="fa fa-reddit-alien fa-fw" aria-hidden="true"></i>
      </a>
    </div>
  </div>  
<!--  WOOOOOW  -->
  <!-- <div class="box"> -->
    <!-- <button class="cta">
      <a href="#">Click me</a>
      <span class="shape">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </span>
    </button> -->
  <!-- </div> -->
</section><br><br/>


<div class="flower" style="margin-top:100px">
  <div class="f-wrapper">
    <div class="flower__line"></div>
   
    <div class="f">
      <div class="flower__leaf flower__leaf--1"></div>
      <div class="flower__leaf flower__leaf--2"></div>
      <div class="flower__leaf flower__leaf--3"></div>
      <div class="flower__leaf flower__leaf--4"></div>
      <div class="flower__leaf flower__leaf--5"></div>
      <div class="flower__leaf flower__leaf--6"></div>
      <div class="flower__leaf flower__leaf--7"></div>
      <div class="flower__leaf flower__leaf--8 flower__fall-down--yellow"></div>
    </div>
  </div>

  <div class="f-wrapper f-wrapper--2">
    <div class="flower__line"></div>
    <div class="f">
      <div class="flower__leaf flower__leaf--1"></div>
      <div class="flower__leaf flower__leaf--2"></div>
      <div class="flower__leaf flower__leaf--3"></div>
      <div class="flower__leaf flower__leaf--4"></div>
      <div class="flower__leaf flower__leaf--5"></div>
      <div class="flower__leaf flower__leaf--6"></div>
      <div class="flower__leaf flower__leaf--7"></div>
      <div class="flower__leaf flower__leaf--8 flower__fall-down--pink"></div>
    </div>
  </div>

  <div class="f-wrapper f-wrapper--2">
    <div class="flower__line"></div>
    <div class="f">
      <div class="flower__leaf flower__leaf--1"></div>
      <div class="flower__leaf flower__leaf--2"></div>
      <div class="flower__leaf flower__leaf--3"></div>
      <div class="flower__leaf flower__leaf--4"></div>
      <div class="flower__leaf flower__leaf--5"></div>
      <div class="flower__leaf flower__leaf--6"></div>
      <div class="flower__leaf flower__leaf--7"></div>
      <div class="flower__leaf flower__leaf--8 flower__fall-down--pink"></div>
    </div>
  </div>

  <div class="f-wrapper f-wrapper--2">
    <div class="flower__line"></div>
    <div class="f">
      <div class="flower__leaf flower__leaf--1"></div>
      <div class="flower__leaf flower__leaf--2"></div>
      <div class="flower__leaf flower__leaf--3"></div>
      <div class="flower__leaf flower__leaf--4"></div>
      <div class="flower__leaf flower__leaf--5"></div>
      <div class="flower__leaf flower__leaf--6"></div>
      <div class="flower__leaf flower__leaf--7"></div>
      <div class="flower__leaf flower__leaf--8 flower__fall-down--pink"></div>
    </div>
    <!-- <div class="flower__line"></div> -->
  </div>

  <div class="f-wrapper f-wrapper--3">
    <div class="flower__line"></div>
    <div class="f">
      <div class="flower__leaf flower__leaf--1"></div>
      <div class="flower__leaf flower__leaf--2"></div>
      <div class="flower__leaf flower__leaf--3"></div>
      <div class="flower__leaf flower__leaf--4"></div>
      <div class="flower__leaf flower__leaf--5"></div>
      <div class="flower__leaf flower__leaf--6"></div>
      <div class="flower__leaf flower__leaf--7"></div>
      <div class="flower__leaf flower__leaf--8 flower__fall-down--purple"></div>
    </div>
  </div>
  <div class="flower__glass"></div>
</div>

<script>
    $(".cta").click(function(){
  $(this).addClass("active").delay(300).queue(function(next){
    $(this).removeClass("active");
    next();
  });
});
</script>

</body>
</html>