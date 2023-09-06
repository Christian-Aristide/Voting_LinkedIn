<?php
session_start(); // Démarrer la session
?>

<!DOCTYPE html>
<html lang="en-CI">
  <head>
    <meta charset="utf_8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Section 2</title>
    <script src="https://kit.fontawesome.com/f31faae043.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </head>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  width: 100%;
  height: auto;
}
#main {
  width: 100%;
  max-width: 1440px;
  margin: 0 auto;
  position: relative;
}
ul {
 list-style-type: none;
}
a {
  text-decoration: none;
}
#sectionOne, 
#sectionTwo, 
#sectionThree, 
#sectionFour, 
#sectionFive,
#sectionSix,
#sectionSeven {
  z-index: 1;
}
#sectionOne {
  width: 100%;
  min-height: 100vh;
  position: relative;
}
/*#sectionOne*/ nav {
  width: 100%;
  position: fixed;
  left: 50%;
  transform: translateX(-50%);
  top: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 8rem;
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.1));
  z-index: 3;
}
/*#sectionOne*/ nav img {
  width: max(17.5%, 130px);
}
nav > div {
  position: relative;
}
nav ul {
  display: flex;
  align-items: center;
}
nav ul a {
  color: black;
  font-size: 1rem;
/*today*/ font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  transition: all 0.1s ease-in-out;
}
nav ul a:hover {
  font-size: 1.2rem;
  font-weight: 600;
}
#infos a:last-child {
  background: hsl(213, 63%, 43%);
  padding: 0.7rem 1rem;
  border-radius: 2.5rem;
  color: white;
}
/*today*/#infos a:last-child:hover {
  font-size: 0.8rem;
}
#first {
  background: url("../asset/shutterstock_2337392913.jpg") no-repeat;
  align-items: center;
  display: flex;
}
/* today */
#first ,#second {
  width: 100%;
  height: 130vh;
  background-size: cover; 
  flex-direction: column;
  justify-content: center;
  
}
#second {
  display: none;
  background: url("../asset/or-linkedin.jpg") no-repeat; 
  align-items: flex-start;
  padding: 0 2rem;
}
#second > div > button {
  background: hsl(213, 63%, 43%);
  padding: 0.7rem 1.5rem;
  font-size: 1.4rem;
  font-weight: 700;
  color: white;
  border-radius: 2.8rem;
  border: none;
  cursor: pointer;
  /*today*/font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  /*today*/transition: all 0.1s ease-in-out;
}
#second > div > button:hover {
  font-size: 1.2rem;
}
/* today */
/* today */#sectionOne h1 {
  color: white;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin-bottom: 2rem;
}
/* today */#sectionOne p {
  color: white;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin-bottom: 2rem;
}
#first > div:last-child {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
}
/*today */#first > div:first-of-type a {
  padding: 0.7rem 1rem;
  border-radius: 2.5rem;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0 1.5rem;
  transition: all 0.1s ease-in-out;
}
#first > div:first-of-type a:hover {
  font-size: 0.8rem;
}
/*today */#first > div:first-of-type a:first-of-type {
    background: hsl(213, 63%, 43%);
    color: white;
}
/*today */#first > div:first-of-type a:last-of-type {
  background: white;
  color: red;
}
/*today */#first > div:first-of-type a:last-of-type span {
  font-weight: 700;
}
/* today */.btnSlide {
  position: absolute;
  left: 50%;
  bottom: 2rem;
  transform: translateX(-50%);
  display: flex;
  align-items: center;
}
.oCircle {
  width: 1.2rem;
  height: 1.2rem;
  border-radius: 50%;
  border: 1px solid white;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 0.5rem;
}
.oSmCircle {
  width: 0.3rem;
  height: 0.3rem;
  border-radius: 50%;
  background: white;
}
#f .oSmCircle, #s .oSmCircle {
  width: 100%;
  height: 100%;
}
/*today*/
#sectionTwo {
  width: 100%;
  min-height: 99vh;
  background-color: hsl(213, 63%, 43%);
  display: flex;
  align-items: center;
}
#sectionTwo h1 {
  color: white;
  font-family:Helvetica, Arial, sans-serif;
}
#sectionTwo h1 span {
  padding: 0;
  margin: 0;
  border-bottom: 0.4rem solid white;
  position: relative;
}
#sectionTwo ul {
  margin: 2.5rem 0;
}
.bcircle {
  width: 1rem;
  height: 1rem;
  border-radius: 50%;
  border: 1px solid white;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: 0.5rem;
}
.scircle {
  width: 0.5rem;
  height: 0.5rem;
  border-radius: 50%;
  background-color: white;
}

