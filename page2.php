<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
</head>
<body>
<?php 
    if(isset($_GET['color'])){
        $color = strtolower($_GET['color']);
        echo "style=\"background:#{$color}\">"; 
    } else {
        echo ">";
    }
    require "includes/header.inc.php";
    
        if(isset($_GET['name'])){
            $name = ucfirst($_GET['name']);
            echo "<h2 class=\"middle\">Hello $name, take a look around our shop!</h2>";
        } 

        if(isset($_GET['product'])){
             if(strtolower($_REQUEST['product'] == 'leopard-box')){
                echo "<h1>Leopard Print Jewelry Box $3000.00</h1>";
                echo "<img src='images/leopard_box.jpg' alt='Jewelry box with a leopard print pattern in the lid' class=center>";
            } elseif (strtolower($_REQUEST['product'] == 'cheeto')){
                     echo "<h1>Cheeto Tea Box $500.00</h1>";
                    echo "<img src='images/cheeto_box.jpg' alt='Tea box I made after eating a bag of cheetos' class=center>";
                    
            } elseif (strtolower($_REQUEST['product'] == 'terrier')){
                  echo "<h1>Boston Terrier Micro Inlay Earrings $50.00</h1>";
                   echo "<img src='images/terrier.jpg' alt='Stud earring of a boston terrier face made from maple and wenge hardwoods inlaid together. Roughly 10mm in size.' class=center>";
              }
         }

         if(isset($_GET['qty'])){
             switch (strtolower($_GET['qty'])) {
                 case 'one':
                    echo "<h1>Leopard Print Jewelry Box $3000.00</h1>";
                    echo "<img src='images/leopard_box.jpg' alt='Jewelry box with a leopard print pattern in the lid' class=center>";
                    break;
                case 'two':
                    echo "<h1>Leopard Print Jewelry Box $3000.00</h1>";
                echo "<img src='images/leopard_box.jpg' alt='Jewelry box with a leopard print pattern in the lid' class=center>";
                
                echo "<h1>Cheeto Tea Box $500.00</h1>";
                    echo "<img src='images/cheeto_box.jpg' alt='Tea box I made after eating a bag of cheetos' class=center>";
                    break;
                case 'three':
                    echo "<h1>Leopard Print Jewelry Box $3000.00</h1>";
                echo "<img src='images/leopard_box.jpg' alt='Jewelry box with a leopard print pattern in the lid' class=center>";
                
                echo "<h1>Cheeto Tea Box $500.00</h1>";
                    echo "<img src='images/cheeto_box.jpg' alt='Tea box I made after eating a bag of cheetos' class=center>";
                
                echo "<h1>Boston Terrier Micro Inlay Earrings $50.00</h1>";
                   echo "<img src='images/terrier.jpg' alt='Stud earring of a boston terrier face made from maple and wenge hardwoods inlaid together. Roughly 10mm in size.' class=center>";
                    break;
                } 
         }
         $img = array("<img src='images/leopard_box.jpg' alt='Jewelry box with a leopard print pattern in the lid' class=center>", "<img src='images/cheeto_box.jpg' alt='Tea box I made after eating a bag of cheetos' class=center>", "<img src='images/terrier.jpg' alt='Stud earring of a boston terrier face made from maple and wenge hardwoods inlaid together. Roughly 10mm in size.' class=center>", "<img src='images/caddy.jpg' alt='Bedside caddy for phone display, wallet and trinket holder' class=center>", "<img src='images/purple.jpg' alt='Tea box made from purple heart and mahogany' class=center>", "<img src='images/sloths.jpg' alt='Stud earring of a sloth face made from maple, walnut and wenge hardwoods inlaid together. Roughly 10mm in size.' class=center>");
         $tag = array("<h1>Leopard Print Jewelry Box $3000.00</h1>", "<h1>Cheeto Tea Box $500.00</h1>", "<h1>Boston Terrier Micro Inlay Earrings $50.00</h1>", "<h1>Bedside Caddy $100.00</h1>", "<h1>Purple Heart Tea Box $400.00</h1>", "<h1>Sloth Micro Inlay Earrings $50.00</h1>");
         if(isset($_GET['catalog'])){
            if(strtolower($_REQUEST['catalog'] == true)){
                for($i=0; $i <=count($tag)-1; $i++){
                    echo $tag[$i];
                    echo $img[$i];
                }


            }
         }
         
         $tag2 = array("<h1>Leopard Print Jewelry Box $1500.00 (Was$3000.00)</h1>", "<h1>Cheeto Tea Box $250.00(Was $500.00)</h1>", "<h1>Boston Terrier Micro Inlay Earrings $25 (Was $50.00)</h1>", "<h1>Bedside Caddy $50 (Was $100.00)</h1>", "<h1>Purple Heart Tea Box $200 (Was $400.00)</h1>", "<h1>Sloth Micro Inlay Earrings $25 (Was $50.00)</h1>");
         if(isset($_GET['sale'])){
            if(strtolower($_REQUEST['sale'] == true)){
             echo "<h1> 50% Off Store Wide</h1>";
             for($i=0; $i <=count($tag2)-1; $i++){
                echo $tag2[$i];
                echo $img[$i];
            }
            }
        }

        if(isset($_GET['blog'])){
            switch (strtolower($_GET['blog'])) {
                case 'one':
                   echo "<h1>Blog: How I Got Here</h1>";
                   echo "<p>Through the course of my life I have been a naturally curious individual concerning all mediums of artistic expression. At the age of twelve, after witnessing what would be an eargasmic rendition of “Sleep Walk” performed by my uncle, I endeavored to teach myself the guitar so I could emulate the hypnotic melody I had just bore witness to. For a year and a half I practiced till my fingers literally bled, put off school to study scales and learned to position my fingers in ways I thought only possible to those who fail to pay their gambling debts. However, one day, after innumerable hours of hard work, I was finally capable of switching from a D to a G chord without interruption…. that sucks.</p><p>In the ensuing years , I continued to practice my six strings of fury with fervor akin to that of Terry Crews in an Old Spice commercial. Eventually I was able to learn “Sleep Walk” and a cavalcade of different songs that you can hear upon entering your local guitar shop! I even found my way into a garage band that ended up ruining Led Zeppelin for me (you can only play “Black Dog”, “Moby Dick” and “Whole Lotta’ Love” so many times before you desire to have your ears removed via amateur surgery). Though I had found some semblance of success with my foray into music, I never felt the sense that I had accomplished anything unique, or, of value.</p><p>This same feeling followed me throughout the next ten years, but it finally came to an end when I built my first workbench. What’s funny is I built that bench in order to serve as work surface for my mechanical hobby. However, as I built it (without a plan mind you), I started to notice how much I was truly enjoying myself! The instant gratification that came from committing to a cut to the overwhelming sense of accomplishment and pride that I got after being able to stand back and admire its simple yet sturdy design. That same night, I ordered a twenty-dollar set of chisels from Amazon and two days later (thanks prime) I was deep down the rabbit hole of woodworking.</p>";
                   break;
               case 'two':
                   echo "<h1>Blog: Lessons Learned From My First Carving</h1>";
               echo "<p> I can hardly hope to convey the level of satisfaction that comes from digging into a piece of wood with a cheap, dull chisel assured in your belief as you tell yourself “surely, this is the way that everyone does it”. That beautiful feeling of careless naivete akin to that of believing a hotel is fancy because they offer a free continental breakfast. That amazing feeling that ultimately gets destroyed like a Pop Warner left-guard playing in the NFL the second fundamentals and technique actually come into play. Thankfully there is such a thing as a Dremel tool and I was able to work this piece into something of lasting value.</p>";
               echo "<p>As a woodworker…. or really any kind of hobbyist or professional I suppose, the importance of taking that first step towards imminent failure is one of the most important aspects to learning a new skill set. To be a master of something, you need to first be willing to suck at it! Similarly the ability to adapt, problem solve and overcome is equally important to becoming master of your domain. In the years since my red lantern carving (Dremeling if I am completely honest), I have worked on countless projects, and inevitably, something will go wrong and I will have to find a creative solution to fix the problem, otherwise I would have to scrap the project and start over concurrently scrapping the time I put into the project to begin with. It is from these mistakes that we learn, we grow and now as I sit at my computer, I have my red lantern propped up next to me; I can admire its atrocious sanding marks, jagged edges, and bumpy, uneven, blinding gloss finish, for it was from all of these mistakes that I became the craftsman that I am today!</p>";
                   break;
               case 'three':
                   echo "<h1>Blog: What Happened To Creativity</h1></h1>";
               echo "<p>In 1720 there was the Great Plague, 1820 saw a Cholera Outbreak that threatened mankind, in 1920 The Spanish Flu took the entire world by force. It is 2020 now, and if history proves anything, we are due for another pandemic of biblical proportions…. ladies and gentleman, I believe that plague, that blight on society is already here (no, not the Coronavirus). Of course I am talking about the end grain cutting board movement that is sweeping through social media at a fever pace infecting even the most well known influencers. Why is this though?</p><p>In a TED Talk (which I would embed if I could figure it out) with Joseph Gordon Levitt talks about how social media “likes” make users crave the attention of their potential audience, leading to individuals posting things that are quick, easy and involve little effort when it comes to design instead of posting something they actually built with passion. In short, people sell out to be able to push out uninspired daily content just to get that sweet sweet “like” fix. I could rant about this to no length; however, I will close out this post with a simple request, make the things that YOU want to make, make the things that YOU want to see, make the things that push the boundaries of what is accepted and lastly, make things that fulfill you creatively, otherwise we are doomed to an instagram feed of the same ten projects being beat to death by every craftsman on the planet!</p>";
                   break;
               } 
        }
         
            

    ?>


<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
<?php require "includes/footer.inc.php";?>
</body>
</html>