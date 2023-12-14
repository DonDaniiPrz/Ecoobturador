<!doctype html>
<html lang="en">

<head>
  <title>Registrate</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/styleslog.css') }}">

</head>

<body>
    <a class="navbar-brand" href="{{ url('/') }}">
        {{('Inicio') }}
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">

                      <div class="text-center">
                          <h4 class="mt-1 mb-5 pb-1">Registro de Usuario</h4>
                      </div>

                      <form action="{{route('register')}}" method="post">
                        @csrf
                        <p></p>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control"
                              placeholder="Ingrese Nombre" />

                          </div>

                        <div class="form-outline mb-4">
                          <label class="form-label" for="form2Example11">Correo Electronico</label>
                          <input type="email" name="email" id="email" class="form-control"
                            placeholder="usuario@ecoobturador.com" />

                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Numero de Telefono</label>
                            <input type="phone" name="phone" id="phone" class="form-control"
                              placeholder="300-000-00-00" />

                          </div>



                        <div class="form-outline mb-4">
                          <label class="form-label" for="form2Example22">Contraseña</label>
                          <input type="password" name="password" id="password" class="form-control" placeholder="**********"/>

                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Confirma Contraseña</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="**********"/>

                          </div>



                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrarse</button>

                        </div>



                      </form>

                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">¿Eres parte del cambio?</h4>
                      <p class="small mb-0">"Abraza el cambio, abraza el verde: Reciclar hoy, para preservar el mañana. Juntos, cultivamos un futuro sostenible, donde cada botella reciclada, cada papel reutilizado, construye un legado ecológico para las generaciones venideras. ¡Conviértete en el cambio que el planeta necesita, porque cuidar de nuestro hogar es una responsabilidad compartida y cada pequeño gesto cuenta en la creación de un mundo más saludable y próspero!".</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>
