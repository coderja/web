<?php
header("Content-Type:text/html;charset=UTF-8");
?>
    <div id="header-top" class="clear">
      <!-- 1、左侧 ：LOGO -->
      <div id="logo" class="lf">
        <a href="01_index.html">
          <img src="img/header/logo.png" alt="">
        </a>
      </div>
      <!-- 2、中间输入框-->
      <div id="top-input" class="lf">
        <div class="input-box" class="lf">
          <input type="text" id="txtSearch" placeholder="请输入您要搜索的内容">
          <span class="sort-search">
            分类搜索
            <i class="caret"></i>
          </span>
        </div>
        <a href="#" class="search-img">
          <img src="img/header/search.png" alt="">
        </a>
      </div>
      <!--3、注册，登录列表-->
      <ul id="list">
        <li>
          <a href="#" title="我的收藏">
            <img src="img/header/care.png">
          </a>
          <b>|</b>
        </li>
        <li>
          <a href="#" title="我的订单">
            <img src="img/header/order.png">
          </a>
          <b>|</b>
        </li>
        <li>
          <a href="#" title="我的购物车">
            <img src="img/header/shop_car.png" alt="">
          </a>
          <b>|</b>
        </li>
        <li>
          <a href="#">注册</a>
          <b>|</b>
        </li>
        <li>
          <a href="#">登录</a>
        </li>
      </ul>
    </div>
    <nav id="nav" class="clear">
      <ul>
        <li>
          <a href="#">首页</a>
        </li>
        <li>
          <a href="#">学习用品</a>
        </li>
        <li>
          <a href="#">私人定制</a>
        </li>
      </ul>
    </nav>
