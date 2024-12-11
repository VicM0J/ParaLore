<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>He aquí de nuevo...</title>
    <link rel="stylesheet" href="./CSS/evnt1.css"> 
</head>
<body>
    <style>
    

.card {
  position: relative;
  width: 250px;
  height: 120px;
  background: #191414;
  border-radius: 10px;
  padding: 10px;
}

.top {
  position: relative;
  width: 100%;
  display: flex;
  gap: 10px;
}

.pfp {
  position: relative;
  top: 5px;
  left: 5px;
  height: 40px;
  width: 40px;
  background-color: #d2d2d2;
  border-radius: 5px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.title-1 {
  color: white;
  font-size: 21px;
  font-weight: bolder;
}

.title-2 {
  color: white;
  font-size: 12px;
  font-weight: bold;
}

.time {
  width: 90%;
  background-color: #5e5e5e;
  height: 6px;
  border-radius: 3px;
  position: absolute;
  left: 5%;
  bottom: 22px;
}

.elapsed {
  width: 42%;
  background-color: #1db954;
  height: 100%;
  border-radius: 3px;
}

.controls {
  color: white;
  display: flex;
  position: absolute;
  bottom: 30px;
  left: 0;
  width: 100%;
  justify-content: center;
}

.volume {
  height: 100%;
  width: 48px;
}

.air {
  height: 100%;
  width: 48px;
}

.controls svg {
  cursor: pointer;
  transition: 0.1s;
}

.controls svg:hover {
  color: #1db954;
}

.volume {
  opacity: 0;
  position: relative;
  transition: 0.2s;
}

.volume .slider {
  height: 4px;
  background-color: #5e5e5e;
  width: 80%;
  border-radius: 2px;
  margin-top: 8px;
  margin-left: 10%;
}

.volume .slider .green {
  background-color: #1db954;
  height: 100%;
  width: 80%;
  border-radius: 3px;
}

.volume .circle {
  background-color: white;
  height: 6px;
  width: 6px;
  border-radius: 3px;
  position: absolute;
  right: 20%;
  top: 60%;
}

.volume_button:hover ~ .volume {
  opacity: 1;
}

.timetext {
  color: white;
  font-size: 8px;
  position: absolute;
}

.time_now {
  bottom: 11px;
  left: 10px;
}

.time_full {
  bottom: 11px;
  right: 10px;
}

.playing {
  display: flex;
  position: relative;
  justify-content: center;
  gap: 1px;
  width: 30px;
  height: 20px;
}

.greenline {
  background-color: #1db954;
  height: 20px;
  width: 2px;
  position: relative;
  transform-origin: bottom;
}

.line-1 {
  animation: infinite playing 1s ease-in-out;
  animation-delay: 0.2s;
}

.line-2 {
  animation: infinite playing 1s ease-in-out;
  animation-delay: 0.5s;
}

.line-3 {
  animation: infinite playing 1s ease-in-out;
  animation-delay: 0.6s;
}

.line-4 {
  animation: infinite playing 1s ease-in-out;
  animation-delay: 0s;
}

.line-5 {
  animation: infinite playing 1s ease-in-out;
  animation-delay: 0.4s;
}

@keyframes playing {
  0% {
    transform: scaleY(0.1);
  }

  33% {
    transform: scaleY(0.6);
  }

  66% {
    transform: scaleY(0.9);
  }

  100% {
    transform: scaleY(0.1);
  }
}
    </style>
    <header>
        <h1>El comienzo...</h1>
    </header>
    <main class="content">
        <section class="story">
            <h2>Cuando nos conocimos</h2>
            <p>
                Era un día como cualquier otro, el sol brillaba intensamente y el aire estaba lleno de posibilidades. 
                Fue en ese momento cuando nuestras miradas se cruzaron por primera vez, y desde ese instante, 
                algo cambió en el universo. Este día marcó el comienzo de una aventura que jamás olvidaríamos.
            </p>
            <p>
                Desde entonces, cada día ha sido una oportunidad para conocernos más y compartir momentos inolvidables. 
                Este evento es el primero de muchos que construyen nuestra historia juntos.
            </p>
            <br>
            <br>
<div class="card">
  <div class="top">
  <div class="pfp">
    <div class="playing">
      <div class="greenline line-1"></div>
      <div class="greenline line-2"></div>
      <div class="greenline line-3"></div>
      <div class="greenline line-4"></div>
      <div class="greenline line-5"></div>
    </div>
  </div>
  <div class="texts">
  <a href="https://open.spotify.com/intl-es/track/70fVcEP5pRrxaIICY3DcPe?si=715403db0e254428" target="_blank" class="title-1">Mi Persona Favorita</a>
  <p class="title-2">Rio Roma</p>
  </div>
  </div>
  
  <div class="controls">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="20" width="24" class="volume_button">
  <path clip-rule="evenodd" d="M11.26 3.691A1.2 1.2 0 0 1 12 4.8v14.4a1.199 1.199 0 0 1-2.048.848L5.503 15.6H2.4a1.2 1.2 0 0 1-1.2-1.2V9.6a1.2 1.2 0 0 1 1.2-1.2h3.103l4.449-4.448a1.2 1.2 0 0 1 1.308-.26Zm6.328-.176a1.2 1.2 0 0 1 1.697 0A11.967 11.967 0 0 1 22.8 12a11.966 11.966 0 0 1-3.515 8.485 1.2 1.2 0 0 1-1.697-1.697A9.563 9.563 0 0 0 20.4 12a9.565 9.565 0 0 0-2.812-6.788 1.2 1.2 0 0 1 0-1.697Zm-3.394 3.393a1.2 1.2 0 0 1 1.698 0A7.178 7.178 0 0 1 18 12a7.18 7.18 0 0 1-2.108 5.092 1.2 1.2 0 1 1-1.698-1.698A4.782 4.782 0 0 0 15.6 12a4.78 4.78 0 0 0-1.406-3.394 1.2 1.2 0 0 1 0-1.698Z" fill-rule="evenodd"></path>
    </svg>
    <div class="volume">
      <div class="slider">
        <div class="green"></div>
      </div>
      <div class="circle"></div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="24" width="24">
  <path clip-rule="evenodd" d="M12 21.6a9.6 9.6 0 1 0 0-19.2 9.6 9.6 0 0 0 0 19.2Zm.848-12.352a1.2 1.2 0 0 0-1.696-1.696l-3.6 3.6a1.2 1.2 0 0 0 0 1.696l3.6 3.6a1.2 1.2 0 0 0 1.696-1.696L11.297 13.2H15.6a1.2 1.2 0 1 0 0-2.4h-4.303l1.551-1.552Z" fill-rule="evenodd"></path>
</svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="24" width="24">
  <path clip-rule="evenodd" d="M21.6 12a9.6 9.6 0 1 1-19.2 0 9.6 9.6 0 0 1 19.2 0ZM8.4 9.6a1.2 1.2 0 1 1 2.4 0v4.8a1.2 1.2 0 1 1-2.4 0V9.6Zm6-1.2a1.2 1.2 0 0 0-1.2 1.2v4.8a1.2 1.2 0 1 0 2.4 0V9.6a1.2 1.2 0 0 0-1.2-1.2Z" fill-rule="evenodd"></path>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="24" width="24">
  <path clip-rule="evenodd" d="M12 21.6a9.6 9.6 0 1 0 0-19.2 9.6 9.6 0 0 0 0 19.2Zm4.448-10.448-3.6-3.6a1.2 1.2 0 0 0-1.696 1.696l1.551 1.552H8.4a1.2 1.2 0 1 0 0 2.4h4.303l-1.551 1.552a1.2 1.2 0 1 0 1.696 1.696l3.6-3.6a1.2 1.2 0 0 0 0-1.696Z" fill-rule="evenodd"></path>
</svg>
<div class="air"></div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" fill="none" height="20" width="24">
  <path d="M3.343 7.778a4.5 4.5 0 0 1 7.339-1.46L12 7.636l1.318-1.318a4.5 4.5 0 1 1 6.364 6.364L12 20.364l-7.682-7.682a4.501 4.501 0 0 1-.975-4.904Z"></path>
</svg>
  </div>
  <div class="time">
    <div class="elapsed"></div>
  </div>
  <p class="timetext time_now">1:31</p>
  <p class="timetext time_full">3:46</p>
</div>
        </section>
        <a href="timeline.php" class="btn">Volver a la línea del tiempo</a>
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>
        <p>&copy; Para Mi Novia</p>
    </footer>
</body>
</html>