#sectionTwo li {
  display: flex;
  width: 100%;
  align-items: center;
  color: white;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 1.3rem;
  margin-bottom: 0.5rem;
}
#sectionTwo .text > p {
  color: hsl(56, 82%, 49%);
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 1.3rem;
  width: 80%;
  margin: 1.5rem 0;
  line-height: 2rem;
}
#sectionTwo .illus img {
  width: 100%;
}
#sectionTwo .text > div:last-child > div {
  display: flex;
  align-items: center;
}
#sectionTwo .text > div:last-child > div p {
  color: white;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 1.6rem;
  font-weight: 600;
  line-height: 2rem;
  max-width: 70%;
}
#sectionTwo .text > div:last-child > div i {
  color: white;
  font-size: 3.5rem;
  margin-right: 1rem;
}
#slide {
  width: 100%;
  min-height: 100vh;
  position: relative;   
}
#sectionThree, 
#sectionFour, 
#sectionFive,
#sectionSix,
#sectionSeven {
  width: 100%;
  min-height: 100vh;
  background-position: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
}
.prev, .next {
  display: block;
  position: absolute;
  opacity: 0.5;
  width: 0;
  border-style: solid;
  top: 50%;
  transform: translateY(-50%);
  border-width: 2rem;
  transition: all 0.1s ease-in-out;
  cursor: pointer;
}
.prev:hover, .next:hover {
  opacity: 1;
}
.prev {
  border-right-color: white;
  border-top-color: transparent;
  border-left-color: transparent;
  border-left-width: 0;
  border-bottom-color: transparent;
  left: 1rem;
  
}
.next {
  border-top-color: transparent;
  border-right-color: transparent;
  border-right-width: 0;
  border-bottom-color: transparent;
  border-left-color: white;
  right: 1rem;
  
}
#sectionThree {
background: url('../asset/award-nom.jpg') no-repeat;
background-size: 100% 100%;
}
#sectionThree .top, 
#sectionFour .top, 
#sectionFive .top,
#sectionSix .top, 
#sectionSeven .top {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 5rem;
}
#sectionThree .top img, 
#sectionFour .top img, 
#sectionFive .top img,
#sectionSix .top img,
#sectionSeven .top img {
  display: block;
  margin: 0 auto;
  /*border: 1px solid red;*/
}
#sectionThree .top h1, 
#sectionFour .top h1, 
#sectionFive .top h1,
#sectionSix .top h1,
#sectionSeven .top h1 {
  color: white;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 500;
  letter-spacing: 2px;
  margin-top: -1rem;
  position: relative;
}
#sectionThree .bottom, 
#sectionFour .bottom, 
#sectionFive .bottom,
#sectionSix .bottom,
#sectionSeven .bottom {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
}
#sectionThree .bottom  a {
  display: inline-block;
  border: 1px solid red;
}
#sectionThree .bottom .categorie {
  width: max(23%, 300px);
  /* margin-bottom: 5rem; */
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  padding-top: 8rem;
}
#sectionThree .bottom .categorie .catCircle {
  width: 250px;
  height: 250px;
  border-radius: 50%;
  border: 4px solid hsl(45, 100%, 50%);
  background-color: white;
  position: absolute;
  top: 2rem;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1.8rem;
  text-align: center;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 600;
  color: hsl(243, 100%, 11%);
  cursor: pointer;
  transition: all 0.1s ease-in-out;
}
#sectionThree .bottom .categorie .catCircle:hover {
  top: 1rem;
  width: 240px;
  height: 240px;
}
#sectionThree .bottom .categorie img {
  /*width: 250px;*/
  width: 100%;
}
#sectionFour, 
#sectionFive,
#sectionSix, 
#sectionSeven {
  background: url("../asset/award-vote.jpg") no-repeat;
  background-size: cover;
  padding-bottom: 4rem;
}
#sectionFour .bottom .candidate, 
#sectionFive .bottom .candidate,
#sectionSix .bottom .candidate,
#sectionSeven .bottom .candidate {
  display: flex;
  flex-direction: column;
  align-items: center;
}
#sectionFour .bottom .candidate .candPic, 
#sectionFive .bottom .candidate .candPic,
#sectionSix .bottom .candidate .candPic, 
#sectionSeven .bottom .candidate .candPic {
  width: 250px;
  height: 250px;
  border-radius: 50%;
  border: 5px solid hsl(47, 100%, 50%);
  padding: 0.7rem;
  outline: 3px solid white;
  outline-offset: 1rem;
  overflow: hidden;
  margin-bottom: 3rem;
}
#sectionFour .bottom .candidate .candPic .smcandPic, 
#sectionFive .bottom .candidate .candPic .smcandPic,
#sectionSix .bottom .candidate .candPic .smcandPic, 
#sectionSeven .bottom .candidate .candPic .smcandPic {
    width: 100%;
    height: 100%;
    border-radius: 50%;
}
#sectionFour .bottom .candidate:first-child .candPic .smcandPic {
  background: url("../asset/photo_nomine/producteur_contenu/divine.jpg") no-repeat;
  background-size: 100%;
}
#sectionFour .bottom .candidate:nth-child(2) .candPic .smcandPic {
  background: url("../asset/photo_nomine/producteur_contenu/godwin.JPG") no-repeat;
  background-size: 100%;
}
#sectionFour .bottom .candidate:nth-child(3) .candPic .smcandPic {
  background: url("../asset/photo_nomine/producteur_contenu/camille.JPG") no-repeat;
  background-size: 100%;
}
#sectionFour .bottom .candidate:nth-child(4) .candPic .smcandPic {
  background: url("../asset/photo_nomine/producteur_contenu/audrey.jpg") no-repeat;
  background-size: 100%;
}
#sectionFour .bottom .candidate .candiInfos, 
#sectionFive .bottom .candidate .candiInfos, 
#sectionSix .bottom .candidate .candiInfos,
#sectionSeven .bottom .candidate .candiInfos {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  color: white;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 1rem;
}
#sectionFive .bottom .candidate:first-child .candPic .smcandPic {
  background: url("../asset/photo_nomine/contenu_rh/marie.jpg") no-repeat;
  background-size: cover;
  background-position: center;
}
#sectionFive .bottom .candidate:nth-child(2) .candPic .smcandPic {
  background: url("../asset/photo_nomine/contenu_rh/anicette.JPG") no-repeat;
  background-size: 100%;
}
#sectionFive .bottom .candidate:nth-child(3) .candPic .smcandPic {
  background: url("../asset/photo_nomine/contenu_rh/arielle.jpg") no-repeat;
  background-size: 100%;
}
#sectionFive .bottom .candidate:nth-child(4) .candPic .smcandPic {
  background: url("../asset/photo_nomine/contenu_rh/rachidat.jpg") no-repeat;
  background-size: 100%;
}

