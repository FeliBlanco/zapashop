<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>

    <!-- CAROUSEL -->
    <script type="text/javascript" src="/carousel/js/lib/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="/carousel/js/jquery.rs.carousel.js"></script>

    <script type="text/javascript" src="/carousel/js/lib/jquery.event.drag.js"></script>
    <script type="text/javascript" src="/carousel/js/lib/jquery.translate3d.js"></script>

    <script type="text/javascript" src="/carousel/js/jquery.rs.carousel-autoscroll.js"></script>
    <script type="text/javascript" src="/carousel/js/jquery.rs.carousel-continuous.js"></script>
    <script type="text/javascript" src="/carousel/js/jquery.rs.carousel-touch.js"></script>
    <link rel="stylesheet" type="text/css" href="/carousel/css/jquery.rs.carousel.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/index.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/components/menu.css" media="all" />

    <!-- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@300&display=swap" rel="stylesheet">
    <?php
        include('./components/menu.php');
        include('./config/db.php');
    ?>
</head>
<body>
    <?php
        echo get_menu();
    ?>
    <div style="width:100%;height:350px;background:black;">
    </div>
    <div class="cartas">
        <div class="cartasitem">
            <div class="cartasitem_icon">
                <img src="./imgs/envios.svg" style="width:60px;height:60px;"/>
            </div>
            <div class="cartasitem_text">
                <div>Envios a todo el país</div>
                <div class="cartasitem_descri">Recibí tu pedido en cualquier punto del país</div>
            </div>
        </div>
        <div class="cartasitem">
            <div class="cartasitem_icon">
                <img src="./imgs/tarjeta.svg" style="width:60px;height:60px;"/>
            </div>
            <div class="cartasitem_text">
                <div>Beneficios</div>
                <div class="cartasitem_descri">Pagos de hasta 12 cuotas sin interes con tarjeta</div>
            </div>
        </div>
        <div class="cartasitem">
            <div class="cartasitem_icon">
            <img src="./imgs/tienda.svg" style="width:60px;height:60px;"/>
            </div>
            <div class="cartasitem_text">
                <div>Showroom</div>
                <div class="cartasitem_descri">Visitanos en Corrientes 196, Villa María</div>
            </div>
        </div>
    </div>
    <?php
        $query = $mysql->prepare("SELECT * FROM productos ORDER BY id DESC");
        $query->execute();
        if($query->rowCount() > 0) {
            echo '
            <div class="car">
                <div class="cartitle">Ultimos productos</div>
                <div class="carcontent">
                    <div class="carbtn btnleft" id="car1btnprev">
                    </div>
                    <div style="flex:1;width:100%;" id="elcar">
                        <ul>';
                            while($row = $query->fetch()) {
                                echo '
                                <li onclick="window.href.location = "producto.php">
                                    <div class="caritemimg"></div>
                                    <div class="caritemdescri">
                                        <div class="caritoitemnombre">'.$row['nombre'].'</div>
                                        <div class="caritoitemprecio">$ '.$row['precio'].'</div>
                                    </div>
                                </li>
                                ';
                            }
                          echo '
                        </ul>
                    </div>
                    <div class="carbtn btnright" id="car1btnnext">
                    </div>
                </div>
            </div>
            ';
        }
    ?>
    
</body>
<script>
    $(document).ready(function () {
    var a = $('#elcar').carousel({
        insertPrevAction: function() {
            return $('<button>prev</button>').appendTo('#car1btnprev')
        },
        insertNextAction: function() {
            return $('<button>next</button>').appendTo('#car1btnnext')
        }
    });
});

</script>
</html>