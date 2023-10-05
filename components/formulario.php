 <!-- CONTACT FORM -->
 <!-- <div class="form-contact bg-white text-black position-fixed bottom-0 end-0 py-4 px-4"> -->
 <div class="form-contact bg-white text-black  <?php echo $class; ?>  py-4 px-4">
        <form action="" class="d-flex gap-4 flex-column">
            <div>
                <h3 class="family-700-one" style="font-weight: 700;">Cotiza ahora</h3>
                <p class="mb-0">Quiero contactar con un asesor</p>
            </div>

            <div class="d-flex gap-2">

                <div class="input-group">
                    <input required="" type="text" name="text" autocomplete="off" class="input">
                    <label class="user-label">Nombre</label>
                </div>
                <div class="input-group">
                    <input required="" type="text" name="text" autocomplete="off" class="input">
                    <label class="user-label">Apellido</label>
                </div>
            </div>

            <div class="input-group">
                <input required="" type="text" name="text" autocomplete="off" class="input">
                <label class="user-label">Gmail</label>
            </div>

            <div class="input-group">
                <input required="" type="text" name="text" autocomplete="off" class="input">
                <label class="user-label">Numero telefonico</label>
            </div>
            <!-- checbox -->
            <div class="d-flex gap-2 fs-9 ">
                <label class="container p-0">
                    <input type="checkbox">
                    <svg viewBox="0 0 64 64" height="2em" width="1em">
                        <path d="M 0 16 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 16 L 32 48 L 64 16 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 16" pathLength="575.0541381835938" class="path"></path>
                    </svg>
                </label>
                <p>He leido y estoy de acuerdo con la política de privacidad</p>
            </div>
            <!-- buttom enviar -->
            <button class="btn-submit"><strong>Enviar cotizacion</strong></button>
        </form>
    </div>