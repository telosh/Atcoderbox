<!-- 高橋君はデータの加工が行いたいです。 -->
<!-- 整数 a,b,cと、文字列 s が与えられます。 -->
<!-- a+b+c の計算結果と、文字列 s を並べて表示しなさい。 -->

<!-- 制約 -->
<!-- 1≤a,b,c≤1,000  -->
<!-- 1≤|s|≤100 -->
<?php
// $aに該当する数値の検索
fscanf(STDIN,"%d",$a);
// $b $cに該当する数値の検索
fscanf(STDIN,"%d %d",$b,$c);
// $sに該当する文字列の検索
fscanf(STDIN,"%s",$s);
// echo ($a+$b+$c)." ".$s."\n";
echo ($a+$b+$c);
echo " ".$s."\n";
?>

