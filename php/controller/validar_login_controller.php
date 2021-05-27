<?php

require_once("/xampp/htdocs/php/controller/usuario_controller.php");
//require_once("/xampp/htdocs/index.php");
require_once("/xampp/htdocs/php/controller/aluno_controller.php");
require_once("/xampp/htdocs/php/controller/empresa_controller.php");
require_once("/xampp/htdocs/php/controller/professor_controller.php");
require_once("/xampp/htdocs/php/controller/conexao.php");

session_unset();
session_start();
validar_login();


function validar_login()
{
    if (isset($_POST['validar'])) {
        $valida_usuario = E_usuario();
        if ($valida_usuario == true) {
            $valida_aluno = E_aluno();
            if ($valida_aluno == true) {
                $_SESSION['logado'] = true;
                $_SESSION['login'] = $_POST['login'];

                header("Refresh:0; url=../view/menu_aluno_view.php");
            } else {
                $valida_professor = E_professor();
                if ($valida_professor == true) {
                    $_SESSION['logado'] = true;
                    $_SESSION['login'] = $_POST['login'];

                    header("Refresh:0; url=../view/perfil_professor_view.php");
                } else {

                    $valida_empresa = E_empresa();
                    $_SESSION['logado'] = true;
                    $_SESSION['login'] = $_POST['login'];

                    header("Refresh:0; url=../view/perfil_empresa_view.php");
                }
            }
        }
    }
}

function E_usuario()
{

    $lista_Usuarios = consultaUsuario();
    $tamanho = count($lista_Usuarios);

    for ($i = 0; $i < $tamanho; $i++) {

        if (($lista_Usuarios[$i]["LOGIN"] == $_POST["login"]) && ($lista_Usuarios[$i]["SENHA"] == $_POST["senha"])) {

            return true;
        }
    }
    return false;
}

function E_aluno()
{
    $lista_Alunos = consultaAluno();
    $tamanho = count($lista_Alunos);

    for ($i = 0; $i < $tamanho; $i++) {
        if (($lista_Alunos[$i]["LOGIN_USUARIO"] == $_POST["login"])) {
            return true;
        }
    }
    return false;
}
function E_professor()
{
    $lista_Professores = consultaProfessor();
    $tamanho = count($lista_Professores);

    for ($i = 0; $i < $tamanho; $i++) {
        if (($lista_Professores[$i]["LOGIN_USUARIO"] == $_POST["login"])) {
            return true;
        }
    }
    return false;
}
function E_empresa()
{
    $lista_Empresas = consultaEmpresa();
    $tamanho = count($lista_Empresas);

    for ($i = 0; $i < $tamanho; $i++) {
        if (($lista_Empresas[$i]["LOGIN_USUARIO"] == $_POST["login"])) {
            return true;
        }
    }
}
