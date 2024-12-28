<?php
// 1. تعريف المتغيرات
$name = "Ali";
$age = 20;

// 2. استخدام if و if else
if ($age >= 18) {
    echo "$name بالغ.<br>";
} else {
    echo "$name قاصر.<br>";
}

// 3. استخدام for
echo "استخدام for:<br>";
for ($i = 1; $i <= 3; $i++) {
    echo "التكرار رقم: $i<br>";
}

// 4. استخدام while
echo "استخدام while:<br>";
$i = 1;
while ($i <= 3) {
    echo "التكرار باستخدام while رقم: $i<br>";
    $i++;
}

// 5. استخدام do while
echo "استخدام do while:<br>";
$i = 1;
do {
    echo "التكرار باستخدام do while رقم: $i<br>";
    $i++;
} while ($i <= 3);

// 6. استخدام switch
echo "استخدام switch:<br>";
$day = 2;
switch ($day) {
    case 1:
        echo "الأحد<br>";
        break;
    case 2:
        echo "الاثنين<br>";
        break;
    case 3:
        echo "الثلاثاء<br>";
        break;
    default:
        echo "يوم غير معروف<br>";
}

// 7. العمليات الحسابية
echo "العمليات الحسابية:<br>";
$x = 8;
$y = 4;
echo "جمع: " . ($x + $y) . "<br>";
echo "طرح: " . ($x - $y) . "<br>";
echo "ضرب: " . ($x * $y) . "<br>";
echo "قسمة: " . ($x / $y) . "<br>";
echo "باقي القسمة: " . ($x % $y) . "<br>";

// 8. معاملات المقارنة
echo "استخدام معاملات المقارنة:<br>";
if ($x > $y) {
    echo "$x أكبر من $y<br>";
} else {
    echo "$x ليس أكبر من $y<br>";
}
?>