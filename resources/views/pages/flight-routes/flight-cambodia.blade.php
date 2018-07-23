@extends('layouts.master-secondary')

@section('header', 'Cambodia')
@section('title', 'Cambodia Route')

@section('content')
<link rel="stylesheet" href="{{ url('/css/flight-table.css') }}">
     <!--BLOG AREA-->
     
     <section class="blog-area blog-page section-padding">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                <div class="post-date"><i class="fa fa-calendar"></i>&nbsp;<span id="clock"></span></div>
                <h3 align="center">This Week Schedule</h3>
                <table class="responsive-table">                    
                    <thead>
                    <tr>
                        <th scope="col">Flight Route</th>
                        <th scope="col">Date</th>
                        <th scope="col">Estimated Time Departure</th>
                        <th scope="col">Estimated Time Arrival</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <th scope="row">Phnom Penh - Siem Reap</th>
                        <td data-title="Date">Sun - June 24, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>   
                    <tr>
                        <th scope="row">Phnom Penh - Siem Reap</th>
                        <td data-title="Date">Mon - June 25, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Phnom Penh - Siem Reap</th>
                        <td data-title="Date">Tue - June 26, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Phnom Penh - Siem Reap</th>
                        <td data-title="Date">Wed - June 27, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Phnom Penh - Siem Reap</th>
                        <td data-title="Date">Thu - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">18:50 PM</td>
                        <td data-title="Estimated Time Arrival">19:35 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Phnom Penh - Siem Reap</th>
                        <td data-title="Date">Fri - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">Phnom Penh - Siem Reap</th>
                        <td data-title="Date">Sat - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>      
                    </tbody>
                </table>

                <table class="responsive-table">                    
                    <thead>
                    <tr>
                        <th scope="col">Flight Route</th>
                        <th scope="col">Date</th>
                        <th scope="col">Estimated Time Departure</th>
                        <th scope="col">Estimated Time Arrival</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <th scope="row">Siem Reap - Phnom Penh</th>
                        <td data-title="Date">Sun - June 24, 2018</td>
                        <td data-title="Estimated Time Departure">20:35 PM</td>
                        <td data-title="Estimated Time Arrival">21:20 PM</td>
                    </tr>   
                    <tr>
                        <th scope="row">Siem Reap - Phnom Penh</th>
                        <td data-title="Date">Mon - June 25, 2018</td>
                        <td data-title="Estimated Time Departure">20:35 PM</td>
                        <td data-title="Estimated Time Arrival">21:20 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Siem Reap - Phnom Penh</th>
                        <td data-title="Date">Tue - June 26, 2018</td>
                        <td data-title="Estimated Time Departure">20:35 PM</td>
                        <td data-title="Estimated Time Arrival">21:20 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Siem Reap - Phnom Penh</th>
                        <td data-title="Date">Wed - June 27, 2018</td>
                        <td data-title="Estimated Time Departure">20:35 PM</td>
                        <td data-title="Estimated Time Arrival">21:20 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Siem Reap - Phnom Penh</th>
                        <td data-title="Date">Thu - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">20:35 PM</td>
                        <td data-title="Estimated Time Arrival">21:20 PM</td>
                    </tr>
                    <tr>
                        <th scope="row">Siem Reap - Phnom Penh</th>
                        <td data-title="Date">Fri - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>
                    <tr>
                        <th scope="row">Siem Reap - Phnom Penh</th>
                        <td data-title="Date">Sat - June 28, 2018</td>
                        <td data-title="Estimated Time Departure">N/A</td>
                        <td data-title="Estimated Time Arrival">N/A</td>
                    </tr>  
                    </tbody>
                </table>
                    <h3>Beautiful Places in Cambodia</h3>
                    <div class="row" style="margin:0 5px 15px 5px; ">                            
                            <p>Cambodia is dotted with an array of unforgettable views, people and experiences that 
                            will ensure you have a memorable time visiting the Kingdom of Wonder. Here are the most beautiful 
                            places in the country:</p>                                                   
                    </div>

                    <h4>Angkor Wat</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                            <img src="{{ url('/img/countries/cambodia/tour-places/angkorwat.jpg') }}" alt="Cambodia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>Holding the title of the world’s largest religious monument, glorious Angkor Wat is 
                            a spectacle to be seen whatever time of the day it may be. However, watching the sun peek 
                            from behind the temple’s iconic towers is a pretty special experience and well worth waking 
                            before the crack of dawn for. But don’t expect to have the temple to yourself, as this is 
                            peak time, when tens of thousands of other early birds flock to the temple to capture 
                            this magical moment.</p>  
                        </div>
                    </div>

                    <h4>Phnom Penh</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                        <img src="{{ url('/img/countries/cambodia/tour-places/phnom-penh.jpg') }}" alt="Cambodia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>There’s something truly special about watching a city twinkling below. Thanks to the recent 
                            addition of Rosewood Phnom Penh to the capital’s hotel scene, the city can now be viewed from 
                            sky high. Perched on the 37th floor of the 39-story Vattanac Capital Tower is the five-star 
                            hotel’s Sora skybar, which offers unparalleled panoramic views across the rising capital and 
                            beyond. Open from 5.30pm, guests can take in the sunset and watch Phnom Penh light up before 
                            their eyes. Simply stunning.</p>  
                        </div>
                    </div>

                    <h4>Koh Rong</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                        <img src="{{ url('/img/countries/cambodia/tour-places/koh-rong.jpg') }}" alt="Cambodia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div> 
                            <p>Beach bums are doing themselves an injustice if they miss Koh Rong Samloem. Why? Because the relatively 
                            undeveloped tropical island is home to isolated beaches that are postcard-perfect, soft powder-white sands, 
                            and breathtaking crystal-clear waters. If you’re looking to kick back with sundowner cocktails, then for 
                            the best sunsets head to – yep, you guessed it – the aptly named Sunset Beach.</p>   
                        </div>
                    </div>

                    <h4>Cardamom Mountains</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                        <img src="{{ url('/img/countries/cambodia/tour-places/cardamom-mountains.jpg') }}" alt="Cambodia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>   
                            <p>Being at one with nature in the heart of the tropical jungle is another pretty amazing, and 
                            unique, experience to treasure. As Southeast Asia’s largest remaining rainforest, 
                            the Cardamom Mountains are also home to a swathe of rare and endangered flora and fauna that 
                            make any visit here special.</p> 
                        </div>
                    </div>

                    <h4>Phnom Sampeu</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                        <img src="{{ url('/img/countries/cambodia/tour-places/phnom-sampeu.jpg') }}" alt="Cambodia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <p>Perched atop Phnom Sampeu in Battambang is a quaint pagoda and viewing platforms that 
                            boast exquisite panoramas of the province – dubbed Cambodia’s rice bowl – sprawling below. 
                            The site is also home to several other spots, such as the macabre Killing Caves, where 
                            thousands were tossed to their deaths through a hole in the ceiling by the Khmer Rouge. 
                            The bat caves also sit at the base and are a must-see at dusk when hundreds of thousands of 
                            bats spiral into the sky.</p>    
                        </div>
                    </div>

                    <h4>Kampot River</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                        <img src="{{ url('/img/countries/cambodia/tour-places/kompot-river.jpg') }}" alt="Cambodia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>   
                            <p>Hiring a kayak and lazily making your way along the network of tributaries and waterways off 
                            Kampot River comes with many rewards. Kayak through mangroves and pristine countryside and 
                            past small fishing communities and temples to get a glimpse of rural Cambodian living and 
                            be amid calming nature.</p> 
                        </div>
                    </div>

                    <h4>Bokor Mountain</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                        <img src="{{ url('/img/countries/cambodia/tour-places/bokor-mountain.jpg') }}" alt="Cambodia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <p>Formerly a French colonial hill station resort, where the country’s elite would go to escape 
                            the chaos of urban life, Bokor Mountain in Kampot is a testament to Cambodia’s past. The crumbling 
                            hotel at the peak was until recently a highlight, with visitors able to explore the eerie shell and 
                            enjoy the incredible views out across the Vietnamese island, Phu Quoc. However, it recently reopened 
                            as Le Bokor Palace, meaning it’s off limits to those who aren’t guests. Despite this, a drive up 
                            Bokor still brings with it visits to waterfalls, Buddhist statues, a crumbling church, a refreshing 
                            breeze and tonnes of great spots to snap another photo for Instagram.</p>    
                        </div>
                    </div>

                    <h4>Kep National Park</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                        <img src="{{ url('/img/countries/cambodia/tour-places/kep.jpg') }}" alt="Cambodia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>    
                            <p>After stuffing your face with crab – after all, that’s what Kep is famous for – burn off the calories with 
                            a walk through Kep National Park. An eight-kilometre path snakes through thick tropical jungle that is dotted with 
                            pagodas and vantage points, taking in the smattering of villages and farmland that stretch to the sea. Signs clearly 
                            mark off-shooting paths for those wanting to head deeper into the national park.</p>
                        </div>
                    </div>

                    <h4>Preah Vihear Temple</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                        <img src="{{ url('/img/countries/cambodia/tour-places/preah-vihear.jpg') }}" alt="Cambodia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>  
                            <p>If you want to have a World Heritage ancient temple pretty much all to yourself then that isn’t going to happen 
                            at Angkor. Try getting off the beaten track and heading to remote Prasat Preah Vihear, a series of impressive structures 
                            built between the 9th and 12th centuries by several kings. The site has a chequered past and was at the centre of conflict 
                            for decades. Sitting on the edge of the Cambodian-Thai border, ferocious fighting between the two countries over 
                            ownership of the sacred site pursued until recent years. In 2015, the destination was deemed safe and taken off 
                            many foreign offices’ watch lists. While military presence remains strong, the temple is well worth a visit.</p>  
                        </div>
                    </div>

                    <h4>Mondulkiri</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                        <img src="{{ url('/img/countries/cambodia/tour-places/mondulkiri.jpg') }}" alt="Cambodia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>
                            <p>Standing in the heart of the jungle that dominates the northeastern province of Mondulkiri is a special 
                            experience in itself. Throw a few elephants into the mix and you’re onto an almost priceless high. Elephant 
                            Valley Project offers visitors the chance to get up close to the magnificent mammals, while learning more 
                            about the negative effects of elephant tourism. The sanctuary offers a permanent or temporary respite for 
                            over-worked and neglected elephants, who can kick back, relax and enjoy life in their natural habitat. 
                            Visitors can spend the day watching the beasts wallow in mud, wash themselves in the river and stomp through 
                            the jungle.</p>    
                        </div>
                    </div>

                    <h4>Kirirom</h4>
                    <div class="single-blog wow fadeIn">
                        <div class="blog-image">
                        <img src="{{ url('/img/countries/cambodia/tour-places/kirirom.jpg') }}" alt="Cambodia">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta"><a href="#"><i class="fa fa-plane"></i></a></div>   
                            <p>Dubbed Cambodia’s own Switzerland, Kirirom National Park sits a two-hour drive from Phnom Penh, 
                            and its cooling pine forests boast temperatures that dip a good few degrees below that of the capital. 
                            This makes it a great escape. A few eco-projects dot the area, offering the chance to delve into local life. 
                            Accommodation is offered in the form of tents, villas, cabins and homestays. Hire a bike and cycle through 
                            the woods, take a dip in the waterfalls or simply chill while surrounded by nature.</p> 
                        </div>
                    </div>

                    <div class="comments-area">
                        <h4>Leave Comment</h4>
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=761199857372171&autoLogAppEvents=1';
                        fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                        <div class="fb-comments" data-href="http://www.kcairlines.com/kc-route/cambodia" data-numposts="5"></div>
                    </div>

                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="sidebar-area wow fadeIn">
                        <div class="single-sidebar-widget widget_recent_entries">
                        <h4>Other Flights</h4>
                            <ul>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-hongkong.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/hongkong">Hong Kong - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-indonesia.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/indonesia">Indonesia - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-lao.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/lao">Lao - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-malaysia.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/malaysia">Malaysia - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-myanmar.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/myanmar">Myanmar - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-philippines.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/philippines">Philippines - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-singapore.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/singapore">Singapore - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-taiwan.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/taipei">Taiwan - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-thailand.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/thailand">Thailand - Cambodia Flight</a>
                                </li>
                                <li>
                                    <div class="alignleft"><img src="{{ url('/img/blog/thumb-vietnam.jpg') }}" class="img-eighty" alt=""></div>
                                    <a href="/kc-route/vietnam">Vietnam - Cambodia Flight</a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-sidebar-widget widget_tag_cloud">
                            <h4>Our Facebook</h4>
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=761199857372171&autoLogAppEvents=1';
                                fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>

                                <div class="fb-page" data-href="https://www.facebook.com/KCAIRLINES/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/KCAIRLINES/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/KCAIRLINES/">KC International Airlines</a></blockquote>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $('body').addClass('single-page');
    </script>


