<!-- <html> -->
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Ambrosia Ayurved | Get in Touch for Support
</title>
<meta name="description" content="Connect with Ambrosia Ayurved for all your inquiries. Find our contact details, phone number, email, and address. We're here to help you!">

</head>

<style>
   .choose_us {
    position: relative;
    background: url("<?php echo base_url('/assets/images/log16.webp') ?>") no-repeat center center;
    background-size: cover;
    width: 100%;
    min-height: 85vh; /* Adjust as needed */
    display: flex;
    align-items: center;
    justify-content: center;
    color: white; /* Ensure text is visible */

}


    .choose_us{
        img{
            width:100%;
            height:100%:
        }
    }

    /* .image {
        width: 100%;
        height:700px;
        object-fit: cover;
    } */

    .text {
        position: absolute;
        top: 13%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: black;
        font-weight: bolder;
        z-index: 2;
        /* height:400px; */
    }

    h3 {
        /* text-decoration: underline; */
        font-size: 40px;
    }

    h5 {
        font-size: 20px;
        margin-top: 10px;
    }

    .cover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 1;
    }

    .contact-us-content {
        border: 1px solid black;
        height: 450px;
        width: 60%;
        margin: auto;
        z-index: 2;
        position: absolute;
        top: 13%;
        left: 16%;
        right: 10%;
        display: flex;
        justify-content: space-between;
        /* background-color: white; */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    .address {
        width: 50%;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        /* background-color: #f9f9f9; */
        /* border:1px solid yellow; */
    }

    .address div {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        font-size: 18px;
        color: black;
    }

    .icon-circle {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        /* background-color:rgb(34, 178, 255); */
        display: flex;
        justify-content: center;
        align-items: center;
        color: black;
        font-size: 20px;
        margin-right: 10px;
        border:2px solid rgb(34, 203, 255);
    }

    .contact-form {
        width: 50%;
        padding: 20px;
        /* background-color: #ffffff; */
    }

    /* .contact-form h4 {
        margin-bottom: 20px;
        font-size: 24px;
        color: white;
    } */

    .contact-form form input,
    .contact-form form textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        /* border: 1px solid #ddd; */
        border-radius: 4px;
        font-size: 16px;
        border: none;
        /* background:transparent; */
        background-color: rgba(255, 255, 255, 0.2);
        color:green !important;
        outline: none;
        backdrop-filter: blur(5px);
        
    }

    .contact-form form button {
        background-color: rgb(72, 183, 242);
         border:1px solid white;
        color: black;
        padding: 5px 50px;
        border: none;
        border-radius: 4px;
        font-size: 18px;
        cursor: pointer;
        /* background-color:; */
        color:black !important;
        outline: none;
        /* border:2px  solid red; */
        transition: background-color 0.3s ease;
        /* background-color: rgba(37, 104, 103, 0.8); */
        color:black !important;
        margin-top:-20px !important;
    }

    .contact-form form button:hover {
        background-color: rgb(20, 179, 227);
        color:black !important;
        font-size: 18px;
    }
    .contact-form form input::placeholder,
    .contact-form form textarea::placeholder {
    color: black; /* Placeholder text color */
    opacity: 1; /* Ensure the placeholder is fully visible */
    font-weight: 400; /* Adjust weight for readability */
    font-size: 16px; /* Ensure the size matches the input text */
}
/* .contact-form form input:{
background-color:rgba(0,0,0,0.3);
} */
.underline{
    border:1px solid rgb(63, 208, 252);;
    width:30%;
    margin:auto;
}
.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
}
.head {
    text-align: center; 
    color:black; /* Bright Blue */
    font-weight: bold; 
    font-family: 'Cinzel', serif; /* Elegant & Luxurious */
    text-shadow: 
        2px 2px 10px rgba(0, 119, 255, 0.8), /* Bright Blue Glow */
        0px 0px 15px rgba(0, 85, 204, 0.6), /* Deep Blue Glow */
        0px 0px 20px rgba(51, 153, 255, 0.5); /* Neon Blue Effect */
    letter-spacing: 3px; 
    font-size: 32px;
    text-transform: uppercase;
}



