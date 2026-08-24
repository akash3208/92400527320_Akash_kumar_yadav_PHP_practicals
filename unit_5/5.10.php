<!DOCTYPE html>
<html>
<head>
    <title>AJAX Navigation</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        nav a {
            margin: 10px;
            cursor: pointer;
        }

        #content {
            margin-top: 30px;
            padding: 20px;
            border: 1px solid black;
        }
    </style>
</head>
<body>

<!-- 5.10 Build a navigation menu with links to different sections of your website. Use jQuery and AJAX to load content dynamically when the user clicks on a menu item. Fetch data from a server (e.g., blog posts, product details) and display it without refreshing the entire page. -->

<nav>
    <a class="menu" data-page="home.php">Home</a>
    <a class="menu" data-page="products.php">Products</a>
    <a class="menu" data-page="about.php">About</a>
    <a class="menu" data-page="contact.php">Contact</a>
</nav>

<div id="content">
    Select a menu item.
</div>

<script>
$(".menu").click(function() {
    var page = $(this).data("page");

    $.ajax({
        url: page,
        type: "GET",
        success: function(data) {
            $("#content").html(data);
        },
        error: function() {
            $("#content").html("Unable to load content.");
        }
    });
});
</script>

</body>
</html>

//home.php
<h2>Home</h2>
<p>Welcome to our website.</p>

//products.php
<h2>Products</h2>
<p>Here you can find our products.</p>

//about.php
<h2>About</h2>
<p>This is the about section.</p>

//contact.php
<h2>Contact</h2>
<p>Contact us for more information.</p>
