<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\File;
class MakeViewCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {name} {--crud}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este comando permite crear nuevas vistas con un formato especifico';


    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $name = strtolower($this->argument('name'));
        $viewPath = resource_path("views/{$name}");


        if (!File::exists($viewPath)) {
            File::makeDirectory($viewPath, 0755, true);
        }


        if ($this->option('crud')) {
            $files = ['index', 'create', 'edit', 'show'];
            foreach ($files as $file) {
                $this->createViewFile($viewPath, $file);
            }
            $this->info("✅ Vistas CRUD creadas en resources/views/{$name}/");
        } else {
            $this->createViewFile($viewPath, 'index');
            $this->info("✅ Vista creada en resources/views/{$name}/index.blade.php");
        }
    }
    protected function createViewFile($path, $name)
    {
        $module = ucfirst(basename($path));
        $title = ucfirst($name) . " - " . $module;


        $content = <<<HTML
                        @extends('pages.inicio')
                            @section('title','$title')


                            @section('header')


                            <h1>Titulo de la pagina</h1>


                            @endsection


                            @section('content')
                            <x-card-user nombre="Hector Javier Paiz" descripcion="Ingeniero de sistemas informaticos">
                                Infor del usuario
                            </x-card-user>


                            <x-alert tipoAlerta="alert-primary">
                                <p>Esta es una informacion</p>
                            </x-alert>
                            <x-alert tipoAlerta="alert-danger">
                                <p>Esto es un error</p>
                            </x-alert>
                        @endsection
                    HTML;


        File::put("{$path}/{$name}.blade.php", $content);
    }

}
