<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use OpenAI\Client;

class GenerateTranslationsFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:file-translations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crea un fichero en cada directorio dentro de lang para cada recurso';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //Obtengo los recursos de mi fichero
        $resources = config("resources");
        $langs = config("langs");

        foreach ($langs as $lang=>$data){
            foreach ($resources as $resource=>$data){
                $content =$this->getContentFileTranslations($resource, $data, $lang);
                $field_path = lang_path("$lang/$resource.php");
                file_put_contents($field_path, $content);

            }
        }
    }
    private function getContentFileTranslations($resource, $data, $lang){
        //No es lo mismo si es rol o no
        if (isset($data['role'])) {
            //Obtengo los atributos del modelo de este rol
            $resource_model = config("resources.$resource.resource");
            $fields  = config("resources.$resource_model.fields");

            //Obtengo, si hay, los campos extras de este rol y los añado al array de fields
            $fieldsExtra =config("resources.$resource.fieldsExtra");
            if (is_array($fieldsExtra))
                $fields = array_merge($fields, $fieldsExtra);

            }

        else //Si no es un rol, directamente leo los campos
            $fields = config("resources.$resource.fields");

        //Preparo el texto para el fichero
        $fieldArray="";
        foreach ($fields as $field) {
//            $field_translate = $this->translateWithAI($field, $lang);
            $fieldArray .= "\t\t\t'$field'=>'".Str::headline($field)."',\n";
        }

        //Genero el texto que tengo que incluir en el fichero
        $table = Str::headline($resource);
        $content=<<<FIN
<?php
    return [
        'fields'=>[\n$fieldArray],\n
        'table'=>'$table',\n
    ];
FIN;
return $content;
    }
    private function translateWithAI($tocken, $lang){
        $client = \OpenAI::client(env('OPENAI_API_KEY'));
        $prompt = "Traduce $tocken  a $lang para una interfaz de usuario. Retorna solo la palabra";
        $response = $client->chat()->create([
            'model' => 'gpt-4.1-mini',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
        ]);
        return json_decode($response->choices[0]->message->content, true);




    }
}
