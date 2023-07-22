<!DOCTYPE html>
<html>
<head>
  <title>Menu Lateral Oculto</title>
  <style>
    /* Estilos básicos */
    body {
      margin: 0;
      padding: 0;
    }
    
    .menu {
      position: fixed;
      left: -200px; /* Oculta o menu */
      top: 0;
      width: 200px;
      height: 100%;
      background-color: #333;
      color: #fff;
      transition: left 0.3s ease;
    }
    
    .menu.open {
      left: 0; /* Mostra o menu */
    }
    
    .menu ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    
    .menu ul li {
      padding: 10px;
      border-bottom: 1px solid #555;
    }
    
    .menu ul li:hover {
      background-color: #555;
    }
    
    .submenu {
      display: none;
      background-color: #555;
    }
    
    .menu ul li:hover .submenu {
      display: block;
    }
    
    .submenu ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    
    .submenu ul li {
      padding: 10px;
    }
    
    .submenu ul li:hover {
      background-color: #777;
    }
  </style>
  <script>
    function toggleMenu() {
      var menu = document.getElementById("menu");
      menu.classList.toggle("open");
    }
  </script>
</head>
<body>
  <div class="menu" id="menu">
    <ul>
      <li>Item 1</li>
      <li>Item 2</li>
      <li>Item 3
        <ul class="submenu">
          <li>Subitem 1</li>
          <li>Subitem 2</li>
          <li>Subitem 3</li>
        </ul>
      </li>
      <li>Item 4</li>
    </ul>
  </div>
  
  <button onclick="toggleMenu()">Toggle Menu</button>
</body>
</html>
