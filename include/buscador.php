<section id="buscador" class="wow fadeIn" data-wow-delay=".5s">
    <div class="container-fluid p-0">
        <form>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-auto form-group">
                    <input type="number" id="codigo_buscar" class="form-control" placeholder="Código">
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <div class="form-group">
                        <select class="form-control" id="ciudad_buscar">
                            <option value="0" selected disabled>Ciudad</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <div class="form-group">
                        <select class="form-control" id="barrio_buscar">
                            <option selected value="0" disabled>Barrio</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <div class="form-group">
                        <select class="form-control" id="tipo_inmueble_buscar">
                            <option selected value="0" disabled>Inmueble</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <div class="form-group">
                        <select class="form-control" id="tipo_gestion_buscar">
                            <option selected value="0" disabled>Gestión</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
             <!--    <div class="col-12 col-md-6 col-lg-auto form-group">
                    <input type="number" id="precio_minimo_buscar" class="form-control" placeholder="Precio Mínimo">
                </div> -->
                <div class="col-12 col-md-6 col-lg-auto form-group">
                    <select id="price" class="form-control">
                        <option value="0">Precio</option>
                        <option value="1">$ 500.000 a $ 1.000.000</option>
                        <option value="2">$ 1.000.000 a $ 5.000.000</option>
                        <option value="3">$ 5.000.000 a $ 8.000.000</option>
                        <option value="4">$ 8.000.000 a $ 30.000.000</option>
                        <option value="5">$ 30.000.000 a $ 50.000.000</option>
                        <option value="6">$ 50.000.000 a $ 300.000.000</option>
                        <option value="7">$ 300.000.000 a $ 600.000.000</option>
                        <option value="8">$ 600.000.000 a $ 1.000.000.000</option>
                        <option value="9">$1.000.000.000 a $ 2.000.000.000</option>
                        <option value="10">$2.000.000.000 a $ 12.000.000.000</option>
                    </select>
                </div>

                <!-- <div class="col-12 col-md-6 col-lg form-group">
                    <input type="number" id="precio_maximo_buscar" class="form-control" placeholder="Precio Máximo">
                </div> -->

                <div class="col-12 col-md-6 col-lg form-group">
                    <input type="number" id="area_minima_buscar" class="form-control" placeholder="Área Mínima">
                </div>
                <div class="col-12 col-md-6 col-lg form-group">
                    <input type="number" id="area_maxima_buscar" class="form-control" placeholder="Área Máxima">
                </div>
                <div class="col-12 col-md-6 col-lg form-group">
                    <button type="button" id="buscar" class="btn btn-primary btn-md btn-block">Buscar</button>
                </div>

            </div>
        </form>
    </div>
</section>