@media (max-width: 768px) {
    .choose_us{
        /* border:2px solid red; */
        height:1100px;
    }
    .image {
        width: 100%;
        height: 1100px;
        object-fit: cover;
    }
    .head{
        /* border:2px solid yellow; */
        width:100% !important;
        font-size:35px;
        color:rgb(22, 43, 49);
    }
    .underline{
        width:60%;
        margin-bottom:10px;
    }
    .pharagraph{
        /* border:2px solid yellow; */
        font-size:17px;
        width:80%;
        margin:auto;
    }
    .text{
        /* border:2px solid red; */
        width:80%;
        /* margin-bottom:-200px !important; */

    }
    .contact-us-content{
        /* border:2px solid yellow; */
        display:flex;
        flex-direction:column;
        height:800px;
        top: 20%;
        width:90%;
        left:5%;
        

    }
    .address{
        /* border:2px solid red; */

        width:100%;
        margin-bottom:-210px !important;

    

    }
    .contact-form{
        /* border:2px solid yellow; */
        margin-top:-300px !important;
        display:block;
        width:100%;
    }
    
    
    


}

.contact-form form input,
.contact-form form textarea {
    width: 100%;
    padding: 6px;
    margin-bottom: 15px;
    border-radius: 4px;
    font-size: 16px;
    border: none;
    background: rgba(0, 0, 0, 0.3) !important; /* Semi-transparent black */
    color: white !important; /* Ensure text is visible */
    outline: none;
    backdrop-filter: blur(5px); /* Apply blur effect */
}

/* Placeholder color to be readable */
.contact-form form input::placeholder,
.contact-form form textarea::placeholder {
    color: rgba(255, 255, 255, 0.6); /* Light white text */
    opacity: 1;
}




</style>

<div class="container-fluid choose_us content" style="margin-top:30px;">
    <!-- <img class="image" src="<?php echo base_url('/assets/images/phone.png ') ?>" alt="Contact Us"> -->
    <!-- <div class="cover"></div> -->
    <div class="text">
        <h2 class="head">Contact Us</h2>
        <div class="underline" style="margin-bottom:25px;"></div>
        <h6 class="pharagraph">Email us and stay up-to-date with our latest services.</h6>
    </div>
    <div class="contact-us-content">
        <div class="address">
        <!-- <h5>Address</h5> -->
            <div>
                <span class="icon-circle"><i class="fa-solid fa-location-dot"></i></span>
                
                <p><br>Ground Floor, Plot no. 1230, ARK Tower,<br> JLPL Industrial Area,Sector 82 Mohali, <br>S.A.S Nagar, Punjab - 140308
            </div>
            <div>
                <span class="icon-circle"><i class="fa-solid fa-phone"></i></span>
               80000-57233
            </div>
            <div>
                <span class="icon-circle"><i class="fa-solid fa-envelope"></i></span>
                care@ambrosiaayurved.in
            </div>
        </div>
        <div class="contact-form">
     
            <h4 style="color:black;font-size:30px;color:rgb(63, 208, 252); text-align:center;font-weight:bolder;font-family: 'Cinzel', serif; margin-top:20px; ">Get in Touch</h4>
            <div class="underline" style="border:1px solid green; margin-bottom:20px;"></div>
            <!-- <div class="underline"></div> -->
            <?php if ($this->session->flashdata('message')): ?>
                    <div class="alert 
                        <?php echo ($this->session->flashdata('message_type') == 'success') ? 'alert-success' : 'alert-danger'; ?>">
                        <?php echo $this->session->flashdata('message'); ?>
                    </div>
            <?php endif; ?>
            <form action="<?php  echo base_url('Ambrosia_main/send_email')?>" method="POST">
                <input type="text" placeholder="Your Name" name="name">
                <input type="email" placeholder="Your Email" name="email">
                <input type="textl" placeholder="Subject" name="sub">
                <textarea rows="3" placeholder="Your Message" name="message"></textarea>
                <button  class="btn" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- </body>
</html> -->