#sectionSix .bottom .candidate:first-child .candPic .smcandPic {
  background: url("../asset/photo_nomine/coach_expert/binnie.jpg") no-repeat;
  background-size: 100%;
}
#sectionSix .bottom .candidate:nth-child(2) .candPic .smcandPic {
  background: url("../asset/photo_nomine/coach_expert/kadio.jpg") no-repeat;
  background-size: 100%;
}
#sectionSix .bottom .candidate:nth-child(3) .candPic .smcandPic {
  background: url("../asset/photo_nomine/coach_expert/boka.jpg") no-repeat;
  background-size: 100%;
}
#sectionSix .bottom .candidate:nth-child(4) .candPic .smcandPic {
  background: url("../asset/photo_nomine/coach_expert/kingue.jpg") no-repeat;
  background-size: 100%;
}
#sectionSeven .bottom .candidate:first-child .candPic .smcandPic {
  background: url("../asset/photo_nomine/contributeur_linkedin/grace.JPG") no-repeat;
  background-size: 100%;
}
#sectionSeven .bottom .candidate:nth-child(2) .candPic .smcandPic {
  background: url("../asset/photo_nomine/contributeur_linkedin/raissa.jpg") no-repeat;
  background-size: 100%;
}
#sectionSeven .bottom .candidate:nth-child(3) .candPic .smcandPic {
  background: url("../asset/photo_nomine/contributeur_linkedin/yasmine.jpg") no-repeat;
  background-size: 100%;
}
#sectionSeven .bottom .candidate:nth-child(4) .candPic .smcandPic {
  background: url("../asset/photo_nomine/contributeur_linkedin/joseph.jpg") no-repeat;
  background-size: cover;
  background-position: center;
}
.candiInfos h2 {
  font-size: 1.2rem;
}
.candiInfos .count {
  font-size: 1.5rem;
  display: inline-block;
  /* padding: 0.2rem 4rem; */
  border: 2px solid white;
  border-radius: 2.5rem;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 700;
  margin-top: 1rem;
  height: 2.3rem;
  width: 10rem;
  display: flex;
  justify-content: center;
  align-items: center;
}
.candiInfos .candBtn {
  height: 2.3rem;
  width: 10rem;
  display: flex;
  justify-content: center;
  align-items: center;
  background: hsl(47, 100%, 50%);
  border: none;
  border-radius: 2.5rem;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 700;
  font-size: 1.4rem;
  margin-top: 1rem;
  color: white;
  cursor: pointer;
  transition: all 0.1s ease-in-out;
}
.candiInfos .candBtn:hover {
  height: 2.1rem;
  width: 9rem;
  font-size: 1.3rem;
}
footer {
  background-image: linear-gradient(90deg, rgba(0, 0, 0, 1), rgb(73, 1, 1));
  padding: 1rem 2rem;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: white;
}
footer > img {
  width: 150px;
}
footer > div {
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  flex-wrap: wrap;
}
footer h2 {
  color: hsl(0, 100%, 46%);
  font-weight: 400;
  font-size: 1.2rem;
  margin: 1.3rem 0;
}
footer .contact > div:not(:last-child), footer .info li {
  margin-bottom: 0.6rem;
}
footer .contact i {
  color: hsl(0, 100%, 46%);
  font-size: 1rem;
  margin-right: 0.5rem;
}
footer .social i {
  color: white;
  font-size: 1.3rem;
  cursor: pointer;
  transition: all 0.1s ease-in-out;
}
footer .social i:hover {
  font-size: 1.5rem;
}
footer .info > div {
  display: flex;
  align-items: flex-start;
  /*gap: 6rem;*/
}
footer .info > div ul:first-child {
  margin-right: 6rem;
}
footer form {
  display: flex;
  flex-direction: column;
  align-items: center;
}
footer form input {
  border: none;
  background: hsl(0, 10%, 41%);
  margin-bottom: 0.8rem;
  caret-color:hsl(0, 0%, 100%);
  color: white;
}
footer form input:focus {
  outline: none;
}
footer form input, footer form button {
  font-size: 1rem;
  padding: 0.5rem;
  border-radius: 5px;
  border: none;
  width: 13rem;
}
footer form input::placeholder {
  color: white;
  opacity: 1;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
footer form input::-moz-placeholder {
  color: white;
  opacity: 1;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
footer form input::-webkit-input-placeholder {
  color: white;
  opacity: 1;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
footer form input:-ms-input-placeholder {
  color: white;
  opacity: 1;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
footer form button {
  background: hsl(0, 100%, 46%);
  color: white;
  transition: all 0.1s ease-in-out;
  cursor: pointer;
}
footer form button:hover {
  font-size: 0.9rem;
  width: 12rem;
}
#fBottom {
  padding-top: 0.6rem;
  border-top: 2px solid hsl(0, 0%, 100%);
  margin-top: 2rem;  
}




@media only screen and (min-width:1000px) {
  .mob {
    display: none;
  }
  /*#sectionOne*/ nav {
    width: 100%;
    max-width: 1440px;
    padding: 0 2rem;
  }
  nav ul {
    justify-content: flex-end;
  }
  nav ul a {
    margin-left: 1.5rem;
  }
  #infos a:last-child {
    margin-left: 1rem;
  }
  #sectionOne h1 {
    font-size: 3.2rem;
  }
  #sectionOne p {
    font-size: 1.5rem;
  }
  #second {
    background-size: 100% 100%;
  }
  #second > div:first-child {
    width: 50%;
    padding-right: 1.5rem;
  }
  #sectionTwo {
    padding: 3rem 2.5rem;
  }
  #sectionTwo h1 {
    font-size: 3.2rem;
  }
  #sectionTwo .text {
    max-width: 60%;
  }
  #sectionTwo .illus {
    width: 40%;
    overflow: hidden;
  }
  #sectionTwo .text > div:last-child {
    display: flex;
    align-items: center;
  }
  #sectionThree .top h1, 
  #sectionFour .top h1, 
  #sectionFive .top h1, 
  #sectionSix .top h1, 
  #sectionSeven .top h1 {
    font-size: 1.8rem;
  }
  #sectionFour .top h1::before, 
  #sectionFive .top h1::before, 
  #sectionSix .top h1::before, 
  #sectionSeven .top h1::before {
    content: "";
    width: 4rem;
    height: 2px;
    background-color: hsl(45, 100%, 50%);
    position: absolute;
    left: 0;
    top: 50%;
    transform: translate(calc(-1 * (100% + 1rem)), -50%); 
  }
  #sectionFour .top h1::after, 
  #sectionFive .top h1::after, 
  #sectionSix .top h1::after, 
  #sectionSeven .top h1::after {
    content: "";
    width: 4rem;
    height: 2px;
    background-color: hsl(45, 100%, 50%);
    position: absolute;
    right: 0;
    top: 50%;
    transform: translate(calc(1 * (100% + 1rem)), -50%); 
  }
  #sectionThree .top img, 
  #sectionFour .top img, 
  #sectionFive .top img, 
  #sectionSix .top img,
  #sectionSeven .top img {
    width: 35%;
  }
  #sectionThree .bottom, 
  #sectionFour .bottom, 
  #sectionFive .bottom, 
  #sectionSix .bottom, 
  #sectionSeven .bottom {
    justify-content: center;
    align-items: center;
  }
  #sectionFour .bottom .candidate, 
  #sectionFive .bottom .candidate, 
  #sectionSix .bottom .candidate, 
  #sectionSeven .bottom .candidate {
    width: max(23%, 300px);
    margin-bottom: 5rem;
  }
  footer > div {
    justify-content: space-between;
    align-items: flex-start;
  }
}


