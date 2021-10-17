<?php

require '../vendor/autoload.php';

use MirazMac\BanglaString\BanglaString;

echo "<h2>Bijoy to Avro</h2><br>";
echo BanglaString::translate('wgqvu n„`‡qi PÂjZv e‡Ü eªZx n‡j Rxeb cwic‚Y© n‡e bvbv i‡Oi dy‡j| KyÅwUKv cÖfÄb k¼vi KviY jÊfÊ K‡i hvq aivi A½b| w¶ß n‡j mv½ n‡e weÁR‡b e‡j kvš— n‡j G eªþv‡Ê evwÃZdj †g‡j| Avlv‡p Ckvb †Kv‡b nVvr So D‡V MMb †g‡N‡Z Xv‡K e„wó bv‡g gv‡V Elvi AvKv‡k bv‡g mÜ¨vi Qvqv H †`‡Lv †_‡g †M‡Q cvivcv‡i †Lqv| kir FZy‡Z Pvu` Av‡jvq Askygvb myL `ytL cvkv cvwk mn Ae¯’vb| †h R‡j‡Z Ck¦i Z„òv †gUvq †mB R‡j‡Z RxeKy‡j webvk NUvq| †ivM hw` †`n †Q‡o g‡b wM‡q a‡i Jl‡ai mva¨ wK ev Zv‡i my¯’ K‡i?')->toAvro();
?>
<hr>

<h2>Avro to Bijoy</h2><br>
<span style="font-family:SutonnyMJ;font-size:1.2rem;">
<?php
echo BanglaString::translate('লন্ড')->toBijoy();
?>
</span>
