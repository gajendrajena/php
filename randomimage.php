<html>
<body>
  <?php
  srand( microtime() * 1000000 );
  $num = rand( 1, 17 );

  switch( $num ) 
  {
    case 1: $image_file = "./images/292704_248581311838859_3147902_n.jpg";
    break;
    case 2: $image_file = "./images/293549_248584561838534_5448116_n.jpg";
    break;
    case 3: $image_file = "./images/293549_248584561838534_5448116_n1.jpg";
    break;
    case 4: $image_file = "./images/322982_320627991300857_910529222_o.jpg";
    break;
    case 5: $image_file = "./images/326432_320627847967538_338482307_o.jpg";
    break;
    case 6: $image_file = "./images/330187_320627657967557_1492481560_o.jpg";
    break;
    case 7: $image_file = "./images/330581_320628121300844_183319288_o.jpg";
    break;
    case 8: $image_file = "./images/335211_320628144634175_1893596749_o.jpg";
    break;
    case 9: $image_file = "./images/412562_320626854634304_1516465670_o.jpg";
    break;
    case 10: $image_file = "./images/413819_320627781300878_2026439829_o.jpg";
    break;
    case 11: $image_file = "./images/414114_320627824634207_820395633_o.jpg";
    break;
    case 12: $image_file = "./images/img1.jpg";
    break;
    case 13: $image_file = "./images/img2.jpg";
    break;
    case 14: $image_file = "./images/img3.jpg";
    break;
    case 15: $image_file = "./images/img4.jpg";
    break;
    case 16: $image_file = "./images/logo.jpg";
    break;
    case 17: $image_file = "./images/prof.jpg";
    break;
  }
  echo "Random Image : <img src=$image_file />";
  ?>
</body>
</html>