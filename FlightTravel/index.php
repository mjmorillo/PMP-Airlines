<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>PMP Airlines</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><img src="logo-light-transparent.png"></div>
            <ul class="nav-links">
                <li><a href="home" class="lttr">Home</a></li>
                <li><a href="about" class="lttr">About</a></li>
                <li><a href="services" class="lttr">Services</a></li>
                <li><a href="contacts" class="lttr">Contact</a></li>
            </ul>
            <a href="#" class="action_btn">Get Started</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="dropdown_menu ">
            <li><a href="home" class="lttr">Home</a></li>
            <li><a href="about" class="lttr">About</a></li>
            <li><a href="services" class="lttr">Services</a></li>
            <li><a href="contacts" class="lttr">Contact</a></li>
            <li><a href="#" class="action_btn">Get Started</a></li>
        </div>
    </header>
    <script>
        const toggleBtn = document.querySelector('.toggle_btn');
        const toggleBtnIcon = toggleBtn.querySelector('.toggle_btn i');
        const dropdownMenu = document.querySelector('.dropdown_menu');

        toggleBtn.onclick = function(){
            dropdownMenu.classList.toggle('open');
            const isOpen = dropdownMenu.classList.contains('open');
            toggleBtnIcon.classList = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars';
        }
    </script>
</body>
</html>