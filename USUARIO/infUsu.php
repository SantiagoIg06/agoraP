<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./infUsu.css">
    <title>Informacion</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <div>
            <nav class="navcompleta navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand me-2" href="./index.html">
                <img
                class="logos" src="../imagenes/logosSimbolos/logo1.png" alt="Logo"
                height="16"
                alt="./index.html"
                loading="lazy"
                style="margin-top: -1px;">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarButtonsExample">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                            </li>
                            </ul>          
                        <div class="d-flex align-items-center">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    
    <h1>Personal Information</h1>
	<form id="personal-info-form">
		<label for="first-name">First Name:</label>
		<input type="text" id="first-name" name="first-name" required>

		<label for="last-name">Last Name:</label>
		<input type="text" id="last-name" name="last-name" required>

		<label for="nationality">Nationality:</label>
		<input type="text" id="nationality" name="nationality" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="phone-number">Phone Number:</label>
		<input type="tel" id="phone-number" name="phone-number" required>

		<label for="bio">Tell us about yourself:</label>
		<textarea id="bio" name="bio" rows="4" cols="50"></textarea>

		<button type="submit">Submit</button>
	</form>

	<script src="infUsu.js"></script>
    
      <footer>
        Se tomo inspiracion de la pagina computrabajo.com
        <br>
        <div class="pie">
        copyright@sena
        </div>
        No le pagamos a la empresa de fallout por su imagen
    </footer>
</body>
</html>