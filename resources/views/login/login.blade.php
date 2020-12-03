
<link href="{{ url('/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ url('/assets/bootstrap/css/style.css')}}" rel="stylesheet">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="{{ url('/assets/bootstrap/img/img1.png')}}" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Nombre de Usuario" required>
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="Contraseña" required>
      
      <a class="fadeIn fourth" href="{{ url('/blog')}}"><input type="button" class="fadeIn fourth" value="Ingresar"></a>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Olvido Su Contraseña</a>
    </div>

  </div>
</div>