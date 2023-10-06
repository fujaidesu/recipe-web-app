<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyRecipe - Mango Pie</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
  <header>
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="index.php">MyRecipe</a>
        </div>
        <div class="navbar-links">
          <?php  
            session_start();
            include('navbar_links.php');
          ?>
        </div>
    </nav>
  </header>

  <main id="main">
    
    <!-- content -->
    <section class="section">
      <div class="container">
        <div class="row mb-4 align-items-center">
          <div class="col-md-6" data-aos="fade-up">
            <h2>Mango pie</h2>
            <p class="mb-4"><span class="text-muted">Dessert</span></p>
          </div>
        </div>

        <?php  
          $_SESSION['recipeId'] = 2; // hardcode the recipe ID based on database
          include('rating.php'); // 5-star rating system
          include('add_fav.php'); // Add to favourites
        ?>
      </div>
      
      <div class="section">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-md-8" data-aos="fade-up">
              <img src="assets/img/mango_pie.jpg" alt="Image" class="img-fluid">
              <div class="mb-5">
                <p>This delectable Thanksgiving pie-inspired mango dessert is an Indian creation.
                </p>
              </div>
            </div>

            <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <h4 class="h4 mb-3">Preparation time</h4>
              <ul class="list-unstyled list-line mb-5">
                <li>30 minutes to 1 hour</li>
              </ul>

              <h4 class="h4 mb-3">Cooking time</h4>
              <ul class="list-unstyled list-line mb-5">
                <li>30 minutes to 1 hour</li>
              </ul>
            </div>

            <div class="col-md-12 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <h4 class="h4 mb-3">Ingredients</h4>

              <b class="mb-0">For the biscuit base:</b>
              <ul class="list-unstyled list-line mb-5">
                <li>280g/10oz digestive biscuits</li>
                <li>65g/2¼oz granulated sugar</li>
                <li>¼ tsp ground cardamom</li>
                <li>128g/4½oz unsalted butter, melted</li>
                <li>large pinch sea salt</li>
              </ul>

              <b class="mb-0">For the mango custard filling:</b>
              <ul class="list-unstyled list-line mb-5">
                <li>100g/3½ oz granulated sugar</li>
                <li>2 tbsp plus ¼ tsp powdered gelatine</li>
                <li>120ml/4fl oz double cream</li>
                <li>115g/4 oz cream cheese, at room temperature</li>
                <li>850g tin Alfonso mango pulp</li>
                <li>large pinch sea salt</li>
              </ul>

              <h4 class="h4 mb-3">Steps</h4>
              <ol class="list-number mb-5">
                <li>The biscuits need to be finely crushed to create the biscuit base. To do this, 
                  place the biscuits in a sealed plastic bag and smash with a rolling pin (or pulse 
                  in a food processor until they are in crumbs). Transfer to a mixing basin and toss 
                  in the cardamom, sugar, and salt to thoroughly blend.
                </li>
                <li>Then, pour the melted butter over the biscuit crumbs and stir everything up well. 
                  Press evenly with your fingertips the remaining crumb mixture into a metal pie pan 
                  measuring 23 cm/9 in. Build up the tin's sides while squeezing the base as tightly 
                  as you can to keep it from collapsing. Continue by using the remaining mixture in 
                  the second tin.
                </li>
                <li>Set the oven to Gas 3 at 160 C. For 15 minutes, place the pie crusts in the freezer. 
                  12 minutes of baking, or until golden brown, after removal. To cool, transfer to a wire rack.
                </li>
                <li>Pour 177ml (6fl oz) of cold water into a big dish to start the filling. Mix the gelatine with 
                  the half of the sugar in a another bowl, then add the water. Leave for a few minutes to stand.
                </li>
                <li>Whip the cream and the remaining sugar until medium-stiff peaks form while you wait. Place aside.
                </li>
                <li>About a fourth of the mango pulp should be warmed up to room temperature in a saucepan over 
                  medium-low heat. Be careful not to cook it. Pour into the gelatine mixture and stir it thoroughly. 
                  Gelatin should totally dissolve. Stir in the remaining mango pulp gradually.
                </li>
                <li>Cream cheese should be beaten in a bowl until it is soft and smooth. Add the salt to the mango 
                  mixture. Using a hand blender, puree the mixture until perfectly smooth. To remove any air bubbles, 
                  lightly tap the bowl on the kitchen counter a couple of times.
                </li>
                <li>Using a spatula, fold a quarter of the mango mixture into the whipped cream. Continue until 
                  there are no more streaks with the remaining cream.
                </li>
                <li>As you divide the filling among the cooled bases, smooth it out with a rubber spatula. Refrigerate 
                  until cooled and solid, at least 5 hours or overnight.
                </li>
              </ol>

              <p><a href="https://www.bbc.co.uk/food/recipes/mango_pie_18053" class="readmore">View more</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- back to top button -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Rating js file -->
  <script src="assets/js/rating.js"></script>

  <!-- Add to favourite js file -->
  <script src="assets/js/add_fav.js"></script>

</body>

</html>