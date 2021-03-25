<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ENSATE University</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>



          html, body {
               width:1400px;
               overflow: hidden;
  height: 400px;
  justify-content:center;
  text-align:center;

  border-radius:5%;
  display:flex;
  gap:300px;

            }

body{
  background-image: url("./back.jpg")!important;
            background-repeat: no-repeat;

            background-position: center;
}


.a2{
    position: relative;
  display: block;
  padding: 20px 20px;
    justify-content: center;
  width: 400px;
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
  left:300px;
  text-align: center;
  margin-top:-30%;
  bottom:14px;
}

.a1{

    position: relative;
  display: block;
  padding: 20px 20px;
    justify-content: center;
  width: 400px;
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
  right:310px;
  text-align:center;
  margin-top:60%;
  bottom:19px;
}
a:hover {
  background: black;
  color: white;
  cursor: pointer;
  border-radius: 5px;
  box-shadow: 0 0 5px #d8ffd8,
              0 0 25px #d8ffd8,
              0 0 50px #d8ffd8,
              0 0 100px #d8ffd8;
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







        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">



                        <a class="a1" href="{{ route('login') }}">
                              <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                            ESPACE PROFESSEURS</a>



                            <a class="a2" href="{{route('student.create')}}">
                                  <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                                ESPACE ETUDIANTS</a>


                </div>



    </body>
</html>
