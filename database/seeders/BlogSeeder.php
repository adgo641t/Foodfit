<?php

namespace Database\Seeders;
use App\Models\Blog;
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
        
        Blog::create([
            'title' => 'Que alimentos tienen las proteinas que necessitamos',
            'description' => '
            ¿Dónde encontrar las proteínas? En alimentos de origen animal: carnes, pescados, huevos y productos lácteos. Si preferimos que sean de origen vegetal: frutos secos, legumbres, champiñones y cereales.
            
            nutrición y deporte proteina
            Cuando haces deporte se produce una degradación muscular que hay que compensar tomando proteína (animal y vegetal). Huye de las dietas que restringen el uso de proteína para perder peso, si haces ejercicio físico, es necesario tomarlas, de lo contrario tu masa muscular disminuye.
            
            La tasa metabólica basal (TMB) es la energía necesaria para mantener la vida (respiración, mantener la temperatura corporal, etc.). Esta tasa no es la misma para todas las personas y depende de varios factores: tamaño corporal, edad, sexo, temperatura y nivel de ejercicio físico. La tasa metabólica basal aumenta con el ejercicio y con un incremento de la masa libre de grasa (masa muscular). A mayor TMB, mayor dificultad para ganar peso.
            
            nutrición y deporte fuerza
            ¿CUÁNTAS Y CUÁNDO DEBO CONSUMIR PROTEÍNAS?
            Es la gran pregunta que la mayoría de personas que realizan deporte se hacen. La respuesta es muy sencilla aunque variará un poco en función de la actividad que realices y del volumen e intensidad. A grandes rasgos, el COI y el ACSM, recomiendan entre 1,2 y 1,7 gramos diarios por kg de peso corporal.
            
            ¡No te agobies con los números, es muy fácil! Para mayor claridad, veamos mi ejemplo: Soy una mujer deportista de 54 kg = 64,8 – 91,8 gramos / día (multiplicando 54 x 1,2 y 1,7 nos sale este rango).',
            'Categori_blog' => 'Guay',

        ]);

        Blog::create([
            'title' => 'Ciclismo como Deporte',
            'description' => 'Te hacemos un dto por ser guay',
            'Categori_blog' => 'Deporte',
        ]);

        Blog::create([
            'title' => 'Una manuela al dia alegra el dia',
            'description' => 'Te hacemos un dto por ser guay',
            'Categori_blog' => 'Salud',
        ]);

        Blog::create([
            'title' => 'Como la comida engorda',
            'description' => 'Te hacemos un dto por ser guay',
            'Categori_blog' => 'Comida',
        ]);
    }
}
