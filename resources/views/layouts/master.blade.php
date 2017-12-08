<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Revist later -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Navigation bar -->
    <header class="navbar">
        <div class="container--flex">
            <div class="navbar__item">
                <form class="searchbar">
                    <input type="text" name="q"/>
                    <button class="searchbar__btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <nav class="navbar__item">
                <ul class="nav-links">
                    <li class="username">{{ $user->firstName . " " . $user->lastName }}</li>
                    <li>
                        <a href="/portfolio" class="nav-item">
                            <i class="fa fa-folder-o fa-3x" aria-hidden="true"></i>
                            <span class="nav-item__title">Portfolio</span>
                        </a>
                    </li>
                    <li>
                        <a href="/search" class="nav-item">
                            <i class="fa fa-cart-arrow-down fa-3x" aria-hidden="true"></i>
                            <span class="nav-item__title">Buy Stocks</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-item">
                            <i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i>
                            <span class="nav-item__title">My Account</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div class="grid">
        <aside>
            <h3>Personal</h3>
            <div class="card">
                <header class="card__header">
                    <h4 class="card__title">Cash</h4>
                </header>
                <div class="card__body">
                    <p class="card__body-text--bottom-right text-align--right">
                        <span class="user-cash h4-like">${{ number_format($user->cash, 2) }}</span>
                        <span class="success">Available</span>
                    </p>
                </div>
            </div>
        </aside>
    </div>
</body>
</html>
