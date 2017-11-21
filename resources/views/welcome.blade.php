<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">

  </style>
</head>
<body>

<div style="width: 625px;margin: 0 auto">
    <div style="box-shadow: 1px 1px 1px #f2f2f2;width: 100%;float: left;box-sizing: border-box;">
        <h1 style="font-size: 25px;">{{ $template_title }}</h1><br>
        <h2 style="font-size: 26px">{{ $template_send_time }}</h2>
        <div class="panel panel-default text-center">
            <div class="panel-heading" style="background: rgba(87, 220, 32, 0.75);">
                <h1 style="padding: 5px;color: #fff;">{{ trans('LIFE SPORTS') }}</h1>
            </div>
        </div>
        <div id="product" >
            <div class="row">
                <div style="text-align: right;">
                {{ trans('ご注文の確認') }}
                <p>{{ trans('注文番号') }}:
                    {{ $id }}
                </p>
                </div>
                <div style="text-align: left; text-indent: 6px;">{{ $shipping_name }} {{ trans('様') }}</div>
            </div>
            <h4>
               {{ trans('このたびにLife SPORTSをご利用いただき、誠にありがとうございます。商品の販売元がお客様のご注文を承ったことをお知らせいたします。商品が発送されましたら、あらためてEメールにてお知らせいたします。') }}
            </h4>
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                  <div class="container">
                    <div class="header_title">
                        <table style="width:625px;background: #d1d1d1;">
                          <tr>
                            <th class="text-info" style="text-align: left;vertical-align: top;">
                              {{ trans('お届け予定日 ') }}
                            </th>
                            <th style="text-align: left;">
                                {{ trans('お届け先 ') }}
                                <p>
                                    {{ $shipping_name }}
                                </p>
                                <p>
                                    {{ $zipcode1 }} - {{ $zipcode2 }}
                                </p>
                                <p>
                                    {{ $prefecture_name }} {{ $shipping_address }}
                                </p>
                            </th>
                          </tr>
                        </table>
                    </div>
                  </div>
                </div>
            </div>
            @foreach($order_details as $product)
            <div class="content" style="margin-top: 10px;clear: both;">
                <table style="width:625px;">
                  <tr>
                        <td rowspan="6" style="width: 30%;">
                            <div class="thumbnail" style="width: 100%">
                                <img src="{{ $product['image_url'] }}" alt="{{ $product['product_name'] }}" style="width: 100%;max-height: 150px" >
                            </div>
                        </td>
                        <td style="width: 25%;text-align: left; text-indent: 10px">
                            {{ trans('商品名 ') }}
                        </td>
                        <td style="width: 5%;">:</td>
                        <td style="width: 20%;">{{ $product['product_name'] }}</td>
                        <td rowspan="5" style="width: 20%;">
                        {{ trans('￥') }}{{ number_format($product['price'],0) }}
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left; text-indent: 10px">{{ trans('メー力一') }}</td>
                        <td>:</td>
                        <td style="text-align: right;">
                            {{ $product['product_maker_name'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left; text-indent: 10px">{{ trans('サイズ') }}
                        </td>
                        <td>:</td>
                        <td style="text-align: left; text-indent: 10px">
                            {{ $product['product_detail']['product_size'][0]['name'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left; text-indent: 10px">{{ trans('カラー ') }}
                        </td>
                        <td>:</td>
                        <td style="text-align: left; text-indent: 10px">
                            {{ $product['product_detail']['product_color']['color_name'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left; text-indent: 10px">{{ trans('数量') }}
                        </td>
                        <td>:</td>
                        <td style="text-align: left; text-indent: 10px">
                            {{ $product['product_number'] }}
                        </td>
                    </tr>
                </table>
            </div>
            @endforeach
            <div class="view">
                <table style="width:625px">
                    <tr>
                        <td colspan="6" style="width: 45%;">&nbsp;
                        </td>
                        <td colspan="2" style="width: 30%;text-align: right;">
                            <span style="text-align: right;">{{ trans('商品の小計') }}</span>
                        </td>
                        <td>:</td>
                        <td colspan="2" style="width: 25%">{{ trans('￥') }}   {{ number_format($subtotal,0) }}</td>
                    </tr>
                    <tr>
                        <td colspan="6" style="width: 45%;">&nbsp;
                        </td>
                        <td colspan="2" style="width: 30%;text-align: right;">
                            <span style="text-align: right;">{{ trans('配送料 手数料') }}</span>
                        </td>
                        <td>:</td>
                        <td colspan="2" style="width: 25%">{{ trans('￥') }}   {{ number_format($shipping_fee,0) }}</td>
                    </tr>
                    <tr>
                        <td colspan="6" style="width: 45%;">&nbsp;
                        </td>
                        <td colspan="2" style="width: 30%;text-align: right;">
                            <span style="text-align: right;">{{ trans('注文合計') }}</span>
                        </td>
                        <td>:</td>
                        <td colspan="2" style="width: 25%">{{ trans('￥') }}   {{ number_format(($subtotal + $shipping_fee),0) }}</td>
                    </tr>
                    <tr>
                        <td colspan="6" style="width: 45%;">&nbsp;
                        </td>
                        <td colspan="2" style="width: 30%;text-align: right;">
                            <span style="text-align: right;">{{ trans('支払方法') }}</span>
                        </td>
                        <td>:</td>
                        <td colspan="2" style="width: 25%">{{ $payment_method }} : {{ trans('￥') }} {{ number_format(($subtotal + $shipping_fee), 0) }}</td>
                    </tr>
                </table>
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
</body>
</html>
