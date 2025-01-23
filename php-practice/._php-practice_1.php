Q1.
$name = '土居';

if($name = '土居'){
  echo '私の名前は「'.$name.'」です。';
}


Q2.
$num = 5*4;
echo $num . "\n";

$num_2 = $num/2;
echo $num_2;


Q3.
$date = date("Y年m月d日 H時i分s秒");
echo "現在時刻は、".$date." です。"

Q4.
$device = "windows";

if ($device === "windows" || $device === "mac"){
    echo "使用OSは、'$device'です。";
    }else{
    echo "どちらでもありません。";
  }



Q5.
$age = 22;

$message = ($age < 18) ? "未成年です。" : "成人です。";
echo $message;


Q6.
$kantou = ["東京都","神奈川県","埼玉県","千葉県","茨城県","栃木県","群馬県"];

echo $kantou[2] . "と" . $kantou[3] . "は関東地方の都道府県です。";


Q7.
$kantou = [
  "東京都"=>"新宿区",
  "神奈川県"=>"横浜市",
  "千葉県"=>"千葉市",
  "埼玉県"=>"さいたま市",
  "栃木県"=>"宇都宮市",
  "群馬県"=>"前橋市",
  "茨城県"=>"水戸市"
  ];

foreach ($kantou as $y){
  echo $y."\n";
}


Q8.
$place = "埼玉県";

foreach($kantou as $place => $shichoson){
  if($place === "埼玉県"){
    echo $place."の県庁所在地は、".$shichoson."です。";
  }
}

Q9.
$kantou["愛知県"] = "愛知県";
$kantou["大阪府"] = "大阪府";

foreach($kantou as $x => $y)
  {if($x === "東京都"
    || $x === "神奈川県"
    || $x === "千葉県"
    || $x === "埼玉県"
    || $x === "栃木県"
    || $x === "群馬県"
    || $x === "茨城県"){
    echo $kantou[$x]."の県庁所在地は、".$y."です。\n";
    }else{
    echo $y."は関東地方ではありません。\n";}}


Q10.
function hello($name){
return $name."さん、こんにちは。";
}

echo hello("金谷")."\n";
echo hello("安藤")."\n";

Q11.
function calcTaxInPrice($price){
  $taxRate = 0.10;
  $taxInPrice = $price * (1 + $taxRate);
  return
  $taxInPrice;}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price."円の商品税込価格は".$taxInPrice .

Q12.
function distinguishNum($number){
  if($number % 2===0){
    return $number."は偶数です。";
    }else{
    return $number."は奇数です。";}
  }
echo distinguishNum(11)."\n";
echo distinguishNum(24)."\n";

Q13.
function evaluateGrade($grade){
  switch($grade){
    case'A':
    case'B':return"合格です。";
    case'C':return"合格ですが追加課題があります。";
    case'D':return"不合格です。";
    default:return"判定不明です。講師に問い合わせてください。";}
  }

echo evaluateGrade('A')."\n";
echo evaluateGrade('X')."\n";
