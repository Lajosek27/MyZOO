<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=sprintf('%s',$title); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="public/css/style.min.css" rel="stylesheet" >
</head>
<header>
    <div class="headerWrapper">
        <section>
            <nav class="navbar navbar-expand-xl " >
                <div class="container-fluid">
                    <div class="logo"><a href="/"><h2>MyZOO</h2></a></div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Zwięrzęta</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/tiger">Tygrys</a></li>
                                    <li><a class="dropdown-item" href="/elephant">Słoń</a></li>
                                    <li><a class="dropdown-item" href="/rino">Nosorożec</a></li>
                                    <li><a class="dropdown-item" href="/fox">Lis</a></li>
                                    <li><a class="dropdown-item" href="/snow-leopard">Ibris</a></li>
                                    <li><a class="dropdown-item" href="/rabbit">Królik</a></li> 
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/tastTwo">Zadanie 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://github.com/Lajosek27/MyZOO">Repozytorium</a>
                            </li>
                            
                            
                        </ul>
                        
                    </div>
                </div>
            </nav>
        </section>
    </div>
</header>
