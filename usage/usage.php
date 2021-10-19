<?php

require '../vendor/autoload.php';

use MirazMac\BanglaString\Translator\AvroToBijoy\Translator as AvroToBijoyTranslator;
use MirazMac\BanglaString\Translator\BijoyToAvro\Translator as BijoyToAvroTranslator;

$bijoyToAvro = new BijoyToAvroTranslator;

$avroToBijoy = new AvroToBijoyTranslator;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>BanglaString</title>
</head>
<body>
<h2>Bijoy to Avro</h2>
<div style="padding:1rem;">
<?= nl2br($bijoyToAvro->translate("A_©nxb †jLv hvi gv‡S Av‡Q A‡bK wKQz| n¨vu, GB †jLvi gv‡SB Av‡Q A‡bK wKQz| hw` Zzwg g‡b K‡iv, GUv †Zvgvi Kv‡R jvM‡e, Zvn‡j Zv jvM‡e Kv‡R| wb‡Ri fvlvq †jLv †`L‡Z Af¨¯— nI| g‡b ivL‡e †jLv A_©nxb nq, hLb Zzwg Zv‡K A_©nxb g‡b K‡iv; Avi †jLv A_©‡evaKZv ˆZwi K‡i, hLb Zzwg Zv‡Z A_© Xv‡jv| †h‡Kv‡bv †jLvB †Zvgvi Kv‡Q A_©‡evaKZv ˆZwi Ki‡Z cv‡i, hw` Zzwg †mLv‡b A_©‡`¨vZbv †`L‡Z cvI| ...wQ`ªv‡š^lY? bv, Zv n‡e †Kb?  †h K_v‡K Kv‡R jvMv‡Z PvI, Zv‡K Kv‡R jvMv‡bvi K_v wPš—v Kivi Av‡M fv‡ev, Zzwg wK †mB K_vi Rv`y‡Z Av”Qbœ n‡q †MQ wKbv| Zzwg hw` wbwðZ nI †h, Zzwg †Kv‡bv †gvnv”Qvw`Z Ave‡n Avweó n‡q A‡b¨i †kLv‡bv eywj AvÍ¯’ Ki‡Qv bv, Zvn‡j Zzwg wbf©‡q, wbwð‡š— AMÖmi nI| Zzwg †mB K_v‡K Rv‡bv, ey‡Sv, AvÍ¯’ K‡iv; g‡b ivL‡e, hv AbymiY Ki‡Z P‡j‡Qv, Zv Av‡M Abyaveb Kiv Ri“wi; GLv‡b wKsKZ©e¨weg~p nevi †Kv‡bv my‡hvM †bB|  †Kv‡bv K_v †kvbvgvÎB wK Zzwg Zv wek¦vm Ki‡e? nq‡Zv ej‡e, Ki‡e, nq‡Zv ej‡e ÒAvwg Ki‡ev bv|Ó n¨v, ÒAvwg Ki‡ev bvÓ ej‡jB mewKQz A¯^xKvi Kiv hvq bv, nq‡Zv Zzwg g‡bi Mnxb Mfxi †_‡K wVKB wek¦vm Ki‡Z ïi“ K‡i‡Qv †mB K_vwU, wKš‘ gy‡L A¯^xKvi Ki‡Qv| ZvB m‡PZb _v‡Kv, Zzwg Kx fve‡Qv— Zvi cÖwZ; m‡PZb _v‡Kv, Zzwg wK Avm‡jB wek¦vm Ki‡Z P‡j‡Qv H K_vwU... ïay GZUzKz ewj, hv-B wek¦vm K‡iv bv †Kb, Av‡M hvPvB K‡i bvI; Avi G‡Z PvB †Zvgvi cÖZ¨yrcbœgwZZ¡|  ZvB †Kvb K_vwU Kv‡R jvM‡e, Zv wba©viY Ki‡e Zzwg— n¨vu, Zzwg| nq‡Zv mvgvb¨ K’Uv evsjv A¶i: LÛ-Z, Aby¯^vi, wetmM© wKsev P›`ªwe›`y— wKš‘ hw` Zzwg wek¦vm K‡iv, Zvn‡j nq‡Zv Zzwg Zv w`‡qB ˆZwi Ki‡Z cv‡iv GK D”PgvM©xq gnvKve¨- GK wPimeyR AN¨©| iwPZ n‡Z cv‡i c„w_exi 1g weivg wP‡ýi BwZK_v – GK bZzb Elv| ...gnvKve¨ wjL‡Z Fwl-gywb nIqv jv‡M bv| A_©nxbZv Avi A_©‡`¨vZbvi †mB Cl©vKvZi †gvnvweóZv ZvB ˆZwi K‡i bvI wb‡Ri gv‡S- PvB GKUzLvwb JrmyK¨| wb‡RB wVK K‡iv, wb‡Ri fvlvUv wK A_©nxb, bvwK wKQz mwZ¨B ej‡Q! ")); ?>
</div>
<hr>

