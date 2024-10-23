<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }

        .sidebar {
            width: 250px;
            background-color: #ffffff;
            border-right: 1px solid #e7e7e7;
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100%;
        }

        .sidebar .logo {
            text-align: center;
            background-color: #0f8539;
            height: 100px;
        }

        .sidebar .logo img {
            width: 120px;
            margin-top: 30px;
        }

        .sidebar a {
            color: #333;
            padding: 15px 20px;
            text-decoration: none;
            font-weight: bold;
            display: block;
            width: 100%;
            transition: background-color 0.3s;
            background-color: #28a745;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #135a23;
            color: #ffffff;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #ffffff;
            z-index: 1000;
            width: 100%;
        }



        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .sidebar .logout {
            margin-top: auto;
            text-align: center;
            padding: 20px;
        }

        .sidebar .logout a {
            color: #ffffff;
            background-color: #28a745;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            display: block; /* Ensure full width for logout button */
            width: 100%;
        }

        .sidebar .logout a:hover {
            background-color: #4d0410;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
        }

        .footer {
            background-color: #ffffff;
            border-top: 1px solid #e7e7e7;
            color: #333;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            margin-left: 250px;
        }

        .footer p {
            margin: 0;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 60px;
                padding: 10px;
            }

            .sidebar a {
                padding: 10px;
                text-align: center;
                font-size: 14px;
            }

            .footer {
                margin-left: 60px;
            }

            .sidebar .logo img {
                width: 40px;
            }

            .sidebar .logout {
                padding: 10px;
            }

            .sidebar .logout a {
                padding: 10px;
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="{{ asset('images/Group 89.svg') }}" alt="Logo">
        </div>

        <!-- Products dropdown -->
        <div class="dropdown">
            <a href="#" class="dropdown-toggle" id="productsDropdown">
                <i class="fas fa-box"></i> Products
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" style="padding-left: 40px;" href="{{ route('admin.products') }}"><i class="fas fa-list"></i> View Products</a>
                <a class="dropdown-item" style="padding-left: 40px;" href="{{ route('admin.products.create') }}"><i class="fas fa-plus"></i> Add Product</a>
            </div>
        </div>

        <!-- Logout button -->
        <div class="logout">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-link" style="color: #0f8539; text-decoration: none;">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </div>
    </div>

    <!-- Main content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Admin Panel. All rights reserved.</p>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript to handle hover functionality -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Get the dropdown menu
            const productsDropdown = document.querySelector(".dropdown");
            const dropdownMenu = productsDropdown.querySelector(".dropdown-menu");

            // Show dropdown on hover
            productsDropdown.addEventListener("mouseenter", function () {
                dropdownMenu.style.display = "block";
            });

            // Hide dropdown when not hovering
            productsDropdown.addEventListener("mouseleave", function () {
                dropdownMenu.style.display = "none";
            });
        });
    </script>
</body>

</html>
