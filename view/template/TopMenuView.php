<?php

namespace app\view\template;

use app\view\template\iView;

class TopMenuView implements iView
{
    
    public function render($model = []) : string {

        return  $html = <<<HTML
        <section class="top-menu shadow">
        <div class="logo flex-center">
          <span class="logo-head font-inconsolata font-size-24">TB</span>
          <p class="logo-tail font-inconsolata font-size-16">-data</p>
        </div>
        <!--Login / Sigin-->
        <section id="login" class="login font-size-20">
        
  
  <section class="login-register-container">
      <div class="button-container-2 flex-center button-activ">
          <input class="btn-custom font-size-20 font-inconsolata" type="button" name="loguj" value="Zaloguj" id="zaloguj">
          <input class="btn-custom font-size-20 font-inconsolata" type="button" name="rejestruj" value="Zarejestruj" id="rejestruj">
      </div>
      <div class="user-container flex-center ">
          <label>Witaj, VeryLongUser</label>
          <a class="btn-custom font-size-20 font-inconsolata" href="./php/oldWeb/logout.php">Wyloguj</a>
          <!-- <input class="btn-custom font-size-20 font-inconsolata" type="button" id="logout" value="Wyloguj" /> -->
      </div>
      <div class="log-in-container flex-center ">
          <h2 class="heder-log">Login</h2>
          <span class="exit-log-in"><i class="fas fa-times" aria-hidden="true"></i></span>
          <div class="error-log-in"></div>
          <form action="/index.php" method="POST">
              <span class="font-size-22">Login:</span>
              <input type="text" name="login" id="login" autocomplete="nickname" value="">
              <span class="font-size-22">Password:</span>
              <input type="password" name="login_pass" id="login-pass" autocomplete="current-password">
              <input class="btn" type="submit" value="Login">
          </form>
      </div>
      <div class="sing-in-container flex-center ">
          <h2 class="heder-log">Sign up</h2>
          <span class="exit-sign-in"><i class="fas fa-times" aria-hidden="true"></i></span>
          <div class="error-sing-in"></div>
          <form action="/index.php" method="POST">
              <span class="font-size-22">Login:</span>
              <input type="text" name="sing_in" id="sing-in" autocomplete="nickname" value="">
              <span class="font-size-22">Email:</span>
              <input type="email" name="sing_in_email" id="sing-in-email" autocomplete="email" value="">
              <span class="font-size-22">Password:</span>
              <input type="password" name="sing_in_pass" id="sing-in-pass" autocomplete="new-password">
              <span class="font-size-22">Repeat Password:</span>
              <input type="password" name="sing_in_pass2" id="sing-in-pass2" autocomplete="new-password">
              <span class="font-size-22">Dodaj liczby:<label for="seciurity">4 + 5</label></span>
              <input type="number" name="seciurity" id="seciurity" autocomplete="off">
              <input class="btn" type="submit" value="Continue">
          </form>
      </div>
  </section>
  
        </section>
        <!--!Login / Sigin-->
        <div class="main-menu font-inconsolata font-size-20 flex-center">
          <ol class="flex-center">
            <li>
              <a href="/"><i class="fas fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li>
              <a href="/calculatorOld" id="kalk"><i class="fas fa-calculator" aria-hidden="true"></i> Calculator<i class="new"> Old</i></a>
            </li>
            <li>
              <a href="/calculatorNew" id="kalk_new"><i class="fas fa-calculator" aria-hidden="true"></i> Calculator<i class="new"> New</i></a>
            </li>
            <li>
              <a href="/forum" id="proj"><i class="fas fa-comments" aria-hidden="true"></i> Forum</a>
            </li>
            <li>
              <a href="/about" id="about_me"><i class="fas fa-info" aria-hidden="true"></i> About</a>
            </li>
          </ol>
        </div>
        <div class="top-menu-button">
          <i class="fas fa-plus" aria-hidden="true"></i>
        </div>
      </section>
HTML;
    }

}
