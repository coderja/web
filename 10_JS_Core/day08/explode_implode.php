<?php
  $kw= 'wang jie';
  $kws=explode(' ',$kw);
  echo(json_encode($kws));
  $kw = implode(',',$kws);
  echo $kw;
?>