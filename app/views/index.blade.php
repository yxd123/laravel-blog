@extends('layouts.base') 

@section('content')
{{ $res }}
<article class="blog-main">
  <h3 class="am-article-title blog-title">
    <a href="#">Google fonts 的字體（display 篇）</a>
  </h3>
  <h4 class="am-article-meta blog-meta">by <a href="">open</a> posted on 2014/06/17 under <a href="#">字体</a></h4>

  <div class="am-g blog-content">
    <div class="col-lg-7">
      <p><!-- 本demo来自 http://blog.justfont.com/ -->你自信滿滿的跟客戶進行第一次 demo。秀出你精心設計的內容時，你原本期許客戶冷不防地掉下感動的眼淚。</p>

      <p>因為那實在是太高級了。</p>

      <p>除了各項基本架構幾乎完美無缺之外，內文是高貴的，有著一些距離感的，典雅的襯線字體。不是 Times New
        Roman，而是很少有人見過的，你精心挑選過的字體，凸顯你品味的高超。而且它並沒有花上你與業主一毛錢，或許這也非常重要。</p>
    </div>
    <div class="col-lg-5">
      <p><img src="http://f.cl.ly/items/451O3X0g47320D203D1B/不夠活潑.jpg"></p>
    </div>
  </div>
  <div class="am-g">
    <div class="col-sm-12">
          <p>看著自己的作品，你的喜悅之情溢於言表，差點就要說出我要感謝我的父母之類的得獎感言。但在你對面的客戶先是一點表情也沒有，又瞬間轉為陰沉，抿了抿嘴角冷冷的說……</p>

      <p>「我要一種比較跳的感覺懂嗎？」</p>
    </div>
  </div>
</article>

<hr class="am-article-divider blog-hr">
@stop

