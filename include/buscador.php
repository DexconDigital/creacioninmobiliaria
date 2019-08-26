<section id="buscador">
    <div class="container-fluid p-0">
        <form>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg">
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
                <div class="col-12 col-md-6 col-lg">
                    <input type="number" id="precio_minimo_buscar" class="form-control" placeholder="Precio Mínimo">
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <input type="number" id="precio_maximo_buscar" class="form-control" placeholder="Precio Máximo">
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <input type="number" id="area_minima_buscar" class="form-control" placeholder="Área Mínima">
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <input type="number" id="area_maxima_buscar" class="form-control" placeholder="Área Máxima">
                </div>
                <div class="col-12 col-md-6 col-lg">
                    <button type="button" id="buscar" class="btn btn-primary btn-md btn-block">Buscar</button>
                </div>

            </div>
        </form>
    </div>
</section>