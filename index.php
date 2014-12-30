<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test Bootstrap 3</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            .active{
                background:gray;
            }  
            .bred{
                border: 1px solid red;
            }
            .row{
                margin:0 !important;
            }
            html {
                position: relative;
                min-height: 100%;
            }
            body {
                /* Margin bottom by footer height */
                margin-bottom: 60px;
            }
            .footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                /* Set the fixed height of the footer here */
                height: 60px;
                background-color: #f5f5f5;
            }
        </style>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <!-- /.navbar-collapse -->
                    <div class="col-xs-12 col-md-9 bred" style="width: auto">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div>
                        <div class="navbar-header page-scroll">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Brand</a>
                        </div>
                            </div>
                        <div></div>
                        <div class="collapse navbar-collapse" id="menu" >
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.html">Home <br /></a></li>
                                <li><a href="#">Gallery <span> <br> sub</span> </a></li>
                                <li><a href="#">videos </a></li>
                                <li><a href="#">Comment</a></li>
                                <li><a href="#">About</a></li>
                                <li ><a href="contact_us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-sm-3 bred" style="width: auto">

                        .col-xs-6 .col-md-4
                        .col-xs-6 .col-md-4
                        .col-xs-6 .col-md-4
                        .col-xs-6 .col-md-4
                        .col-xs-6 .col-md-4
                        .col-xs-6 .col-md-4

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <footer class="footer">
<div class="container">
<p class="text-muted">Place sticky footer content here.</p>
</div>
</footer>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type='text/javascript'>
            $(window).load(function () {
                $('#menu > ul.nav li a').click(function (e) {
                    var $this = $(this);
                    //alert('here');
                    $this.parent().siblings().removeClass('active').end().addClass('active');
                    e.preventDefault();
                });
                var $window = $(window);
                var windowsize = $window.width();
                function checkWidth() {
                    var windowsize = $window.width();
                    if (windowsize < 766) {
                        ///alert('SCW:/'+windowsize); 
                    }
                }
                // Execute on load
                checkWidth();
                // Bind event
                //alert('SCW:/' + windowsize);
                $(window).resize(checkWidth);
            });
            /*!
             * IE10 viewport hack for Surface/desktop Windows 8 bug
             * Copyright 2014 Twitter, Inc.
             * Licensed under the Creative Commons Attribution 3.0 Unported License. For
             * details, see http://creativecommons.org/licenses/by/3.0/.
             */
// See the Getting Started docs for more information:
// http://getbootstrap.com/getting-started/#support-ie10-width
            (function () {
                'use strict';
                if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                    var msViewportStyle = document.createElement('style')
                    msViewportStyle.appendChild(
                            document.createTextNode(
                                    '@-ms-viewport{width:auto!important}'
                                    )
                            )
                    document.querySelector('head').appendChild(msViewportStyle);
                }
            })();
            
        </script>
    </body>
</html>
