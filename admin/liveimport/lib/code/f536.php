<?php
/*
LiveImport (c) MaxD, 2017. Write to liveimport@devs.mx for support and purchase.
*/
 goto bcad; Fc4f: $C2 = @file_get_contents($Df7, false, D5, filesize($Df7) - 10000); e3a0: if ($C2) { goto abb6; } $C2 = ''; abb6: goto c713; bcad: $Df7 = "\x74\145\x6d\x70\57\x66\145\x65\144\56\154\x6f\147"; if (@filesize($Df7) > 50000) { goto D1fe; } $C2 = @file_get_contents($Df7); goto e3a0; D1fe: goto Fc4f; c713: @unlink($Df7); goto d838; d838: echo json_encode($C2);
