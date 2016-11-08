<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <meta charset="UTF-8">
        <title>I and I Clothing</title>
        <link rel="icon" href="images/iandi-alt_favicon.png" type="image/gif" sizes="16x16">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="home.css" />
        <script src="index.js"></script>
    </head>

    <body>
        <div id="loading-mask" style="z-index:100; position:fixed;
             top:0px; bottom:0px; right:0px; left:0px;">
            <img style="position:fixed; margin:0 auto; top:25%; left:0; right:0; height:50%; " src="images/loading.gif" />
        </div>

        <div id="content">

            <img id="top" src="full_logo.png"/>

            <div id="page">
                <div id="paper" style="background-image:url(images/notebook-loop.png); background-size:100% auto; background-repeat:repeat-y;"> 

                    <div class="slide">
                        <img class="pull" src="images/black_pull.png" />
                        <img class="pull_strings" src="images/white_pull_strings.png" />
                        <a href="#" ><img id="color_right" class="right_arrow" src="images/right_arrow.png" /></a>
                        <a href="#"><img id="color_left" class="left_arrow" src="images/left_arrow.png" /></a>
                        <a href="#"><img class="minor_arrow" id="minor_left_arrow" src="images/left_arrow.png" /></a>
                        <a href="#"><img class="minor_arrow" id="minor_right_arrow" src="images/right_arrow.png" /></a>
                        <img class="thread" src="images/needle_1.png" />
                    </div>

                    <img class="stitching" src="images/stitching.png" />

                    <div class="slide">
                        <img class="pull" src="images/black_pull.png" />
                        <a href="#" ><img class="right_arrow" id="emblem_right" src="images/right_arrow.png" /></a>
                        <a href="#"><img class="left_arrow" id="emblem_left" src="images/left_arrow.png" /></a>
                        <img class="design" src="images/feel_the_bern.png" />
                        <img class="pull_strings" src="images/white_pull_strings.png" />
                        <img class="thread" src="images/needle_2.png" />
                    </div>

                    <img class="stitching" src="images/stitching.png" />

                    <div id="coloring_page">
                        <div id="selection_box">
                                <img src="unnamed-7.png" style="z-index:10; width:100%; position:absolute;"/>

                            
                            
                            <!--feel_the_bern-->
                            
                            <div id="feel_the_bern">
                                <div id="selection_box_container">
                                    <img src="unnamed-6.png" style="z-index:10; width:100%; position:absolute;;"/>
                                    <img src="unnamed-7.png" style="z-index:10; width:100%; position:absolute;"/>
                                </div>
                            </div>
                        </div>
                        <div id="color_picker"> 
                           <svg height="100" width="100">
  <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" style="box-shadow:10px 10px 5px #ffffff"/>
</svg>
                            <br />
                            <?php
                            foreach (glob('images/colors') as $dir) {
                                foreach (glob($dir . "/*") as $img) {
                                    print "<img style='width:20%; position:relative; margin:10px 0px 10px 0px;' src='$img' class='selectable_color' />";
                                }
                            }
                            ?>
                        </div>
                    </div>
                    
                <div style="position:relative; float:top; height:40px;"/></div>
                <img src="images/needle_3.png" class="thread"/>
                <img class="stitching" src="images/stitching.png" />

                <div class="slide" id="position">
                    <a href="#" ><img class="right_arrow" id="emblem_right" src="images/right_arrow.png" /></a>
                    <a href="#"><img class="left_arrow" id="emblem_left" src="images/left_arrow.png" /></a>
                    <img class="pull" src="images/black_pull.png" />
                    <img class="pull_strings" src="images/white_pull_strings.png" />
                    <img src="unnamed-6.png" class="pull" style="position:absolute;"/>
                    <img src="unnamed-7.png" class="pull" style="position:absolute;"/>
                    <img src="unnamed-4.png" class="pull" style="position:absolute;"/>
                </div>
                
                <img class="stitching" src="images/stitching.png" />
                
                <div class='slide' style="background-image:url(images/brown_slide.png); width:100%; background-repeat:no-repeat;">
                    <!--<img src="images/brown_slide.png" style="width:100%; position:absolute;" />-->
                    
                    <div style="position:relative; float:top; height:40px;"/></div>
                    <div style="font-family:sans-serif; text-align:center; position:relative; padding:0% 0 3% 0; font-size:4vw;">
                         <p id="color">Black Pullover Hoodie</p>
                         <p id="logo">Our DNA</p>
                         <p><div style="display:inline;">Red</div> - <div style="display:inline;">Yellow</div> - <div style="display:inline;">Green</div></p>
                         <p>In the middle</p>
                    </div>
                </div>
               
                <div style="position:relative; float:top; height:40px;"/></div>
                <img class="thread" src="images/needle_4.png" />

            </div>
        </div>

    </div>

</body>

</html>
