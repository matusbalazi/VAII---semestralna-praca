<?php

    include 'header.php'; 
    include 'database.php';
    include 'table_contact.php';

    $database = new Database();
   
    TableContact::delete(13, $database);

    TableContact::update(new TableContact(15, 'Janko', 'Lehotský', 'Zdravím', 'hraskojanko575@gmail.com', 'A'), $database);

?>
    
    <div class="white-space">
        <div class="container">

            <div class="contact">
                <div class="contact-text">
                    <img src="img/cubic.png" alt="cubic">
                    <h1>GET IN TOUCH<br>WITH US</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with...</p>
                </div>

                <div class="contact-icons">
                    <div class="address">
                        <div class="icon">
                            <img src="img/icon-map.png" alt="icon-map">
                        </div>
                        <div class="icon-text">
                            <h3>ADRESS</h3>
                            <p>Gitobuz technologies, AJ 325, saltlake, sec-2, Kolkata 91</p>
                        </div>
                    </div>
                    <div class="address">
                        <div class="icon">
                            <img src="img/icon-phone.png" alt="icon-phone">
                        </div>
                        <div class="icon-text">
                            <h3>PHONE</h3>
                            <p>Local: 033-84454566</p>
                            <p>Mobile: 4566475677</p>
                        </div>
                    </div>
                    <div class="address">
                        <div class="icon">
                            <img src="img/icon-email.png" alt="icon-email">
                        </div>
                        <div class="icon-text">
                            <h3>EMAIL ADRESS</h3>
                            <p>info@example.com</p>
                            <p>support@example.com</p>
                        </div>
                    </div>
                    <div class="address">
                        <div class="icon">
                            <img src="img/icon-time.png" alt="icon-time">
                        </div>
                        <div class="icon-text">
                            <h3>TIMING</h3>
                            <p>Monday – Saturday</p>
                            <p>10.30 – 8.30</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="images">
                
            </div>
            <div class="text">
                
            </div>
        </div>
    </div>

    <div class="contact-form">
        <div class="container">
            <form action="send_contact.php" method="POST" class="contact-form-containers">
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="surname" placeholder="Surname" required>
                <input type="text" name="subject" placeholder="Subject">
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="message" rows="6" placeholder="Message" class="contact-textarea"></textarea>
                <button type="submit" name="btn-submit" class="btn-submit">Submit Now</button>
            </form>
        </div>
    </div>

<?php

    include 'footer.php';

?>

</html>