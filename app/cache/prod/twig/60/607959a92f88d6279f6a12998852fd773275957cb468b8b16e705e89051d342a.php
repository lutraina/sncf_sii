<?php

/* menu/cyberstore-style.css */
class __TwigTemplate_dff243779370cb5e206f52b0cf5c5562540a8b131de2a09e1539c804a540e5b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "html {
    position: relative;
    min-height: 100%;
}

body {
    /* Margin bottom by footer height */
    margin-bottom: 60px;
    padding-top: 50px;
}



/* -------------------------------------------------
* Style pour la barre de navigation
-------------------------------------------------*/

/* Colore le menu actif dans la barre de navigation */
.active-menu {
    background-color: #644668;
}

/* Couleur de la barre de navigation */
.navbar-custom {
\tbackground-color: rgb(110,30,120);
}
/*------------------------------------------------------------*/




/*------------------------------------
 * Style appliqué pour le footer
 -----------------------------------------------*/
.footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    /* Set the fixed height of the footer here */
    height: 60px;
    background-color: rgb(195,190,180);
    padding-top: 5px;
}
/*-------------------------------------------------*/





/*-----------------------------------------------------
* Colore la cellule du tableau en fonction de l'état de l'action
---------------------------------------------------*/
#infos-pa-table td.td-action-etat-terminee {
    color: white;
    background: forestgreen;
}
#infos-pa-table td.td-action-etat-nondemarree {
    color: white;
    background: darkred;
}
#infos-pa-table td.td-action-etat-encours {
    color: white;
    background: dodgerblue;
}
#infos-pa-table td.td-action-etat-annulee {
    color: white;
    background: dimgrey;
}
/*--------------------------------------------------*/



/*---------------------------------------------------
 *      Autocomplete style
 ---------------------------------------------------*/
