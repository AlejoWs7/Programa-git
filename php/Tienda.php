<?php
session_start();
if(!isset($_SESSION['usuario'])){
  echo' 
  <script> alert("debes iniciar seccion para poder acceder a la tienda");
  window.location = "http://localhost/1.0%20Web%20Shop/Login%20Y%20Registro/Assets/Ingreso%20General.php";
  </script>
  '; 
  session_destroy();
  die();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
  </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WebShopEmporium2</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <!-- cabezera (parte superior) -->
    <header>
      <h1>WebShopEmporium</h1>
      <div class="logow"><img src="/Logo/1713236024572.png" alt="" /></div>
      <!-- aca dejo el icono de el carrito -->
      <div class="container-icon">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="icon-bag"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"
          />
        </svg>
        <!-- aca un spam que va a contar los productos -->
        <div class="count-products">
          <span id="contador-productos">0</span>
          <!-- por aca los productos de la bolsa se cuentan -->
        </div>
        <div class="container-cart-products hidden-cart">
          <div class="cart-product">
            <div class="info-cart-product">
              <span class="cantidad-producto-carrito">1</span>
              <p class="titulo-producto-carrito">Zapatillas Nike</p>
              <span class="precio-producto-carrito">$230.000cop</span>
            </div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="icon-close"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18 18 6M6 6l12 12"
              />
            </svg>
          </div>
          <div class="cart-total">
            <h3>Total</h3>
            <span class="total-pagar">250.000</span>
          </div>
        </div>
      </div>
    </header>
    <!-- clase principal encargada de dejar todo en columna -->
    <div class="productos">
      <!-- por aca dejo los productos de la tiernda -->
      <div class="citems">
        <div class="item">
          <figure>
            <img src="img/Mouse Gamer.jpg" alt="producto" />
          </figure>
          <!-- aca se deja todo en base a la informacion de el producto -->
          <div class="info-product">
            <h2>Mouse Gamer</h2>
            <div class="datos">
              <h6>
                nada mas preciso que este poderoso mouse para que nada se te
                escape
              </h6>
            </div>
            <p class="price">$180.000 COP</p>
            <button>Añadir al carrito</button>
          </div>
        </div>
        <!-- producto 2 -->
        <div class="item">
          <figure>
            <img src="img/Control xbox.jpg" alt="producto" />
          </figure>
          <!-- aca se deja todo en base a la informacion de el producto -->
          <div class="info-product">
            <h2>Control Xbox SS</h2>
            <div class="datos">
              <h6>
                Que mejor para tus partidas que la ultima tecnologia en tus
                manos
              </h6>
            </div>
            <p class="price">$290.000 COP</p>
            <button>Añadir al carrito</button>
          </div>
        </div>
        <!--  producto 3 -->
        <div class="item">
          <figure>
            <img src="img/teclado.jpg" alt="producto" />
          </figure>
          <!-- aca se deja todo en base a la informacion de el producto -->
          <div class="info-product">
            <h2>Teclado Comfort+</h2>
            <div class="datos">
              <h6>
                Comodo, Silencioso, Versatil, duradero y preciso ideal para
                largas horas de uso
              </h6>
            </div>
            <p class="price">$360.000 COP</p>
            <button>Añadir al carrito</button>
          </div>
        </div>
        <!--  producto 4 -->
        <div class="item">
          <figure>
            <img src="img/Nike.jpg" alt="producto" />
          </figure>
          <!-- aca se deja todo en base a la informacion de el producto -->
          <div class="info-product">
            <h2>Zapatillas Nike Red Moon</h2>
            <div class="datos">
              <h6>
                Lo ultimo en Zapatillas con su suela que brinda un buen confort
                y durabilidad
              </h6>
            </div>
            <p class="price">$230.000 COP</p>
            <button>Añadir al carrito</button>
          </div>
        </div>
        <!-- producto 5 -->
        <div class="item">
          <figure>
            <img src="img/Cuadro.jpg" alt="producto" />
          </figure>
          <!-- aca se deja todo en base a la informacion de el producto -->
          <div class="info-product">
            <h2>Cuadro En Titaneo</h2>
            <div class="datos">
              <h6>
                Dale a tus obras de arte el respeto que se merecen y el toque de
                resistencia perfecto
              </h6>
            </div>
            <p class="price">$350.000 COP</p>
            <button>Añadir al carrito</button>
          </div>
        </div>
        <!-- PRODUCTO 6 -->
        <div class="item">
          <figure>
            <img src="img/PS5.jpg" alt="producto" />
          </figure>
          <!-- aca se deja todo en base a la informacion de el producto -->
          <div class="info-product">
            <h2>PS5 1TB</h2>
            <div class="datos">
              <h6>
                Una de las mejores consolas de ultima generacion equipada con
                todo lo que necesitas
              </h6>
            </div>
            <p class="price">$1.800.000 COP</p>
            <button>Añadir al carrito</button>
          </div>
        </div>
      </div>
    </div>
    <script src="index.js"></script>
  </body>
</html>
