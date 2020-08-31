<section class="site-section section-cheetah" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-12 mb-5 position-relative">
          <h2 class="section-title text-center mb-5">Contáctanos</h2>
        </div>
      </div>
      <div class="row justify-content-between">
        <div class="col-lg-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
          <form action="{{ route('contact') }}" class="form" method="POST">
            @csrf
            <div class="row mb-4">
              <div class="form-group col-6">
                <input type="text" class="form-control" placeholder="Nombres" name="name">
              </div>
              <div class="form-group col-6">
                <input type="text" class="form-control" placeholder="Apellidos" name="last_name">
              </div>
            </div>

            <div class="row mb-4">
              <div class="form-group col-12">
                <input type="email" class="form-control" placeholder="Correo electronico" name="email">
              </div>
            </div>

            <div class="row mb-4">
              <div class="form-group col-12">
                <input type="text" class="form-control" placeholder="Asunto" name="subject">
              </div>
            </div>

            <div class="row mb-4">
              <div class="form-group col-12">
                <textarea name="body" id="body" cols="30" rows="10" class="form-control" placeholder="Dejanos tu mensaje ..."></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <input type="submit" class="btn btn-danger" value="Mandanos tu mensaje">
              </div>
            </div>

          </form>
        </div>
        <div class="col-lg-5">
          <h3>Guadalajara, Jalisco</h3>
          <ul class="list-unstyled mb-5">
            <li class="mb-3">
              <strong class="d-block mb-1">Telefonos</strong>
              <span>33 18 95 45 25</span>
              <br>
              <span>33 10 95 31 11</span>
            </li>
            <li class="mb-3">
              <strong class="d-block mb-1">Correo Electronico</strong>
              <span>contacto@smartcheetah.com.mx</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
