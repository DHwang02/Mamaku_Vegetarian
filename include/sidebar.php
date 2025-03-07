<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $fname = isset($_SESSION['first_name']) ? $_SESSION['first_name'] : "Guest";
    $lname = isset($_SESSION['last_name']) ? $_SESSION['last_name'] : "";

    $isLoggedIn = isset($_SESSION['user_id']); 
?>

<!-- Hamburger Menu -->
<button class="side_menu">&#9776;</button>

<div class="dropdown_sidebar">
                <li><a href="../view/dashboard.php">Dashboard</a></li>
                <li><a href="../view/menu.php">Menu</a></li>
                <li><a href="../view/cart.php">Cart</a></li>
                <li><a href="../view/profile.php">Profile</a></li>
                <li><a href="../view/order.php">Order</a></li>
                <li><a href="../view/transaction.php">Transaction</a></li>
                <li><a href="../controller/logout.php">Logout</a><li>
            </div>

<div class="sidebar-container">
    <div class="sidebar-logo" onclick="location.href='../'">
        <img src="../assets/images/logo.png">
        <h3>
            Mamaku Vegetarian
        </h3>
    </div>

    <div class="sidebar-greet">
        <p>Dear,</p>
        <h5><?php echo "$fname $lname" ?></h5>
    </div>

    <ul class="sidebar-nav">

        <a href="dashboard.php">

            <li>
                <svg width="100%" height="50px" viewBox="0 -0.5 25 25" fill="white" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.918 10.0005H7.082C6.66587 9.99708 6.26541 10.1591 5.96873 10.4509C5.67204 10.7427 5.50343 11.1404 5.5 11.5565V17.4455C5.5077 18.3117 6.21584 19.0078 7.082 19.0005H9.918C10.3341 19.004 10.7346 18.842 11.0313 18.5502C11.328 18.2584 11.4966 17.8607 11.5 17.4445V11.5565C11.4966 11.1404 11.328 10.7427 11.0313 10.4509C10.7346 10.1591 10.3341 9.99708 9.918 10.0005Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.918 4.0006H7.082C6.23326 3.97706 5.52559 4.64492 5.5 5.4936V6.5076C5.52559 7.35629 6.23326 8.02415 7.082 8.0006H9.918C10.7667 8.02415 11.4744 7.35629 11.5 6.5076V5.4936C11.4744 4.64492 10.7667 3.97706 9.918 4.0006Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.082 13.0007H17.917C18.3333 13.0044 18.734 12.8425 19.0309 12.5507C19.3278 12.2588 19.4966 11.861 19.5 11.4447V5.55666C19.4966 5.14054 19.328 4.74282 19.0313 4.45101C18.7346 4.1592 18.3341 3.9972 17.918 4.00066H15.082C14.6659 3.9972 14.2654 4.1592 13.9687 4.45101C13.672 4.74282 13.5034 5.14054 13.5 5.55666V11.4447C13.5034 11.8608 13.672 12.2585 13.9687 12.5503C14.2654 12.8421 14.6659 13.0041 15.082 13.0007Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.082 19.0006H17.917C18.7661 19.0247 19.4744 18.3567 19.5 17.5076V16.4936C19.4744 15.6449 18.7667 14.9771 17.918 15.0006H15.082C14.2333 14.9771 13.5256 15.6449 13.5 16.4936V17.5066C13.525 18.3557 14.2329 19.0241 15.082 19.0006Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                
                <p>
                    Dashboard
                </p>
                
            </li>

        </a>
        

        <a href="menu.php">

            <li>
                <svg fill="#ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50%" height="50px" viewBox="0 0 70 70" enable-background="new 0 0 70 70" xml:space="preserve" stroke="#ffffff">

                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                    
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                    
                    <g id="SVGRepo_iconCarrier"> <g> <path d="M56.946,7.583h-0.042h-7.321V5.208c0-1.104-0.896-2-2-2s-2,0.896-2,2v2.375h-4V5.208c0-1.104-0.896-2-2-2s-2,0.896-2,2 v2.375h-5V5.208c0-1.104-0.896-2-2-2s-2,0.896-2,2v2.375h-5V5.208c0-1.104-0.896-2-2-2s-2,0.896-2,2v2.375h-5.678 c-2.209,0-4.322,2.052-4.322,4.261v51c0,2.209,1.113,3.738,3.322,3.738h44c2.209,0,3.679-1.529,3.679-3.738v-51 C60.583,9.635,59.155,7.583,56.946,7.583z M19.583,11.583v2.625c0,1.104,0.896,2,2,2s2-0.896,2-2v-2.625h5v2.625 c0,1.104,0.896,2,2,2s2-0.896,2-2v-2.625h5v2.625c0,1.104,0.896,2,2,2s2-0.896,2-2v-2.625h4v2.625c0,1.104,0.896,2,2,2s2-0.896,2-2 v-2.625h7v10h-43v-10H19.583z M13.583,62.583v-39h43v39H13.583z"/> <path d="M53.583,50.208c-0.552,0-1,0.447-1,1v7.375h-5.666c-0.552,0-1,0.447-1,1s0.448,1,1,1h6.667c0.552,0,0.999-0.447,0.999-1 v-8.375C54.583,50.655,54.135,50.208,53.583,50.208z"/> <path d="M42.917,58.583h-2c-0.552,0-1,0.447-1,1s0.448,1,1,1h2c0.552,0,1-0.447,1-1S43.469,58.583,42.917,58.583z"/> <path d="M21.917,31.583h8c0.552,0,1-0.447,1-1s-0.448-1-1-1h-8c-0.552,0-1,0.447-1,1S21.365,31.583,21.917,31.583z"/> <path d="M33.917,31.583h15c0.552,0,1-0.447,1-1s-0.448-1-1-1h-15c-0.552,0-1,0.447-1,1S33.365,31.583,33.917,31.583z"/> <path d="M41.917,50.583c0-0.553-0.448-1-1-1h-7c-0.552,0-1,0.447-1,1s0.448,1,1,1h7C41.469,51.583,41.917,51.136,41.917,50.583z"/> <path d="M48.917,44.583h-8c-0.552,0-1,0.447-1,1s0.448,1,1,1h8c0.552,0,1-0.447,1-1S49.469,44.583,48.917,44.583z"/> <path d="M21.917,46.583h15c0.552,0,1-0.447,1-1s-0.448-1-1-1h-15c-0.552,0-1,0.447-1,1S21.365,46.583,21.917,46.583z"/> <path d="M28.917,49.583h-7c-0.552,0-1,0.447-1,1s0.448,1,1,1h7c0.552,0,1-0.447,1-1S29.469,49.583,28.917,49.583z"/> <path d="M21.917,36.583h6c0.552,0,1-0.447,1-1s-0.448-1-1-1h-6c-0.552,0-1,0.447-1,1S21.365,36.583,21.917,36.583z"/> <path d="M31.917,36.583h17c0.552,0,1-0.447,1-1s-0.448-1-1-1h-17c-0.552,0-1,0.447-1,1S31.365,36.583,31.917,36.583z"/> <path d="M21.917,41.583h13c0.552,0,1-0.447,1-1s-0.448-1-1-1h-13c-0.552,0-1,0.447-1,1S21.365,41.583,21.917,41.583z"/> <path d="M48.917,39.583h-10c-0.552,0-1,0.447-1,1s0.448,1,1,1h10c0.552,0,1-0.447,1-1S49.469,39.583,48.917,39.583z"/> </g> </g>
                
                </svg>
                

                <p>
                    Menu
                </p>
                    
                
            </li>

        </a>

        <a href="cart.php">

            <li>
                <svg width="50%" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">

                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                
                    <g id="SVGRepo_iconCarrier"> <path d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g>
                
                </svg>

                
                    <p>Cart</p>
                
            </li>

        </a>

        <a href="profile.php">
            <li>
                <svg fill="#ffffff" width="50%" height="50px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">

                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                    
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                    
                    <g id="SVGRepo_iconCarrier"> <title>id-card</title> <path d="M28 4.75h-24c-1.794 0.002-3.248 1.456-3.25 3.25v16c0.002 1.794 1.456 3.248 3.25 3.25h24c1.794-0.001 3.249-1.456 3.25-3.25v-16c-0.002-1.794-1.456-3.248-3.25-3.25h-0zM4 7.25h24c0.414 0 0.75 0.336 0.75 0.75v0.75h-25.5v-0.75c0.001-0.414 0.336-0.749 0.75-0.75h0zM28 24.75h-24c-0.414-0-0.75-0.336-0.75-0.75v-12.75h25.5v12.75c-0 0.414-0.336 0.75-0.75 0.75v0zM9.645 18.127c1.731-0 3.134-1.403 3.134-3.134s-1.403-3.134-3.134-3.134-3.134 1.403-3.134 3.134c0 0 0 0 0 0.001v-0c0.002 1.73 1.404 3.132 3.135 3.134h0zM9.645 14.358c0.351 0 0.635 0.284 0.635 0.635s-0.284 0.635-0.635 0.635c-0.351 0-0.635-0.284-0.635-0.635v0c0.001-0.35 0.284-0.634 0.635-0.635h0zM9.645 18.311c-2.388 0.010-4.384 1.677-4.898 3.91l-0.007 0.034c-0.018 0.080-0.029 0.173-0.029 0.268 0 0.69 0.559 1.25 1.25 1.25 0.595 0 1.093-0.416 1.219-0.974l0.002-0.008c0.258-1.14 1.262-1.979 2.462-1.979s2.204 0.838 2.459 1.962l0.003 0.017c0.129 0.564 0.626 0.978 1.22 0.978 0.69 0 1.25-0.559 1.25-1.25 0-0.093-0.010-0.184-0.030-0.272l0.002 0.008c-0.521-2.267-2.516-3.933-4.902-3.943h-0.001zM26 12.75h-8c-0.69 0-1.25 0.56-1.25 1.25s0.56 1.25 1.25 1.25v0h8c0.69 0 1.25-0.56 1.25-1.25s-0.56-1.25-1.25-1.25v0zM26 16.75h-8c-0.69 0-1.25 0.56-1.25 1.25s0.56 1.25 1.25 1.25v0h8c0.69 0 1.25-0.56 1.25-1.25s-0.56-1.25-1.25-1.25v0zM26 20.75h-8c-0.69 0-1.25 0.56-1.25 1.25s0.56 1.25 1.25 1.25v0h8c0.69 0 1.25-0.56 1.25-1.25s-0.56-1.25-1.25-1.25v0z"/> </g>
                    
                </svg>

                
                <p>Profile</p>
                
            </li>
        </a>

        <a href="order.php">
            <li>

                <svg fill="white" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                    width="800px" height="800px" viewBox="0 0 256 241" enable-background="new 0 0 256 241" xml:space="preserve">
                <path d="M254,188V2H2v186h111v29H75v22h106v-22h-38v-29H254z M19,19h217v151H19L19,19z M75.397,68.237l8.796,68.658h29.376
                    l8.71-68.658H86.327l-7.173-24.85l-3.928,1.11l6.832,23.654L75.397,68.237z M126.463,108.287c0,0-1.11-9.991,14.176-9.991h24.338
                    c15.2,0,14.176,9.991,14.176,9.991H126.463z M179.066,126.903c0,0,1.025,9.991-14.176,9.991h-24.252
                    c-15.286,0-14.176-9.991-14.176-9.991H179.066z M128.769,122.036c-2.476,0-4.526-1.964-4.526-4.526c0-2.476,1.964-4.526,4.526-4.526
                    h48.334c2.476,0,4.526,1.964,4.526,4.526c0,2.476-2.049,4.526-4.526,4.526H128.769z M182.653,150.387H73.347v-8.283h109.306V150.387
                    z"/>
                </svg>
                
                <p>Order</p>
                
            </li>
        </a>

        <a href="transaction.php">
            <li>

                <svg fill="white" width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.0020048,13 C17.5542895,13 18.0020048,13.4477153 18.0020048,14 C18.0020048,14.5128358 17.6159646,14.9355072 17.1186259,14.9932723 L17.0020048,15 L5.41700475,15 L8.70911154,18.2928932 C9.0695955,18.6533772 9.09732503,19.2206082 8.79230014,19.6128994 L8.70911154,19.7071068 C8.34862757,20.0675907 7.78139652,20.0953203 7.38910531,19.7902954 L7.29489797,19.7071068 L2.29489797,14.7071068 C1.69232289,14.1045317 2.07433707,13.0928192 2.88837381,13.0059833 L3.00200475,13 L17.0020048,13 Z M16.6128994,4.20970461 L16.7071068,4.29289322 L21.7071068,9.29289322 C22.3096819,9.8954683 21.9276677,10.9071808 21.1136309,10.9940167 L21,11 L7,11 C6.44771525,11 6,10.5522847 6,10 C6,9.48716416 6.38604019,9.06449284 6.88337887,9.00672773 L7,9 L18.585,9 L15.2928932,5.70710678 C14.9324093,5.34662282 14.9046797,4.77939176 15.2097046,4.38710056 L15.2928932,4.29289322 C15.6533772,3.93240926 16.2206082,3.90467972 16.6128994,4.20970461 Z"/>
                </svg>

                <p>Transaction</p>
                
            </li>
        </a>
        

    </ul>

    <?php if ($isLoggedIn): ?>
        <!-- Display Logout button if user is logged in -->
        <button class="logout-btn" onclick="location.href='../controller/logout.php'">
            Log Out
        </button>
    <?php else: ?>
        <!-- Display Login button if user is not logged in -->
        <button class="login-btn" onclick="location.href='login.php'">
            Login
        </button>
    <?php endif; ?>

</div>

<script>
    const side_menu = document.querySelector('.side_menu'); // The hamburger menu button
    const dropdown_sidebar = document.querySelector('.dropdown_sidebar'); // The sidebar container

    // Add event listener to toggle the sidebar visibility
    side_menu.onclick = function () {
        dropdown_sidebar.classList.toggle('open'); // Toggle 'hidden' class
    };
</script>