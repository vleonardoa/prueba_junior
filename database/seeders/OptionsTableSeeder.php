<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');

        \DB::table('options')->delete();

        \DB::table('options')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'option_id' => NULL,
                    'nombre' => 'FASE 1',
                    'ruta' => NULL,
                    'descripcion' => NULL,
                    'icono_l' => 'fa-tasks',
                    'icono_r' => NULL,
                    'orden' => 0,
                    'color' => '',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2020-08-26 11:51:32',
                    'deleted_at' => NULL,
                ),
            1 =>
                array (
                    'id' => 2,
                    'option_id' => NULL,
                    'nombre' => 'FASE 2',
                    'ruta' => NULL,
                    'descripcion' => NULL,
                    'icono_l' => 'fa-tasks',
                    'icono_r' => NULL,
                    'orden' => 0,
                    'color' => '',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2020-08-26 11:51:32',
                    'deleted_at' => NULL,
                ),
            2 =>
                array (
                    'id' => 3,
                    'option_id' => NULL,
                    'nombre' => 'FASE 3',
                    'ruta' => NULL,
                    'descripcion' => NULL,
                    'icono_l' => 'fa-tasks',
                    'icono_r' => NULL,
                    'orden' => 0,
                    'color' => '',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2020-08-26 11:51:32',
                    'deleted_at' => NULL,
                ),
            3 =>
                array (
                    'id' => 4,
                    'option_id' => 1,
                    'nombre' => 'UML',
                    'ruta' => 'uml.index',
                    'descripcion' => NULL,
                    'icono_l' => 'fa-project-diagram',
                    'icono_r' => NULL,
                    'orden' => 0,
                    'color' => '',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2020-08-26 11:51:32',
                    'deleted_at' => NULL,
                ),
            4 =>
                array (
                    'id' => 5,
                    'option_id' => 2,
                    'nombre' => 'Servicios',
                    'ruta' => 'servicios.index',
                    'descripcion' => NULL,
                    'icono_l' => 'fa-cogs',
                    'icono_r' => NULL,
                    'orden' => 0,
                    'color' => '',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2020-08-26 11:51:32',
                    'deleted_at' => NULL,
                ),
            5 =>
                array (
                    'id' => 6,
                    'option_id' => 2,
                    'nombre' => 'Equipos',
                    'ruta' => 'equipos.index',
                    'descripcion' => NULL,
                    'icono_l' => 'fa-mobile-alt',
                    'icono_r' => NULL,
                    'orden' => 0,
                    'color' => '',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2020-08-26 11:51:32',
                    'deleted_at' => NULL,
                ),
            6 =>
                array (
                    'id' => 7,
                    'option_id' => 2,
                    'nombre' => 'Clientes',
                    'ruta' => 'clientes.index',
                    'descripcion' => NULL,
                    'icono_l' => 'fa-users',
                    'icono_r' => NULL,
                    'orden' => 0,
                    'color' => '',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2020-08-26 11:51:32',
                    'deleted_at' => NULL,
                ),
            7 =>
                array (
                    'id' => 8,
                    'option_id' => 13,
                    'nombre' => 'Catalogos',
                    'ruta' => '',
                    'descripcion' => NULL,
                    'icono_l' => 'fa-book-open',
                    'icono_r' => NULL,
                    'orden' => 0,
                    'color' => '',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2020-08-26 11:51:32',
                    'deleted_at' => NULL,
                ),
            8 =>
                array (
                    'id' => 9,
                    'option_id' => 8,
                    'nombre' => 'Tipos',
                    'ruta' => 'tipos.index',
                    'descripcion' => NULL,
                    'icono_l' => 'fa-tags',
                    'icono_r' => NULL,
                    'orden' => 15,
                    'color' => '',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2021-03-14 21:01:22',
                    'deleted_at' => NULL,
                ),
            9 =>
                array (
                    'id' => 10,
                    'option_id' => 8,
                    'nombre' => 'marcas',
                    'ruta' => 'marcas.index',
                    'descripcion' => NULL,
                    'icono_l' => 'fa-trademark',
                    'icono_r' => NULL,
                    'orden' => 15,
                    'color' => '',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2021-03-14 21:01:22',
                    'deleted_at' => NULL,
                ),
            10 =>
                array (
                    'id' => 11,
                    'option_id' => 8,
                    'nombre' => 'modelos',
                    'ruta' => 'modelos.index',
                    'descripcion' => NULL,
                    'icono_l' => 'fa-cogs',
                    'icono_r' => NULL,
                    'orden' => 15,
                    'color' => '',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2021-03-14 21:01:22',
                    'deleted_at' => NULL,
                ),
            11 =>
                array (
                    'id' => 12,
                    'option_id' => 8,
                    'nombre' => 'estados',
                    'ruta' => 'estados.index',
                    'descripcion' => NULL,
                    'icono_l' => 'fa-chart-bar',
                    'icono_r' => NULL,
                    'orden' => 15,
                    'color' => '',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2021-03-14 21:01:22',
                    'deleted_at' => NULL,
                ),
            12 =>
                array (
                    'id' => 13,
                    'option_id' => 2,
                    'nombre' => 'Configuraciones',
                    'ruta' => '',
                    'descripcion' => NULL,
                    'icono_l' => 'fa-cogs',
                    'icono_r' => NULL,
                    'orden' => 0,
                    'color' => '',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2021-03-14 21:19:48',
                    'deleted_at' => NULL,
                ),
            13 =>
                array (
                    'id' => 14,
                    'option_id' => 13,
                    'nombre' => 'Usuarios',
                    'ruta' => 'admin.users.index',
                    'descripcion' => NULL,
                    'icono_l' => 'fa-user',
                    'icono_r' => NULL,
                    'orden' => 2,
                    'color' => 'bg-info',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2021-03-14 21:19:48',
                    'deleted_at' => NULL,
                ),14 =>
                array (
                    'id' => 15,
                    'option_id' => 3,
                    'nombre' => '1',
                    'ruta' => 'fase3.nivel1',
                    'descripcion' => NULL,
                    'icono_l' => '',
                    'icono_r' => NULL,
                    'orden' => 2,
                    'color' => 'bg-info',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2021-03-14 21:19:48',
                    'deleted_at' => NULL,
                ),15 =>
                array (
                    'id' => 16,
                    'option_id' => 3,
                    'nombre' => '2',
                    'ruta' => 'fase3.nivel2',
                    'descripcion' => NULL,
                    'icono_l' => '',
                    'icono_r' => NULL,
                    'orden' => 2,
                    'color' => 'bg-info',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2021-03-14 21:19:48',
                    'deleted_at' => NULL,
                ),
            16 =>
                array (
                    'id' => 17,
                    'option_id' => 3,
                    'nombre' => '3',
                    'ruta' => 'fase3.nivel3',
                    'descripcion' => NULL,
                    'icono_l' => '',
                    'icono_r' => NULL,
                    'orden' => 2,
                    'color' => 'bg-info',
                    'dev' => 0,
                    'created_at' => '2020-08-26 11:46:42',
                    'updated_at' => '2021-03-14 21:19:48',
                    'deleted_at' => NULL,
                ),
        ));

        $this->genraColoresIcons();

        \DB::statement('SET FOREIGN_KEY_CHECKS=1');

    }

    public function genraColoresIcons()
    {

        foreach (Option::all() as $index => $item) {

            $colores = [
                'text-indigo',
                'text-lightblue',
                'text-navy',
                'text-purple',
                'text-fuchsia',
                'text-pink',
                'text-maroon',
                'text-orange',
                'text-lime',
                'text-teal',
                'text-olive',
            ];

            $item->color = array_random($colores);
            $item->save();
        }

    }
}
