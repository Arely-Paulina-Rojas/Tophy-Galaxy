 <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/rv1.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">RESEÑA – Yakuza Like a Dragon<br></h3>
                            <span class="badge badge-primary">Reseñas</span>
                            <span class="badge badge-primary">Videojuegos</span><br>
                            <br>
                            <p class="fecha">18 de Noviembre del 2020, 20:57</p>
                            <p>
                            La franquicia de Yakuza tiene una tradición enorme en la industria de los videojuegos. Varios son los títulos numerados y reboots que han formado este mundo abierto donde el crimen organizado en Japón ha servido para dotarnos de historias tan épicas como irreverentes...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/r1V">Ver más</a>

                        </div>

                    </div>

                </div>

            </div>


            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/rv2.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">RESEÑA - Spider Man Miles Morales<br></h3>
                            <span class="badge badge-primary">Reseñas</span>
                            <span class="badge badge-primary">Videojuegos</span><br>
                            <br>
                            <p class="fecha">17 de Noviembre del 2020, 15:00</p>
                            <p>
                            El vecino amistoso regresa y se eleva vertiginosamente a nuevas alturas de la mano de Miles Morales en una entrega partícipe del lanzamiento de PlayStation 5. Estamos ante una nueva encarnación del ágil arácnido que brilla...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/r2V">Ver más</a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="espacio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url(); ?>/assets/images/rv3.jpg" class="rounded img-fluid mx-auto d-block" width="350" height="300">
                        </div>
                        <div class="col-sm-8">
                            <br>
                            <h3 class="htres">RESEÑA - Demon's Souls Remake<br></h3>
                            <span class="badge badge-primary">Noticias</span>
                            <span class="badge badge-primary">Videojuegos</span><br>
                            <br>
                            <p class="fecha">16 de Noviembre del 2020, 16:26</p>
                            <p>
                            Demon's Souls llega a PS5 en forma de remake, desarrollado por Bluepoint Games, para demostrar el potencial de la nueva consola. ¿Está a la altura de su legado y de lo que se espera de un juego next-gen?...
                            </p>
                            <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/r3V">Ver más</a>

                        </div>

                    </div>
                </div>
            </div>

            <?php foreach($osito as $publicacion){

                echo ' <div class="espacio">';
                    echo '<div class="container">';
                        echo '<div class="row">';
                            echo '<div class="col-sm-4">';
                                echo '<img src="'.base_url().'/upload/'.$publicacion['imagen'].'"class="rounded img-fluid mx-auto d-block" width="350" height="300"/>';
                            echo '</div>';
                            echo '<div class="col-sm-8">';
                                echo '<br>';
                                echo '<h3 class="htres">'.$publicacion['titulo'].'<br></h3>';
                                echo '<span class="badge badge-primary">'.$publicacion['tipo'].'</span>';
                                echo '<span class="badge badge-primary">'.$publicacion['categoria'].'</span><br>';
                                echo '<br>';
                                echo '<p class="fecha">'.$publicacion['fecha'].'</p>';
                                echo '<p>'.$publicacion['sinopsis'].'</p>';

                                ?>
                                <a class="botonMorado3" href="<?php echo base_url();?>/index.php/Proyecto/ver?id=<?php echo $publicacion['idPublicacion']; ?>" role="button">Ver más</a>
                                <?php
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';

            }?>

            
                
                
            
                
            </div>