<script>
/*    Live Date Script   */
    var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
    var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")

    function getthedate(){
    var mydate=new Date()
    var year=mydate.getYear()
    if (year < 1000)
    year+=1900
    var day=mydate.getDay()
    var month=mydate.getMonth()
    var daym=mydate.getDate()
    if (daym<10)
    daym="0"+daym
    var hours=mydate.getHours()
    var minutes=mydate.getMinutes()
    var seconds=mydate.getSeconds()
    var dn="AM"
    if (hours>=12)
    dn="PM"
    if (hours>12){
    hours=hours-12
    }
    if (hours==0)
    hours=12
    if (minutes<=9)
    minutes="0"+minutes
    if (seconds<=9)
    seconds="0"+seconds
    //change font size here
    var cdate="<small><font color='000000' face='Arial'><b>"+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+" "+hours+":"+minutes+":"+seconds+" "+dn
    +"</b></font></small>"
    if (document.all)
    document.all.clock.innerHTML=cdate
    else if (document.getElementById)
    document.getElementById("clock").innerHTML=cdate
    else
    document.write(cdate)
    }
    if (!document.all&&!document.getElementById)
    getthedate()
    function goforit(){
    if (document.all||document.getElementById)
    setInterval("getthedate()",1000)
    }
    </script>   
@endsection