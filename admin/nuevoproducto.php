<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./style.css" media="all" />
    <!-- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@300&display=swap" rel="stylesheet">
    <script src="./script.js"></script>
</head>
<body>
    <div class="content">
        <div class="imagecontent">

            <div class="image">
            </div>
            <div class="imagelist">
                <div class="imagelistitem">

                </div>
                <div class="imagelistitem">

                </div>
            </div>

            <div class="form">
                <div class="inputform">
                    <label>Nombre del producto</label>
                    <input type="text" placeholder="Ej: Nike Air Force">
                </div>
                <div class="inputform">
                    <label>Precio del producto</label>
                    <input type="text" placeholder="Ej: 12.500">
                </div>
                <div class="inputform">
                    <label for="">Categoria del producto</label>
                    <select name="" id="">
                        <option value="">Naik</option>
                    </select>
                </div>
                <div>
                    <input type="checkbox">
                    Usar talles
                </div>
                <div>
                    <div class="separador">
                        <div class="separadorline"></div>
                        <div>TALLES</div>
                        <div class="separadorline"></div>
                    </div>
                    <div class="inputform">
                        <select name="" id="talleselect" onchange="changeTalle(this.value)">
                            <option value="0">Agregar nuevo talle...</option>
                            <option value="M">M</option>
                        </select>
                    </div>
                    <div id="agtalle">
                        <div class="inputform">
                            <label for="">Talle del producto</label>
                            <input type="text" placeholder="Ej: 45.5, M" id="tallea">
                        </div>
                        <button style="background:#000;padding:5px;" onclick="agregarTalle()">AGREGAR TALLE</button>                 
                    </div>
                    <div id="tallecolores" class="inputcolores">
                        <div class="inputcolor"></div>
                        <div class="inputcolor"></div>
                    </div>
                </div>
                <button style="margin:20px 0;">Agregar producto</button>
            </div>
        </div>
    </div>
</body>
</html>