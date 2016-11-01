@extends('template')

@section('content')
@include('cms.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.css">

<div id="wrainbo-cms-level" class="wrainbo-cms-globalSetting">
  <div class="medium-2 columns">
    @include('cms.menu')
  </div>
  <style>
    .phoneArea {
      position: relative;
      z-index: 10;
    }
    .view {
      position: absolute;
      height: 86.5%;
      width: 75.5%;
      left: 12.3%;
      top: 6.75%;
      z-index: 1;
    }
   .background {
      width:100%;
      height:100%;
      background-size: cover;
      background-repeat: no-repeat;
      z-index: 1;
      position: absolute;
    }
    .toolbar {
      width: 66%;
      height: 26%;
      background-size: contain;
      background-repeat: no-repeat;
      left: 17%;
      bottom: 0%;
      position: absolute;
      z-index: 2;
    }
    .products {
      width: 27%;
      height: 15%;
      background-size: contain;
      background-repeat: no-repeat;
      left: 21.5%;
      bottom: 2%;
      position: absolute;
      z-index: 3;
    }
    .tactics {
      width: 27%;
      height: 15%;
      background-size: contain;
      background-repeat: no-repeat;
      left: 51.5%;
      bottom: 2%;
      position: absolute;
      z-index: 3;
    }
    .competitor {
      width: 16%;
      height: 31%;
      background-size: contain;
      background-repeat: no-repeat;
      bottom: 68%;
      left: 83%;
      position: absolute;
      z-index: 2;
    }
    .competitor > img {
      background-image: url(../image/editor/competitor/back.png);
      background-size: contain;
    }
    .hero {
      width: 16%;
      height: 38%;
      background-size: contain;
      background-repeat: no-repeat;
      bottom: 0%;
      left: 1%;
      position: absolute;
      z-index: 2;
    }
    .problem1 {
      width: 17%;
      height: 37%;
      background-size: contain;
      background-repeat: no-repeat;
      left: 21.5%;
      bottom: 40%;
      position: absolute;
      z-index: 2;
    }
    .problem2 {
      width: 17%;
      height: 37%;
      background-size: contain;
      background-repeat: no-repeat;
      left: 41.5%;
      bottom: 40%;
      position: absolute;
      z-index: 2;
    }
    .problem3 {
      width: 17%;
      height: 37%;
      background-size: contain;
      background-repeat: no-repeat;
      left: 61.5%;
      bottom: 40%;
      position: absolute;
      z-index: 2;
    }
    .topbar {
      width: 47%;
      height: 10%;
      background-size: contain;
      background-repeat: no-repeat;
      left: .5%;
      top: .5%;
      position: absolute;
      z-index: 2;
    }
    .tool {
      width: 15%;
      height: 26%;
      background-size: contain;
      background-repeat: no-repeat;
      position: absolute;
      z-index: 2;
      bottom: -2%;
      right: -1%;
    }
    .phoneImage {
      user-drag: none;
      user-select: none;
      -moz-user-select: none;
      -webkit-user-drag: none;
      -webkit-user-select: none;
      -ms-user-select: none;
      z-index: -1;
      opacity: 0;
    }
    .phoneBackground {
      position: absolute;
      width: 132%;
      height: 116%;
      left: -16%;
      top: -7.2%;
      background-image: url(http://localhost:8000/image/editor/iphone.png);
      background-size: contain;
      background-repeat: no-repeat;
      z-index: 5;
    }
    .selection-background-image {
      border-radius: 10px;
    }
    [class^="selection-"][class*="-image"] {
      margin-top: 2%;
      margin-bottom: 2%;
      width: 48%;
      margin-right: 1%;
    }
    .gu-unselectable {
      opacity: .25;
      background: rgba(0,0,0,0.5);
      z-index: 15;
    }
    .view > [id*="-area"] > [class^="selection-"][class*="-image"]:not(.gu-mirror) {
      border-radius: 0px;
      margin-top: 0%;
      width: 100%;
      height: 100%;
      margin-bottom: 0%;
      margin-right: 0%;
    }
    .view > .gu-unselectable > img:nth-child(2):not(.gu-mirror) {
      display:none;
    }
    #tool-area > #modern-tool {
      position: absolute;
      left: -5%;
      bottom: 10%;
      height: 80%;
      width: 95%;
    }
    body.gu-unselectable {
      opacity: 1;
      background: #f3f3f3;
      z-index: -1;
    }
    .selection-row {
      height: 200px;
    }
    .button-open {
      padding-bottom: 12% !important;
    }

    .selection-background-button {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 5%;
      border-radius: 5px;
      left: 2%;
      width: 96%;
      position: relative;
      margin-bottom: 5%;
      z-index: 1;
    }
    .selection-background-open {
      background-color: darkgray;
      text-align: center;
      padding-bottom: 48%;
      border-radius: 5px;
      border-top-left-radius: 0;
      border-top-right-radius: 5px;
      left: 2%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 254%;
      transition: border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-background-closed {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 0%;
      border-radius: 5px;
      border-top-left-radius: 0;
      border-top-right-radius: 0px;
      left: 2%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 96%;
      transition: border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-background-storage {
      width: 100%;
      height: 93%;
      position: absolute;
    }
    .selection-background-storage > [class^="selection-"][class*="-image"] {
      margin-top: 2%;
      margin-bottom: 2%;
      width: auto;
      height: 87%;
      margin-right: 1%;
    }

    .selection-toolbar-button {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 5%;
      border-radius: 5px;
      left: 2%;
      width: 96%;
      position: relative;
      margin-bottom: 5%;
      z-index: 1;
    }
    .selection-toolbar-open {
      background-color: darkgray;
      text-align: center;
      padding-bottom: 48%;
      border-radius: 5px;
      border-top-left-radius: 0;
      border-top-right-radius: 5px;
      left: 2%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 254%;
      transition: border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-toolbar-closed {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 0%;
      border-radius: 5px;
      border-top-left-radius: 0;
      border-top-right-radius: 0px;
      left: 2%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 96%;
      transition: border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-toolbar-storage {
      width: 100%;
      height: 93%;
      position: absolute;
    }
    .selection-toolbar-storage > [class^="selection-"][class*="-image"] {
      margin-top: 4%;
      margin-bottom: 2%;
      width: 46%;
      height: auto;
      margin-right: 1%;
    }

    .selection-topbar-button {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 5%;
      border-radius: 5px;
      left: 2%;
      width: 96%;
      position: relative;
      margin-bottom: 5%;
      z-index: 1;
    }
    .selection-topbar-open {
      background-color: darkgray;
      text-align: center;
      padding-bottom: 48%;
      border-radius: 5px;
      border-top-left-radius: 0;
      border-top-right-radius: 5px;
      left: 2%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 254%;
      transition: border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-topbar-closed {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 0%;
      border-radius: 5px;
      border-top-left-radius: 0;
      border-top-right-radius: 0px;
      left: 2%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 96%;
      transition: border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-topbar-storage {
      width: 100%;
      height: 93%;
      position: absolute;
    }
    .selection-topbar-storage > [class^="selection-"][class*="-image"] {
      margin-top: 7%;
      margin-bottom: 2%;
      width: 46%;
      height: auto;
      margin-right: 1%;
    }

    .selection-hero-button {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 5%;
      border-radius: 5px;
      left: 2%;
      width: 96%;
      position: relative;
      margin-bottom: 5%;
      z-index: 1;
    }
    .selection-hero-open {
      background-color: darkgray;
      text-align: center;
      padding-bottom: 48%;
      border-radius: 5px;
      border-top-left-radius: 5px;
      border-top-right-radius: 0px;
      left: -156%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 254%;
      transition: left 300ms linear, border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-hero-closed {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 0%;
      border-radius: 5px;
      border-top-left-radius: 0;
      border-top-right-radius: 0px;
      left: 2%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 96%;
      transition: left 300ms linear, border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-hero-storage {
      width: 100%;
      height: 93%;
      position: absolute;
      z-index: 3;
    }
    .selection-hero-storage > [class^="selection-"][class*="-image"] {
      margin-top: 0%;
      margin-bottom: 2%;
      width: 14%;
      height: auto;
      margin-right: 5%;
    }
    .selection-hero-storage > [class^="selection-"][class*="-image"]:nth-child(4) {
      height: 90%;
    }

    .selection-competitor-button {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 5%;
      border-radius: 5px;
      left: 2%;
      width: 96%;
      position: relative;
      margin-bottom: 5%;
      z-index: 1;
    }
    .selection-competitor-open {
      background-color: darkgray;
      text-align: center;
      padding-bottom: 48%;
      border-radius: 5px;
      border-top-left-radius: 5px;
      border-top-right-radius: 0px;
      left: -156%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 254%;
      transition: left 300ms linear, border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-competitor-closed {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 0%;
      border-radius: 5px;
      border-top-left-radius: 0;
      border-top-right-radius: 0px;
      left: 2%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 96%;
      transition: left 300ms linear, border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-competitor-storage {
      width: 100%;
      height: 93%;
      position: absolute;
      z-index: 3;
    }
    .selection-competitor-storage > [class^="selection-"][class*="-image"] {
      margin-top: 0%;
      margin-bottom: 2%;
      width: 14%;
      height: auto;
      margin-right: 3%;
    }

    .selection-customer-button {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 5%;
      border-radius: 5px;
      left: 2%;
      width: 96%;
      position: relative;
      margin-bottom: 5%;
      z-index: 1;
    }
    .selection-customer-open {
      background-color: darkgray;
      text-align: center;
      padding-bottom: 48%;
      border-radius: 5px;
      border-top-left-radius: 5px;
      border-top-right-radius: 0px;
      left: -156%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 254%;
      transition: left 300ms linear, border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-customer-closed {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 0%;
      border-radius: 5px;
      border-top-left-radius: 0;
      border-top-right-radius: 0px;
      left: 2%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 96%;
      transition: left 300ms linear, border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-customer-storage {
      width: 100%;
      height: 93%;
      position: absolute;
      z-index: 3;
    }
    .selection-customer-storage > [class^="selection-"][class*="-image"] {
      margin-top: 0%;
      margin-bottom: 2%;
      width: 14%;
      height: auto;
      margin-right: 3%;
    }

    .selection-product-button {
      background-color: darkgray;
      text-align: center;
      padding-top: .6%;
      padding-bottom: .6%;
      border-radius: 5px;
      left: 37.8%;
      width: 13.4%;
      position: absolute;
      margin-bottom: 5%;
      z-index: 1;
      top: 21.5%;
    }
    .selection-product-button-open {

    }
    .selection-product-open {
      background-color: darkgray;
      text-align: center;
      padding-bottom: 5%;
      border-radius: 5px;
      left: 37.8%;
      position: absolute;
      height: 5%;
      width: 35%;
      bottom: 79%;
      transition: left 300ms linear, border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-product-closed {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 0%;
      border-radius: 5px;
      border-top-left-radius: 0;
      border-top-right-radius: 0px;
      left: 2%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 96%;
      transition: left 300ms linear, border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-product-storage {
      width: 100%;
      height: 93%;
      position: absolute;
      z-index: 3;
    }
    .selection-product-storage > [class^="selection-"][class*="-image"] {
      margin-top: 0%;
      margin-bottom: 2%;
      width: 14%;
      height: auto;
      margin-right: 3%;
    }

    .selection-spell-button {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 5%;
      border-radius: 5px;
      left: 2%;
      width: 96%;
      position: relative;
      margin-bottom: 5%;
      z-index: 1;
    }
    .selection-spell-open {
      background-color: darkgray;
      text-align: center;
      padding-bottom: 48%;
      border-radius: 5px;
      border-top-left-radius: 5px;
      border-top-right-radius: 0px;
      left: -156%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 254%;
      transition: left 300ms linear, border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-spell-closed {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 0%;
      border-radius: 5px;
      border-top-left-radius: 0;
      border-top-right-radius: 0px;
      left: 2%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 96%;
      transition: left 300ms linear, border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-spell-storage {
      width: 100%;
      height: 93%;
      position: absolute;
      z-index: 3;
    }
    .selection-spell-storage > [class^="selection-"][class*="-image"] {
      margin-top: 0%;
      margin-bottom: 2%;
      width: 14%;
      height: auto;
      margin-right: 3%;
    }

    .selection-tactic-button {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 5%;
      border-radius: 5px;
      left: 2%;
      width: 96%;
      position: relative;
      margin-bottom: 5%;
      z-index: 1;
    }
    .selection-tactic-open {
      background-color: darkgray;
      text-align: center;
      padding-bottom: 48%;
      border-radius: 5px;
      border-top-left-radius: 5px;
      border-top-right-radius: 0px;
      left: -156%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 254%;
      transition: left 300ms linear, border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-tactic-closed {
      background-color: darkgray;
      text-align: center;
      padding-top: 5%;
      padding-bottom: 0%;
      border-radius: 5px;
      border-top-left-radius: 0;
      border-top-right-radius: 0px;
      left: 2%;
      position: relative;
      margin-top: -10%;
      margin-right: 4%;
      width: 96%;
      transition: left 300ms linear, border-top-right-radius 300ms linear, padding-bottom 300ms linear, width 300ms linear, transform 300ms linear;
    }
    .selection-tactic-storage {
      width: 100%;
      height: 93%;
      position: absolute;
      z-index: 3;
    }
    .selection-tactic-storage > [class^="selection-"][class*="-image"] {
      margin-top: 0%;
      margin-bottom: 2%;
      width: 14%;
      height: auto;
      margin-right: 3%;
    }


  </style>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js'></script>
  <script>
    $(document).ready(function(){

      function selectionBackground() {
        var open = document.querySelector(".selection-background-open");
        var closed = document.querySelector(".selection-background-closed");
        var el = document.querySelector(".selection-background-button");
        var storage = document.querySelector(".selection-background-storage");
        if ($(el).next().hasClass('selection-background-closed')) {
          closeOpenedTab();
          $(el).next().removeClass('selection-background-closed').addClass('selection-background-open');
          $(el).addClass('button-open');
          $(storage).fadeIn(300);
        } else if ($(el).next().hasClass('selection-background-open')) {
          $(el).next().removeClass('selection-background-open').addClass('selection-background-closed');
          $(storage).fadeOut(300);
          setTimeout(function(){$(el).removeClass('button-open');},300);
        }
        return el;
      }
      $('.selection-background-button').on("click", selectionBackground);

      function selectionToolbar() {
        var open = document.querySelector(".selection-toolbar-open");
        var closed = document.querySelector(".selection-toolbar-closed");
        var el = document.querySelector(".selection-toolbar-button");
        var storage = document.querySelector(".selection-toolbar-storage");
        if ($(el).next().hasClass('selection-toolbar-closed')) {
          closeOpenedTab();
          $(el).next().removeClass('selection-toolbar-closed').addClass('selection-toolbar-open');
          $(el).addClass('button-open');
          $(storage).fadeIn(300);
        } else if ($(el).next().hasClass('selection-toolbar-open')) {
          $(el).next().removeClass('selection-toolbar-open').addClass('selection-toolbar-closed');
          $(storage).fadeOut(300);
          setTimeout(function(){$(el).removeClass('button-open');},300);
        }
        return el;
      }
      $('.selection-toolbar-button').on("click", selectionToolbar);

      function selectionTopbar() {
        var open = document.querySelector(".selection-topbar-open");
        var closed = document.querySelector(".selection-topbar-closed");
        var el = document.querySelector(".selection-topbar-button");
        var storage = document.querySelector(".selection-topbar-storage");
        if ($(el).next().hasClass('selection-topbar-closed')) {
          closeOpenedTab();
          $(el).next().removeClass('selection-topbar-closed').addClass('selection-topbar-open');
          $(el).addClass('button-open');
          $(storage).fadeIn(300);
        } else if ($(el).next().hasClass('selection-topbar-open')) {
          $(el).next().removeClass('selection-topbar-open').addClass('selection-topbar-closed');
          $(storage).fadeOut(300);
          setTimeout(function(){$(el).removeClass('button-open');},300);
        }
        return el;
      }
      $('.selection-topbar-button').on("click", selectionTopbar);

      function selectionHero() {
        var open = document.querySelector(".selection-hero-open");
        var closed = document.querySelector(".selection-hero-closed");
        var el = document.querySelector(".selection-hero-button");
        var storage = document.querySelector(".selection-hero-storage");
        if ($(el).next().hasClass('selection-hero-closed')) {
          closeOpenedTab();
          $(el).next().removeClass('selection-hero-closed').addClass('selection-hero-open');
          $(el).addClass('button-open');
          $(storage).fadeIn(300);
        } else if ($(el).next().hasClass('selection-hero-open')) {
          $(el).next().removeClass('selection-hero-open').addClass('selection-hero-closed');
          $(storage).fadeOut(300);
          setTimeout(function(){$(el).removeClass('button-open');},300);
        }
        return el;
      }
      $('.selection-hero-button').on("click", selectionHero);

      function selectionCompetitor() {
        var open = document.querySelector(".selection-competitor-open");
        var closed = document.querySelector(".selection-competitor-closed");
        var el = document.querySelector(".selection-competitor-button");
        var storage = document.querySelector(".selection-competitor-storage");
        if ($(el).next().hasClass('selection-competitor-closed')) {
          closeOpenedTab();
          $(el).next().removeClass('selection-competitor-closed').addClass('selection-competitor-open');
          $(el).addClass('button-open');
          $(storage).fadeIn(300);
        } else if ($(el).next().hasClass('selection-competitor-open')) {
          $(el).next().removeClass('selection-competitor-open').addClass('selection-competitor-closed');
          $(storage).fadeOut(300);
          setTimeout(function(){$(el).removeClass('button-open');},300);
        }
        return el;
      }
      $('.selection-competitor-button').on("click", selectionCompetitor);

      function selectionCustomer() {
        var open = document.querySelector(".selection-customer-open");
        var closed = document.querySelector(".selection-customer-closed");
        var el = document.querySelector(".selection-customer-button");
        var storage = document.querySelector(".selection-customer-storage");
        if ($(el).next().hasClass('selection-customer-closed')) {
          closeOpenedTab();
          $(el).next().removeClass('selection-customer-closed').addClass('selection-customer-open');
          $(el).addClass('button-open');
          $(storage).fadeIn(300);
        } else if ($(el).next().hasClass('selection-customer-open')) {
          $(el).next().removeClass('selection-customer-open').addClass('selection-customer-closed');
          $(storage).fadeOut(300);
          setTimeout(function(){$(el).removeClass('button-open');},300);
        }
        return el;
      }
      $('.selection-customer-button').on("click", selectionCustomer);

      function selectionProduct() {
        var open = document.querySelector(".selection-product-open");
        var closed = document.querySelector(".selection-product-closed");
        var el = document.querySelector(".selection-product-button");
        var storage = document.querySelector(".selection-product-storage");
        if ($(el).next().hasClass('selection-product-closed')) {
          closeOpenedTab();
          $(el).next().removeClass('selection-product-closed').addClass('selection-product-open');
          $(el).addClass('button-open');
          $(storage).fadeIn(300);
        } else if ($(el).next().hasClass('selection-product-open')) {
          $(el).next().removeClass('selection-product-open').addClass('selection-product-closed');
          $(storage).fadeOut(300);
          setTimeout(function(){$(el).removeClass('button-open');},300);
        }
        return el;
      }
      $('.selection-product-button').on("click", selectionProduct);

      function selectionSpell() {
        var open = document.querySelector(".selection-spell-open");
        var closed = document.querySelector(".selection-spell-closed");
        var el = document.querySelector(".selection-spell-button");
        var storage = document.querySelector(".selection-spell-storage");
        if ($(el).next().hasClass('selection-spell-closed')) {
          closeOpenedTab();
          $(el).next().removeClass('selection-spell-closed').addClass('selection-spell-open');
          $(el).addClass('button-open');
          $(storage).fadeIn(300);
        } else if ($(el).next().hasClass('selection-spell-open')) {
          $(el).next().removeClass('selection-spell-open').addClass('selection-spell-closed');
          $(storage).fadeOut(300);
          setTimeout(function(){$(el).removeClass('button-open');},300);
        }
        return el;
      }
      $('.selection-spell-button').on("click", selectionSpell);

      function selectionTactic() {
        var open = document.querySelector(".selection-tactic-open");
        var closed = document.querySelector(".selection-tactic-closed");
        var el = document.querySelector(".selection-tactic-button");
        var storage = document.querySelector(".selection-tactic-storage");
        if ($(el).next().hasClass('selection-tactic-closed')) {
          closeOpenedTab();
          $(el).next().removeClass('selection-tactic-closed').addClass('selection-tactic-open');
          $(el).addClass('button-open');
          $(storage).fadeIn(300);
        } else if ($(el).next().hasClass('selection-tactic-open')) {
          $(el).next().removeClass('selection-tactic-open').addClass('selection-tactic-closed');
          $(storage).fadeOut(300);
          setTimeout(function(){$(el).removeClass('button-open');},300);
        }
        return el;
      }
      $('.selection-tactic-button').on("click", selectionTactic);

      function closeOpenedTab() {
        if ($('.selection-background-button').hasClass('button-open')){
          $('.selection-background-button').trigger("click");
        }
        if ($('.selection-toolbar-button').hasClass('button-open')){
          $('.selection-toolbar-button').trigger("click");
        }
        if ($('.selection-topbar-button').hasClass('button-open')){
          $('.selection-topbar-button').trigger("click");
        }
        if ($('.selection-hero-button').hasClass('button-open')){
          $('.selection-hero-button').trigger("click");
        }
        if ($('.selection-competitor-button').hasClass('button-open')){
          $('.selection-competitor-button').trigger("click");
        }
        if ($('.selection-customer-button').hasClass('button-open')){
          $('.selection-customer-button').trigger("click");
        }
        if ($('.selection-product-button').hasClass('button-open')){
          $('.selection-product-button').trigger("click");
        }
        if ($('.selection-spell-button').hasClass('button-open')){
          $('.selection-spell-button').trigger("click");
        }
        if ($('.selection-tactic-button').hasClass('button-open')){
          $('.selection-tactic-button').trigger("click");
        }
      }

      function dragger(selectArea, targetArea) {
        dragula([selectArea, targetArea], {
          accepts: function (el, target) {
            return target !== selectArea
          },
          mirrorContainer: targetArea,
          direction: 'mixed',
          copy: true,
          revertOnSpill: true
        }).on('drop', function (el, target, source, sibling) {
            var element = el;
            var targetContainer = target;
            var siblingTarget = sibling;
            this.cancel(true);
            $(targetContainer).empty().append(element);
        });
      }

      var noneA = document.getElementsByClassName('none');
      function problemDragger(selectArea, target1Area, target2Area, target3Area) {
        dragula([selectArea, target1Area, target2Area, target3Area], {
          direction: 'mixed',
          copy: true,
          revertOnSpill: true
        }).on('drop', function (el, target, source, sibling) {
            var element = el;
            var targetContainer = target;
            var siblingTarget = sibling;
            this.cancel(true);
            $(targetContainer).empty().append(element);
        }).on('drag', function (el, target, source, sibling) {
            $(target1Area).addClass('gu-unselectable');
            $(target2Area).addClass('gu-unselectable');
            $(target3Area).addClass('gu-unselectable');
        }).on('dragend', function (el, target, source, sibling) {
            $(target1Area).removeClass('gu-unselectable');
            $(target2Area).removeClass('gu-unselectable');
            $(target3Area).removeClass('gu-unselectable');
        });
      }

      //Toolbar dragging
      var toolbarSelectArea = document.getElementById('selection-toolbar-storage');
      var toolbarArea = document.getElementById('toolbar-area');
      dragger(toolbarSelectArea, toolbarArea);

      //Background dragging
      var backgroundSelectArea = document.getElementById('selection-background-storage');
      var backgroundArea = document.getElementById('background-area');
      dragger(backgroundSelectArea, backgroundArea);

      //Competitor dragging
      var competitorSelectArea = document.getElementById('selection-competitor-storage');
      var competitorArea = document.getElementById('competitor-area');
      dragger(competitorSelectArea, competitorArea);

      //Tool dragging
      var toolSelectArea = document.getElementById('selection-tool-storage');
      var toolArea = document.getElementById('tool-area');
      dragger(toolSelectArea, toolArea);

      //Tactics dragging
      var tacticsSelectArea = document.getElementById('selection-tactics-storage');
      var tacticsArea = document.getElementById('tactics-area');
      dragger(tacticsSelectArea, tacticsArea);

      //Topbar dragging
      var topbarSelectArea = document.getElementById('selection-topbar-storage');
      var topbarArea = document.getElementById('topbar-area');
      dragger(topbarSelectArea, topbarArea);

      //Products dragging
      var productsSelectArea = document.getElementById('selection-products-storage');
      var productsArea = document.getElementById('products-area');
      dragger(productsSelectArea, productsArea);

      //Hero dragging
      var heroSelectArea = document.getElementById('selection-hero-storage');
      var heroArea = document.getElementById('hero-area');
      dragger(heroSelectArea, heroArea);

      //Problem dragging
      var problemSelectArea = document.getElementById('selection-customer-storage');
      var problem1Area = document.getElementById('problem1-area');
      var problem2Area = document.getElementById('problem2-area');
      var problem3Area = document.getElementById('problem3-area');
      problemDragger(problemSelectArea, problem1Area, problem2Area, problem3Area);
    });
  </script>
  <div class="medium-10 columns">
    <h2 class="wrainbo-cms-title">Game Editor</h2>
    <div class="row selection-row">
      <div class="medium-2 columns">
        <div class="selection-background-button">Background
        </div>
        <div class="selection-background-closed">
          <div class="selection-background-storage" id="selection-background-storage" style="display: none;">
            <img src="../image/editor/modern/background.jpg" class="selection-background-image">
            <img src="../image/editor/modern/leadership_background.jpg" class="selection-background-image">
            <img src="../image/editor/fantasy/background.jpg" class="selection-background-image">
          </div>
        </div>
      </div>
      <div class="medium-2 columns">
        <div class="selection-toolbar-button">Toolbar
        </div>
        <div class="selection-toolbar-closed">
          <div class="selection-toolbar-storage" id="selection-toolbar-storage" style="display: none;">
            <img src="../image/editor/modern/main_hud.png" class="selection-toolbar-image">
            <img src="../image/editor/fantasy/main_hud.png" class="selection-toolbar-image">
          </div>
        </div>
      </div>
      <div class="medium-2 columns">
        <div class="selection-topbar-button">Top Bar
        </div>
        <div class="selection-topbar-closed">
          <div class="selection-topbar-storage" id="selection-topbar-storage" style="display: none;">
            <img src="../image/editor/modern/topbar.png" class="selection-topbar-image">
            <img src="../image/editor/fantasy/topbar.png" class="selection-topbar-image">
          </div>
        </div>
      </div>
      <div class="medium-2 columns">
        <div class="selection-hero-button">Heroes
        </div>
        <div class="selection-hero-closed">
          <div class="selection-hero-storage" id="selection-hero-storage" style="display: none;">
            <img src="../image/editor/heroes/wizard.png" class="selection-hero-image">
            <img src="../image/editor/heroes/builder.png" class="selection-hero-image">
            <img src="../image/editor/heroes/mage.png" class="selection-hero-image">
            <img src="../image/editor/heroes/goblin.png" class="selection-hero-image">
          </div>
        </div>
      </div>
      <div class="medium-2 columns">
        <div class="selection-competitor-button">Competitor
        </div>
        <div class="selection-competitor-closed">
          <div class="selection-competitor-storage" id="selection-competitor-storage" style="display: none;">
            <img src="../image/editor/competitor/ninja.png" class="selection-competitor-image">
            <img src="../image/editor/competitor/robot-blue.png" class="selection-competitor-image">
            <img src="../image/editor/competitor/robot-gray.png" class="selection-competitor-image">
            <img src="../image/editor/competitor/robot-red.png" class="selection-competitor-image">
            <img src="../image/editor/competitor/robot-white.png" class="selection-competitor-image">
          </div>
        </div>
      </div>
      <div class="medium-2 columns">
        <div class="selection-customer-button">Customers
        </div>
        <div class="selection-customer-closed">
          <div class="selection-customer-storage" id="selection-customer-storage" style="display: none;">
            <img src="../image/editor/modern/problem.png" class="selection-customer-image">
            <img src="../image/editor/fantasy/problem.png" class="selection-customer-image">
          </div>
        </div>
      </div>
    </div>
    <!--
    <div class="row">
      <div class="selection-product-button">Products
      </div>
      <div class="selection-product-open">
        <div class="selection-product-storage" id="selection-product-storage" style="display: none;">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="medium-2 medium-centered columns">
        <div class="selection-customer-button">Products
        </div>
        <div class="selection-customer-closed">
          <div class="selection-customer-storage" id="selection-customer-storage" style="display: none;">
            <img src="../image/editor/modern/problem.png" class="selection-customer-image">
            <img src="../image/editor/fantasy/problem.png" class="selection-customer-image">
          </div>
        </div>
      </div>
      <div class="medium-2 medium-centered columns">
        <div class="selection-customer-button">Spells
        </div>
        <div class="selection-customer-closed">
          <div class="selection-customer-storage" id="selection-customer-storage" style="display: none;">
            <img src="../image/editor/modern/problem.png" class="selection-customer-image">
            <img src="../image/editor/fantasy/problem.png" class="selection-customer-image">
          </div>
        </div>
      </div>
      <div class="medium-2 medium-centered columns">
        <div class="selection-customer-button">Tactics
        </div>
        <div class="selection-customer-closed">
          <div class="selection-customer-storage" id="selection-customer-storage" style="display: none;">
            <img src="../image/editor/modern/problem.png" class="selection-customer-image">
            <img src="../image/editor/fantasy/problem.png" class="selection-customer-image">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="medium-4 columns">
        <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
          <li class="accordion-item is-active" data-accordion-item>
            <a href="#" class="accordion-title">Background</a>
            <div class="accordion-content" data-tab-content>
              <div id="selection-background-area">
                <img src="../image/editor/modern/background.jpg" class="selection-background-image">
                <img src="../image/editor/modern/leadership_background.jpg" class="selection-background-image">
                <img src="../image/editor/fantasy/background.jpg" class="selection-background-image">
              </div>
            </div>
          </li>
        </ul>
        <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
          <li class="accordion-item is-active" data-accordion-item>
            <a href="#" class="accordion-title">Tools</a>
            <div class="accordion-content" data-tab-content>
              <div id="selection-tool-area">
                <img src="../image/editor/modern/tool.png" class="selection-tool-image" id="modern-tool">
                <img src="../image/editor/fantasy/tool.png" class="selection-tool-image">
              </div>
            </div>
          </li>
        </ul>
        <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
          <li class="accordion-item is-active" data-accordion-item>
            <a href="#" class="accordion-title">Heroes</a>
            <div class="accordion-content" data-tab-content>
              <div id="selection-hero-area">
                <img src="../image/editor/heroes/wizard.png" class="selection-hero-image">
                <img src="../image/editor/heroes/builder.png" class="selection-hero-image">
                <img src="../image/editor/heroes/mage.png" class="selection-hero-image">
                <img src="../image/editor/heroes/goblin.png" class="selection-hero-image">
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="medium-4 columns">
        <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
          <li class="accordion-item is-active" data-accordion-item>
            <a href="#" class="accordion-title">Products</a>
            <div class="accordion-content" data-tab-content>
              <div id="selection-products-area">
                <img src="../image/editor/modern/products.png" class="selection-products-image">
                <img src="../image/editor/fantasy/products.png" class="selection-products-image">
              </div>
            </div>
          </li>
        </ul>
        <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
          <li class="accordion-item is-active" data-accordion-item>
            <a href="#" class="accordion-title">Tool Bar</a>
            <div class="accordion-content" data-tab-content>
              <div id="selection-toolbar-area">
                <img src="../image/editor/modern/main_hud.png" class="selection-toolbar-image">
                <img src="../image/editor/fantasy/main_hud.png" class="selection-toolbar-image">
              </div>
            </div>
          </li>
        </ul>
        <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
          <li class="accordion-item is-active" data-accordion-item>
            <a href="#" class="accordion-title">Top Bar</a>
            <div class="accordion-content" data-tab-content>
              <div id="selection-topbar-area">
                <img src="../image/editor/modern/topbar.png" class="selection-topbar-image">
                <img src="../image/editor/fantasy/topbar.png" class="selection-topbar-image">
              </div>
            </div>
          </li>
        </ul>
        <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
          <li class="accordion-item is-active" data-accordion-item>
            <a href="#" class="accordion-title">Competitors</a>
            <div class="accordion-content" data-tab-content>
              <div id="selection-competitor-area">
                <img src="../image/editor/competitor/ninja.png" class="selection-competitor-image">
                <img src="../image/editor/competitor/robot-blue.png" class="selection-competitor-image">
                <img src="../image/editor/competitor/robot-gray.png" class="selection-competitor-image">
                <img src="../image/editor/competitor/robot-red.png" class="selection-competitor-image">
                <img src="../image/editor/competitor/robot-white.png" class="selection-competitor-image">
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="medium-4 columns">
        <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
          <li class="accordion-item is-active" data-accordion-item>
            <a href="#" class="accordion-title">Competitor</a>
            <div class="accordion-content" data-tab-content>
              <div id="selection-competitor-area">
                <img src="../image/editor/modern/competitor.png" class="selection-competitor-image">
                <img src="../image/editor/fantasy/competitor.png" class="selection-competitor-image">
              </div>
            </div>
          </li>
        </ul>
        <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
          <li class="accordion-item is-active" data-accordion-item>
            <a href="#" class="accordion-title">Tactics</a>
            <div class="accordion-content" data-tab-content>
              <div id="selection-tactics-area">
                <img src="../image/editor/modern/tactics.png" class="selection-tactics-image">
                <img src="../image/editor/fantasy/tactics.png" class="selection-tactics-image">
              </div>
            </div>
          </li>
        </ul>
        <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
          <li class="accordion-item is-active" data-accordion-item>
            <a href="#" class="accordion-title">Problems</a>
            <div class="accordion-content" data-tab-content>
              <div id="selection-problem-area">
                <img src="../image/editor/modern/problem.png" class="selection-problem-image">
                <img src="../image/editor/fantasy/problem.png" class="selection-problem-image">
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    -->
    <div class="row">
      <div class="medium-10 medium-centered columns">
        <div class="phoneArea">
          <div class="view">
            <div class="phoneBackground"></div>
            <div class="background" id="background-area"></div>
            <div class="topbar" id="topbar-area"></div>
            <div class="toolbar" id="toolbar-area"></div>
            <div class="products" id="products-area"></div>
            <div class="tactics" id="tactics-area"></div>
            <div class="competitor" id="competitor-area"></div>
            <div class="hero" id="hero-area"></div>
            <div class="problem1" id="problem1-area"></div>
            <div class="problem2" id="problem2-area"></div>
            <div class="problem3" id="problem3-area"></div>
            <div class="tool" id="tool-area"></div>
          </div>
          <img src="../image/editor/iphone.png" class="phoneImage">
        </div>
      </div>
    </div>
  </div>
  <div class="none"></div>
</div>



@stop