@media only screen and (max-width:999px) {
  /*#sectionOne*/ nav {
    padding: 0 1em;
  }
  nav div {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
  }
  #toggleMenu {
    cursor: pointer;
  }
  nav div i {
    font-size: 1.5rem;
    color: hsl(213, 63%, 43%);
  }
  nav ul {
    display: none;
    width: calc(99vw);/*calc(100vw - 2rem);*/
    flex-direction: column;
    position: absolute;
    top: calc(100% + 1rem);
    right: -1em;
    background: rgba(255, 255, 255, 0.349);
    padding: 1rem;
    border-radius: 4px;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
  }
  nav ul a:not(:last-child) {
    margin-bottom: 0.7rem;
  }
  #sectionOne h1, #sectionOne p {
    text-align: center;
  }
  #sectionOne h1 {
    font-size: 2rem;
  }
  #sectionOne p {
    font-size: 1.2rem;
  }
  #first > div:first-of-type {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  #first > div:first-of-type a:first-of-type {
    margin-bottom: 1.5rem;
  } 
  #second {
    background-size: cover;
  }
  #second > div:first-child {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  #sectionTwo {
    flex-direction: column-reverse;
    padding: 2rem 1rem;
  }
  #sectionTwo h1 {
    font-size: 2.2rem;
    line-height: 3rem;
  }
  #sectionTwo .illus {
    margin: 0 auto;
    max-width: min(100%, 30rem);
    margin-bottom: 2rem;
  }
  #sectionTwo .text > div:last-child > div {
    margin-bottom: 1.5rem;
  }
  #sectionTwo li {
    font-size: 1rem;
  }
  #sectionThree .top h1, 
  #sectionFour .top h1, 
  #sectionFive .top h1, 
  #sectionSix .top h1,
  #sectionSeven .top h1 {
    font-size: 1.4rem;
    text-align: center;
  }
  #sectionThree .top img, 
  #sectionFour .top img, 
  #sectionFive .top img, 
  #sectionSix .top img, 
  #sectionSeven .top img {
    width: max(90%, 225px)
  }
  #sectionThree .bottom, 
  #sectionFour .bottom, 
  #sectionFive .bottom, 
  #sectionSix .bottom, 
  #sectionSeven .bottom {
    flex-direction: row;
    align-items: center;
    justify-content: space-evenly;
    align-items: center;
  }
  #sectionFour .bottom .candidate, 
  #sectionFive .bottom .candidate, 
  #sectionSix .bottom .candidate, 
  #sectionSeven .bottom .candidate {
    width: min(90%, 300px);
    margin-bottom: 5rem;
  }
}
  </style>
  <body>
    <div id="main">
      <nav>
        <img src="../asset/logo-linkedin.png" />
        <div>
          <span id="toggleMenu" class="mob">
            <i class="fa-solid fa-bars"></i>
          </span> 
          <ul id="infos">
            <a href="#"><li>A PROPOS</li></a>
            <a href="#"><li>AWARDS</li></a>
            <a href="#foot"><li>CONTACT</li></a>
            <a href="#"><li>PRENDRE SON TICKET D'ENTREE</li></a>
          </ul>
        </div>
      </nav> 
        <section id="sectionOne">
          <div id="first">
            <h1>LINKEDIN LOCAL ABIDJAN</h1>
            <p>19 Septembre 2023 / Palm Club Hôtel</p>
            <div>
                <a href="#">PRENDRE SON TICKET D'ENTREE</a>
                <a href="#">PASS D'ENTREE: <span>10.000FCFA</span></a>
            </div>
            <div class="btnSlide">
              <div id="f" class="oCircle">
                <div class="oSmCircle"></div>
              </div>
              <div class="oCircle">
                <div class="oSmCircle"></div>
              </div>
            </div>
          </div>
          
          <div id="second">
            <div>
              <h1>LINKEDIN LOCAL ABIDJAN AWARDS</h1>
              <p>Votre évènement inédit dédié à la valorisation de nos 
                experts et influenceurs LindekIn
              </p>
              <button>JE PASSE AU VOTE</button>
            </div>
            <div class="btnSlide">
              <div class="oCircle">
                <div class="oSmCircle"></div>
              </div>
              <div id="s" class="oCircle">
                <div class="oSmCircle"></div>
              </div>
            </div>
          </div>
          
        </section>
        <section id="sectionTwo">
            <div class="text">
              <h1>POURQUOI PARTICIPER A <span>LINKEDIN</span> LOCAL ABIDJAN</h1>
      
              <ul>
                <li>
                  <div class="bcircle"><div class="scircle"></div></div>
                  <span>Pour apprendre à trouver un emploi grâce à LinkedIn.</span>
                </li>
                <li>
                  <div class="bcircle"><div class="scircle"></div></div>
                  <span>Pour rencontrer nos amis virtuels et tisser des liens.</span>
                </li>
                <li>
                  <div class="bcircle"><div class="scircle"></div></div>
                  <span>Pour comprendre le fonctionnement de LinkedIn.</span>
                </li>
                <li>
                  <div class="bcircle"><div class="scircle"></div></div>
                  <span>Pour s'inspirer du parcours des autres.</span>
                </li>
              </ul>
      
              <p>LinkedIn local, un concept CREER en Australie approuvé par LinkedIn 
                  et repris dans plusieurs pays et qui est à sa quatrième édition en 
                  Côte d'Ivoire.
              </p>
      
              <div>
                <div class="date">
                  <i class="fa-solid fa-calendar-days"></i>
                  <p>SAMEDI 09 SEPTEMBRE 2023</p>
                </div> 
                <div class="localisation">
                  <i class="fa-solid fa-location-crosshairs"></i>
                  <p>PALM CLUB HÔTEL ABIDJAN COCODY</p>
                </div>  
              </div>
            </div>
            <div class="illus">
              <img src="groupemod1.png" />
            </div>
        </section>

          <div id="slide">
            <section id="sectionThree">
                <div class="top">
                  <img src="../asset/logo-awards.png" />
                  <h1>JE FAIS LE CHOIX DE MON INFLUENCEUR LINKEDIN LOCAL FAVORI</h1>
                </div>
                <div class="bottom">

                  <div class="categorie">
                    <a id="sFour" href="#sectionFour">  
                      <div class="catCircle">
                      Jeunes Producteurs de Contenus
                      </div>
                    </a>
                    <img src="../asset/plandetravail.png" />
                  </div>

                  <div class="categorie">
                    <a id="sFive" href="#sectionFive">  
                    <div class="catCircle">
                    Créateurs de contenus RH motivation Consultant
                    </div>
                    </a>
                    <img src="../asset/plandetravail.png" />
                  </div>
                  <div class="categorie">
                    <a id="sSix" href="#sectionSix">  
                    <div class="catCircle">
                    Coachs & Experts
                    </div>
                    </a>
                    <img src="../asset/plandetravail.png" />
                  </div>
                  <div class="categorie">
                    <a id="sSeven" href="#sectionSeven">  
                    <div class="catCircle">
                    Contributeurs LinkedIn
                    </div>
                    </a>
                    <img src="../asset/plandetravail.png" />
                  </div>
                </div>
              </section>
    
              <section id="sectionFour">
                <div class="top">
                  <img src="../asset/logo-awards.png" />
                  <h1>JEUNES PRODUCTEURS DE CONTENUS</h1>
                </div>
                
                <div class="prev"></div>
                <div class="next"></div> 
                
                <div class="bottom">
                  <?php include "../function/includes/script1.php"; ?>
                  
                  <!-- <div class="candidate">
                    <div class="candPic">
                        <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                    <h2>Godwin SOOLA</h2>
                    <div class="count">0</div>
                    <button class="candBtn">VOTEZ ICI</button>
                    </div>
                  </div>
                  
                  <div class="candidate">
                    <div class="candPic">
                        <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                      <h2>Camille ETE</h2>
                      <div class="count">0</div>
                      <button class="candBtn">VOTEZ ICI</button>
                    </div>
                  </div>
                  
                  <div class="candidate">
                    <div class="candPic">
                        <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                      <h2>Audrey BAMBA</h2>
                      <div class="count">0</div>
                      <button class="candBtn">VOTEZ ICI</button>
                    </div>
                  </div> -->
                </div>
              </section>
    
              <section id="sectionFive">
                <div class="top">
                  <img src="../asset/logo-awards.png" />
                  <h1>CREATEURS DE CONTENUS RH / MOTIVATION / CONSULTANTS</h1>
                </div>
                
                <div class="prev"></div>
                <div class="next"></div>

                <div class="bottom">
                  <?php include "../function/includes/script2.php"; ?>
                  
                  <!-- <div class="candidate">
                    <div class="candPic">
                        <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                    <h2>Godwin SOOLA</h2>
                    <div class="count">0</div>
                    <button class="candBtn">VOTEZ ICI</button>
                    </div>
                  </div>
                  
                  <div class="candidate">
                    <div class="candPic">
                        <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                      <h2>Camille ETE</h2>
                      <div class="count">0</div>
                      <button class="candBtn">VOTEZ ICI</button>
                    </div>
                  </div>
                  
                  <div class="candidate">
                    <div class="candPic">
                        <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                      <h2>Audrey BAMBA</h2>
                      <div class="count">0</div>
                      <button class="candBtn">VOTEZ ICI</button>
                    </div>
                  </div> -->
                </div>
              </section>
    
              <section id="sectionSix">
                <div class="top">
                  <img src="../asset/logo-awards.png" />
                  <h1>COACHS / EXPERTS</h1>
                </div>
                
                <div class="prev"></div>
                <div class="next"></div>

                <div class="bottom">
                  <?php include "../function/includes/script3.php"; ?>
                  
                  <!-- <div class="candidate">
                    <div class="candPic">
                        <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                    <h2>Godwin SOOLA</h2>
                    <div class="count">0</div>
                    <button class="candBtn">VOTEZ ICI</button>
                    </div>
                  </div>
                  
                  <div class="candidate">
                    <div class="candPic">
                        <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                      <h2>Camille ETE</h2>
                      <div class="count">0</div>
                      <button class="candBtn">VOTEZ ICI</button>
                    </div>
                  </div>
                  
                  <div class="candidate">
                    <div class="candPic">
                        <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                      <h2>Audrey BAMBA</h2>
                      <div class="count">0</div>
                      <button class="candBtn">VOTEZ ICI</button>
                    </div>
                  </div> -->
                </div>
              </section>
    
              <section id="sectionSeven">
                <div class="top">
                  <img src="../asset/logo-awards.png" />
                  <h1>CONTRIBUTEURS LINKEDIN</h1>
                </div>
                
                <div class="prev"></div>
                <div class="next"></div>

                <div class="bottom">
                  <?php include "../function/includes/script4.php"; ?>
                  
                  <!-- <div class="candidate">
                    <div class="candPic">
                        <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                    <h2>Godwin SOOLA</h2>
                    <div class="count">0</div>
                    <button class="candBtn">VOTEZ ICI</button>
                    </div>
                  </div>
                  
                  <div class="candidate">
                    <div class="candPic">
                        <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                      <h2>Camille ETE</h2>
                      <div class="count">0</div>
                      <button class="candBtn">VOTEZ ICI</button>
                    </div>
                  </div>
                  
                  <div class="candidate">
                    <div class="candPic">
                        <div class="smcandPic"></div>
                    </div>
                    <div class="candiInfos">
                      <h2>Audrey BAMBA</h2>
                      <div class="count">0</div>
                      <button class="candBtn">VOTEZ ICI</button>
                    </div>
                  </div> -->
                </div>
              </section>
          </div> 
          <footer id="foot">
            <img src="../asset/logo-blanc-footer.png" />
            <div>
              <div class="contact">
                <h2>Contact Us</h2>
                <div>
                  <i class="fa-solid fa-phone-volume"></i><span>+225 07 48 42 47 25</span>
                </div>
                <div>
                  <i class="fa-solid fa-envelope"></i><span>studiosadinkra@gmail.com</span>
                </div>
                <div class="social">
                  <a href="https://facebook.com"><i class="fa-brands fa-square-facebook"></i></a>
                  <a href="https://instagram.com"><i class="fa-brands fa-square-instagram"></i></a>
                  <a href="https://twitter.com"><i class="fa-brands fa-square-x-twitter"></i></a>
                  <a href="https://linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
                </div>
              </div>
              <div class="info">
                <h2>Information</h2>
                <div>
                  <ul>
                    <li>About Us</li>
                    <li>Services</li>
                    <li>Team</li>
                    <li>Projets</li>
                    <li>Coaching</li>
                  </ul>
                  <ul>
                    <li>Brandblog</li>
                    <li>Feedback</li>
                    <li>Supports</li>
                    <li>Terms & Condition</li>
                    <li>Privacy Policy</li>
                  </ul> 
                </div>
              </div>
              <div class="newsletter">
                <h2>Newsletter</h2>
                <form action="" method="POST">
                  <input type="text" name="name" placeholder="Votre Nom" />
                  <input type="text" name="email" placeholder="Votre Email" />
                  <button type="submit">Recevez nos actualités</button>
                </form>
              </div>
            </div>
            <div id="fBottom">
              <span>&copy; X3M Ideas Limited <span id="now"></span>. Politique De Confidentialité</span>
              <span>All Rights Reserved.</span>
            </div>
          </footer>    
    </div>
  </body>
  <script>
    const four = document.getElementById("sectionFour");
