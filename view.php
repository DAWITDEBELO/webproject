<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="market.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome for icons -->
    <style>
       
    </style>
</head>
<body>
<?php include 'header.php'; ?>
    <div class="container">
        <section class="shopping_cart">
            <h1 class="heading"></h1>
    <body>
    <section class="home" id="home">
        <div class="content">
            <h3>MARKETING</h3>
            <p>A market is one of the many varieties of systems, institutions,
                 procedures, social relations and infrastructures whereby parties 
                 engage in exchange. While parties may exchange goods and services
                  by barter, most markets rely on sellers offering their goods or 
                  services (including labour) in exchange for money from buyers. 
                  It can be said that a market is the process by which the prices
                   of goods and services are established. Markets facilitate trade 
                   and enable the distribution and allocation of resources in a 
                   society. </p>
            <a href="/#order" class="btn">ORDER NOW</a>
        </div>

        <div class="images">
            <img src="images/mark.jpg" alt="marl">
        </div>
    </section>

    <section class="speciality" id="speciality">

        <h1 class="heading"> OUR`S <span>SPECIAL</span> </h1>

        <div class="box-container">

            <div class="box">
            <img class="image" src="images/computer.jpg" alt="">
                <div class="content">
                    <h3>COMPUTER</h3>
                    <p><span>The history of computers spans from ancient calculating tools like the abacus to 
                        modern, powerful devices, evolving through mechanical, electromechanical, and electronic
                         eras, with key milestones including the development of the Analytical Engine by Charles
                          Babbage and the invention of the first electronic digital computer, ENIAC. 
</span> </p>

                </div>
            </div>
            <div class="box">
                <img class="image" src="images/guiter.png" alt="">
                <div class="content">
                    <h3>GUITER</h3>
                    <p><span>Antonio de Torres:
                    The design of the modern classical guitar can be attributed to Antonio de Torres, whose
                     construction has been considered the standard in "traditional" instruments since the mid-19th
                      century. Electric Guitar:
                   In the 1920s, Lloyd Loar created the first microphone adapted to the guitar, and in 1935,
                    Rickenbacher manufactured the first electric guitar.</span>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/iphone.png" alt="">
                <div class="content">
                    <h3>MOBIYLE</h3>
                    <p><spa>With your device in landscape orientation, tap the View button in the control bar, 
                        then tap Fretboard. The guitar fretboard appears.Tap the strings on the fretboard to play
                         notes. ...To play notes of a particular scale, tap the Scale button, then tap the scale 
                         you want to play.
</span></p>

                </div>
            </div>
            <div class="box">
                <img class="image" src="images/refrigerator.png" alt="">
                <div class="content">
                    <h3>REFRIGERATOR</h3>
                <p><span>the first viable home refrigerators were launched in the USA by two companies - Kelvinator and 
                    Frigidaire. Every new year brings up the anniversaries ahead. This year's include the end of World 
                    War I, the influenza epidemic that killed more people than that war and women winning the vote in the 
                    UK..</span></p>
                </div>
            </div>
        </div>
    </section>
    <H1>THE MACHIMES OF PRIECE</H1>
            <table>
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Coputer</td>
                        <td>
                            <img src="images/computer.jpg" alt="Computer" width="200">
                        </td>
                        <td>50000/-</td>
                        <td>
                            <div class="quantity_box">
                                <input type="number" min="1" value="1">
                                <input type="submit" class="update_quantity" value="Update">
                            </div>
                        </td>
                        <td>50000/-</td>
                        <td>
                            <a href="#">
                                <i class="fas fa-trash"></i> Remove  
                            </a>
                        </td>
                    </tr>
                <tr>
                    <td>2</td>
                    <td>Mobile</td>
                    <td>
                        <img src="images/iphone.png" alt="Iphone" width="200">
                    </td>
                    <td>20000/-</td>
                    <td>
                        <div class="quantity_box">
                            <input type="number" min="1" value="1">
                            <input type="submit" class="update_quantity" value="Update">
                        </div>
                    </td>
                    <td>20000/-</td>
                    <td>
                        <a href="#">
                            <i class="fas fa-trash"></i> Remove  
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Refrigerator</td>
                    <td>
                        <img src="images/refrigerator.png" alt="Refrigerator" width="200">
                    </td>
                    <td>20000/-</td>
                    <td>
                        <div class="quantity_box">
                            <input type="number" min="1" value="1">
                            <input type="submit" class="update_quantity" value="Update">
                        </div>
                    </td>
                    <td>20000/-</td>
                    <td>
                        <a href="#">
                            <i class="fas fa-trash"></i> Remove  
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Guiter</td>
                    <td>
                        <img src="images/guiter.png" alt="Guiter" width="200">
                    </td>
                    <td>100000/-</td>
                    <td>
                        <div class="quantity_box">
                            <input type="number" min="1" value="1">
                            <input type="submit" class="update_quantity" value="Update">
                        </div>
                    </td>
                    <td>100000/-</td>
                    <td>
                        <a href="#">
                            <i class="fas fa-trash"></i> Remove  
                        </a>
                    </td>
                </tr>
            </tbody>
            </table>
            <div class="table-bottom"></div>
        </section>
    </div>
    <section class="footer">

<div class="container">
        <div class="footer-content">
            <h3>Contact Us</h3>
            <ul>
                <li>Email: daviddebelo95@gmail.com</li>
                <li>Phone: +251 953299213</li>
                <li>Address: OROMIA, ETHIOPIA</li>
            </ul>
        </div>
        <div class="footer-content">
            <h3>Follow Us</h3>
            <ul class="social-icons">
            <li><a href="https://www.youtube.com/@DavidDebelo-jn7uy"><i class="fab fa-youtube"></i></a></li>
            <li><a href="https://web.telegram.org/k/David Debelo"><i class="fab fa-telegram"></i></a></li>
        

            </ul>
        </div>
    </div>


    <h1 class="credit">
        develop BY IT GROUP 10 MEMBERS || PROJECT DEGITAL MARKET
    </h1>
</section>
</body>
</html>