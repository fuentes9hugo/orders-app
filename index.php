<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.8/darkly/bootstrap.min.css" 
    integrity="sha512-+uC0Ar9AG4/j/iF0Ug22TO9D17MAbD94K7J8h17EzXzN3D5kcOpYQdF4OuiLraHSibCVhz4DIcqwsDboRMVStg==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
    />
    <script
    defer
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"
    ></script>

    <!-- Static Content -->
    <link rel="stylesheet" href="./static/css/styles.css">

<title>Orders App</title>
</head>
<body>
    <main class="vh-100 d-flex align-items-center justify-content-center">
        <div class="card p-2" style="width: 18rem;">
        <img src="./static/img/room.png" class="rounded-1" alt="Hotel room">
            <div class="card-body">
                <h3>HAZ TU RESERVA</h3>
                <form method="POST" action="">
                    <div class="row">
                        <div class="col">
                            <label for="name" class="form-label">Nombre</label>
                            <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="last_name" class="form-label">Apellidos</label>
                            <input id="last_name" type="text" class="form-control" name="last_name" required autocomplete="last_name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="email" class="form-label">E-mail</label>
                            <input id="email" type="text" class="form-control" name="email" required autocomplete="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="orders_amount" class="form-label">Cantidad</label>
                            <select id="orders_amount" class="form-select" name="orders_amount" required>
                                <option selected>Seleccionar...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>