const five = document.getElementById("sectionFive");
const six = document.getElementById("sectionSix");
const seven = document.getElementById("sectionSeven");
const award = document.querySelector("#infos > a:nth-child(2)");
const apropos = document.querySelector("#infos > a:nth-child(1)");
const sFour = document.getElementById("sFour");
const sFive = document.getElementById("sFive");
const sSix = document.getElementById("sSix");
const sSeven = document.getElementById("sSeven");
const toggleMenu = document.getElementById("toggleMenu"); //icone du menu sur mobile
const infos = document.getElementById("infos");
var ref = false; //repère pour savoir si le menu est visible ou pas

document.getElementById("now").innerHTML = new Date().getFullYear().toString(); //facultatif

toggleMenu.addEventListener("click", () => {  //pour afficher ou cacher le menu sur mobile
  ref ? infos.style.display = "none" : infos.style.display = "flex";
  ref = !ref;
});

const array = [four, five, six, seven]; //tableau pour les slides, le tableau contient chaque catégorie pour les votes
var index = 0;  //index pour le tableau

const prev = document.getElementsByClassName("prev"); //flèche pour slider à droite
const next = document.getElementsByClassName("next");  //       slider à gauche

five.style.display = "none";  //par défaut je n'affiche pas ces sections parce que c'est le javascript qui doit les afficher
six.style.display = "none";
seven.style.display = "none";

