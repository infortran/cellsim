<div class="img-section" style="background-image: url('{{ asset('assets/img/360x616').'/'.$plc->img_banner }}')">
     <div class="title-img-section">
         <h1 id="title-lateral">{{$plc->title_banner}}</h1>
         <h1 id="subtitle-lateral">{{$plc->subtitle_banner}}</h1>
     </div>
     <div class="price-section">
         <h6 class="pt-3">Por:</h6>
         <h5>$</h5>
         <h1 id="precio-lateral">{{number_format($plc->price_banner, 0, '', '.')}}</h1>
     </div>
 </div>