<?php
// Valeur par défaut : remplace par ta vraie source (session, base de données, formulaire…)
$user = $user ?? 'Invité';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carte profil</title>
  <style>
    /* Avant d'ajouter une vraie photo dans la div .card-photo : vide les styles de .card-photo,
       supprime .card-photo::before et .card-photo::after, puis mets les styles voulus pour .card-photo. */

    body {
      margin: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 24px;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      background: #f4f4f4;
    }

    h1 {
      color: #323232;
      font-weight: 500;
    }

    .card {
      --font-color: #323232;
      --font-color-sub: #666;
      --bg-color: #fff;
      --main-color: #323232;
      width: 200px;
      height: 254px;
      background: var(--bg-color);
      border: 2px solid var(--main-color);
      box-shadow: 4px 4px var(--main-color);
      border-radius: 5px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .card-photo {
      /* à vider et remplacer si tu mets une vraie photo */
      position: relative;
      flex-shrink: 0;
      transform: scale(0.3) translate(220px, 230px);
      transition: transform 0.3s;
      width: 250px;
      height: 250px;
      margin-left: -125px;
      margin-top: -125px;
      background: radial-gradient(circle,rgba(0,0,0,0.15) 50%,rgba(0,0,0,0) 50.8%) 14% 30%/11% 11%,radial-gradient(circle,#ffdab9 50%,rgba(255,218,185,0) 50.8%) 10% 30%/16% 16%,radial-gradient(circle,#8b4513 50%,rgba(139,69,19,0) 50.8%) 7.5% 29%/20% 20%,radial-gradient(circle,rgba(0,0,0,0.15) 50%,rgba(0,0,0,0) 50.8%) 86% 30%/11% 11%,radial-gradient(circle,#ffdab9 50%,rgba(255,218,185,0) 50.8%) 90% 30%/16% 16%,radial-gradient(circle,#8b4513 50%,rgba(139,69,19,0) 50.8%) 92.5% 29%/20% 20%,radial-gradient(circle at 50% 0,#ffdab9 29.5%,#8b4513 30%,#8b4513 35%,rgba(139,69,19,0) 35.5%) 50% 95%/40% 20%,radial-gradient(ellipse at 50% 100%,rgba(139,69,19,0) 49%,#8b4513 49.5%,#8b4513 52%,rgba(139,69,19,0) 52.5%) 50% 110%/120% 40%,radial-gradient(circle at 50% 0,rgba(255,255,255,0) 35%,white 35%,white 45%,rgba(255,255,255,0) 45.5%) 50% 89%/40% 13%,linear-gradient(#8b4513,#8b4513) 37% 100%/.25em 22%,linear-gradient(#8b4513,#8b4513) 63% 100%/.25em 22%,linear-gradient(80deg,rgba(0,0,0,0) 50%,#333 50.5%) 24% 100%/1em 18%,linear-gradient(-80deg,rgba(0,0,0,0) 50%,#333 50.5%) 76% 100%/1em 18%,linear-gradient(162deg,rgba(0,0,0,0) 10%,#333 10%) 30% 100%/1.5em 21%,linear-gradient(-162deg,rgba(0,0,0,0) 10%,#333 10%) 70% 100%/1.5em 21%,radial-gradient(ellipse at 100% 100%,#556b2f 50%,rgba(85,107,47,0) 50.5%) 0 100%/37% 29%,radial-gradient(ellipse at 0 100%,#556b2f 50%,rgba(85,107,47,0) 50.5%) 100% 100%/37% 29%,radial-gradient(ellipse at 50% 100%,#222 51%,rgba(0,0,0,0) 51.5%) 50% 110%/120% 40%,radial-gradient(circle at 50% 0,rgba(0,0,0,0.15) 40%,rgba(0,0,0,0) 40.5%) 50% 82%/20% 20%,linear-gradient(to right,#8b4513 4px,rgba(139,69,19,0) 4px) 50% 80%/20% 20%,linear-gradient(to left,#8b4513 4px,rgba(139,69,19,0) 4px) 50% 80%/20% 20%,linear-gradient(#ffdab9,#ffdab9) 50% 80%/20% 20%,linear-gradient(#48240a,#48240a) 50% 100%/65% 60%,radial-gradient(circle,white 30%,rgba(255,255,255,0) 62%) 50% 50%/100% 100%;
      background-color: #ccc;
      background-repeat: no-repeat;
      border-radius: 30%;
    }

    /* à supprimer si tu mets une vraie photo */
    .card-photo::before {
      display: block;
      content: '';
      position: absolute;
      box-sizing: border-box;
      width: 160px;
      height: 200px;
      left: 50%;
      top: -10%;
      margin-left: -80px;
      background: radial-gradient(circle at 50% 0,#ffdab9 30%,#8b4513 30.5%,#8b4513 41%,rgba(139,69,19,0) 41.5%) 50% 76%/2em 2em,radial-gradient(ellipse,rgba(139,69,19,0) 25%,#5e2f0d 25.5%,#5e2f0d 40%,rgba(139,69,19,0) 40.5%) 50% 100%/100% 40%,radial-gradient(ellipse at 50% 0,#8b4513 40%,#ffdab9 40.5%,#ffdab9 58%,rgba(255,218,185,0) 59%) 50% 83%/3em 1em,linear-gradient(#5e2f0d,#5e2f0d) 50% 86%/1em 1em,radial-gradient(circle,#5e2f0d 40%,rgba(139,69,19,0) 40.5%) 26% 56%/1em 1em,radial-gradient(circle,#5e2f0d 40%,rgba(139,69,19,0) 40.5%) 74% 56%/1em 1em,radial-gradient(ellipse,rgba(139,69,19,0) 52%,#8b4513 52.5%,#8b4513 55%,rgba(139,69,19,0) 55.5%) 50% 100%/150% 80%,radial-gradient(ellipse,rgba(0,0,0,0) 46%,rgba(0,0,0,0.15) 46.5%,rgba(0,0,0,0.15) 53%,rgba(0,0,0,0) 53%) 50% 100%/150% 80%,radial-gradient(ellipse,#ffdab9 53%,rgba(255,218,185,0) 53.5%) 50% 100%/150% 80%,radial-gradient(ellipse at 50% 100%,rgba(139,69,19,0) 35.5%,#8b4513 36%,#8b4513 38%,white 38.5%) 50% -45%/110% 60%,radial-gradient(circle,#444 23%,rgba(0,0,0,0) 24%) 30% 26%/1em 1em,radial-gradient(circle,#444 23%,rgba(0,0,0,0) 24%) 40% 25%/1em 1em,radial-gradient(circle,#444 23%,rgba(0,0,0,0) 24%) 50% 24.5%/1em 1em,radial-gradient(circle,#444 23%,rgba(0,0,0,0) 24%) 60% 25%/1em 1em,radial-gradient(circle,#444 23%,rgba(0,0,0,0) 24%) 70% 26%/1em 1em,radial-gradient(ellipse,#666 63%,#8b4513 63.5%,#8b4513 66%,rgba(139,69,19,0) 66.5%) 50% 100%/150% 80%,radial-gradient(ellipse,rgba(139,69,19,0) 40%,#5e2f0d 40.5%) 50% 0/150% 80%,linear-gradient(rgba(0,0,0,0.15),rgba(0,0,0,0.15)) 50% 50%/100% 100%;
      background-repeat: no-repeat;
      background-color: #ffdab9;
      border-radius: 50% 50% 50% 50%/60% 60% 40% 40%;
      border: 4px solid #8b4513;
      box-shadow: inset 0 -.2em 0 .5em rgba(0,0,0,0.15),inset 0 -1.6em 0 #5e2f0d;
    }

    /* à supprimer si tu mets une vraie photo */
    .card-photo::after {
      display: block;
      content: '';
      position: absolute;
      width: 2.5em;
      height: .8em;
      left: 28.5%;
      top: 26%;
      background-color: #5e2f0d;
      border-radius: .3em;
      box-shadow: 4.2em 0 0 #5e2f0d;
    }

    .card-photo:hover {
      transform: scale(0.4) translate(160px, 150px);
    }

    .card-title {
      text-align: center;
      color: var(--font-color);
      font-size: 20px;
      font-weight: 400;
    }

    .card-title span {
      font-size: 15px;
      color: var(--font-color-sub);
    }

    .card-socials {
      display: flex;
      height: 0;
      opacity: 0;
      visibility: hidden;
      overflow: hidden;
      margin-top: 20px;
      gap: 20px;
      transition: 0.5s;
    }

    .card:hover > .card-socials,
    .card:focus-within > .card-socials {
      opacity: 1;
      visibility: visible;
      height: 35px;
    }

    .card-socials-btn {
      width: 25px;
      height: 25px;
      padding: 0;
      border: none;
      background: transparent;
      cursor: pointer;
      transition: transform 0.15s;
    }

    .card-socials-btn svg {
      width: 100%;
      height: 100%;
      fill: var(--main-color);
    }

    .card-socials-btn:hover {
      transform: translateY(-5px);
    }
  </style>
</head>
<body>

  <h1>Bonjour <?= htmlspecialchars($user, ENT_QUOTES, 'UTF-8') ?></h1>

  <div class="card">
    <div class="card-photo"></div>
    <div class="card-title">
      <?= htmlspecialchars($user, ENT_QUOTES, 'UTF-8') ?><br>
      <span>Développeur web</span>
    </div>
    <div class="card-socials">
      <button class="card-socials-btn" type="button" aria-label="E-mail">
        <svg viewBox="0 0 24 24"><path d="M2 5h20v14H2V5zm2 2v.4l8 5.3 8-5.3V7H4zm16 2.8-8 5.3-8-5.3V17h16V9.8z"/></svg>
      </button>
      <button class="card-socials-btn" type="button" aria-label="Site web">
        <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm6.9 6h-2.9a15 15 0 0 0-1.3-3.6A8 8 0 0 1 18.9 8zM12 4a13 13 0 0 1 1.9 4h-3.8A13 13 0 0 1 12 4zM4.3 14a8 8 0 0 1 0-4h3.3a16 16 0 0 0 0 4H4.3zm.8 2h2.9a15 15 0 0 0 1.3 3.6A8 8 0 0 1 5.1 16zM8 8H5.1a8 8 0 0 1 4.2-3.6A15 15 0 0 0 8 8zm4 12a13 13 0 0 1-1.9-4h3.8A13 13 0 0 1 12 20zm2.3-6H9.7a14 14 0 0 1 0-4h4.6a14 14 0 0 1 0 4zm.4 5.6a15 15 0 0 0 1.3-3.6h2.9a8 8 0 0 1-4.2 3.6zM16.4 14a16 16 0 0 0 0-4h3.3a8 8 0 0 1 0 4h-3.3z"/></svg>
      </button>
      <button class="card-socials-btn" type="button" aria-label="Téléphone">
        <svg viewBox="0 0 24 24"><path d="M6.6 10.8a15 15 0 0 0 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1A17 17 0 0 1 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1l-2.3 2.2z"/></svg>
      </button>
    </div>
  </div>

</body>
</html>