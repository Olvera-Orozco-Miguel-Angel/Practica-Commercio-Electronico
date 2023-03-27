<?php
include('producto.php');
session_start();
echo "<html>";
echo "<head>";
echo "<title>Cat&#255;logo de libros de Qu&#237;miica</title>";
echo "<meta http-equiv='content-type' content='text/html; charset=utf-8'>";
echo "<link rel = 'stylesheet' type='text/css'
      href='./css/styles.css'/>"; 
echo "</head>";
echo "<body>";
echo "center";
echo "<h1>Cat&#225;logo de libros de Qu&#237;mica</h1>";
echo "</center>";
$arr = array(
    new Producto(
        "Q-001",
        "The Cartoon Guide to Chemistry Larry Gonick",
        "Collins Reference, 2005",
        "125.45"
    ),
    new Producto(
        "Q-002",
        "The Periodic Table: Elements with Style!, Simon Basher",
        "Kingfisher,2007",
        "92.80"),
    New Producto(
        "Q-003",
        "Chemestry: Getting a Big Reaction, Dan Green",
        "Kingfisher, 2010",
        "213.25"
    ),
    New Producto(
        "Q-004",
        "The Molecular Nature of Matter, Martin Silberg",
        "MacGraw-Hill, 2011",
        "267.60"
    ),
    New Producto(
        "Q-005",
        "General Chemistry, Linus Pauling",
        "Dover Publications, 1988",
        "235.40"
    )
);
echo "<center>";
$obj = new Producto;
for ($i=0; $i <count($arr) ; $i++) { 
    echo "<form action = 'carrito.php' method='post'>";
    $obj = $arr[$i];
    echo "<hr>";
    echo "<table border = '0'>";
    echo "<tr>";
    echo "<td>";
    echo $obj->getClave();
    echo ",&#160";
    echo "</td>";
    echo "<td>";
    echo $obj->getMarca();
    echo ",&#160";
    echo "</td>";
    echo "<td>";
    echo "&#160;($&#160;";
    echo $obj->getPrecio();
    echo ")";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td colspan = '4'>";
    echo "<input type='submit' value='Agregar al Carrito'>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    echo "<input type = 'hidden' name='cantidad' value='1'>";
    echo "<input type = 'hidden' name='clave'
            value='".$obj->getClave()."'>";
    echo "<input type = 'hidden' name='nombre'
            value ='".$obj->getNombre()."'>";
    echo "<input type = 'hidden' name='marca'
          value ='".$obj->getMarca()."'>";

    echo "<input type='hidden' name='precio'
            value='",$obj->getPrecio(),"'>";
    echo "</form>";

}
echo "</center>";
echo "</body>";
echo "</html>";


?>