.autocomplete-suggestions { border: 1px solid #999; background: #FFF; cursor: default; overflow: auto; -webkit-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); -moz-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); }
.autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
.autocomplete-no-suggestion { padding: 2px 5px;}
.autocomplete-selected { background: #F0F0F0; }
.autocomplete-suggestions strong { font-weight: bold; color: #000; }
.autocomplete-group { padding: 2px 5px; }
.autocomplete-group strong { font-weight: bold; font-size: 16px; color: #000; display: block; border-bottom: 1px solid #000; }
/*--------------------------------------------------*/

div.hygiene-ssi-frame h3{
    text-align: center;
}


.modal-header h4 {
    color: rgb(0,154,166);
    text-align:center;
}

.assistance-frame {
    text-align: center;
}

#login-title {
    text-align: center;
}


/*-----------------------------------
*   Panel properties
------------------------------------*/
.panel-blue{
    border-color: rgb(0,136,206);
}

.panel-blue .panel-heading {
    border-color: rgb(0,136,206);
    color: #fff;
    background-color: rgb(0,136,206);
}

.panel-blue a {
    color: rgb(0,136,206);
}

.panel-blue a:hover {
    color: rgb(0,136,206);
}

.panel-carbone{
    border-color: rgb(60,55,50);
}

.panel-carbone .panel-heading {
    border-color: rgb(60,55,50);
    color: #fff;
    background-color: rgb(60,55,50);
}

.panel-carbone a {
    color: rgb(60,55,50);
}

.panel-carbone a:hover {
    color: rgb(60,55,50);
}

.panel-purple{
    border-color: rgb(110,30,120);
}

.panel-purple .panel-heading {
    border-color: rgb(110,30,120);
    color: #fff;
    background-color: rgb(110,30,120);
}

.panel-purple a {
    color: rgb(110,30,120);
}

.panel-purple a:hover {
    color: rgb(110,30,120);
}

.panel-brown{
    border-color: rgb(224,82,6);
}

.panel-brown .panel-heading {
    border-color: rgb(224,82,6);
    color: #fff;
    background-color: rgb(224,82,6);
}

.panel-brown a {
    color: rgb(224,82,6);
}

.panel-brown a:hover {
    color: rgb(224,82,6);
}

.panel-green {
    border-color: rgb(130,190,0);
}

.panel-green .panel-heading {
    border-color: rgb(130,190,0);
    color: #fff;
    background-color: rgb(130,190,0);
}

.panel-green a {
    color: rgb(130,190,0);
}

.panel-green a:hover {
    color: rgb(130,190,0);
}

.panel-red {
    border-color: rgb(213,43,30);
}

.panel-red .panel-heading {
    border-color: rgb(213,43,30);
    color: #fff;
    background-color: rgb(213,43,30);
}

.panel-red a {
    color: rgb(213,43,30);
}

.panel-red a:hover {
    color: rgb(213,43,30);
}

.panel-yellow {
    border-color: rgb(255,182,18);
}

.panel-yellow .panel-heading {
    border-color: rgb(255,182,18);
    color: #fff;
    background-color: rgb(255,182,18);
}

.panel-yellow a {
    color: rgb(255,182,18);
}

.panel-yellow a:hover {
    color: rgb(255,182,18);
}

.panel-pink {
    border-color: rgb(205,0,55);
}

.panel-pink .panel-heading {
    border-color: rgb(205,0,55);
    color: #fff;
    background-color: rgb(205,0,55);
}

.panel-pink a {
    color: rgb(205,0,55);
}

.panel-pink a:hover {
    color: rgb(205,0,55);
}

.panel-prune {
    border-color: rgb(161,0,107);
}

.panel-prune .panel-heading {
    border-color: rgb(161,0,107);
    color: #fff;
    background-color: rgb(161,0,107);
}

.panel-prune a {
    color: rgb(161,0,107);
}

.panel-prune a:hover {
    color: rgb(161,0,107);
}
/*--------------------------------------*/


/*------------------------------------------
*  Style pour le panel des deernière publication
---------------------------------------------*/
.last-publi {
    margin: 0;
    padding: 0;
    list-style: none;
}

.last-publi li {
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 1px dotted #999;
}

.last-publi li .last-publi-body p {
    margin: 0;
}

.last-publi li.left .last-publi {
    margin-left: 60px;
}

.last-publi li.right .last-publi {
    margin-right: 60px;
}

.panel .slidedown .glyphicon,
.last-publi .glyphicon {
    margin-right: 5px;
}

.publi-mail-link
{
   color:black;
   text-decoration: none;
   background-color: none;
}
/*------------------------------------------------------------*/



.comment {
    margin: 0;
    padding: 0;
    list-style: none;
}

.comment li {
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 1px dotted #999;
}

.comment li .comment-body p {
    margin: 0;
}

.comment li.left .comment {
    margin-left: 60px;
}

.comment li.right .comment {
    margin-right: 60px;
}

.panel .slidedown .glyphicon,
.comment .glyphicon {
    margin-right: 5px;
}

.panel-heading > .table, .panel-heading > .table th {
    margin:0px;
    border: 0px;
}

.block-label {
    border: 1px #337ab7;
    border-radius: 6px;
    background-color: #337ab7;
    color: white;
}

.page-header {
    text-align: center;
}

.incident-panel .panel-body,
.cae-panel .panel-body {
    height: 200px;
    overflow-y: scroll;
}

.exigences-panel {
    border: none;
    padding: 0;
    margin: 0;
    background-color: #EFEFEF;
}
.exigences-panel .panel-body {
    height: 70px;
    overflow-y: scroll;
    padding: 0;
    margin: 0;
}

.panel-tab-head{
    text-align: center;
    color: white;
    border-bottom: 1px solid #999;
    background-color: lightskyblue;
}
.panel-tab-head-incident{
    background-color: rgb(213,43,30);
}
.panel-tab-head-stats-actions{
    background-color: rgb(224,82,6);
    text-align: center;
    color: white;
    border: none;
}
.panel-tab-head-stats-reporting{
    background-color: rgb(0,136,206);
    text-align: center;
    color: white;
    border: none;
}
.panel-tab-head-cae{
    background-color: rgb(130,190,0);
}

.projet-panel .panel-heading th,
.projet-panel tbody td {
    text-align: center;
}

.tab-exigences-head {
    background-color: rgb(0,154,166);
    border-top-right-radius: 6px;
    border-top-left-radius: 6px;
    text-align: center;
    height: 50px;
    color: white;
    line-height: 50px;
}


/*----------------------------------------------
*      Style pour les tableaux 'Footable'
-------------------------------------------------*/
.footab-pagination {
    text-align: center;
}

.projets-footable {
  border-color: rgb(0,136,206);
}
.projets-footable > tfoot > tr > th,
.projets-footable > thead > tr > th,
.projets-footable > tfoot > tr > td,
.projets-footable > thead > tr > td {
  background-color: rgb(0,136,206);
  border-color: rgb(0,136,206);
}

.cae-footable {
  border-color: rgb(130,190,0);
}
.cae-footable > tfoot > tr > th,
.cae-footable > thead > tr > th,
.cae-footable > tfoot > tr > td,
.cae-footable > thead > tr > td {
  background-color: rgb(130,190,0);
  border-color: rgb(130,190,0);
}

.incident-footable {
  border-color: rgb(213,43,30);
}
.incident-footable > tfoot > tr > th,
.incident-footable > thead > tr > th,
.incident-footable > tfoot > tr > td,
.incident-footable > thead > tr > td {
  background-color: rgb(213,43,30);
  border-color: rgb(213,43,30);
}

.risques-footable {
  border-color: rgb(161,0,107);
}
.risques-footable > tfoot > tr > th,
.risques-footable > thead > tr > th,
.risques-footable > tfoot > tr > td,
.risques-footable > thead > tr > td {
  background-color: rgb(161,0,107);
  border-color: rgb(161,0,107);
}

.actions-footable {
  border-color: rgb(205,0,55);
}
.actions-footable > tfoot > tr > th,
.actions-footable > thead > tr > th,
.actions-footable > tfoot > tr > td,
.actions-footable > thead > tr > td {
  background-color: rgb(205,0,55);
  border-color: rgb(205,0,55);
}

.suggestion-footable {
  border-color: rgb(60,55,50);
}
.suggestion-footable > tfoot > tr > th,
.suggestion-footable > thead > tr > th,
.suggestion-footable > tfoot > tr > td,
.suggestion-footable > thead > tr > td {
  background-color: rgb(60,55,50);
  border-color: rgb(60,55,50);
}

.crowdfunding-footable {
    border-color: rgb(103,92,83);
    background: #c6c6c6;
}
.crowdfunding-footable > tfoot > tr > th,
.crowdfunding-footable > thead > tr > th,
.crowdfunding-footable > tfoot > tr > td,
.crowdfunding-footable > thead > tr > td {
  background-color: rgb(0,136,206);
  border-color: rgb(0,136,206);
}
.crowdfunding-footable > tbody > tr > td {
    text-align: center;
}
.crowdfunding-list-item {
    background-color: rgb(185,185,185);
}
/*-------------------------------------------------------*/


#addFinancementModal h5 {
    text-align: center;
}
#menuCompteClient h5 {
    text-align: center;
}




";
    }

    public function getTemplateName()
    {
        return "menu/cyberstore-style.css";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* html {*/
/*     position: relative;*/
/*     min-height: 100%;*/
/* }*/
/* */
/* body {*/
/*     /* Margin bottom by footer height *//* */
/*     margin-bottom: 60px;*/
/*     padding-top: 50px;*/
/* }*/
/* */
/* */
/* */
/* /* -------------------------------------------------*/
/* * Style pour la barre de navigation*/
/* -------------------------------------------------*//* */
/* */
/* /* Colore le menu actif dans la barre de navigation *//* */
/* .active-menu {*/
/*     background-color: #644668;*/
/* }*/
/* */
/* /* Couleur de la barre de navigation *//* */
/* .navbar-custom {*/
/* 	background-color: rgb(110,30,120);*/
/* }*/
/* /*------------------------------------------------------------*//* */
/* */
/* */
/* */
/* */
/* /*------------------------------------*/
/*  * Style appliqué pour le footer*/
/*  -----------------------------------------------*//* */
/* .footer {*/
/*     position: absolute;*/
/*     bottom: 0;*/
/*     width: 100%;*/
/*     /* Set the fixed height of the footer here *//* */
/*     height: 60px;*/
/*     background-color: rgb(195,190,180);*/
/*     padding-top: 5px;*/
/* }*/
/* /*-------------------------------------------------*//* */
/* */
/* */
/* */
/* */
/* */
/* /*-----------------------------------------------------*/
/* * Colore la cellule du tableau en fonction de l'état de l'action*/
/* ---------------------------------------------------*//* */
/* #infos-pa-table td.td-action-etat-terminee {*/
/*     color: white;*/
/*     background: forestgreen;*/
/* }*/
/* #infos-pa-table td.td-action-etat-nondemarree {*/
/*     color: white;*/
/*     background: darkred;*/
/* }*/
/* #infos-pa-table td.td-action-etat-encours {*/
/*     color: white;*/
/*     background: dodgerblue;*/
/* }*/
/* #infos-pa-table td.td-action-etat-annulee {*/
/*     color: white;*/
/*     background: dimgrey;*/
/* }*/
/* /*--------------------------------------------------*//* */
/* */
/* */
/* */
/* /*---------------------------------------------------*/
/*  *      Autocomplete style*/
/*  ---------------------------------------------------*//* */
/* .autocomplete-suggestions { border: 1px solid #999; background: #FFF; cursor: default; overflow: auto; -webkit-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); -moz-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); }*/
/* .autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }*/
/* .autocomplete-no-suggestion { padding: 2px 5px;}*/
/* .autocomplete-selected { background: #F0F0F0; }*/
/* .autocomplete-suggestions strong { font-weight: bold; color: #000; }*/
/* .autocomplete-group { padding: 2px 5px; }*/
/* .autocomplete-group strong { font-weight: bold; font-size: 16px; color: #000; display: block; border-bottom: 1px solid #000; }*/
/* /*--------------------------------------------------*//* */
/* */
/* div.hygiene-ssi-frame h3{*/
/*     text-align: center;*/
/* }*/
/* */
/* */
/* .modal-header h4 {*/
/*     color: rgb(0,154,166);*/
/*     text-align:center;*/
/* }*/
/* */
/* .assistance-frame {*/
/*     text-align: center;*/
/* }*/
/* */
/* #login-title {*/
/*     text-align: center;*/
/* }*/
/* */
/* */
/* /*-----------------------------------*/
/* *   Panel properties*/
/* ------------------------------------*//* */
/* .panel-blue{*/
/*     border-color: rgb(0,136,206);*/
/* }*/
/* */
/* .panel-blue .panel-heading {*/
/*     border-color: rgb(0,136,206);*/
/*     color: #fff;*/
/*     background-color: rgb(0,136,206);*/
/* }*/
/* */
/* .panel-blue a {*/
/*     color: rgb(0,136,206);*/
/* }*/
/* */
/* .panel-blue a:hover {*/
/*     color: rgb(0,136,206);*/
/* }*/
/* */
/* .panel-carbone{*/
/*     border-color: rgb(60,55,50);*/
/* }*/
/* */
/* .panel-carbone .panel-heading {*/
/*     border-color: rgb(60,55,50);*/
/*     color: #fff;*/
/*     background-color: rgb(60,55,50);*/
/* }*/
/* */
/* .panel-carbone a {*/
/*     color: rgb(60,55,50);*/
/* }*/
/* */
/* .panel-carbone a:hover {*/
/*     color: rgb(60,55,50);*/
/* }*/
/* */
/* .panel-purple{*/
/*     border-color: rgb(110,30,120);*/
/* }*/
/* */
/* .panel-purple .panel-heading {*/
/*     border-color: rgb(110,30,120);*/
/*     color: #fff;*/
/*     background-color: rgb(110,30,120);*/
/* }*/
/* */
/* .panel-purple a {*/
/*     color: rgb(110,30,120);*/
/* }*/
/* */
/* .panel-purple a:hover {*/
/*     color: rgb(110,30,120);*/
/* }*/
/* */
/* .panel-brown{*/
/*     border-color: rgb(224,82,6);*/
/* }*/
/* */
/* .panel-brown .panel-heading {*/
/*     border-color: rgb(224,82,6);*/
/*     color: #fff;*/
/*     background-color: rgb(224,82,6);*/
/* }*/
/* */
/* .panel-brown a {*/
/*     color: rgb(224,82,6);*/
/* }*/
/* */
/* .panel-brown a:hover {*/
/*     color: rgb(224,82,6);*/
/* }*/
/* */
/* .panel-green {*/
/*     border-color: rgb(130,190,0);*/
/* }*/
/* */
/* .panel-green .panel-heading {*/
/*     border-color: rgb(130,190,0);*/
/*     color: #fff;*/
/*     background-color: rgb(130,190,0);*/
/* }*/
/* */
/* .panel-green a {*/
/*     color: rgb(130,190,0);*/
/* }*/
/* */
/* .panel-green a:hover {*/
/*     color: rgb(130,190,0);*/
/* }*/
/* */
/* .panel-red {*/
/*     border-color: rgb(213,43,30);*/
/* }*/
/* */
/* .panel-red .panel-heading {*/
/*     border-color: rgb(213,43,30);*/
/*     color: #fff;*/
/*     background-color: rgb(213,43,30);*/
/* }*/
/* */
/* .panel-red a {*/
/*     color: rgb(213,43,30);*/
/* }*/
/* */
/* .panel-red a:hover {*/
/*     color: rgb(213,43,30);*/
/* }*/
/* */
/* .panel-yellow {*/
/*     border-color: rgb(255,182,18);*/
/* }*/
/* */
/* .panel-yellow .panel-heading {*/
/*     border-color: rgb(255,182,18);*/
/*     color: #fff;*/
/*     background-color: rgb(255,182,18);*/
/* }*/
/* */
/* .panel-yellow a {*/
/*     color: rgb(255,182,18);*/
/* }*/
/* */
/* .panel-yellow a:hover {*/
/*     color: rgb(255,182,18);*/
/* }*/
/* */
/* .panel-pink {*/
/*     border-color: rgb(205,0,55);*/
/* }*/
/* */
/* .panel-pink .panel-heading {*/
/*     border-color: rgb(205,0,55);*/
/*     color: #fff;*/
/*     background-color: rgb(205,0,55);*/
/* }*/
/* */
/* .panel-pink a {*/
/*     color: rgb(205,0,55);*/
/* }*/
/* */
/* .panel-pink a:hover {*/
/*     color: rgb(205,0,55);*/
/* }*/
/* */
/* .panel-prune {*/
/*     border-color: rgb(161,0,107);*/
/* }*/
/* */
/* .panel-prune .panel-heading {*/
/*     border-color: rgb(161,0,107);*/
/*     color: #fff;*/
/*     background-color: rgb(161,0,107);*/
/* }*/
/* */
/* .panel-prune a {*/
/*     color: rgb(161,0,107);*/
/* }*/
/* */
/* .panel-prune a:hover {*/
/*     color: rgb(161,0,107);*/
/* }*/
/* /*--------------------------------------*//* */
/* */
/* */
/* /*------------------------------------------*/
/* *  Style pour le panel des deernière publication*/
/* ---------------------------------------------*//* */
/* .last-publi {*/
/*     margin: 0;*/
/*     padding: 0;*/
/*     list-style: none;*/
/* }*/
/* */
/* .last-publi li {*/
/*     margin-bottom: 10px;*/
/*     padding-bottom: 5px;*/
/*     border-bottom: 1px dotted #999;*/
/* }*/
/* */
/* .last-publi li .last-publi-body p {*/
/*     margin: 0;*/
/* }*/
/* */
/* .last-publi li.left .last-publi {*/
/*     margin-left: 60px;*/
/* }*/
/* */
/* .last-publi li.right .last-publi {*/
/*     margin-right: 60px;*/
/* }*/
/* */
/* .panel .slidedown .glyphicon,*/
/* .last-publi .glyphicon {*/
/*     margin-right: 5px;*/
/* }*/
/* */
/* .publi-mail-link*/
/* {*/
/*    color:black;*/
/*    text-decoration: none;*/
/*    background-color: none;*/
/* }*/
/* /*------------------------------------------------------------*//* */
/* */
/* */
/* */
/* .comment {*/
/*     margin: 0;*/
/*     padding: 0;*/
/*     list-style: none;*/
/* }*/
/* */
/* .comment li {*/
/*     margin-bottom: 10px;*/
/*     padding-bottom: 5px;*/
/*     border-bottom: 1px dotted #999;*/
/* }*/
/* */
/* .comment li .comment-body p {*/
/*     margin: 0;*/
/* }*/
/* */
/* .comment li.left .comment {*/
/*     margin-left: 60px;*/
/* }*/
/* */
/* .comment li.right .comment {*/
/*     margin-right: 60px;*/
/* }*/
/* */
/* .panel .slidedown .glyphicon,*/
/* .comment .glyphicon {*/
/*     margin-right: 5px;*/
/* }*/
/* */
/* .panel-heading > .table, .panel-heading > .table th {*/
/*     margin:0px;*/
/*     border: 0px;*/
/* }*/
/* */
/* .block-label {*/
/*     border: 1px #337ab7;*/
/*     border-radius: 6px;*/
/*     background-color: #337ab7;*/
/*     color: white;*/
/* }*/
/* */
/* .page-header {*/
/*     text-align: center;*/
/* }*/
/* */
/* .incident-panel .panel-body,*/
/* .cae-panel .panel-body {*/
/*     height: 200px;*/
/*     overflow-y: scroll;*/
/* }*/
/* */
/* .exigences-panel {*/
/*     border: none;*/
/*     padding: 0;*/
/*     margin: 0;*/
/*     background-color: #EFEFEF;*/
/* }*/
/* .exigences-panel .panel-body {*/
/*     height: 70px;*/
/*     overflow-y: scroll;*/
/*     padding: 0;*/
/*     margin: 0;*/
/* }*/
/* */
/* .panel-tab-head{*/
/*     text-align: center;*/
/*     color: white;*/
/*     border-bottom: 1px solid #999;*/
/*     background-color: lightskyblue;*/
/* }*/
/* .panel-tab-head-incident{*/
/*     background-color: rgb(213,43,30);*/
/* }*/
/* .panel-tab-head-stats-actions{*/
/*     background-color: rgb(224,82,6);*/
/*     text-align: center;*/
/*     color: white;*/
/*     border: none;*/
/* }*/
/* .panel-tab-head-stats-reporting{*/
/*     background-color: rgb(0,136,206);*/
/*     text-align: center;*/
/*     color: white;*/
/*     border: none;*/
/* }*/
/* .panel-tab-head-cae{*/
/*     background-color: rgb(130,190,0);*/
/* }*/
/* */
/* .projet-panel .panel-heading th,*/
/* .projet-panel tbody td {*/
/*     text-align: center;*/
/* }*/
/* */
/* .tab-exigences-head {*/
/*     background-color: rgb(0,154,166);*/
/*     border-top-right-radius: 6px;*/
/*     border-top-left-radius: 6px;*/
/*     text-align: center;*/
/*     height: 50px;*/
/*     color: white;*/
/*     line-height: 50px;*/
/* }*/
/* */
/* */
/* /*----------------------------------------------*/
/* *      Style pour les tableaux 'Footable'*/
/* -------------------------------------------------*//* */
/* .footab-pagination {*/
/*     text-align: center;*/
/* }*/
/* */
/* .projets-footable {*/
/*   border-color: rgb(0,136,206);*/
/* }*/
/* .projets-footable > tfoot > tr > th,*/
/* .projets-footable > thead > tr > th,*/
/* .projets-footable > tfoot > tr > td,*/
/* .projets-footable > thead > tr > td {*/
/*   background-color: rgb(0,136,206);*/
/*   border-color: rgb(0,136,206);*/
/* }*/
/* */
/* .cae-footable {*/
/*   border-color: rgb(130,190,0);*/
/* }*/
/* .cae-footable > tfoot > tr > th,*/
/* .cae-footable > thead > tr > th,*/
/* .cae-footable > tfoot > tr > td,*/
/* .cae-footable > thead > tr > td {*/
/*   background-color: rgb(130,190,0);*/
/*   border-color: rgb(130,190,0);*/
/* }*/
/* */
/* .incident-footable {*/
/*   border-color: rgb(213,43,30);*/
/* }*/
/* .incident-footable > tfoot > tr > th,*/
/* .incident-footable > thead > tr > th,*/
/* .incident-footable > tfoot > tr > td,*/
/* .incident-footable > thead > tr > td {*/
/*   background-color: rgb(213,43,30);*/
/*   border-color: rgb(213,43,30);*/
/* }*/
/* */
/* .risques-footable {*/
/*   border-color: rgb(161,0,107);*/
/* }*/
/* .risques-footable > tfoot > tr > th,*/
/* .risques-footable > thead > tr > th,*/
/* .risques-footable > tfoot > tr > td,*/
/* .risques-footable > thead > tr > td {*/
/*   background-color: rgb(161,0,107);*/
/*   border-color: rgb(161,0,107);*/
/* }*/
/* */
/* .actions-footable {*/
/*   border-color: rgb(205,0,55);*/
/* }*/
/* .actions-footable > tfoot > tr > th,*/
/* .actions-footable > thead > tr > th,*/
/* .actions-footable > tfoot > tr > td,*/
/* .actions-footable > thead > tr > td {*/
/*   background-color: rgb(205,0,55);*/
/*   border-color: rgb(205,0,55);*/
/* }*/
/* */
/* .suggestion-footable {*/
/*   border-color: rgb(60,55,50);*/
/* }*/
/* .suggestion-footable > tfoot > tr > th,*/
/* .suggestion-footable > thead > tr > th,*/
/* .suggestion-footable > tfoot > tr > td,*/
/* .suggestion-footable > thead > tr > td {*/
/*   background-color: rgb(60,55,50);*/
/*   border-color: rgb(60,55,50);*/
/* }*/
/* */
/* .crowdfunding-footable {*/
/*     border-color: rgb(103,92,83);*/
/*     background: #c6c6c6;*/
/* }*/
/* .crowdfunding-footable > tfoot > tr > th,*/
/* .crowdfunding-footable > thead > tr > th,*/
/* .crowdfunding-footable > tfoot > tr > td,*/
/* .crowdfunding-footable > thead > tr > td {*/
/*   background-color: rgb(0,136,206);*/
/*   border-color: rgb(0,136,206);*/
/* }*/
/* .crowdfunding-footable > tbody > tr > td {*/
/*     text-align: center;*/
/* }*/
/* .crowdfunding-list-item {*/
/*     background-color: rgb(185,185,185);*/
/* }*/
/* /*-------------------------------------------------------*//* */
/* */
/* */
/* #addFinancementModal h5 {*/
/*     text-align: center;*/
/* }*/
/* #menuCompteClient h5 {*/
/*     text-align: center;*/
/* }*/
/* */
/* */
/* */
/* */
/* */
