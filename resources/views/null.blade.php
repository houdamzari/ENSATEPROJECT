<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ENSAT University</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
               width:1500px;
  height: 400px;
  background-color:#ffcc5f;
  justify-content:center;
  text-align:center;

  border-radius:5%;
  display:flex;
  gap:300px;

            }



a{
    position: relative;
  display: block;
  padding: 20px 20px;
    justify-content: center;
  width: 500px;
  height: 80px;
  color: #202020;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  background-color:rgba(255,255,255,0);
  transition: .5s;
  letter-spacing: 4px;
  border:2px solid rgba(255,255,255,0);
  left:40%;
  text-align: center;
  margin-top:50%;
  bottom:19px;
}

a:hover {
  background: black;
  color: #fff;
  cursor: pointer;
  border-radius: 5px;
  box-shadow: 0 0 5px white,
              0 0 25px white,
              0 0 50px white,
              0 0 100px white;
}
a span {
  position: absolute;
  display: block;
}
a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #202020);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}
a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #202020);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}
@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #202020);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #202020);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
  small {
    font-size: 0.5em;
  }
}




.container1 {
  width: 1000px;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
}
h2 small {
  font-size: 0.5em;
}




        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <h1>Your Request is Pending,
                You will receive an Email the sooner Possible.
            </h1>
                </div>



    </body>
</html>
