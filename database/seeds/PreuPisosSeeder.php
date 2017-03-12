<?php

use Illuminate\Database\Seeder;
use App\Preu;

class PreuPisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$row = 1;
		if (($handle = fopen("preupisosbcn2.csv", "r")) !== FALSE) {
			$columnes = fgetcsv($handle, 1000, ",");
			/*
			echo $columnes[0]."\t".$columnes[1]."\t";
	        $num = count($columnes);
	        for ($c=2; $c<$num; $c++) {
	            echo $columnes[$c] . "\t";
	        }
	        echo "\n";
			*/
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $num = count($data);
		        echo "[REG:$num] ";
		        $row++;
		        $districte = $data[0];
		        $barri = $data[1];
		        for ($c=2; $c < $num; $c++) {
		            //echo $data[$c] . "\t";
		            $preu = new Preu();
		            $preu->barri = $barri;
		            $preu->districte = $districte;
		            $preu->titol = $columnes[$c];
		            $preu->any = intval(substr($columnes[$c],0,4));
		            $preu->semestre = intval(substr($columnes[$c],4));
		            $preu->preu = $data[$c];
		            $preu->save();
		        }
		        echo "\n";
		    }
		    fclose($handle);
		}
    }
}
