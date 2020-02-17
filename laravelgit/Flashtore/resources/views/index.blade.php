@extends('plantilla')

@section('titulo') FLASHTORE @endsection

@section('principal')

  <section class="main">
    <section class="articles">
      <div class="flex-container indeximg">
       <article class="col-12">
          <h2>Combos completos</h2>
          <a href="desk1.php"><img src="/storage/dk1bcopia.png" alt="AMD APU A6 7480"></a> <!--Se vincula dk1copia1.png a desk1.html-->
          <!-- <div class="descuento">
            <strong>10 % OFF</strong>
          </div> -->
          <img src="/storage/dk2copia.png" alt="PC Intel Celeron G4900 SSD 120Gb">
          <img src="/storage/dk3copia.png" alt="AMD APU A6 7480 1Tb">
       </article>
     </div>

     <div class="flex-container indeximg">
       <article class="col-12">
          <h2>Notebooks</h2>
          <a href="noteb1.php"><img src="/storage/noteb1copia.png" alt="Dell Inspiron 3481 i3"></a>
          <img src="/storage/noteb2copia.png" alt="Cx 2en1 Touch360">
          <img src="/storage/noteb3copia.png" alt="Cx Cloudbook 23">
       </article>
     </div>

     <div class="flex-container indeximg">
       <article class="col-12">
        <h2>Impresoras</h2>
        <a href="imp1.php"><img src="/storage/imp1copia.png" alt="Laser Monocromática Brother HI-1200"></a>
        <img src="/storage/imp2copia.png" alt="Laser Brother HI-1212w">
        <img src="/storage/imp3copia.png" alt="Laser Multifunción HP M135W">
       </article>
      </div>

    </section>
  </section>


@endsection
