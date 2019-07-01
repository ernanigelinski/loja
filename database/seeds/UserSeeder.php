<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name' => "Administrador",
            'email' => "admin@email.com",
            'password' => bcrypt("123456"),
        ];
        if (User::where('email', '=', $dados['email'])->count()) {
            $user = User::where('email', '=', $dados['email'])->first();
            $user->update($dados);
            echo "Usuario alterado!";
        }else{
            User::create($dados);
            echo "Usuario criado!";
        }
    }
}
