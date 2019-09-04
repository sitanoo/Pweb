<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App;

class PopularTabela extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:popular';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Preenche as tabelas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $arrayCategorias [] = "Eletrônicos";
        $arrayCategorias [] = "Ferramentas";
        $arrayCategorias [] = "Automobilístico";
        $arrayCategorias [] = "Móveis";
        $arrayCategorias [] = "Alimentação";
        
        foreach ($arrayCategorias as $c) {
            $categoria = new App\Categoria();
            $categoria->nomcat = $c;
            $categoria->save();
        }
        
        $arrayProduto[] = array('Celular','Processador fast',799.00,1);
        $arrayProduto[] = array('Martelo','Pesado',40.00,2);
        $arrayProduto[] = array('Porsche Panamera','Fast',199.00,3);
        $arrayProduto[] = array('Cadeira','Clean',50.00,4);
        $arrayProduto[] = array('Banana','xd',2.00,5);
        
        foreach ($arrayProduto as $p) {
            $produto = new App\Produto();
            $produto->nompro = "$p[0]";
            $produto->despro = "$p[1]";
            $produto->vlrpro = "$p[2]";
            $produto->codcat = "$p[3]";
            
            $produto->save();
        }
        
        $arrayClientes [] = array("Bruno", "99898787656", "Na puta que pariu",
            34567, "Ceroulas", "Canelas", "SC", "479989098");
        $arrayClientes [] = array("Bruno", "99898787656", "Na puta que pariu",
            34567, "Ceroulas", "Canelas", "SC", "479989098");
        $arrayClientes [] = array("Bruno", "99898787656", "Na puta que pariu",
            34567, "Ceroulas", "Canelas", "SC", "479989098");
        $arrayClientes [] = array("Bruno", "99898787656", "Na puta que pariu",
            34567, "Ceroulas", "Canelas", "SC", "479989098");
        
        foreach ($arrayClientes as $cli)
        {
            $cliente = new App\Cliente();
            $cliente->nomcli = $cli[0];
            $cliente->cpfcli = $cli[1];
            $cliente->endcli = $cli[2];
            $cliente->numcli = $cli[3];
            $cliente->baicli = $cli[4];
            $cliente->cidcli = $cli[5];
            $cliente->ufcli = $cli[6];
            $cliente->telcli = $cli[7];
            $cliente->save();
        }
        
        
        
        
        
        
        
        
        
        
    }
}
