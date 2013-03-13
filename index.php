<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Ahhha!</title>
    <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery.google_menu.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <script>
        $('document').ready(function(){
            $('.menu').fixedMenu();
        });
        </script>
</head>
<body>

<?php
include 'resources/config.php';
?>
<div class="topbar">
    <ul>
      <li class="single-link"><!-- Using class="single-link" for links with no dropdown -->
        <a target="_blank" href="http://plus.google.com">+You</a>
        </li>
        <!-- Using class="current" for the link of the current page -->
      <li class="current">
        <a target="_blank" href="http://www.google.co.in/">Web</a>
        </li>
      <li class="single-link"><!-- Using class="single-link" for links with no dropdown -->
        <a target="_blank" href="http://orkut.com">Orkut</a>
        </li>
      <li class="single-link"><!-- Using class="single-link" for links with no dropdown -->
        <a target="_blank" href="http://gmail.com">Gmail</a>
        </li>
      <li class="single-link"><!-- Using class="single-link" for links with no dropdown -->
        <a target="_blank" href="https://www.google.com/calendar">Calendar</a>
        </li>
      <li class="single-link"><!-- Using class="single-link" for links with no dropdown -->
        <a target="_blank" href="https://docs.google.com">Documents</a>
        </li>
      <li class="single-link"><!-- Using class="single-link" for links with no dropdown -->
        <a target="_blank" href="http://picasaweb.google.co.in/home">Photos</a>
        </li>
      <li><!-- Do not add any class for links with dropdown -->
        <a href="#">More<span class="arrow"></span></a>
        <!-- Drop Down menu Items -->
<ul>
            <li><a href="http://www.google.co.in/reader">Reader</a></li>
            <li><a href="https://sites.google.com">Sites</a></li>
            <li><a href="http://groups.google.co.in">Groups</a></li>
            <li><a href="http://www.youtube.com">YouTube</a></li>
            <li>
            <div class="mid-line">
            </div>
            </li>
            <li><a href="http://www.google.co.in/imghp?hl=en&tab=wi">Images</a></li>
            <li><a href="http://maps.google.co.in/maps?hl=en&tab=wl">Maps</a></li>
            <li><a href="http://translate.google.co.in/">Translate</a></li>
            <li><a href="http://books.google.co.in">Books</a></li>
            <li><a href="http://scholar.google.co.in/">Scholar</a></li>
            <li><a href="http://blogsearch.google.co.in">Blogs</a></li>
            <li>
            <div class="mid-line">
            </div>
            </li>
            <li><a href="http://www.google.co.in/intl/en/options/">even more >></a></li>
            <li>
            <div class="mid-line">
            </div>
            </li>
        </ul>
        </li>
    </ul>
</div>
<div id="top">
    <div class="main">
        <div id="header">
        </div>
            <a href="http://localhost">
                <div style=background:url('images/menu.png'); height=124px; id="menu">
                </div>
            </a> 
            <?php require_once ("resources/templates/navbar.php"); ?>  
            <?php require_once ("resources/templates/quote.php"); ?>
            
            <div id="info">
                <div id="minibar">
                    <h3>Greetings, from Ahhha!</h3>
                </div>
                <div id="intro">
                    <h2 style='padding-top:50px;'>Register, login, and get ready for your Ahhha moments!</h1>
                    
                </div>
            </div>
            <div id="info2">
                <div id="intro2">
                    <h2>Currently, our service is focused on, and supported towards, The Southern California area.</h2>
                </div>
            </div>
         
        
    </div>
</div>
</body>
</html>
