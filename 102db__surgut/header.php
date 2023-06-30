<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.svg" type="image/svg+xml">
  <title>102dB - Beer & Rock-n-Roll</title>
  <meta name="description" content="Рок-клуб. Полный андеграунд. Репетиционный зал. Бар. NoWi-Fi. Концертный зал.">
  <style>
    @font-face {
  font-family: Montserrat;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-weight: 700;
  src: url('assets/fonts/Montserrat-Bold.woff');
  font-display: swap;
}
@font-face {
  font-family: Montserrat;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-weight: 500;
  src: url('assets/fonts/Montserrat-Medium.woff');
  font-display: swap;
}
@font-face {
  font-family: Montserrat;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-weight: 400;
  src: url('assets/fonts/Montserrat-Regular.woff');
  font-display: swap;
}
* {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 1.2;
  color: #fff;
  text-decoration: none;
}
.header {
  background-image: url(<?php bloginfo('template_url'); ?>/assets/images/headerbg.png);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  height: 100%;
  width: 100%;
  background-color: #292b2e;
}
.wrapper {
  margin: 0 auto;
  max-width: 1366px;
  min-height: 100%;
  position: relative;
  padding-left: 20px;
  padding-right: 20px;
}
.header__container-logo {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  height: 70px;
}
.header__logo,
.logo {
  width: 139px;
  height: 44px;
}
.header__phone {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-size: 21px;
  line-height: 26px;
  background: linear-gradient(90deg, #f1840f -4%, #ff643a 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  text-decoration: none;
  display: inline-block;
}
.header__title {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-size: 83px;
  line-height: 101px;
  text-align: center;
  color: #ffffff;
  text-shadow: 5px 5px 10px #000000;
  margin-top: 50px;
}
.header__subtitle {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-size: 42px;
  line-height: 51px;
  text-align: center;
  color: #ffffff;
  text-shadow: 5px 5px 10px #000000;
}
.header__description {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
  line-height: 20px;
  text-align: center;
  color: #ffffff;
  text-shadow: 5px 5px 10px #000000;
  margin-top: 40px;
}
.header__buttons {
  margin-top: 30px;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  gap: 20px;
}
.header__button {
  width: 240px;
  height: 55px;
  background: linear-gradient(90deg, #f1840f -4%, #ff643a 100%);
  box-shadow: 5px 5px 10px #000000;
  border-radius: 45px;
  text-decoration: none;
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
  line-height: 20px;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 0.3s ease;
}
.header__button:hover {
  transform: scale(1.05);
}
.header__button-phone {
  width: 240px;
  height: 55px;
  background: linear-gradient(90deg, #272727 0%, #000000 100%);
  border: 1px solid #5a5a5a;
  box-shadow: 5px 5px 10px #000000;
  border-radius: 45px;
  text-decoration: none;
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-size: 16px;
  line-height: 20px;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 0.3s ease;
}
.header__button-phone:hover {
  transform: scale(1.05);
}
.header__bottom {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr;
  gap: 20px;
  margin-top: 80px;
  padding-bottom: 100px;
}
.header__address {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-size: 20px;
  line-height: 24px;
  text-align: center;
  color: #ffffff;
  text-shadow: 5px 5px 10px #000000;
  justify-self: start; /* Размещение элемента по горизонтали в начале */
  align-self: center; /* Размещение элемента по вертикали в начале */
  transition: all 0.3s ease;
}
.header__address:hover {
  cursor: pointer;
  color: #ff643a;
}
.header__time {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-size: 18px;
  line-height: 22px;
  color: #ff643a;
  text-shadow: 5px 5px 10px #000000;
  text-align: center;
  justify-self: center; /* Размещение элемента по горизонтали в центре */
  align-self: center; /* Размещение элемента по вертикали в центре */
}
.header__social {
  display: flex;
  flex-direction: row;
  justify-self: end;
  align-items: center;
  gap: 10px;
}
.header__social-link {
  width: 40px;
  height: 40px;
  transition: all 0.3s ease;
}
.header__social-link:hover {
  transform: scale(1.1);
}
.main {
  background-color: #292b2e;
  height: 100%;
  width: 100%;
}
.main__photo {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
}
.afisha {
  background-color: #292b2e;
  height: 100%;
  width: 100%;
  padding-top: 100px;
  padding-bottom: 100px;
  background-image: url(assets/images/sectionbg.png);
}
.afisha__card {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  gap: 50px;
  flex-wrap: wrap;
}
.h2__title {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  line-height: 49px;
  color: #ffffff;
  text-shadow: 5px 5px 10px #000000;
  text-align: center;
  margin-bottom: 50px;
}
.image-container {
  position: relative;
  width: 340px;
  height: 450px;
}
.afisha__card-img {
  background-color: #292b2e;
  border: 1px solid rgba(255, 255, 255, 0.2);
  box-shadow: 5px 5px 10px #000000;
  border-radius: 10px;
  width: 100%;
  height: 100%;
  transition: all 0.3s ease;
  cursor: pointer;
  transition: transform 0.3s ease-in-out;
}
.afisha__card-img:hover {
  transform: scale(1.02);
}
.fullscreen-image {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: contain;
  background: rgba(0, 0, 0, 0.8);
  z-index: 9999;
  transition: opacity 0.3s ease-in-out;
  opacity: 0;
}
.fullscreen-image.open {
  opacity: 1;
}
.footer {
  background-color: #1b1b1d;
  height: 100%;
  width: 100%;
  padding-top: 100px;
  padding-bottom: 20px;
}
.contact-wrapper {
  display: flex;
  flex-direction: row;
  align-items: start;
  justify-content: space-between;
  gap: 20px;
}
.contact__item {
  margin-bottom: 20px;
}
.contact__title {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-size: 20px;
  line-height: 24px;
  color: rgba(255, 255, 255, 0.5);
  margin-bottom: 10px;
}
.contact__link {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 500;
  font-size: 21px;
  line-height: 26px;
  color: #ffffff;
  text-shadow: 5px 5px 10px #000000;
}
.contact__item--time {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  gap: 10px;
  width: 200px;
}
.map {
  overflow: hidden;
  width: 100%;
  height: 500px;
  border-radius: 10px;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}
.footer__copyright {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 20px;
  padding-top: 20px;
}
.copyright {
  color: #7c7c7c;
}
.copyright__link {
  color: #7c7c7c;
  transition: all 0.3s ease;
}
.copyright__link:hover {
  color: #ff643a;
}
/* Адапитв для ноутбука */
@media screen and (max-width: 1024px) {
  .wrapper {
    margin-left: 20px;
    margin-right: 20px;
  }
  .header__bottom {
    padding-bottom: 50px;
  }
  .image-container {
    position: relative;
    width: 280px;
    height: 370px;
  }
}
/* Адапитв для планшета */
@media screen and (max-width: 768px) {
  .header__bottom {
    grid-template-columns: 1fr;
    justify-items: center;
    align-items: center;
  }
  .header__address {
    justify-self: center;
    align-self: center;
  }
  .header__social {
    justify-self: center;
    align-items: center;
    gap: 10px;
  }
  .contact-wrapper {
    display: flex;
    flex-direction: column;
    align-items: start;
    justify-content: space-between;
    gap: 40px;
  }
  .wrapper {
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 0px;
  }
  .image-container {
    position: relative;
    width: 320px;
    height: 450px;
  }
  .header__button:hover {
    transform: scale(1);
  }
}
/* Адапитв для большой мобилки */
@media screen and (max-width: 425px) {
  .wrapper {
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 10px;
    padding: 0px;
  }
  .header__logo,
  .logo {
    width: 90px;
    height: 30px;
  }
  .header__phone {
    font-size: 18px;
  }
  .header__title {
    font-size: 53px;
    margin-top: 20px;
  }
  .header__subtitle {
    font-size: 32px;
  }
  .header__description {
    margin-top: 20px;
  }
  .header__buttons {
    gap: 10px;
  }
  .header__button-phone {
    font-size: 14px;
    width: 200px;
  }
  .header__button {
    font-size: 14px;
    width: 200px;
  }
  .header__bottom {
    margin-top: 50px;
    margin-bottom: 0px;
  }
  .afisha {
    padding-top: 50px;
    padding-bottom: 50px;
  }
  .footer {
    padding-top: 50px;
  }
  .h2__title {
    font-size: 30px;
    margin-bottom: 30px;
  }
  .image-container {
    position: relative;
    width: 359px;
    height: 475px;
  }
  .header__bottom {
    margin-top: 50px;
    margin-bottom: 0px;
    padding-bottom: 40px;
  }
  .header__button {
    font-size: 12px;
    width: 150px;
  }
  .header__button-phone {
    font-size: 12px;
    width: 150px;
  }
  .footer__copyright {
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 20px;
    padding-top: 20px;
  }
  .copyright__link {
    text-align: center;
  }
}
/* Адапитв для маленькая мобилки */
@media screen and (max-width: 320px) {
  .wrapper {
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 10px;
    padding: 0px;
  }
  .header__bottom {
    margin-top: 50px;
    margin-bottom: 0px;
    padding-bottom: 40px;
  }
  .header__logo,
  .logo {
    width: 90px;
    height: 30px;
  }
  .header__phone {
    font-size: 18px;
  }
  .header__title {
    font-size: 43px;
    margin-top: 20px;
  }
  .header__subtitle {
    font-size: 22px;
    line-height: 1;
  }
  .header__description {
    font-size: 14px;
    margin-top: 30px;
  }
  .header__button {
    font-size: 12px;
    width: 150px;
  }
  .header__button-phone {
    font-size: 12px;
    width: 150px;
  }
  .header__address {
    font-size: 16px;
  }
  .header__time {
    font-size: 12px;
  }
  .header__bottom {
    margin-top: 50px;
    margin-bottom: 0px;
  }
  .h2__title {
    font-size: 26px;
    margin-bottom: 30px;
  }
  .afisha__card {
    gap: 20px;
  }
  .image-container {
    position: relative;
    width: 320px;
    height: 423px;
  }
  .afisha__card-img {
    width: 100%;
  }
  .footer {
    padding-top: 50px;
    padding-bottom: 10px;
  }
  .contact-wrapper {
    gap: 20px;
  }
  .map {
    height: 300px;
  }
  .copyright {
    text-align: center;
    padding-top: 20px;
  }
}
  </style>

  <?php wp_head(); ?>
</head>

<body class="body">
  <header class="header">

    <!-- Шапка -->
    <div class="header__container-logo wrapper">
      <a href="index.html" class="header__logo">
        <img src="assets/images/logo.png" alt="logo" class="logo">
      </a>
      <a href="tel:+7904783200" class="header__phone">+7 (904) 78 83 20</a>
    </div>

    <!-- Заголовок -->
    <h1 class="header__title">102dB</h1>
    <h2 class="header__subtitle">Beer & Rock-n-Roll</h2>
    <p class="header__description">Рок-клуб • Репетиционный зал • Бар • Концертный зал</p>

    <!-- Кнопки -->
    <div class="header__buttons">
      <a href="#afisha" class="header__button">Афиша</a>
      <a href="tel:+7904783200" class="header__button-phone">Позвонить</a>
    </div>

    <!-- Низ главной страницы -->
    <div class="header__bottom wrapper">
      <a class="header__address" href="https://yandex.ru/maps/-/CCUHNJRCWA" target="_blank">Маяковского, 12а, Сургут</a>
      <p class="header__time">Часы работы уточняйте перед посещением</p>

      <!-- Социальные сети -->
      <div class="header__social">
        <!-- Телеграм -->
        <a href="https://t.me/+79821946648" class="header__social-link" target="_blank">
          <svg class="header__social-link" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d_16_5)">
              <path
                d="M19 5.20001C26.6218 5.20001 32.8 11.3782 32.8 19C32.8 26.6218 26.6218 32.8 19 32.8C11.3782 32.8 5.19995 26.6218 5.19995 19C5.19995 11.3782 11.3782 5.20001 19 5.20001ZM23.7604 24.625C24.0142 23.8462 25.2034 16.0846 25.3504 14.5552C25.3948 14.092 25.2484 13.7842 24.9616 13.6468C24.6148 13.48 24.1012 13.5634 23.5054 13.7782C22.6882 14.0728 12.241 18.5086 11.6374 18.7654C11.065 19.0084 10.5238 19.2736 10.5238 19.6576C10.5238 19.9276 10.684 20.0794 11.1256 20.2372C11.5852 20.401 12.7426 20.752 13.426 20.9404C14.0842 21.1222 14.8336 20.9644 15.2536 20.7034C15.6988 20.4268 20.8366 16.9888 21.2056 16.6876C21.574 16.3864 21.868 16.7722 21.5668 17.074C21.2656 17.3752 17.7388 20.7982 17.2738 21.2722C16.7092 21.8476 17.11 22.444 17.4886 22.6828C17.9212 22.9552 21.0322 25.042 21.5008 25.3768C21.9694 25.7116 22.4446 25.8634 22.8796 25.8634C23.3146 25.8634 23.5438 25.2904 23.7604 24.625Z"
                fill="white" />
            </g>
            <defs>
              <filter id="filter0_d_16_5" x="-1" y="-1" width="50" height="50" filterUnits="userSpaceOnUse"
                color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                  result="hardAlpha" />
                <feOffset dx="5" dy="5" />
                <feGaussianBlur stdDeviation="5" />
                <feComposite in2="hardAlpha" operator="out" />
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0" />
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_16_5" />
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_16_5" result="shape" />
              </filter>
            </defs>
          </svg>
        </a>
        <!-- Вконтакте -->
        <a href="https://vk.com/club102db" class="header__social-link" target="_blank">
          <svg class="header__social-link" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d_2_19)">
              <path
                d="M19 5.20001C11.3908 5.20001 5.19995 11.3908 5.19995 19C5.19995 26.6092 11.3908 32.8 19 32.8C26.6098 32.8 32.8 26.6092 32.8 19C32.8 11.3908 26.6098 5.20001 19 5.20001ZM24.9838 21.721C26.326 22.9126 26.605 23.338 26.6506 23.4106C27.2068 24.2926 26.0338 24.4 26.0338 24.4H23.5618C23.5618 24.4 22.96 24.4066 22.4458 24.0658C21.6076 23.5168 20.7298 22.4524 20.113 22.6372C19.5952 22.792 19.6 23.4916 19.6 24.0898C19.6 24.304 19.4158 24.4 19 24.4C18.5842 24.4 18.4114 24.4 18.2272 24.4C16.873 24.4 15.4036 23.944 13.9378 22.4122C11.8642 20.2468 10.0456 15.8848 10.0456 15.8848C10.0456 15.8848 9.93815 15.6652 10.0552 15.5314C10.1878 15.3814 10.5484 15.4006 10.5484 15.4006L12.9454 15.4C12.9454 15.4 13.171 15.4426 13.333 15.5566C13.4668 15.6502 13.5412 15.829 13.5412 15.829C13.5412 15.829 13.9438 17.1586 14.4568 18.0064C15.4588 19.6612 15.925 19.7032 16.2652 19.525C16.762 19.267 16.6 17.5078 16.6 17.5078C16.6 17.5078 16.6222 16.7524 16.363 16.4158C16.1632 16.1554 15.781 16.0168 15.6142 15.9952C15.4792 15.9778 15.7048 15.7414 15.9922 15.6064C16.3762 15.4354 16.8988 15.3916 17.8 15.4C18.5014 15.4066 18.7036 15.4486 18.9772 15.5116C19.8046 15.7024 19.6 16.2058 19.6 17.9734C19.6 18.5398 19.522 19.336 19.9492 19.6C20.1334 19.714 20.7646 19.8532 21.8878 18.0292C22.4212 17.164 22.8454 15.7288 22.8454 15.7288C22.8454 15.7288 22.933 15.571 23.0692 15.493C23.2084 15.4132 23.2042 15.415 23.395 15.415C23.5858 15.415 25.4992 15.4 25.9192 15.4C26.3386 15.4 26.7322 15.3952 26.8 15.6412C26.8972 15.9946 26.4904 17.2054 25.4596 18.5194C23.7658 20.6758 23.578 20.4742 24.9838 21.721Z"
                fill="white" />
            </g>
            <defs>
              <filter id="filter0_d_2_19" x="-1" y="-1" width="50" height="50" filterUnits="userSpaceOnUse"
                color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                  result="hardAlpha" />
                <feOffset dx="5" dy="5" />
                <feGaussianBlur stdDeviation="5" />
                <feComposite in2="hardAlpha" operator="out" />
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0" />
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_19" />
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_19" result="shape" />
              </filter>
            </defs>
          </svg>
        </a>
        <!-- Инстаграм -->
        <a href="https://instagram.com/102db?igshid=YmM0MjE2YWMzOA==" class="header__social-link" target="_blank">
          <svg class="header__social-link" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d_2_21)">
              <path
                d="M13.6 5.79999C9.29805 5.79999 5.80005 9.29799 5.80005 13.6V24.4C5.80005 28.702 9.29805 32.2 13.6 32.2H24.4C28.702 32.2 32.2 28.702 32.2 24.4V13.6C32.2 9.29799 28.702 5.79999 24.4 5.79999H13.6ZM26.2 10.6C26.86 10.6 27.4 11.14 27.4 11.8C27.4 12.46 26.86 13 26.2 13C25.54 13 25 12.46 25 11.8C25 11.14 25.54 10.6 26.2 10.6ZM19 12.4C22.642 12.4 25.6 15.358 25.6 19C25.6 22.642 22.642 25.6 19 25.6C15.358 25.6 12.4 22.642 12.4 19C12.4 15.358 15.358 12.4 19 12.4ZM19 13.6C16.024 13.6 13.6 16.024 13.6 19C13.6 21.976 16.024 24.4 19 24.4C21.976 24.4 24.4 21.976 24.4 19C24.4 16.024 21.976 13.6 19 13.6Z"
                fill="white" />
            </g>
            <defs>
              <filter id="filter0_d_2_21" x="-1" y="-1" width="50" height="50" filterUnits="userSpaceOnUse"
                color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                  result="hardAlpha" />
                <feOffset dx="5" dy="5" />
                <feGaussianBlur stdDeviation="5" />
                <feComposite in2="hardAlpha" operator="out" />
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0" />
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_21" />
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_21" result="shape" />
              </filter>
            </defs>
          </svg>
        </a>
        <!-- Вотсап -->
        <a href="https://wa.me/79821946648?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82%20%D0%B4%D1%80%D1%83%D0%B3!%20%D0%94%D0%BE%D0%B1%D1%80%D0%BE%20%D0%BF%D0%BE%D0%B6%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%D1%82%D1%8C%20%D0%B2%20102%20dB!"
          class="header__social-link" target="_blank">
          <svg class="header__social-link" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d_2_17)">
              <path
                d="M19 5.20001C11.3908 5.20001 5.20004 11.3908 5.20004 19C5.20004 21.376 5.81384 23.7124 6.97784 25.774L5.22224 32.038C5.16464 32.2438 5.22044 32.4646 5.36924 32.6176C5.48384 32.7358 5.63984 32.8 5.80004 32.8C5.84804 32.8 5.89664 32.794 5.94404 32.7826L12.4816 31.1632C14.4778 32.2348 16.726 32.8 19 32.8C26.6092 32.8 32.8 26.6092 32.8 19C32.8 11.3908 26.6092 5.20001 19 5.20001ZM25.942 23.8696C25.6468 24.6868 24.2308 25.4326 23.5504 25.5328C22.9396 25.6222 22.1668 25.6606 21.3184 25.3942C20.8042 25.2322 20.1442 25.0174 19.2988 24.6568C15.745 23.1412 13.4242 19.6078 13.2466 19.3744C13.0696 19.141 11.8 17.4778 11.8 15.7564C11.8 14.035 12.715 13.1884 13.0402 12.838C13.3654 12.4876 13.7488 12.4 13.9852 12.4C14.2216 12.4 14.4574 12.403 14.6644 12.4126C14.8822 12.4234 15.1744 12.3304 15.4618 13.0132C15.757 13.714 16.4656 15.4354 16.5532 15.6112C16.642 15.7864 16.7008 15.991 16.5832 16.2244C16.4656 16.4578 16.4068 16.6036 16.2292 16.8082C16.0516 17.0128 15.8572 17.2642 15.6976 17.4214C15.52 17.596 15.3358 17.785 15.5422 18.1354C15.7486 18.4858 16.4596 19.6312 17.5132 20.5588C18.8662 21.7504 20.008 22.12 20.362 22.2952C20.716 22.4704 20.923 22.441 21.1294 22.2076C21.3358 21.9736 22.015 21.1858 22.2508 20.836C22.4866 20.4862 22.723 20.5438 23.0482 20.6608C23.3734 20.7772 25.1152 21.6232 25.4692 21.7984C25.8232 21.9736 26.0596 22.0612 26.1484 22.207C26.2372 22.3522 26.2372 23.053 25.942 23.8696Z"
                fill="white" />
            </g>
            <defs>
              <filter id="filter0_d_2_17" x="-1" y="-1" width="50" height="50" filterUnits="userSpaceOnUse"
                color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                  result="hardAlpha" />
                <feOffset dx="5" dy="5" />
                <feGaussianBlur stdDeviation="5" />
                <feComposite in2="hardAlpha" operator="out" />
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0" />
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17" />
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape" />
              </filter>
            </defs>
          </svg>
        </a>
      </div>
    </div>
  </header>