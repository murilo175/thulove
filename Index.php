<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Playwrite+IN:wght@100..400&family=Playwrite+US+Trad:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Playwrite+US+Trad:wght@100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Tamoaqui.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/themes/odometer-theme-default.css"
      integrity="sha512-kMPqFnKueEwgQFzXLEEl671aHhQqrZLS5IP3HzqdfozaST/EgU+/wkM07JCmXFAt9GO810I//8DBonsJUzGQsQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="stats-container">
      <div class="stat">
        <h1 class="coracao" style="color: #fff;" data-info='<?php echo json_encode($percentage);?>'> </h1><span> %</span>
      </div>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/odometer.min.js"
      integrity="sha512-v3fZyWIk7kh9yGNQZf1SnSjIxjAKsYbg6UQ+B+QxAZqJQLrN3jMjrdNwcxV6tis6S0s1xyVDZrDz9UoRLfRpWw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <script>
      const createOdometer = (el, value) => {
      const odometer = new Odometer({
        el: el,
        value: 0,
      });
    
      let hasRun = false;
    
      const options = {
        threshold: [0, 0.9],
      };
    
      const callback = (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            if (!hasRun) {
              odometer.update(value);
              hasRun = true;
            }
          }
        });
      };
    
      const observer = new IntersectionObserver(callback, options);
      observer.observe(el);
      };
      
      // Exemplo de uso
      var div = document.querySelector(".coracao");
      var randomInt = JSON.parse(div.getAttribute('data-info'));

      const subscribersOdometer = document.querySelector(".coracao");
      createOdometer(subscribersOdometer, randomInt);

    </script>
  </body>
</html>