@extends('plantilla')

@section('css')
  <link rel="stylesheet" href="/css/estilos-faq.css">
@endsection

@section('titulo') FLASHTORE | Store @endsection

@section('principal')

  <div id="acordion">
      <h1 class="faqHeader h1 pb-2">Preguntas frecuentes</h1>
      <div class="faqHeader p-0">Envíos</div>
      <div class="card">

        <div class="card-header border" >
            <a class="card-link collapsed" data-toggle="collapse" data-parent="#acordion" href="#collapseOne">¿Hacen envíos al interior?</a>
        </div>
        <div id="collapseOne" class="collapse">
            <div class="card-body">
                Hacemos envíos a todo el país mediante <strong>OCA</strong>, que es un servicio <strong>Puerta a puerta</strong> (puede llegar a tu domicilio o a la sucursal de <strong>OCA</strong> más cercana a tu domicilio).
            </div>
        </div>

      </div>

      <div class="card">

          <div class="card-header border">

                  <a class="card-link collapsed" data-toggle="collapse" data-parent="#acordion" href="#collapseTen">¿Que costo tiene un envío?</a>

          </div>
          <div id="collapseTen" class="collapse">
              <div class="card-body">
                  El costo del mismo se abona con el pedido, es decir, el pedido incluye el costo del envío. El valor del envío depende de las dimensiones del paquete y distancia. Podrás saber el costo del envío en tiempo real desde www.flashtorecomputacion.com ingresando tu código postal en el producto a adquirir o a tu pedido. Y según el pedido,  desde la misma web se le informa si es bonificado su costo.
              </div>
          </div>

      </div>
      <div class="card">
          <div class="card-header border">

                  <a class="card-link collapsed" data-toggle="collapse" data-parent="#acordion" href="#collapseEleven">¿Cuánto demora?</a>

          </div>
          <div id="collapseEleven" class="collapse">
              <div class="card-body">
                  El plazo del envío estimado es entre <strong>4 y 9 días hábiles </strong> dependiendo del lugar de destino. Igualmente, una vez que sea despachado tu pedido se te enviará un correo electrónico con el traking del envío de OCA. Por otro lado, desde Mi Cuenta - Información del Pedido, encontrarás el mismo tracking de OCA.USD
              </div>
          </div>
      </div>

      <div class="faqHeader">Formas de pago</div>
      <div class="card">
          <div class="card-header border">

                  <a class="card-link collapsed" data-toggle="collapse" data-parent="#acordion" href="#collapsetree">¿Los precios publicados en la web en que moneda están?</a>

          </div>
          <div id="collapsetree" class="collapse in">
              <div class="card-body">
                  Todos los precios de la web están expresados en pesos argentinos.
              </div>
          </div>
      </div>
      <div class="card">
          <div class="card-header border">

                  <a class="card-link collapsed" data-toggle="collapse" data-parent="#acordion" href="#collapseforest">¿Son precios Finales o más IVA?</a>

          </div>
          <div id="collapseforest" class="collapse in">
              <div class="card-body">
                  Todos los precios son finales IVA incluído.
              </div>
          </div>
      </div>
      <div class="card">
          <div class="card-header border">

                  <a class="card-link collapsed" data-toggle="collapse" data-parent="#acordion" href="#collapsehierv">¿Entregan factura y garantía?</a>

          </div>
          <div id="collapsehierv" class="collapse in">
              <div class="card-body">
                  Absolutamente en todas las ventas que realizamos se entrega factura fiscal, la cual especifica el tiempo de la garantía. Bajo ningún concepto ni excepción realizamos ventas sin su respectiva factura.
              </div>
          </div>
      </div>
      <div class="card">
          <div class="card-header border">

                  <a class="card-link collapsed" data-toggle="collapse" data-parent="#acordion" href="#collapseTwo">¿Cuáles son las formas de pago?</a>

          </div>

          <div id="collapseTwo" class="collapse">
              <div class="card-body">
                Las formas de pago en son:
                <li>Efectivo.</li>
                <li>Transferencia o depósito bancario.</li>
                <li>Tarjetas de crédito o débito en el local (consultar recargos).</li>
                <li>MercadoPago (tarjetas de crédito, Pagofácil y Rapipago).</li>
              </div>
          </div>
      </div>

      <div class="card">
          <div class="card-header border">

                  <a class="card-link collapsed" data-toggle="collapse" data-parent="#acordion" href="#collapseThree">¿Puedo pagar con tarjeta?</a>

          </div>
          <div id="collapseThree" class="collapse">
              <div class="card-body">
                 Sí podés, y aceptamos prácticamente todas las tarjetas de crédito en el local, o si estás en el interior lo podés pagar mediante MercadoPago (la misma web te dá esta opción de pago). El precio por este medio es el de lista, no aplicándose descuento ni promociones vigentes, salvo que aclare lo contrario.
              </div>
          </div>
      </div>

      <div class="card">
          <div class="card-header border">

                  <a class="card-link collapsed" data-toggle="collapse" data-parent="#acordion" href="#collapseFive">¿Puedo pagar en cuotas sin interés?</a>

          </div>
          <div id="collapseFive" class="collapse">
              <div class="card-body">
                  En el local tenés cuotas con interés. Pero por MercadoPago dependiendo la tarjeta que tengas, te ofrece cuotas sin interés. El link para saber cuáles son las tarjetas con promos es: https://www.mercadopago.com.ar/promociones

              </div>
          </div>
      </div>

      <div class="card">
          <div class="card-header border">

                  <a class="card-link collapsed" data-toggle="collapse" data-parent="#acordion" href="#collapseSix">¿Cuánto es el interés que cobra MercadoPago por pagar con tarjetas que no estén en promoción?</a>

          </div>
          <div id="collapseSix" class="collapse">
              <div class="card-body">
                  Para ver la tabla de interés actualizada que está cobrando MercadoPago podés ingresar hace <a href="https://www.mercadopago.com.ar/ayuda/costos-financiacion_621">click acá</a>

              </div>
          </div>
      </div>

      <div class="faqHeader">Facturación</div>
      <div class="card">
          <div class="card-header border">

                  <a class="card-link collapsed" data-toggle="collapse" data-parent="#acordion" href="#collapseEight">¿Hacen factura A? ¿Cómo la solicito?</a>

          </div>
          <div id="collapseEight" class="collapse">
              <div class="card-body">
                  Efectivamente hacemos factura A, y en el caso de ser un cliente nuevo tiene que ingresar el cliente con número de CUIT y en las observaciones del pedido aclarar que es con factura A.
              </div>
          </div>
      </div>

      <div class="card">
          <div class="card-header border">

                <a class="card-link collapsed" data-toggle="collapse" data-parent="#acordion" href="#collapseNine">¿Tengo un producto en garantía que me falló, qué hago?</a>

          </div>
          <div id="collapseNine" class="collapse">
              <div class="card-body">
                  Primero tenés que identificar si la garantía es con Flashtore S.R.L. o con el fabricante, la factura indica, además, del tiempo con quien corresponde la factura. En el caso de indicar solo el tiempo, entonces la garantía es con Flashtore S.R.L., en este caso tiene que acercar el producto todas las cajas y accesorios tal cual se le entregó junto a la fotocopia de la factura de compra. Pero en caso de decir un fabricante luego de la fecha es con el fabricante o service oficial siempre en el país. Por ejemplo “3 años oficial” sería con el service de fabricante como puede ser MSI, Gigabyte o Samsung, y los datos de service oficial de cada marca que trabajamos están en: http://www.flashtorecomputacion.com/contacto. Cualquier duda escribinos a rma@flashtore.com
              </div>
          </div>
      </div>
  </div>

@endsection
