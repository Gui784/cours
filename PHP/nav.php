<!DOCTYPE html>
<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP</title>
    <style>
        /* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
    </style>
</head>
<body></body>
    <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">Affichage
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../01-affichage/instructions.php">instructions</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Variables et constantes
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../02-variables_et_constantes/variables.php">Variables</a>
                <a href="../02-variables_et_constantes/constantes.php">Constantes</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">concatenation et syntaxe
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../03-concatenation_et_syntaxe/concatenation.php">concatenation</a>
                <a href="../03-concatenation_et_syntaxe/syntaxes_quotes.php">syntaxe</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">opérateur arithemetique
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../04-opérateur_arithemetique/arithemetique.php">arithemetique</a>
                <a href="../04-opérateur_arithemetique/opérateur_affectation.php">opérateur arithemetique</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">conditions
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../05-conditions/if_else.php">if else</a>
                <a href="../05-conditions/switch.php">switch</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">fonctions
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../06-fonctions/exo_tva.php">exo tva</a>
                <a href="../06-fonctions/predefinies.php">predefinies</a>
                <a href="../06-fonctions/utilisateurs.php">utilisateurs</a>
            </div>
        </div>
             <div class="dropdown">
            <button class="dropbtn">Portés des variables
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../07-porté_des_variables/global_local.php">Global et Locale</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Boucles
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../08-boucles/boucles.php">Boucles</a>
            </div>
        </div>
        </div>                    

</body>
</html>