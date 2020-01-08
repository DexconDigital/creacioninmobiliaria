<!-- <script>
    function inicio() {
        document.ejemplo.precio_minimo_buscar.value = 100000
        document.ejemplo.precio_maximo_buscar.value = 500000


    };
    window.onload = inicio;

</script> -->
<!-- <script type="text/javascript">
    $(document).ready(function() {
        $("#boton01").click(function() {
            //saco el valor accediendo a un input de tipo text y name = nombre
            alert($('input:text[name=nombre]').val());
            //saco el valor accediendo al id del input = nombre
            alert($("#nombre").val());
            //saco el valor accediendo al class del input = nombre   
            alert($(".nombre").val());
        });
    });
</script -->
<!--  -->

<section id="buscador" class="wow fadeIn" data-wow-delay=".5s">
    <div class="container-fluid p-0">
        <form name="ejemplo">
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
                <div class="col-12 col-md-6 col-lg ">
                    <select name="pre" id="pre" class="form-control" onchange="ShowSelected();">
                        <option value="0">precio</option>
                        <option value="1">$ 500.000 a $ 1.000.000</option>
                        <option value="2">$ 1.000.001 a $ 5.000.000</option>
                        <option value="3">$ 5.000.001 a $ 8.000.000</option>
                        <option value="4">$ 8.000.001 a $ 30.000.000</option>
                        <option value="5">$ 30.000.001 a $ 50.000.000</option>
                        <option value="6">$ 50.000.001 a $ 300.000.000</option>
                        <option value="7">$ 300.000.001 a $ 600.000.000</option>
                        <option value="8">$ 600.000.001 a $ 1.000.000.000</option>
                        <option value="9">$1.000.000.001 a $ 2.000.000.000</option>
                        <option value="10">$2.000.000.001 a $ 12.000.000.000</option>
                    </select>
                </div>
                <script>
                    function ShowSelected() {
                        /* Para obtener el valor */
                        var cod = document.getElementById("pre").value;
                        if (cod == "0") {
                            var min = 1;
                            var max = 2;
                        } else if (cod == "1") {
                            var min = 3;
                            var max = 4;
                        } else if (cod == "2") {
                            var min = 5;
                            var max = 6;
                        } else if (cod == "3") {
                            var min = 7;
                            var max = 8;
                        } else if (cod == "4") {
                            var min = 9;
                            var max = 10;
                        } else if (cod == "5") {
                            var min = 11;
                            var max = 12;
                        } else if (cod == "6") {
                            var min = 13;
                            var max = 14;
                        } else if (cod == "7") {
                            var min = 15;
                            var max = 16;
                        } else if (cod == "8") {
                            var min = 17;
                            var max = 18;
                        } else if (cod == "9") {
                            var min = 19;
                            var max = 20;
                        } else if (cod == "10") {



                            /* Para obtener el texto */
                            var combo = document.getElementById("pre");
                            var selected = combo.options[combo.selectedIndex].text;
                            alert(selected);
                        }


                    }
                </script>

                <div class="col-12 col-md-6 col-lg-auto form-group">
                    <input type="number" id="precio_minimo_buscar" value='' class="form-control" placeholder="Precio Mínimo">
                </div>

                <div class="col-12 col-md-6 col-lg form-group">
                    <input type="number" id="precio_maximo_buscar" class="form-control" placeholder="Precio Máximo">
                </div>


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