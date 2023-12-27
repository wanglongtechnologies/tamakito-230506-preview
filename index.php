<?php header("access-control-allow-origin: *"); ?>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/php/config.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/php/validate.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/php/mailer.php'); ?>

<?php

$dict = array_reverse([
  'b-band_style' => 'Band Style',
  'b-band_style-knife_edge' => 'Knife Edge',
  'b-band_style-round_edge' => 'Round Edge',
  'b-band_style-square_edge' => 'Square Edge',
  'b-band_style-tapered' => 'Tapered',
  'b-band_style-twist' => 'Twist',
  'b-band_style-split_shank' => 'Split Shank',

  'b-accent_stones' => 'Accent Stones',
  'b-accent_stones-bead' => 'Bead',
  'b-accent_stones-pave' => 'Pave',
  'b-accent_stones-none' => 'None',

  'b-band_material' => 'Band Material',
  'b-band_material-silver' => 'Silver',
  'b-band_material-rose_gold' => 'Rose Gold',
  'b-band_material-white_gold' => 'White Gold',
  'b-band_material-yellow_gold' => 'Yellow Gold',

  'b-price_range' => 'Price Range',
  'b-price_range-1' => 'RM2000 - RM7000',
  'b-price_range-2' => 'RM8000 - RM20000',
  'b-price_range-3' => 'RM20000 - RM60000',
  'b-price_range-4' => 'RM60000+',

  'rd-diamond_shape' => 'Diamond Shape',
  'rd-diamond_shape-round' => 'Round',
  'rd-diamond_shape-cushion' => 'Cushion',
  'rd-diamond_shape-princess' => 'Princess',
  'rd-diamond_shape-emerald' => 'Emerald',
  'rd-diamond_shape-radiant' => 'Radiant',
  'rd-diamond_shape-oval' => 'Oval',
  'rd-diamond_shape-pear' => 'Pear',
  'rd-diamond_shape-asscher' => 'Asscher',
  'rd-diamond_shape-heart' => 'Heart',

  'rd-setting_styles' => 'Setting Styles',
  'rd-setting_styles-peg_head' => 'Peg Head',
  'rd-setting_styles-halo' => 'Halo',
  'rd-setting_styles-basket' => 'Basket',
  'rd-setting_styles-tiara' => 'Tiara',
  'rd-setting_styles-trellis' => 'Trellis',
  'rd-setting_styles-three_stone' => 'Three Stone',
  'rd-setting_styles-invisible_halo' => 'Invisible Halo',

  'rd-prong_styles' => 'Prong Styles',
  'rd-prong_styles-claw' => 'Claw',
  'rd-prong_styles-round' => 'Round',

  'rd-band_styles' => 'Band Styles',
  'rd-band_styles-knife_edge' => 'Knife Edge',
  'rd-band_styles-round_edge' => 'Round Edge',
  'rd-band_styles-square_edge' => 'Square Edge',
  'rd-band_styles-tapered' => 'Tapered',
  'rd-band_styles-split_shank' => 'Split Shank',
  'rd-band_styles-twist' => 'Twist',

  'rd-accent_stones' => 'Accent Stones',
  'rd-accent_stones-bead' => 'Bead',
  'rd-accent_stones-pave' => 'Pave',
  'rd-accent_stones-none' => 'None',

  'rd-band_material' => 'Band Material',
  'rd-band_material-silver' => 'Silver',
  'rd-band_material-rose_gold' => 'Rose Gold',
  'rd-band_material-white_gold' => 'White Gold',
  'rd-band_material-yellow_gold' => 'Yellow Gold',

  'rd-price_range' => 'Price Range',
  'rd-price_range-1' => 'RM2000 - RM7000',
  'rd-price_range-2' => 'RM8000 - RM20000',
  'rd-price_range-3' => 'RM20000 - RM60000',
  'rd-price_range-4' => 'RM60000+',

  'rcs-stone_color' => 'Stone Color',
  'rcs-stone_color-aqua' => 'Aqua',
  'rcs-stone_color-blue' => 'Blue',
  'rcs-stone_color-green' => 'Green',
  'rcs-stone_color-orange' => 'Orange',
  'rcs-stone_color-red' => 'Red',
  'rcs-stone_color-peach' => 'Peach',
  'rcs-stone_color-pink' => 'Pink',
  'rcs-stone_color-purple' => 'Purple',
  'rcs-stone_color-yellow' => 'Yellow',
  'rcs-stone_color-white' => 'White',

  'rcs-stone_shapes' => 'Stone Shapes',
  'rcs-stone_shapes-round' => 'Round',
  'rcs-stone_shapes-oval' => 'Oval',
  'rcs-stone_shapes-pear' => 'Pear',
  'rcs-stone_shapes-square' => 'Square',

  'rcs-setting_styles' => 'Setting Styles',
  'rcs-setting_styles-peg_head' => 'Peg Head',
  'rcs-setting_styles-halo' => 'Halo',
  'rcs-setting_styles-basket' => 'Basket',
  'rcs-setting_styles-tiara' => 'Tiara',
  'rcs-setting_styles-trellis' => 'Trellis',
  'rcs-setting_styles-three_stone' => 'Three Stone',
  'rcs-setting_styles-invisible_halo' => 'Invisible Halo',

  'rcs-prong_styles' => 'Prong Styles',
  'rcs-prong_styles-claw' => 'Claw',
  'rcs-prong_styles-round' => 'Round',
  'rcs-prong_styles-heart' => 'Heart',

  'rcs-band_styles' => 'Band Styles',
  'rcs-band_styles-knife_edge' => 'Knife Edge',
  'rcs-band_styles-round_edge' => 'Round Edge',
  'rcs-band_styles-square_edge' => 'Square Edge',
  'rcs-band_styles-tapered' => 'Tapered',
  'rcs-band_styles-twist' => 'Twist',
  'rcs-band_styles-split_shank' => 'Split Shank',

  'rcs-accent_stones' => 'Accent Stones',
  'rcs-accent_stones-bead' => 'Bead',
  'rcs-accent_stones-pave' => 'Pave',
  'rcs-accent_stones-none' => 'None',

  'rcs-band_material' => 'Band Material',
  'rcs-band_material-silver' => 'Silver',
  'rcs-band_material-rose_gold' => 'Rose Gold',
  'rcs-band_material-white_gold' => 'White Gold',
  'rcs-band_material-yellow_gold' => 'Yellow Gold',

  'rcs-price_range' => 'Price Range',
  'rcs-price_range-1' => 'RM2000 - RM7000',
  'rcs-price_range-2' => 'RM8000 - RM20000',
  'rcs-price_range-3' => 'RM20000 - RM60000',
  'rcs-price_range-4' => 'RM60000+',
]);

