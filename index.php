
<?php
    $servername = "localhost";
    $username = "id19111251_andresfperalta";
    $password = "@<A^eyiJy8l3PMPw";
    $dbname = "id19111251_biofabricaperalta";

    // Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM producto ";
                $result = $conn->query($sql);   
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/ecommerce.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
</head>
<body>
      <div class="row cabecera">
              
           <div class="col-md-8  menu">
	        <div class="row">
		     <div class="col-md-3"></div>
		     <div class="col-md-2 efecto">About company</div>
		     <div class="col-md-1 efecto">News</div>
		     <div class="col-md-1 efecto">Shops</div>
		     <div class="col-md-1 efecto">Stocks</div>
         	     <div class="col-md-1 efecto">Service</div>
		     <div class="col-md-2 efecto">Delivery and payment</div>
		     <div class="col-md-1 efecto dos">
                         <select name="eleccion" class="eleccion">
                                        <option value="choose eleccion">
                                                 Series
                                        </option>       
                                        <option value="almojabanas">
                                                El mentalista
                                        </option>       
                                        <option value="pan de yuca">
                                                la ley de los audaces
                                        </option>       
                                        <option value="roscones de yuca">
                                                Roscones de yuca
                                        </option>       
                                </select>              
                     </div>
	       </div>
            </div>
	<div class="col-md-4 redes"><img src="img/redes.png"></div>
      </div>
      <div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8 contacto">
	        <div class="row">
                   <div class="col-md-3">
                           <div class="row">
                              <div class="col-md-3 edificio">
                                      <img src="img/edificio.png">
                              </div>
                              <div class="col-md-9 edificio">
                                      <p class="electronic"><b>Electronic City</b></p>
                                      <p class="electrical">Electrical equipment Store</p>
                              </div>
                           </div>
                   </div>
                   <div class="col-md-3">
                            <div class="row">
                              <div class="col-md-3 edificio">
                                      <img src="img/ubicacion.png">
                              </div>
                              <div class="col-md-9 edificio">
                                      <p class="yourcity"><b>Electronic City</b></p>
                                      <p class="saint">Saint-Petesburg</p>
                                      <img src="img/linea.png" class="linea">
                              </div>
                           </div>
                   </div>
                   <div class="col-md-3">
                           <div class="row">
                              <div class="col-md-3 edificio">
                                      <img src="img/telefono.png">
                              </div>
                              <div class="col-md-9 edificio">
                                      <p class="yourcity"><b>Mon-Sat from 8:00 to 20:00 </b></p>
                                      <p class="saint"><b>(480) 555-0103</b></p>
                              </div>
                           </div>
                   </div>
                   <div class="col-md-3">
                            <div class="row">
                              <div class="col-md-3 edificio">
                                      <img src="img/carrito.png">
                              </div>
                              <div class="col-md-9 edificio">
                                      <p class="basket"><b>In basket</b></p>
                                      <p class="electrical"> <span class= "valor">2</span> productos, $4,585</p>
                                      <img src="img/linea.png" class="linea2">
                              </div>
                           </div>
                   </div>     
                </div>
	   </div>
	  <div class="col-md-2"></div>
      </div>

      <div class="row buscar">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row">
			<div class="col-md-3 producton">
        		   <div class="row">
        	               <div class="col-md-3">
        	                    <img src="img/iconocuadro.png"> 
                               </div>
        		       <div class="col-md-9 product">
        			<p>Product catalog</p>
        			</div>
        		    </div>
        		</div>
        		<div class="col-md-5 site">
        		<input type="text" name="site search" placeholder="site search">
        		</div>
        		<div class="col-md-2 site">
        		        <select name="choose">
                                        <option value="choose brand">
                                                Choose brand
                                        </option>       
                                        <option value="almojabanas">
                                                Almojabanas
                                        </option>       
                                        <option value="pan de yuca">
                                                Pan de yuca
                                        </option>       
                                        <option value="roscones de yuca">
                                                Roscones de yuca
                                        </option>       
                                </select>
        		</div>
        	        <div class="col-md-2 producton">
        		     <div class="row">
        			<div class="col-md-3">
        			<img src="img/buscar.png">
        			</div>
        			<div class="col-md-9">
        			<input type="text" name="search" placeholder="search" class="search"> 
        		        </div>
        		     </div>
        		</div>
        	    </div>
        	</div>
        	<div class="col-md-2"></div>
        </div>
        <div class="row seccion2">
            <div class="col-md-12 fondoazul">
                <div  class=" owl-carousel1 owl-carousel owl-theme azul">
                    <div class="item1"><img src="img/fondoazul.png"></div>
                </div>
                <div class="popup">
                   <p class="saludo"></p>
                 </div>
            </div>
        </div>
        
       
        <div class="row">
             <div class="col-md-12 blanco">
        	
             </div>
        </div>
        <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                      <div class="row">
                          <div class="col-md-3 sale"><p><b>Sale of goods</b></p></div>
                          <div class="col-md-8 view"> <p>view all</p></div>
                          <div class="col-md-1 direcciones">
                                  <img src="img/direcciones.png">
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 carrusel">
                              <div class="owl-carousel owl-carousel2 owl-theme carrusel1">
                                      <?php
				         if ($result->num_rows > 0) {
						  //echo "New record created successfully";
							while($row = $result->fetch_assoc()) {  
				           echo ' <div class="item">
                                           <img src="img/balance.png">
                                           <img src="'.$row["imagen"].'" class="articulo">
                                           <img src="img/promo20.png" class="promo20">
                                     <p class="numeros"><b>PC34621</b></p>
                                     <P><b>'.$row["nombre"].'</b></P>
                                           <p><b>Holer</b></p>
                                           <div class="calificar">
                                             <div class="estrellas">
                                                     <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                     <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                     <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                     <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                     <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                     <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                             </div>
                                             <div class="padre">
                                                     <div class="hijo1"><img src="img/mensaje.png"></div>
                                                     <div class="hijo2"><p>2 reviews</p></div>
                                             </div>
                                           </div>
                                           <p class="precio">'.$row["precio"].'</p>
                                           <div class="pie">
                                                   <div class="descuento">
                                                    <p><b>$34 200</b></p>
                                                   </div>
                                                   <div class="agregar" onclick="myfuction()">
                                                     <p>Add to cart</p>
                                                   </div>
                                           </div>
                                         </div>';
							}
						} else {
						  echo "0 results";
						}					    

                                        ?>
                                   
                               </div>
                          </div>
                      </div>
                </div>
                <div class="col-md-2 iconos">
                        <img src="img/iconos.png">
                </div>
        </div>
         <div class="row">
             <div class="col-md-12 blanco2">   
             </div>
        </div>
        <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                      <div class="row">
                          <div class="col-md-3 sale"><p><b>Popular products</b></p></div>
                          <div class="col-md-8 view"> <p>view all</p></div>
                          <div class="col-md-1 direcciones">
                                  <img src="img/direcciones.png">
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 carrusel">
                              <div class="owl-carousel owl-carousel2 owl-theme carrusel1">
                                    <div class="item">
                                      <img src="img/balance.png">
                                      <img src="img/nevera.png" class="articulo">
                                      <img src="img/promo10.png" class="promo20">
                                      <img src="img/productonuevo.png" class="productonuevo">
                                <p class="numeros"><b>PC34621</b></p>
                                <P><b>Two-chamber refrigerator</b></P>
                                      <p><b>Holer</b></p>
                                      <div class="calificar">
                                        <div class="estrellas">
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                        </div>
                                        <div class="padre">
                                                <div class="hijo1"><img src="img/mensaje.png"></div>
                                                <div class="hijo2"><p>2 reviews</p></div>
                                        </div>
                                      </div>
                                      <p class="precio">$36 450</p>
                                      <div class="pie">
                                              <div class="descuento">
                                               <p><b>$34 200</b></p>
                                              </div>
                                              <div class="agregar" onclick="myfuction()">
                                                <p>Add to cart</p>
                                              </div>
                                      </div>
                                    </div>
                                    <div class="item">
                                            <img src="img/balancenegro.png">
                                <img src="img/reloj.png"class="articulo">
                                <img src="img/promo20.png" class="promo20">
                                <p class="numeros"><b>PC20994</b></p>
                                      <P><b>Apple lwatch Series 3</b></P>
                                      <p><b>Smart Watch</b></p>
                                      <div class="calificar">
                                        <div class="estrellas">
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                        </div>
                                        <div class="padre">
                                                <div class="hijo1"><img src="img/mensaje.png"></div>
                                                <div class="hijo2"><p>2 reviews</p></div>
                                        </div>
                                      </div>
                                      <p class="precio">$30 950</p>

                                      <div class="pie">
                                              <div class="descuento">
                                               <p><b>$28 500</b></p>
                                              </div>
                                              <div class="agregar">
                                                <p>Add to cart</p>
                                              </div>
                                      </div>
                                    </div>
                                    <div class="item">
                                            
                                      <img src="img/balancenegro.png">
                                      <img src="img/play.png"class="articulo">
                                       <p class="numeros"><b>PC14051</b></p>
                                      <P><b>Game console</b></P>
                                      <p><b>XBOX 360</b></p>
                                      <div class="calificar">
                                        <div class="estrellas">
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                        </div>
                                        <div class="padre">
                                                <div class="hijo1"><img src="img/mensaje.png"></div>
                                                <div class="hijo2"><p>2 reviews</p></div>
                                        </div>
                                      </div>
                                      <p class="precio">$9 500</p>
                                      
                                       <div class="pie">
                                              <div class="descuento">
                                               <p><b>$8 700</b></p>
                                              </div>
                                              <div class="agregar">
                                                <p>Add to cart</p>
                                              </div>
                                      </div>
                                    </div>
                                    <div class="item">
                                             <img src="img/colores.png" class="colores">
                                    </div>
                               </div>
                          </div>
                      </div>
                </div>
                <div class="col-md-2"></div>
        </div>
                <div class="row">
                   <div class="col-md-12 blanco"></div>
                </div>
                <div class="row">
                     <div class="col-md-2"></div>
                     <div class="col-md-8">
                        <div class="row">
                           <div class="col-md-3">
                                   <img src="img/cerdo.png">
                                   <p><b>Flexible pricing policy</b></p>
                                   <p>Always competitive prices and an extensive loyalty program for our customers</p>
                                   <p></p>
                           </div>
                           <div class="col-md-3">
                                <img src="img/personas.png">
                                <p><b>A team of professionals</b></p>
                                   <p>Experienced specialist who have been certified by world vendors</p>
                           </div>
                           <div class="col-md-3">
                                <img src="img/pulgar.png">
                                <p><b>Extensive work experience</b></p>
                                   <p>And we continue to develop successfully, as well as our customers</p>
                           </div>
                           <div class="col-md-3">
                           <img src="img/carro.png">
                           <p><b>Free shipping</b></p>
                                   <p>Operational logistics at the expense of the supplier</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2"></div>   
                </div>
                <div class="row">
                   <div class="col-md-12 blanco"></div>
                </div>
                <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                      <div class="row">
                          <div class="col-md-3 sale"><p><b>Hits</b></p></div>
                          <div class="col-md-8 view"> <p>view all</p></div>
                          <div class="col-md-1 direcciones">
                                  <img src="img/direcciones.png">
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 carrusel">
                              <div class="owl-carousel2 owl-carousel owl-theme carrusel1">
                                    <div class="item">
                                      <img src="img/balancenegro.png">
                                      <img src="img/audifonos.png" class="articulo">
                                      <img src="img/productonuevo.png" class="promo20">
                                <p class="numeros"><b>PC16133</b></p>
                                <P><b>Pioneer HDJ-1000</b></P>
                                      <p><b>Headphones</b></p>
                                      <div class="calificar">
                                        <div class="estrellas">
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                        </div>
                                        <div class="padre">
                                                <div class="hijo1"><img src="img/mensaje.png"></div>
                                                <div class="hijo2"><p>2 reviews</p></div>
                                        </div>
                                      </div>
                                      <div class="espacio"></div>
                                      <div class="pie">
                                              <div class="descuento">
                                               <p><b>$7 440</b></p>

                                              </div>
                                              <div class="agregar">
                                                <p>Add to cart</p>
                                              </div>
                                      </div>
                                    </div>
                                    <div class="item">
                                <img src="img/balancenegro.png">
                                <img src="img/lampara.png"class="articulo">
                                <img src="img/productonuevo.png" class="promo20">
                                <p class="numeros"><b>PC14051</b></p>
                                      <P><b>Audio-Technica AUGM1</b></P>
                                      <p><b>Microphone</b></p>
                                      <div class="calificar">
                                        <div class="estrellas">
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                        </div>
                                        <div class="padre">
                                                <div class="hijo1"><img src="img/mensaje.png"></div>
                                                <div class="hijo2"><p>2 reviews</p></div>
                                        </div>
                                      </div>
                                      <div class="espacio"></div>

                                      <div class="pie">
                                              <div class="descuento">
                                               <p><b>$4 280</b></p>
                                              </div>
                                              <div class="agregar">
                                                <p>Add to cart</p>
                                              </div>
                                      </div>
                                    </div>
                                    <div class="item">
                                            
                                      <img src="img/balancenegro.png">
                                      <img src="img/parlante.png"class="articulo">
                                       <p class="numeros"><b>PC00267</b></p>
                                      <P><b>Portable Bluetooth Speaker</b></P>
                                      <p><b>JBL Clips</b></p>
                                      <div class="calificar">
                                        <div class="estrellas">
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                                <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
                                        </div>
                                        <div class="padre">
                                                <div class="hijo1"><img src="img/mensaje.png"></div>
                                                <div class="hijo2"><p>2 reviews</p></div>
                                        </div>
                                      </div>
                                      <div class="espacio"></div>
                                      
                                       <div class="pie">
                                              <div class="descuento">
                                               <p><b>9 890</b></p>
                                              </div>
                                              <div class="agregar" onclick="myfuction()">
                                                <p>Add to cart</p>
                                              </div>
                                      </div>
                                    </div>
                                    <div class="item">
                                             <img src="img/grises.png" class="colores">
                                    </div>
                               </div>
                          </div>
                      </div>
                </div>
                <div class="col-md-2"></div>
        </div>
        <div class="row">
             <div class="col-md-12 blanco2"></div>
        </div>
        <div class="col-md-2"></div>
                <div class="col-md-8">
                      <div class="row">
                          <div class="col-md-3 sale"><p><b>Our news</b></p></div>
                          <div class="col-md-8 view"> <p>view all</p></div>
                          <div class="col-md-1 direcciones">
                                  <img src="img/direcciones.png">
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 carrusel">
                              <div class="owl-carousel3 owl-carousel owl-theme carruseldos">
                                    <div class="item1">
                                        <img src="img/celular.png">
                                <p class="fecha margen"><b>28.12.2020</b></p>
                                <P class="margen"><b>Huawei Sound X speaker received a powerful speaker system</b></P>
                                      <p class="margen">Huawei today introduced not only laptos and a TV, but also a "smart" speaker</p>
                                      
                                      <div class="espacio margen"></div>
                                      <p class="mas margen">Read more ></p>
                                    </div>
                                    <div class="item1">
                                        <img src="img/etiqueta.png">
                                      
                                      
                                        <p class="fecha margen"><b>28.12.2020</b></p>
                                        <P class ="margen"><b>Huawei Sound X speaker received a powerful speaker system</b></P>
                                      <p class ="margen">Huawei today introduced not only laptos and a TV, but also a "smart" speaker</p>
                                      
                                      <div class="espacio"></div>
                                      <p class="mas margen">Read more ></p>
                                    </div>
                                    <div class="item1">
                                            
                                      <img src="img/planta.png">
                                      
                                      
                                        <p class="fecha margen"><b>28.12.2020</b></p>
                                        <P class ="margen"><b>Huawei Sound X speaker received a powerful speaker system</b></P>
                                      <p class ="margen">Huawei today introduced not only laptos and a TV, but also a "smart" speaker</p>
                                      
                                      <div class="espacio"></div>
                                      <p class="mas margen">Read more ></p>
                                    </div>
                               </div>
                          </div>
                      </div>
                </div>
                <div class="col-md-2"></div>
        </div>
         <div class="row">
             <div class="col-md-12 blanco2"></div>
        </div>

        <div class="row cabecera">
                <div class="col-md-2"></div>
                 <div class="col-md-8">
                        <div class="row fin">
                              <div class="col-md-2">
                                      <img src="img/electronico.png">
                              </div>
                              <div class="col-md-1">
                                     
                              </div>  
                              <div class="col-md-2">
                                       <p><b>Information</b></p>
                                      <p>Stocks</p>
                                      <p>Shops</p>
                                      <p>News</p>
                              </div>
                              <div class="col-md-1"></div>
                              <div class="col-md-2">
                                      <p><b>Clients</b></p>
                                      <p>Corporate sales</p>
                                      <p>Wholesales sales</p>
                                      <p>Delivery and payment</p>
                                      <p>About Company</p>
                              </div>
                              <div class="col-md-1"></div>
                              <div class="col-md-1 redes2">
                                      <p><b>Additionaly</b></p>
                                      <p>Service center</p>
                                      <p>Terms of use of the site</p>
                              </div>
                              <div class="col-md-1"></div>
                              <div class="col-md-1 redes2">
                                      <p><b>Follow us</b></p>
                                      <img src="img/redes.png">
                              </div>
                        </div>
                </div>
                <div class="col-md-2"></div>
        </div>
        <div class="row footer">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                        <div class="row ultimo">
                                <div class="col-md-4"><p>© 2001-2022. site is developed: WebDeps-PRO</p></div>
                                <div class="col-md-6"></div>
                                <div class="col-md-2"><P>All rigths reserved</P></div>
                        </div>
                </div>
                <div class="col-md-2"></div>
        </div>
</body>
<script>
    function myfuction(){
        var valor = $('.valor').html(); 
        var result = parseInt(valor)+1;
        $('.valor').html(result);
    }
</script>
<script>

        $('.owl-carousel1').owlCarousel({
            loop:true,
            margin: 0,
            nav:true,
            items:1
            /*responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }*/
        });
        $('.owl-carousel2').owlCarousel({
            loop:true,
            
            nav:true,
            items:4,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        });
        $('.owl-carousel3').owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:3
                }
            }
        })
</script>
</html>