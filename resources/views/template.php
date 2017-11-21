<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  .panel-default>.panel-heading{
    background: rgba(126, 216, 69, 0.9);
  }
  h1,h2,h3,h4 {text-align: justify;}
  .panel-default>.panel-heading h1{
    color: #fff;
    text-align: left;
    font-size: 24px;
    padding: 5px;
    line-height: 30px;
    margin: 5px 0;
    float: none;
    text-transform: uppercase;
    font-family: serif;
  }
  .about .title_event h2{
    font-size: 24px;
    color: #000;
 }
 .row{display:block;width:100%;float:left}
 .col-8{float:left;width: 75%;text-align: right;padding-right:10px}
 .col-4{float:left;width:20%;text-align: left;}
 .col-sm-8{width:66.66666667%;}
 .col-sm-3, .col-ms-8, .col-sm-6{position:relative;min-height:1px;padding-right:15px;padding-left:15px}
 .col-sm-3{width:25%}
 .col-sm-6{width:50%}
 table, th, td {
    border-bottom: 0px solid black;
    border-collapse: collapse;
    }
    th, td {
        padding: 5px;
        text-align: left;
    }
    .m-top{margin-top:10px}
    .m-bottom{margin-bottom:10px}
    ul { display:block;list-style: none;}
    ul li table{border:none !important;}
    ul li{border-bottom:0px solid;padding-bottom:10px}
 #product .panel-default>.panel-heading{
    background: #d1d1d1;
  }
  #product .panel-default>.panel-heading h2{
    color: #fff;
    text-align: left;
    font-size: 24px;
    padding: 0px;
    line-height: 30px;
    margin: 5px 0;
    float: none;
    text-transform: uppercase;
    font-family: serif;
  }
  .pull-right{float:right;margin-right:10px;}
  .pagination hr{

  }
  hr {
    border-top: 2px solid #929292;
 }
  </style>
</head>
<body>

<div class="container-fluid">
    <div class="container">
        <div class="col-sm-12">
            <h1 class="title_send_time">{{ $template_title }}</h1><br>
            <h2 class="title_event">{{ $template_send_time }}</h2>
            <div class="row">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>{{ trans('LIFE SPORTS') }}</h1>
                    </div>
                </div>
            </div>
            <div id="product" class="container-fluid text-center bg-grey">
                <div class="row">
                  <table style="width:100%">
                      <tr>
                        <th class="pull-left">
                          {{ $shipping_name }} 様
                        </th>
                        <th class="pull-right">
                            {{ trans('ご注文の確認') }} <br>
                            <p>{{ trans('注文番号') }}:
                                {{ $id }}
                            </p>
                        </th>
                      </tr>
                    </table>
                </div>
                <h4>
                   {{ trans('このたびにLife SPORTSをご利用いただき、誠にありがとうございます。商品の販売元がお客様のご注文を承ったことをお知らせいたします。商品が発送されましたら、あらためてEメールにてお知らせいたします。') }}
                </h4>
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                      <table style="width:100%">
                        <tr>
                            <th class="pull-left">
                                {{ trans('お届け予定日 ') }}
                            </th>
                            <th class="col-sm-8">{{ trans('お届け先 ') }}</th>
                        </tr>
                        <tr>
                            <td class="pull-left">

                            </td>
                            <td class="col-sm-8">
                                {{ $shipping_name }}<br>
                                {{ $zipcode1 }} - {{ $zipcode2 }}<br>
                                {{ $prefecture_name }} {{ $shipping_address }}
                            </td>
                        </tr>
                      </table>
                    </div>
                </div>
                <div class="row text-center slideanim">
                    <ul>
                        @foreach($order_details as $product)
                            <li>
                                <table style="width:100%">
                                  <tr>
                                        <th rowspan="6">
                                            <div class="thumbnail">
                                                <img src="{{ $product['image_url'] }}" alt="{{ $product['product_name'] }}" width="200" height="200">
                                            </div>
                                        </th>
                                        <td align="right"><label class="pull-right">{{ trans('商品名 ') }} :</label></td>
                                        <td align="left">
                                            {{ $product['product_name'] }}
                                        </td>
                                        <th rowspan="5">{{ trans('￥') }}   {{ number_format($product['price'], 0) }}</th>
                                    </tr>
                                    <tr>
                                        <td align="right"><label class="pull-right">{{ trans('メー力一') }} :</label></td>
                                        <td>{{ $product['product_maker_name'] }}</td>
                                    </tr>
                                    <tr>
                                        <td align="right"><label class="pull-right">{{ trans('サイズ') }} :</label></td>
                                        <td>
                                        {{ $product['product_detail']['product_size'][0]['name'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right"><label class="pull-right">{{ trans('カラー ') }} :</label></td>
                                        <td>
                                            {{ $product['product_detail']['product_color']['color_name'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right"><label class="pull-right">{{ trans('数量') }} :</label> </td>
                                        <td>
                                            {{ $product['product_number'] }}
                                        </td>
                                    </tr>
                                </table>
                            </li>
                        @endforeach
                    </ul>
                    <div class="row">
                      <div class="col-8"><strong>{{ trans('商品の小計') }}</strong></div>
                        <div class="col-4">{{ trans('￥') }}   {{ number_format($subtotal, 0) }}</div>
                    </div>
                    <div class="row">
                      <div class="col-8"><strong>{{ trans('配送料 手数料') }}</strong></div>
                        <div class="col-4">{{ trans('￥') }}   {{ number_format($shipping_fee, 0) }}</div>
                    </div>
                    <div class="row">
                      <div class="col-8"><strong>{{ trans('注文合計') }}</strong></div>
                        <div class="col-4">{{ trans('￥') }}   {{ number_format(($subtotal + $shipping_fee), 0) }}</div>
                    </div>
                    <div class="row m-top m-bottom">
                      <div class="col-8"><strong>{{ trans('支払方法') }}</strong></div>
                        <div class="col-4">{{ $payment_method }}   : {{ trans('￥') }}   {{ number_format(($subtotal + $shipping_fee), 0) }}</div>
                    </div>
                </div>
            </div>
            <hr>
        <footer class="container-fluid text-center">
          <p>{{ trans('本メールは、Life SPORTSでのご注文について、商品販売元が注文を確認したことをお知らせするものです。
在庫状況とお届け予定日は、確約されたものはございません。お届け予定日は、在庫状況の変動などにより変更される場合があります。
このEメールアドレスは配信専用ですので、ご返信しないようお願い致します。
ご質問をご希望の場合、Life SPORTS ECページ内よりお問い合わせください。') }}</p>
        </footer>
        </div>
    </div>
</div>
</body>
</html>
