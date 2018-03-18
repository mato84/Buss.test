<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $title; ?></title>
</head>
<body style="font-family:Helvetica, sans-serif; font-size: 16px; color: #444;background: #eee;padding: 20px 0;">
<div style="width: 600px;margin: 20px auto; padding: 10px; border-left: 8px solid #cd4e37; background: #fff; -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1); box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);">
  <div style="text-align: center;">
    <a href="<?php echo $store_url; ?>" title="<?php echo $store_name; ?>"><img src="<?php echo $logo; ?>" alt="<?php echo $store_name; ?>" style="margin-bottom: 20px; border: none;" /></a>
  <p style="margin-top: 0px; margin-bottom: 20px;"><?php echo $text_greeting; ?></p>    
  </div>
<!--   <?php if ($customer_id) { ?>
  <p style="margin-top: 0px; margin-bottom: 20px;text-align: center;"><?php echo $text_link; ?></p>
  <p style="margin-top: 0px; margin-bottom: 20px;text-align: center;"><a href="<?php echo $link; ?>"><?php echo $link; ?></a></p>
  <?php } ?>
  <?php if ($download) { ?>
  <p style="margin-top: 0px; margin-bottom: 20px;"><?php echo $text_download; ?></p>
  <p style="margin-top: 0px; margin-bottom: 20px;"><a href="<?php echo $download; ?>"><?php echo $download; ?></a></p>
  <?php } ?> -->
  <table style="border-collapse: collapse; width: 100%; margin-bottom: 20px;">
    <thead>
      <tr>
        <td style="font-size: 16px; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" colspan="2"><?php echo $text_order_detail; ?></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="font-size: 16px;	text-align: left; padding: 7px;">
          <p><?php echo $text_order_id; ?> <b><?php echo $order_id; ?></b></p>
          <p><?php echo $text_date_added; ?> <b><?php echo $date_added; ?></b></p>
          <p><?php echo $text_order_status; ?> <b><?php echo $order_status; ?></b></p>
          <p><?php echo $text_customer; ?> <b><?php echo $payment_address; ?></b></p>
          <p><?php echo $text_email; ?> <b><?php echo $email; ?></b></p>
          <p><?php echo $text_telephone; ?> <b><?php echo $telephone; ?></b></p>
        </td>
      </tr>
    </tbody>
  </table>
  <?php if (!empty($order_passenger)) { ?>
  <table style="border-collapse: collapse; width: 100%; margin-bottom: 20px;">
    <thead>
      <tr>
        <td style="font-size: 16px; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"><?php echo $text_instruction; ?></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="font-size: 16px; text-align: left; padding: 7px;"><?php echo $order_passenger; ?></td>
      </tr>
    </tbody>
  </table>
  <?php } ?>

  <?php if ($comment) { ?>
  <table style="border-collapse: collapse; width: 100%; margin-bottom: 20px;">
    <thead>
      <tr>
        <td style="font-size: 16px; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"><?php echo $text_instruction; ?></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="font-size: 16px;	text-align: left; padding: 7px;"><?php echo $comment; ?></td>
      </tr>
    </tbody>
  </table>

  <?php } ?>

  <table style="border-collapse: collapse; width: 100%; margin-bottom: 20px;">
    <thead>
      <tr>
        <td style="font-size: 16px; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"><?php echo $text_product; ?></td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $product) { ?>
      <tr>
        <td style="font-size: 16px;	text-align: left; padding: 10px;">
            <p><b><a style="color: #cd4e37; text-decoration: none; " href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></b></p>
            <p>
            <?php foreach ($product['option'] as $option) { ?>
            <?php echo $option['name']; ?> <b><?php echo $option['value']; ?></b>
            <?php } ?></p>
            <p><?php echo $text_category; ?> <b><?php echo $product['main_category_name']; ?></b></p>
            <p><?php echo $text_manufacturer; ?> <b><?php echo $product['manufacturer_name']; ?></b></p>
            <p><?php echo $text_departure; ?> <b><?php echo $product['departure_time']; ?></b> <?php echo $product['departure_from']; ?></p>
            <p><?php echo $text_arrival; ?> <b><?php echo $product['arrival_time']; ?></b> <?php echo $product['departure_to']; ?></p>
            <p><?php echo $text_time_road; ?> <b><?php echo $product['time_road']; ?></b></p>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

  <table style="border-collapse: collapse; width: 100%; margin-bottom: 20px;">
    <thead>
      <tr>
        <td style="font-size: 16px; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"><?php echo $text_quantity; ?></td>
        <td style="font-size: 16px; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;"><?php echo $text_price; ?></td>
        <td style="font-size: 16px; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;"><?php echo $text_total; ?></td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $product) { ?>
      <tr>
        <td style="font-size: 16px; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><?php echo $product['quantity']; ?></td>
        <td style="font-size: 16px; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><?php echo $product['price']; ?></td>
        <td style="font-size: 16px; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;"><?php echo $product['total']; ?></td>
      </tr>
      <?php } ?>
    </tbody>
<!--     <tfoot>
      <?php foreach ($totals as $total) { ?>
      <tr>
        <td style="font-size: 16px; text-align: right; padding: 7px;" colspan="4"><b><?php echo $total['title']; ?>: <?php echo $total['text']; ?></b></td>
      <?php } ?>
      </tr>
    </tfoot> -->
  </table>  

</div>
<p style="margin-top: 0px; margin-bottom: 20px;text-align: center;"><?php echo $text_footer; ?></p>
</body>
</html>
