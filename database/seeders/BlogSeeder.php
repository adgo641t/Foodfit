<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            Post::create([
                'title' => 'Sistemas energéticos y cómo funcionan',
                'description' => 'Tipos de Energía
                «La energía se define como la capacidad para producir trabajo»
                
                Nuestro cuerpo es una perfecta máquina, capaz de adaptarse a las más extremas situaciones, y por lo cual, estará capacitada para hacer el uso de la energía en función de las necesidades del momento y así como del tipo de actividad en cuestión.
                
                En este sentido, podemos diferenciar dos tipos de energía:
                
                Energía Potencial
                Se trata de la energía almacenada y que actualmente no se encuentra en uso, pero está disponible y puede ser utilizada en algún momento. Mediante reacciones químicas, como son la ruptura de enlaces moleculares, se obtendrá se liberará gran cantidad de esa energía.
                
                Energía Cinética
                También llamada energía libre. Es el tipo de energía que se encuentra activa o en uso en todo momento realizando algún tipo de trabajo determinado. La síntesis es un tipo de proceso (trabajo) que es realizado a nivel celular, y en tal labor se generan nuevas moléculas.
                
                ¿Qué es el ATP?
                ATP es la abreviatura de Adenosin Trifosfato o Trifosfato de Adenosina, y se trata de una molécula compuesta por un núcleo (adenosín) y un grupo de tres fosfatos
    
                Todos los organismos vivos recurren a este sustrato como fuente energética primaria. Los depósitos energéticos de ATP no son muy elevados, de ahí que sea constantemente renovada y resintetizada.
    
                La descomposición de ATP para producir energía se denomina hidrólisis, ya que requiere agua, dando como resultado una nueva la molécula, denominada ADP (Difosfato de Adenosina).
                El ATP está constantemente siendo reciclado por el cuerpo, de modo que se necesitará el soporte energético para que de lugar a esta reacción continua. Cuando realizamos una actividad física, en función de la intensidad, el cuerpo reclamará un cierto ritmo para evitar la demora en el suministro energético.
    
                En tal caso, a mayor intensidad, dicha necesidad se hará mucho más notable, y si nuestra capacidad física es limitada, el rendimiento será el mayor perjudicado. Si existe la presencia del oxígeno en este proceso, estamos ante el metabolismo aeróbico, y sino hay oxígeno, el metabolismo anaeróbico.
                ',
                'category_id' => 4,
                'category_id_2' => 1,
                'category_id_3' => 1,
                'creator' => 1,
                'image' => 'energia.jpg',
    
            ]);
    
            Post::create([
                'title' => 'La vida de Arnold',
                'description' => 'Arnold Alois Schwarzenegger nació el 30 de Julio de 1947 en Graz. Sus padres Gustav (17 de Agosto de 1907 – 1 de Diciembre de 1972) y Aurelia (nacida Jadrny, 29 de Julio de 1922 – 2 de Agosto de 1998) se casaron y vivieron en Mürzsteg, hasta que Gustav, que era policía, fue transladado a Thal. Allí, Arnold y su hermano Meinhard (17 de Julio de 1946 – 20 de Mayo de 1971) se criaron y crecieron juntos. Algo más tarde, en 1967, su padre fue de nuevo transladado, esta vez a Weiz. Como era típico en el tiempo de post-guerra, ambos hijos fueron criados de una manera estricta y autoritaria. Ya en su niñez, ambos jóvenes eran muy deportistas, tanto, que Arnold empezó a levantar pesas con 14 años.
                
                Poco después Arnold descubrió a los culturistas locales, que entrenaban en el Thalersee, cerca de su casa. A Arnold le fascinaron sus cuerpos y el decidió empezar a trabajar en el suyo. Mediante el entrenamiento consequente y disciplinado, el joven Arnold desarrolló su físico famoso. A los 19 años, el 8 de Agosto de 1966, abandonó Thal para ir a Munich, para dedicarse completamente a su carrera de culturista. Allí Arnold trabajó en un gimnasio, donde no solo se ganaba el sustento, pero entrenaba tambien. Con 21 años, lo que en esa época significaba mayoría de edad, se mudó a California, en los Estados Unidos. Allí formó parte de la edad de oro del culturismo y se convirtió en el mejor culturista de la historia, con 5 título de Mister Universo y 7 de Mister Olympia. Fue la primera persona capaz de entrenar su biceps a un tamaño de 55 cm. 
                
                En América, el joven Arnold empezó a trabajar en su carrera como actor al mismo tiempo que entrenaba. Ya que nadie pudo pronunciar su nombre „Schwarzenegger”, se ganó el apodo de “Arnold Strong” con cual el apareció en sus primeras peliculas, como “Hércules de Nueva York”. Como actor, Schwarznegger participó en más de 40 películas. Su primer gran éxito fue Terminator, la franquicia creada por James Cameron. A ésta siguieron otras películas de acción y ciencia ficción, pero también numerosas comedias como “Poli de Guardería”, “Mellizos” o “Junior”. Como presidente de honor de “Special Olympics Austria” Arnold apoya a la organización desde 1970. También fue Arnold Schwarzenegger quien trajo las “Special Olympics” a Austria y proporcionó un marco internacional para la celebración de los juegos.
                
                El 7 de Agosto de 2003 Arnold se presentó a las elecciones de Gobernador del estado de California y fué elegido con un 48% de los votos. Fue el impulsor de profundas y exitosas reformas. La gente estaba contenta y esto aseguró su reelección en 2007.
                
                Su compromiso social y su especial interés en proteger el medioambiente, le convertieron no sólo en uno de los favoritos de la prensa, sino tambien en uno de los principales protectores de un mundo más sano y mejor para todos. Incluso tras su etapa de gobernador, Arnold siguió involucrado en temas de medioambiente. En la primavera de 2013, tuvo lugar la conferencia R-20 (fundada por el mismo) en Viena. R20 significa “Regions of Climate Action” y es una iniciativa a nivel global que se concentra en promover un desarrollo económico regional con niveles bajos de CO2 y sin efectos climáticos dañinos. Tras una larga pausa en su carrera como actor, rodó junto a Silvester Stallone “Plan de Escape” en 2013, a la que siguieron otras como “El último desafío”, “Mercenarios 2” o “Maggie”. En 2015 volvió a la saga que le catapultó a la fama en “Terminator: Génesis”. La calavera original de la película de Terminator fue regalada por Arnold a Christian Baha, propietario del museo, para tenerla en la exposición.
                ',
                'category_id' => 2,
                'category_id_2' => 1,
                'category_id_3' => 3,
                'creator' => 1,
                'image' => 'Arnolds.jpeg',
    
            ]);
    
            Post::create([
                'title' => '¿Cómo surgió la bicicleta?',
                'description' => 'HISTORIA DEL CICLISMO
                ¿Quién inventó la bicicleta? Seguramente alguna vez se te vino a la mente está pregunta ya que la bicicleta es uno de los medios de transporte de dos ruedas más importantes en el mundo, por lo que en este blog, nos gustaría hablar de dónde surge, su origen y sobre todo de su evolución a lo largo de los años. Cuentan que fue en 1817 cuando el mundo conoció lo que era una bicicleta gracias a alguien llamado Karl Freiherr von Drais a quien  se le atribuye la creación de la bicicleta. Claramente, esa primera bicicleta no se parece en nada a la que conocemos hoy en día como una bicicleta, pues ha pasado por un montón de cambios y evolucionó bastante para llegar a lo que tenemos hoy.
                
                LA PRIMERA BICICLETA POPULAR
                 
                
                Varios años después de su invención, más específicamente en la década de 1860, Pierre Michaux, desarrolló la primera bicicleta de dos ruedas que fue en verdad exitosa, que contaba con pedales y manivelas giratorias en la rueda delantera para que el ciclista pudiese conducir hacia adelante pedaleando. Fue un éxito repentino y, por un instante, la bicicleta se puso muy de moda. Sin embargo, tenía algunas desventajas. El uso de estructuras de metal rígidas y neumáticos de hierro hacían que las bicicletas fueran incómodas, y peso era exagerado, Estas bicicletas, además eran difíciles de manejar, ya que el ciclista tenía que correr junto a ella y saltar sobre el asiento a gran velocidad.
                
                MÁS CAMBIOS
                 
                Fue la época de entre 1869 y 1880 donde aumentó la demanda de bicicletas, por lo que era de vital importancia lograr que se pudieran utilizar en distancias más largas y a velocidades más rápidas, lo que llevó a que los fabricantes hicieran un sin fin de cambios, tal como el aumento del tamaño de la rueda delantera, que sí facilitó la comodidad del ciclista pero no tanto de la velocidad y estética.
                
                En la década de 1960 la necesidad de tener bicicleta era inevitable, ya que las personas comenzaron a preocuparse más por la salud y llevar un estilo de vida más “fitness” las ventas de bicicletas se duplicaron entre 1960 y 1970, y volvieron a duplicarse entre 1971 y 1975, fue aquí donde los diseños y la estética comenzó a importar, comenzaron a implementar diseños inspirados en motocross lo que facilitó su popularidad entre los jóvenes.
                
                 Durante la década de 1980, los fabricantes de bicicletas comenzaron a integrar materiales ligeros de alta tecnología como el aluminio, amortiguadores y horquillas de suspensión en las bicicletas de montaña. Los neumáticos típicos de las bicicletas de montaña son anchos y ranurados para lograr mayor estabilidad y equilibrio y que el ciclista tenga una buena adherencia al suelo.,',
                'category_id' => 4,
                'category_id_2' => 1,
                'category_id_3' => 1,
                'creator' => 2,
                'image' => 'ciclismo.jpg',
    
            ]);
    
            Post::create([
                'title' => '¿Cómo preparar col al horno y judías blancas?',
                'description' => 'A mí también me atraen las maravillas de las recetas de aspecto sabroso en Internet. Diferentes ideas o combinaciones divertidas se me quedan grabadas en el cerebro. Normalmente, en forma de recetas que me dan ganas de probar algo nuevo. ¿Una de las más recientes? Esta col caramelizada. Seguramente porque me gustan las coles asadas y a la parrilla, así que, ¿qué puede no gustarme de la idea de la caramelización?
    
                Y así, lo probé, pero no puedo dejarlo así. Porque actualmente, casi todas las comidas contienen judías. Esta col al horno con judías blancas es mi interpretación de la col caramelizada, hecha para un almuerzo sustancioso (¡gracias judías!) Además, esto es delicioso de sobra, servido sobre sobras de cereales.
                
                COL AL HORNO Y JUDÍAS BLANCAS
                Rinde: 4 porciones sólidas
                Col
                ½ cabeza grande de col rizada
    
                4 cucharadas de aceite de oliva, divididas
    
                ½ cebolla amarilla grande, picada
    
                ½ cucharadita de sal marina, más al gusto
    
                2 dientes de ajo grandes, picados
    
                1 cucharada de vinagre de jerezW
    
                2 cucharadas de pasta de tomate
    
                2 cucharaditas de pimentón ahumado
    
                1 cucharadita de comino molido
    
                1 taza de tomates triturados
    
                ¾ de taza de agua
    
                1 taza de judías blancas cocidas, escurridas
    
                Acabados
                1 taza de perejil suelto
    
                Ralladura de un limón
    
                Feta, para cubrir
    
                Precalienta el horno a 350˚F. Cortar el repollo por la mitad y cortar cada mitad en tercios (ver nota). Calentar una sartén grande apta para horno a fuego medio-alto. Añadir 3 cucharadas de aceite de oliva y colocar la col en la sartén caliente y dorar cada lado de la col. Pasar a un plato.
                Añadir la cucharada restante de aceite de oliva, la cebolla picada y la sal. Cocine hasta que las cebollas estén tiernas, de 8 a 10 minutos más o menos. Si las cebollas empiezan a dorarse, reduzca el fuego. Cuando las cebollas estén tiernas, añada el ajo y cocine durante uno o dos minutos más.
                A continuación, añada el jerez y raspe los restos que se hayan quedado en el fondo de la sartén.  Añada la pasta de tomate, el pimentón ahumado y el comino. Añada los tomates triturados, el agua y las judías. Remueva y caliente durante un minuto.
                Acomode el repollo cocido en la mezcla de tomate y coloque la sartén en el horno precalentado. Cocer la col de 35 a 45 minutos hasta que la mezcla de tomate se haya espesado y la col esté tierna.
                Pique el perejil y la ralladura hasta que estén bien combinados. Espolvorear por encima y espolvorear con queso feta antes de servir.
                NOTAS
                En la receta original sólo se pide cortar la col en cuartos. A mí no me gustaba el grosor de la col, pero depende de ti.
    
                Adaptado de esta receta.
    
                Además, cubrí la imagen con semillas de sésamo negro porque pensé que sería una buena adición. No añadía mucho, así que lo dejé fuera de la receta.',
                'category_id' => 2,
                'category_id_2' => 3,
                'category_id_3' => 1,
                'creator' => 2,
                'image' => 'baked_cabbage_white-beans.jpg',
    
            ]);
    
    
            # code...
        }
       

    }
}
