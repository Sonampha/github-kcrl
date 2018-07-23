<div class="header-top-area">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#home" class="navbar-brand"><img src="{{ url('/img/logo.png') }}" alt="logo"></a>
                        </div>
                        <div class="search-and-language-bar pull-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i></a></li>
                                <li class="search-box"><i class="fa fa-search"></i></li>
                                <li>
                                    <select style="color:#000;width: 80px;" id="currency" name="currency" onchange="changeCurrency(this);">
                                        <option value="USD">Currency</option>
							            <option value="USD">USD - US Dollar</option>
									    <option value="CNY">CNY - Chinese Yuan</option>
									    <option value="KHR">KHR - Cambodia Riel</option>
									</select>
                                </li>
                                <li class="select-language">
                                    <select name="#" id="#">
                                    <option selected value="End">ENG</option>
                                    <option value="ARA">KHM</option>
                                    <option value="CHI">CHN</option>
                                </select>
                                </li>
                            </ul>
                            <form action="#" class="search-form">
                                <input type="search" name="search" id="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="#">Plan Travel</a>
                                <ul>
                                    <li><a href="/plan-travel/excess-baggage">Excess Baggage</a></li>
                                </ul>
                                </li>
                                <li><a href="/travel-info">Travel Info</a>
                                    <ul>
                                        <li><a href="#">Baggage &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
                                        <ul>
                                            <li><a href="/travel-info/baggage/checked-baggage">Checked Baggage</a></li>
                                            <li><a href="/travel-info/baggage/carry-on-baggage">Carry-on Baggage</a></li>
                                            <li><a href="/travel-info/baggage/restricted-items">Restricted Items</a></li>
                                        </ul>
                                        </li>
                                        <li><a href="#">Charges and Changes &nbsp;</a>
                                        <ul>
                                            <li><a href="/travel-info/charges-and-changes/cancellation-and-refund">Cancellations and Refunds </a></li>
                                            <li><a href="/travel-info/charges-and-changes/taxes-and-services-fee">Taxes and Service Fees</a></li>    
                                        </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>