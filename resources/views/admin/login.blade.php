@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <p><img src="/../img/amazon_logo.png" class="mx-auto d-block" style="width:85%"> </p>
                <div class="card">
                    <div class="card-body">
                        <h1 class="title-form">Crear Cuenta</h1>
                        <div class="mb-2">
                            <label for="exampleInputName" class="form-label">Tu nombre</label>
                            <input type="text" class="form-control properties-design" id="name"
                                aria-describedby="emailHelp" autocomplete="off">
                            <label class="form-label error-validation" id="error_name"></label>
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control properties-design" id="email" autocomplete="off">
                            <label class="form-label error-validation" id="error_email"></label>
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputPassword" class="form-label">Contraseña</label>
                            <input type="password" class="form-control properties-design" id="password" autocomplete="off">
                            <label class="form-label error-validation" id="error_password"></label>
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputConfirmed" class="form-label">Vuelve a escribir la
                                contraseña</label>
                            <input type="password" class="form-control properties-design"
                                id="confirmPassword"autocomplete="off">
                            <label class="form-label error-validation" id="error_confirmPassword"></label>
                        </div>
                        <a href="#" class="registerButton" id="createAccount">Crear tu cuenta de Amazon</a>
                        <div class="mb-1">
                            <p class="footer-form">Al crear una cuenta, acepta las <a href="/">Condiciones de uso</a>
                                y el <span><a href="/">Aviso de Privacidad de Amazon.</a></span></p>
                        </div>
                        <hr class="hr-spacing">
                        <div class="mb-1">
                            <p class="footer-form">¿Ya tienes una cuenta? <a href="/">Iniciar sesión <i
                                        class="fa fa-play" aria-hidden="true"></i></a></p>
                        </div>
                        <!-- registra usuarios -->
                        @include('layouts.js.registerUser')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
