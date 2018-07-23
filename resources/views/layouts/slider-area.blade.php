        <!--HOME SLIDER AREA-->
        <div class="welcome-slider-area">            
            <div class="welcome-single-slide slider-bg-one">
                <div class="container">
                    <div class="row">                        
                        <div class="col-sm-12 col-xs-12">

                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-single-slide slider-bg-three">
                <div class="container">
                    <div class="row">                        
                        <div class="col-sm-12 col-xs-12">

                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-single-slide slider-bg-six">
                <div class="container">
                    <div class="row">                        
                        <div class="col-sm-12 col-xs-12">

                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-single-slide slider-bg-five">
                <div class="container">
                    <div class="row">                        
                        <div class="col-sm-12 col-xs-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END HOME SLIDER AREA-->

        <style>
            .slide-textfield{
                color:#000;
                width:50%;
                height:auto;
                height: 491px !important;
                float:right;
                margin-top:220px;
                padding:50px;
                background-color:rgba(171, 216, 219, 0.5);
                cursor: text;
                
            }

            .textfield-title{
                color:#0000fe;
                font-size:30px;
                font-weight:bold;
            }

            /*  Round List */
            ol {
                counter-reset: li; /* Initiate a counter */
                list-style: none; /* Remove default numbering */
                *list-style: decimal; /* Keep using default numbering for IE6/7 */
                font: 15px 'trebuchet MS', 'lucida sans';
                padding: 0;
                margin-bottom: 4em;
                text-shadow: 0 1px 0 rgba(255,255,255,.5);
            }

            ol ol {
                margin: 0 0 0 2em; /* Add some left margin for inner lists */
            }

            .rounded-list a{
                position: relative;
                display: block;
                padding: .4em .4em .4em 2em;
                *padding: .4em;
                margin: .5em 0;
                background: #ddd;
                color: #444;
                text-decoration: none;
                border-radius: .3em;
                transition: all .3s ease-out;   
            }

            .rounded-list a:hover{
                background: #eee;
            }

            .rounded-list a:hover:before{
                transform: rotate(360deg);  
            }

            .rounded-list a:before{
                content: counter(li);
                counter-increment: li;
                position: absolute; 
                left: -1.3em;
                top: 50%;
                margin-top: -1.3em;
                background: #87ceeb;
                height: 2em;
                width: 2em;
                line-height: 2em;
                border: .3em solid #fff;
                text-align: center;
                font-weight: bold;
                border-radius: 2em;
                transition: all .3s ease-out;
            }
            /* End of Round List */

            /* Rectangle List */
            .rectangle-list a{
                position: relative;
                display: block;
                padding: .4em .4em .4em .8em;
                *padding: .4em;
                margin: .5em 0 .5em 2.5em;
                background: #ddd;
                color: #444;
                text-decoration: none;
                transition: all .3s ease-out;   
            }

            .rectangle-list a:hover{
                background: #eee;
            }   

            .rectangle-list a:before{
                content: counter(li);
                counter-increment: li;
                position: absolute; 
                left: -2.5em;
                top: 50%;
                margin-top: -1em;
                background: #fa8072;
                height: 2em;
                width: 2em;
                line-height: 2em;
                text-align: center;
                font-weight: bold;
            }

            .rectangle-list a:after{
                position: absolute; 
                content: '';
                border: .5em solid transparent;
                left: -1em;
                top: 50%;
                margin-top: -.5em;
                transition: all .3s ease-out;               
            }

            .rectangle-list a:hover:after{
                left: -.5em;
                border-left-color: #fa8072;             
            }   
            /* End of Rectangle List */

            /* Listsprites List */
            #listsprites {width:49%;float:left;margin:0px;padding:0; margin:0; list-style:none;background:rgba(255,255,255,0.5);}
            #listsprites a {border:0; color:#3B5998; text-decoration:none; line-height:30px;}
            #listsprites a:hover,
            #listsprites a:focus,
            #listsprites a:active {background:transparent;}
            #listsprites li a {display:block; padding:3px 8px 4px 6px;}
            #listsprites li a:hover,
            #listsprites li a:focus,
            #listsprites li a:active {
                -moz-box-shadow: 0px 0px 3px #403f40;
                -webkit-box-shadow: 0px 0px 3px #403f40;
                box-shadow: 0px 0px 3px #403f40;
                }
            #listsprites li.current a {font-weight:bold; color:#333; background:#D8DFEA;}

            #listsprites li a:before {
                content:"";
                float:left;
                width:28px;
                height:30px;
                margin:0 6px 0 0;
                background:url(img/list/sprite.png);
            }

            #listsprites .cambodia a:before {background-position:0 -0px;}
            #listsprites .thailand a:before {background-position:0 -35px;}
            #listsprites .taipei a:before {background-position:0 -70px;}
            #listsprites .hongkong a:before {background-position:0 -108px;}
            #listsprites .malaysia a:before {background-position:0 -148px;}
            #listsprites .indonesia a:before {background-position:0 -180px;}
            #listsprites .singapore a:before {background-position:0 -210px;}
            #listsprites .vietnam a:before {background-position:0 -245px;}
            #listsprites .lao a:before {background-position:0 -275px;}
            #listsprites .myanmar a:before {background-position:0 -305px;}
            #listsprites .phillipines a:before {background-position:0 -337px;}
            #listsprites .noflag a:before {background-position:0 -370px;}
            /* End Listprites */

            @media only screen and (max-width: 1023px) {
                /* For mobile phones: */
                .slide-textfield {                    
                    margin-right:15%;
                    margin-top:140px;                    
                    width: 70%;
                    cursor: text;
                }
            }

            @media only screen and (max-width: 768px) {
                /* For mobile phones: */
                .slide-textfield {
                    margin-right:0;
                    margin-top:95px; 
                    padding:5px;
                    width: 100%;
                    height: 291px !important;
                    cursor: text;
                }
                .textfield-title{
                    color:#0000fe;
                    font-size:20px;
                    font-weight:bold;
                }
                .owl-controls{
                    display:none;
                }
            }
        </style>