?>

<?php
$alertMessages = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name         = isset($_POST['u_name']) && !empty($_POST['u_name']) ? $_POST['u_name'] : "";
  $phone        = isset($_POST['u_phone']) && !empty($_POST['u_phone']) ? $_POST['u_phone'] : "";
  $email        = isset($_POST['u_email']) && !empty($_POST['u_email']) ? $_POST['u_email'] : "";
  $selection    = isset($_POST['selection']) && !empty($_POST['selection']) ? $_POST['selection'] : "";
  $recaptcha    = isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : "";

  if (!verifyRecaptcha('6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe', $recaptcha)) {
    $alertMessages[] = 'reCaptcha verification failed!';
  }

  if (empty($alertMessages)) {
    if (empty($name) || empty($phone) || empty($email) || empty($selection)) {
      $alertMessages[] = 'Fields cannot be empty!';
    }
  }

  if (empty($alertMessages)) {
    if (!Validate::name($name)) $alertMessages[] = 'Invalid name!';
    if (!Validate::email($email)) $alertMessages[] = 'Invalid email!';
  }

  if (empty($alertMessages)) {
    $keys = array_keys($dict);
    foreach ($keys as $key) {
      if (strpos($selection, $key) !== false) {
        $selection = str_replace($key, $dict[$key], $selection);
      }
    }

    $selection = str_replace('{', '', $selection);
    $selection = str_replace('}', '', $selection);
    $selection = str_replace('"', '', $selection);
    $selection = str_replace('type:ring', 'Type:Ring', $selection);
    $selection = str_replace('type:band', 'Type:Band', $selection);
    $selection = str_replace('gem:diamond', 'Gem:Diamond', $selection);
    $selection = str_replace('gem:colored-stones', 'Gem:Colored Stones', $selection);
    $selection = str_replace('', ': ', $selection);
  }

  if (empty($alertMessages)) {
    $data = array(
      "name"        => $name,
      "email"       => $email,
      "phone"       => $phone,
      "content"     => $selection,
      "timestamp"   => date('Y-m-d H:i:s'),
    );
    $id = $database->insert("temp_tamakito_customisation", $data);
    if ($id) {
      Mailer::sendEmail($email, 'lowyiyiu@gmail.com', 'TAMAKITO - Your response has been received', str_replace(',', '<br />', $selection), str_replace(',', '\n', $selection));

      $ch = curl_init("https://discord.com/api/webhooks/927758646975266847/nuPiNXc7ueCp81X8eu5MxMFHnFLgntEPfnAzfAgdJHweGFP-VKh2mW8ptYAQ6js26cOK");
      curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        "content" => "",
        "embeds" => [
          [
            "timestamp" => date("c", strtotime("now")),
            "color" => hexdec("d9f99d"),
            "footer" => [
              "text" => "reCaptcha Score: " . $score * 100 . "%",
            ],
            "fields" => [
              [
                "name" => "Full Name",
                "value" => $name,
              ], [
                "name" => "Email Address",
                "value" => $email,
              ], [
                "name" => "Phone Number",
                "value" => $phone,
              ], [
                "name" => "Budget Level",
                "value" => $budget,
              ], [
                "name" => "Project Summary",
                "value" => $message,
              ]
            ]
          ]
        ]

      ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $response = curl_exec($ch);
      curl_close($ch);
      // WEBHOOK
      //   header("Location: login.php?ref=register");
    } else $alertMessages[] = "Something went wrong!";
  }
  file_put_contents('submissions.txt', $selection . "\n\n", FILE_APPEND);
  //   echo json_encode(json_decode($selection), JSON_PRETTY_PRINT);
}
?>