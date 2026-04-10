<?php
 
namespace Database\Seeders;
 
use App\Models\Client;
use Illuminate\Database\Seeder;
 
class ClientSeeder extends Seeder
{
    public function run(): void
    {
        

        Client::create(['name'=>'Alpha Corp',      'email'=>'contact@alpha.com',     'phone'=>'+33 1 23 45 67 89']);
        
        Client::create(['name'=>'Beta Solutions', 'email'=>'info@betasolutions.fr', 'phone'=>'+33 9 87 65 43 21']);

    }
}