<h2 style="margin:0 0 .5rem">Avro to Bijoy</h2>
<?php
$bijoy = nl2br($avroToBijoy->translate('অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?

যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের শেখানো বুলি আত্মস্থ করছো না, তাহলে তুমি নির্ভয়ে, নিশ্চিন্তে অগ্রসর হও। তুমি সেই কথাকে জানো, বুঝো, আত্মস্থ করো; মনে রাখবে, যা অনুসরণ করতে চলেছো, তা আগে অনুধাবন করা জরুরি; এখানে কিংকর্তব্যবিমূঢ় হবার কোনো সুযোগ নেই।

কোনো কথা শোনামাত্রই কি তুমি তা বিশ্বাস করবে? হয়তো বলবে, করবে, হয়তো বলবে “আমি করবো না।” হ্যা, “আমি করবো না” বললেই সবকিছু অস্বীকার করা যায় না, হয়তো তুমি মনের গহীন গভীর থেকে ঠিকই বিশ্বাস করতে শুরু করেছো সেই কথাটি, কিন্তু মুখে অস্বীকার করছো। তাই সচেতন থাকো, তুমি কী ভাবছো— তার প্রতি; সচেতন থাকো, তুমি কি আসলেই বিশ্বাস করতে চলেছো ঐ কথাটি… শুধু এতটুকু বলি, যা-ই বিশ্বাস করো না কেন, আগে যাচাই করে নাও; আর এতে চাই তোমার প্রত্যুৎপন্নমতিত্ব।

তাই কোন কথাটি কাজে লাগবে, তা নির্ধারণ করবে তুমি— হ্যাঁ, তুমি। হয়তো সামান্য ক’টা বাংলা অক্ষর: খন্ড-ত, অনুস্বার, বিঃসর্গ কিংবা চন্দ্রবিন্দু— কিন্তু যদি তুমি বিশ্বাস করো, তাহলে হয়তো তুমি তা দিয়েই তৈরি করতে পারো এক উচ্চমার্গীয় মহাকাব্য- এক চিরসবুজ অর্ঘ্য। রচিত হতে পারে পৃথিবীর ১ম বিরাম চিহ্নের ইতিকথা – এক নতুন ঊষা। …মহাকাব্য লিখতে ঋষি-মুনি হওয়া লাগে না।
অর্থহীনতা আর অর্থদ্যোতনার সেই ঈর্ষাকাতর মোহাবিষ্টতা তাই তৈরি করে নাও নিজের মাঝে- চাই একটুখানি ঔৎসুক্য। নিজেই ঠিক করো, নিজের ভাষাটা কি অর্থহীন, নাকি কিছু সত্যিই বলছে!'));
?>
<h4 style="margin:0">Output in <em>SutonnyMJ</em> font:</h4>
<div style="font-family:SutonnyMJ;font-size:1.3rem;padding:1rem;">
<?= $bijoy ?>
</div>
<h4 style="margin:0">Raw output:</h4>
<pre style="white-space: pre-wrap;background:#f5f5f5;border: 1px solid #dfdfdf;border-radius:4px;color:#222;padding:1rem;"><?= $bijoy ?></pre>
</body>
</html>