Array.from(prev).forEach(elem => { //le code pour slider à gauche
  elem.addEventListener("click", (event) => {
    index--;
    if(index < 0) { //essayez de comprendre ce block if :)
      index = array.length - 1;
    }
    array.forEach(elem => {
      elem.style.display="none";
    });
    array[index].style.display = "flex";
  });
});

Array.from(next).forEach(elem => { //le code pour slider à droite 
  elem.addEventListener("click", (event) => {
    index++;
    if(index > array.length - 1) { //essayez de comprendre ce block if :)
      index = 0;
    }
    array.forEach(elem => {
      elem.style.display="none";
    });
    array[index].style.display = "flex";
  });
});

sFour.addEventListener("click", () => {
  array.forEach(elem => {
    elem.style.display="none";
  });
  four.style.display = "flex";
  index = 0;
});

sFive.addEventListener("click", () => {
  array.forEach(elem => {
    elem.style.display="none";
  });
  five.style.display = "flex";
  index = 1;
});

sSix.addEventListener("click", () => {
  array.forEach(elem => {
    elem.style.display="none";
  });
  six.style.display = "flex";
  index = 2;
});

sSeven.addEventListener("click", () => {
  array.forEach(elem => {
    elem.style.display="none";
  });
  seven.style.display = "flex";
  index = 3;
});

award.addEventListener("click", () => {
  document.getElementById("first").style.display = "none";
  document.getElementById("second").style.display = "flex";
});

apropos.addEventListener("click", () => {
  document.getElementById("first").style.display = "flex";
  document.getElementById("second").style.display = "none";
});
  </script>
</html>